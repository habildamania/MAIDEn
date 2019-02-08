#!/usr/bin/python           # This is client.py file

import socket               # Import socket module
import subprocess
import os.path, time
import socket
import time
import zmq
import requests
import numpy as np
import sys


         # Create a socket object
host = socket.gethostname() # Get local machine name
port = 12345                # Reserve a port for your service.

context = zmq.Context()
# Socket to send messages on
sender = context.socket(zmq.PUSH)
sender.bind("tcp://*:5559")
algo = 1

i=0
attack = sys.argv[1]
result = open('./attack/'+attack+'.csv', 'r').read()
if (result != ''):

		try:
			#unique visitors dumping
			data = result.split('\n')
			lines = []
			Xy = []
			s_ip = []
			s_port = []
			d_ip = []
			d_port = []
			ts = []
			for line in data:
			   if(line != ''):
				   Xy.append(line.split(','))
			Xy = np.asarray(Xy, dtype=object)
			s_ip = '192.192.192.192'
			s_port = '50'	
			d_ip = '192.192.192.192'
			d_port = '60'
			send = ''
			for k in range(0,len(s_ip)):	
				send = send +str(s_ip)+","+str(s_port)+","+str(d_ip)+","+str(d_port)+'\n';
			r = requests.post("http://localhost/maiden/dump_unique.php", data={'data': send})
			if(r.status_code==200):	
				print(r.text)
			



			random = "1 \n"+attack+".\n"+result 
			print ("sending random forest")
			sender.send_string(random)
			time.sleep(.100)
			svm = "2 \n"+attack+".\n"+result 
			print ("sending SVM")
			sender.send_string(svm)
			time.sleep(.100)
			neural = "3 \n"+attack+".\n"+result 
			print ("sending NN")
			sender.send_string(neural)
		except subprocess.CalledProcessError as e:
			print (e.output)

		#s.close() 
