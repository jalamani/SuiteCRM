## Instructions for MS Access to MySQL migration

1. Download MySQL ODBC Connector at https://dev.mysql.com/downloads/connector/odbc/ . The version to be downloaded depends on the Access application used. At NGS, the MS Access applications are 32-bit.

2. Run your MySQL server.

3. Open ODBCad32 located in C:\Windows\SysWOW64

4. Under the User DSN tab, click "Add...", select "MySQL ODBC x.x Unicode Driver", and click "Finish". In this new window, enter the following fields:
	Data Source Name: anything
	TCP/IP Server: 127.0.0.1	Port: 3306
	User: Root
	Database: test

5. Open MS Access and select the table that you want to migrate. Click the "External Data" tab and towards the right, click "More", then "ODBC Databse", and lastly "OK".

6. In this new "Select Data Source" window, go to the "Machine Data Source" tab. Select the Data Source Name you created in step 4.

