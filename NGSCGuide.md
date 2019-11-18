A lot of the documentation for this software is located at https://docs.suitecrm.com/. This guide will aid users in areas specific to NGSC.

## SuiteCRM for regular Users

#### Setting up Personal Emails for Employees

1. Go to your profile by hovering your mouse over your name on the top right and clicking 'Profile'
2. Scroll to the bottom to 'Email Settings' and enter your email address. Leave the 'Email Client' dropdown at 'SuiteCRM Email Client' and the 'Editor' dropdown at 'Mozaik'. 
3. Click Settings and go to the 'Mail Accounts' tab.
4. Click 'Add' under 'Mail Accounts' and complete the required fields.
  1. 'Mail Account Name' is your preference
  2. 'User Name' is your email address i.e. johndoe@example.com
  3. Password is your password to that account
  4. 'Mail Server Address' for NGSC is mail.ngsc.org
  5. Check 'Use SSL' and set 'Mail Server Port' to 993
  6. Enter 'Trash Folder' as 'TRASH'
  7. Keep other fields as the default value. 

#### Creating Charts

1. The module for creating charts in SuiteCRM is called 'Reports' located under the 'Activities' menu tab.

2. Select 'Clients' in the Report Module dropdown. Options under 'Module tree' on the left should appear. Aside from 'Clients', these modules are those with a 'Relationship' with 'Clients'. 

3. Click on 'Clients' under the 'Module tree' for its fields to appear in the panel below 'Module tree'. 

4. Select the field you would like to make a chart of. You will want to add two of the same field. 

5. In the largest panel, you will see three tabs: 'Fields', 'Conditions', and 'Charts'

6. Fields tab
	1. After selecting a Field on the lower left panel, a Field item should appear here with columns that describe settings for the chart.
	2. The Display Link column will indicate whether or not you would like the chart to have a link to the Module. Sometimes selecting this will not allow axis to be grouped.
	3. The Label column will be the name that fields axis.
	4. The Function column will select how the field will be measured. For most charts, you will set a field Function to Count and another item of that field to None. That is why in Step 4, it is recommended two of the same fields- they have different Functions.
	5. The Sort column will indicate how you order that axis.
	6. The Group column will allow you to group by this field. Usually for --none Function.
	7. The Total column will select how the data will be summarized outside of the chart.

7. Conditions tab
	1. There are times where you would like to only include or exclude certain fields. For instance, some clients at NGSC choose to omit their ethnicity. When making reports, one may opt to exclude omissions from their charts.
	2. To begin, click on the Conditions tab to the right of the Fields tab.
	3. Drag the desired field to the window underneath '(...) Drop parenthesis'
	4. Here you can select the logic for this condition
8. Charts tab
	1. Click 'Add chart'
	2. The fields 'Title', 'Type', 'X Axis', and 'Y Axis' should appear. 
	3. Name your chart appropriately under 'Title'.
	4. Choose the chart that fits the way you want to represent your data under 'Type'.
	5. Usually under 'X axis', you want the name/category of the field. 
	6. Usually under 'Y axis', you want the count/measure of the field.


#### Using the Search Function near the top right 

After typing a search query for a Client, Company, or etc, click User Basic Search

#### [Table] doesn't exist in engine error fix

1. Create new database
2. Add to fields_meta_data table, ext1 column can be dropdown by name.
3. Run fields_meta_data.sql

####  Table 'phpmyadmin.pma user config' doesn't exist in engine fix

1. Run MySQL server
2. Delete phpmyadmin database/folder/directory in xampp/mysql/data
3. Run the command line by pressing the windows logo + R and typing 'cmd'. Hit enter
4. In the command line enter command: cd xampp/phpmyAdmin/sql
5. In the command line enter command: 'mysql <create_tables.sql -u root'
6. Restart MySQL.




