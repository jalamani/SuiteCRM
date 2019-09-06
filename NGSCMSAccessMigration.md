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

## SQL Command for table insert post-migration
INSERT INTO contacts(
    id,
    first_name,
    last_name,
    photo,
    phone_home,
    phone_mobile,
    phone_fax,
    primary_address_street,
    primary_address_city,
    primary_address_state,
    primary_address_postalcode,
    birthdate
)
SELECT
    ClientID,
    Firstname,
    Lastname,
    Photo,
    Homephone,
    Mobilephone,
    Fax,
    Address,
    City,
    `State/Prov`,
    Zipcode,
    DoB
FROM
    exampledb;

INSERT INTO contacts_cstm(
    `id_c`,
    `ethnicity_c`,
    `gender_c`,
    `workauth_c`,
    `status_c`,
    `marrital_c`,
    `referraltype_c`,
    `education_c`,
    `housing_c`,
    `middle_name_c`,
    `age_c`,
    `alcohol_addiction_c`,
    `disabled_c`,
    `disability_c`,
    `mentallyill_c`,
    `mental_illness_c`,
    `veteran_c`,
    `failedback_c`,
    `bgrnd_desc_c`,
    `college_attendance_c`,
    `degree_c`,
    `current_education_c`,
    `educationplan_c`,
    `resumeav_c`,
    `children_c`,
    `public_assistance_c`,
    `homeless_c`,
    `vispdat_screen_c`,
    `shelter_name_c`,
    `lifecoach_c`,
    `other_assist_c`,
    `ssn_c`,
    `referral_c`,
    `emergencyfirst_name_c`,
    `emergencylast_name_c`,
    `emergency_phone_c`,
    `emergency_email_c`,
    `emergency_relationship_c`,
    `monthly_income_c`,
    `presently_employed_c`,
    `felon_c`,
    `incarcerated_c`,
    `drugs_problem_c`,
    `drug_addict_c`,
    `ssndoc_c`,
    `dd214_c`,
    `driver_license_c`,
    `passport_c`,
    `passport_image_c`,
    `birth_certificate_c`,
    `work_visa_c`
)
SELECT
    ClientID,
    Ethnicity,
    Gender,
    Workauthor,
    `Clientstatus`,
    `Maritialstat`,
    `Referredby`,
    `EDlevel`,
    `Housing`,
    `Middlename`,
    `Age`,
    `Alcoholaddict`,
    `Disabled`,
    `Disability`,
    `Mentallyill`,
    `Mentalillness`,
    `Veteran`,
    `Failedbackchk`,
    `backchkfail`,
    `Attendingcollege`,
    `EDdegree`,
    `EDcurrent`,
    `EDplan`,
    `Resumeavail`,
    `Children`,
    `Publicassist`,
    `Homeless`,
    `VISPDATscreen`,
    `Sheltername`,
    `Lifecoach`,
    `Otherassist`,
    `SSN`,
    `Referral`,
    `Emergconfirst`,
    `Emergconast`,
    `EmergconPhone`,
    `EmergconEmail`,
    `Emergconrelat`,
    `Income_Mo`,
    `PresEmploy`,
    `Felon`,
    `Incarceration`,
    `Drugsprob`,
    `Drugaddict`,
    `SSNdoc`,
    `DD214`,
    `Driverlicense`,
    `Passport`,
    `Passportdoc`,
    `Birthcertificate`,
    `Workvisa`
FROM
    exampledb;

Warning: #1366 Incorrect integer value: 'No' for column `ngsc`.`contacts_cstm`.`incarcerated_c` at row 1
 Warning: #1366 Incorrect integer value: 'sdfgdsfgsf' for column `ngsc`.`contacts_cstm`.`drug_addict_c` at row 1