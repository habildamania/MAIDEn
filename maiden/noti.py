import sys
import os
message=sys.argv[1]
body=sys.argv[2]
param1="false"
param2="false"

if sys.argv[3]:
	param1=sys.argv[3]
if sys.argv[4]:
	param2=sys.argv[4]
print param1 + " "+ param2	
a='curl -X POST -H "Authorization:key=AAAAmJSEKcc:APA91bHSLgz9wQUx_ZBw0FMNQNHAtvulbAFc-qrf93h1m2vb9YLwM5xO5SNfeCQdhQK7_tg_QbQKoBnWynPEJg5RuZ80dc2Gfi8YvlQHVSiVvIvNhuYK_qTb9KabzD-Q4kpFhh5UTOQm" -H "Content-Type: application/json" -d \'{"data": {"title": "'+message+'","param1":"'+param1+'","param2":"'+ param2+'","body": "'+body+'","sound":"default"},"to" : "/topics/all"}\' https://fcm.googleapis.com/fcm/send'
os.system(a)
