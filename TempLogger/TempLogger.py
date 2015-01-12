#examples at http://zetcode.com/db/mysqlpython/
# and http://www.element14.com/community/community/designcenter/single-board-computers/next-gen_beaglebone//blog/2013/11/24/beaglebone-web-server--temperature-sensor

#!/usr/bin/python
#-*- coding:utf-8 -*-

import Adafruit_BBIO.ADC as ADC
import MySQLdb as mdb
import datetime
import time

ADC.setup()

TempF = 0.0
float(TempF)

#get time string for table name
now = datetime.datetime.now()
timeString = now.strftime("%m%d_%H%M")
print timeString

#connect to mysql with localhost, user, password, database
con = mdb.connect('localhost','pythonuse','pythonuse','pythontest');


try:
	with con:
		cur = con.cursor()
		cur.execute("DROP TABLE IF EXISTS TempRecord")
		cur.execute("CREATE TABLE TempRecord (Dte DATETIME,  Temp DOUBLE)")
	
		while True:
			mV = ADC.read('P9_40')*1800
			TempC = mV/20
			TempF = (TempC * 9/5) + 32
			TempF = round(TempF,1)
			cur.execute("INSERT INTO TempRecord(Dte, Temp) VALUES(NOW(),%s)",(TempF))
			con.commit()
			print TempF
			time.sleep(5)
		

except KeyboardInterrupt:
	con.close()
	sys.exit(0)	

finally:
	if con:
		con.close()
