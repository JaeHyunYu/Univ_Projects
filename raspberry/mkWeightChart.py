import csv
import sys
import time, datetime
from pytz import timezone


now = datetime.datetime.now()
time_gap = datetime.timedelta(days=3, hours=2, minutes=49)
KST = now + time_gap 

fmt = "%Y-%m-%d"

f=open('weight.csv','a',encoding='utf-8',newline='')

wr=csv.writer(f)

wr.writerow([KST.strftime(fmt),sys.argv[1]])

f.close()


