import requests
import sys
url = "http://203.253.128.161:7579/Mobius/gak_gak/camera/la"
sys.stdout = open('./output.txt','w')
headers = {
	'Accept': "application/json",
	'X-M2M-RI': "12345",
	'X-M2M-Origin': "Superman",
	'User-Agent': "PostmanRuntime/7.15.2",
	'Cache-Control': "no-cache",
#	'Postman-Token': "9c54dac8-c8a4-4b4d-9b1c-68e53e22f757 ,a18eaf7f-46ad-4a89-b6c1-f8cbf3eddc96",		
	'Postman-Token': "931ba2bf-0fc6-41fa-adaa-652dcdd7c873,eafd5a5-8664-4fc0-8547-47b0b8dd872d",
	'Host': "203.253.128.161:7579",
	'Accept-Encoding': "gzip, deflate",
	'Connection': "keep-alive",
	'cache-control': "no-cache"
	}

response = requests.request("GET", url, headers=headers)
print(response.text)

