#! /usr/bin/python2
import requests
import time
import sys
import csv
import os
import pymysql
import datetime

EMULATE_HX711=False

referenceUnit = 1

if not EMULATE_HX711:
    import RPi.GPIO as GPIO
    from hx711 import HX711
else:
    from emulated_hx711 import HX711

def cleanAndExit():
    print("Cleaning...")

    if not EMULATE_HX711:
        GPIO.cleanup()
        
    print("Bye!")
    sys.exit()

hx = HX711(5, 6)

# I've found out that, for some reason, the order of the bytes is not always the same between versions of python, numpy and the hx711 itself.
# Still need to figure out why does it change.
# If you're experiencing super random values, change these values to MSB or LSB until to get more stable values.
# There is some code below to debug and log the order of the bits and the bytes.
# The first parameter is the order in which the bytes are used to build the "long" value.
# The second paramter is the order of the bits inside each byte.
# According to the HX711 Datasheet, the second parameter is MSB so you shouldn't need to modify it.
hx.set_reading_format("MSB", "MSB")

# HOW TO CALCULATE THE REFFERENCE UNIT
# To set the reference unit to 1. Put 1kg on your sensor or anything you have and know exactly how much it weights.
# In this case, 92 is 1 gram because, with 1 as a reference unit I got numbers near 0 without any weight
# and I got numbers around 184000 when I added 2kg. So, according to the rule of thirds:
# If 2000 grams is 184000 then 1000 grams is 184000 / 2000 = 92.
#hx.set_reference_unit(-441)
hx.set_reference_unit(referenceUnit)
c=0
total=0
hx.reset()

hx.tare()

print("Tare done! Add weight now...")

# to use both channels, you'll need to tare them both
#hx.tare_A()
#hx.tare_B()

url = "http://203.250.148.89:7579/Mobius/Team_1/Weight"


#payload="{\n    \"m2m:cin\": {\n    \"con\": \"111\"\n  }\n}"

while True:
    try:
        # These three lines are usefull to debug wether to use MSB or LSB in the reading formats
        # for the first parameter of "hx.set_reading_format("LSB", "MSB")".
        # Comment the two lines "val = hx.get_weight(5)" and "print val" and uncomment these three lines to see what it prints.
        
        # np_arr8_string = hx.get_np_arr8_string()
        # binary_string = hx.get_binary_string()
        # print binary_string + " " + np_arr8_string
        
        # Prints the weight. Comment if you're debbuging the MSB and LSB issue.
        val = hx.get_weight(5)
        val = int((float(val)-500)/45)
        print(val)

        # To get weight from both channels (if you have load cells hooked up 
        # to both channel A and B), do something like this
        #val_A = hx.get_weight_A(5)
        #val_B = hx.get_weight_B(5)
        #print "A: %s  B: %s" % ( val_A, val_B )

        hx.power_down()
        hx.power_up()
        time.sleep(0.1)
	c=c+1
	
      #  if(c>2):
#		total=total+(float(val)/25.5-100)
#	if(c==2):
#		time.sleep(3) 
#	if(c==7):
#		total=total/5
#		total=float(total)/1000 + 6
#                total=format(total,".2f")
##                payload="{\n    \"m2m:cin\": {\n    \"con\": \""+total+"\"\n  }\n}"
#        	headers={
#                        'Accept':'application/json',
#                        'X-M2M-RI':'12345',
##                        'X-M2M-Origin':'Duribeonx2',
 #                       'Content-Type':'application/vnd.onem2m-res+json; ty=4'
 #                       }
#                response = requests.request("POST",url,headers=headers,data=payload)
#                print(response.text.encode('utf8'))
#                print("hi ",total," finish") 
     
#            sys.exit()	
        
        
        

        if((c%3600)==0):
            payload="{\n    \"m2m:cin\": {\n    \"con\": \""+format(int(val),".0f")+"\"\n  }\n}"
            headers={
                                    'Accept':'application/json',
                                    'X-M2M-RI':'12345',
                                    'X-M2M-Origin':'Duribeonx2',
                                    'Content-Type':'application/vnd.onem2m-res+json; ty=4'
                                     }
            response = requests.request("POST",url,headers=headers,data=payload)
            print(response.text.encode('utf8'))

            remainder = val

            conn = pymysql.connect(host='34.64.157.47',user='duri',password='gakgak',charset='utf8')
            curs = conn.cursor()

            sql = "USE gakgak;"
            curs.execute(sql)

            sql = "SELECT * FROM HS_list WHERE LOCATION=446 ORDER BY CHKDATE DESC LIMIT 1;"
            curs.execute(sql)
            result = curs.fetchall()
            for row in result:
                p_remainder = row[2]
                p_init_weight = row[3]
                p_chg = row[7] 

            if (remainder+300 > p_remainder):
                chg = p_chg + 1
                init_weight = remainder
            else:
                chg = p_chg
                init_weight = p_init_weight

            sql = 'INSERT INTO HS_list (BUILDING, LOCATION, REMAINDER,INIT_WEIGHT,ORGAN,CHKDATE, USERID,chg) VALUES ("AI center","446", %s,%s,"Sejong Univ",%s,"duri",%s);'
            now = datetime.datetime.now();

            curs.execute(sql,(remainder,init_weight,now,chg))
            conn.commit()
            conn.close()

            print("Uploaded Weight Data!")
    
    except (KeyboardInterrupt, SystemExit):
        cleanAndExit()

