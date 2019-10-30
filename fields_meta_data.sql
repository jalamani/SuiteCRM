-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fields_meta_data`
--

CREATE TABLE `fields_meta_data` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vname` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `help` varchar(255) DEFAULT NULL,
  `custom_module` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `len` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT 0,
  `default_value` varchar(255) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `audited` tinyint(1) DEFAULT 0,
  `massupdate` tinyint(1) DEFAULT 0,
  `duplicate_merge` smallint(6) DEFAULT 0,
  `reportable` tinyint(1) DEFAULT 1,
  `importable` varchar(255) DEFAULT NULL,
  `ext1` varchar(255) DEFAULT NULL,
  `ext2` varchar(255) DEFAULT NULL,
  `ext3` varchar(255) DEFAULT NULL,
  `ext4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields_meta_data`
--

INSERT INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('Accountsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Accounts', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Accountsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Accounts', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Accountsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Accounts', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Accountsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Accounts', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('birth_certificate_c', 'birth_certificate_c', 'LBL_BIRTH_CERTIFICATE', NULL, NULL, 'Contacts', 'image', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, '120', NULL, NULL),
('Casesjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Cases', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Casesjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Cases', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Casesjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Cases', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Casesjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Cases', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Contactsage_c', 'age_c', 'LBL_AGE', NULL, NULL, 'Contacts', 'int', 11, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsbgrnd_desc_c', 'bgrnd_desc_c', 'LBL_BGRND_DESC', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactschildren_c', 'children_c', 'LBL_CHILDREN', NULL, NULL, 'Contacts', 'int', 11, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactscollege_attendance_c', 'college_attendance_c', 'LBL_COLLEGE_ATTENDANCE', '', '', 'Contacts', 'bool', 255, 0, '0', '2019-10-28 21:35:14', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactscurrency_id', 'currency_id', 'LBL_CURRENCY', '', '', 'Contacts', 'currency_id', 36, 0, NULL, '2019-10-28 22:09:14', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactscurrent_education_c', 'current_education_c', 'LBL_CURRENT_EDUCATION', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsdegree_c', 'degree_c', 'LBL_DEGREE', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsdisability_c', 'disability_c', 'LBL_DISABILITY', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsdisabled_c', 'disabled_c', 'LBL_DISABLED', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsdischargedate_c', 'dischargedate_c', 'LBL_DISCHARGEDATE', '', '', 'Contacts', 'date', NULL, 0, '', '2019-10-28 21:54:53', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactsdriver_license_c', 'driver_license_c', 'LBL_DRIVER_LICENSE', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsdrug_addict_c', 'drug_addict_c', 'LBL_DRUG_ADDICT', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactseducationplan_c', 'educationplan_c', 'LBL_EDUCATIONPLAN', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactseducation_c', 'education_c', 'LBL_EDUCATION', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'education_list', NULL, NULL, NULL),
('Contactsemergencyfirst_name_c', 'emergencyfirst_name_c', 'LBL_EMERGENCYFIRST_NAME', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsemergencylast_name_c', 'emergencylast_name_c', 'LBL_EMERGENCYLAST_NAME', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsemergency_email_c', 'emergency_email_c', 'LBL_EMERGENCY_EMAIL', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsemergency_phone_c', 'emergency_phone_c', 'LBL_EMERGENCY_PHONE', NULL, NULL, 'Contacts', 'varchar', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsemergency_relationship_c', 'emergency_relationship_c', 'LBL_EMERGENCY_RELATIONSHIP', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'emergency_relationship_list', NULL, NULL, NULL),
('Contactsemployer_c', 'employer_c', 'LBL_EMPLOYER', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsethnicity_c', 'ethnicity_c', 'LBL_ETHNICITY', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'ethnicity_0', NULL, NULL, NULL),
('Contactsfailedback_c', 'failedback_c', 'LBL_FAILEDBACK', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsfelon_c', 'felon_c', 'LBL_FELON', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsgender_c', 'gender_c', 'LBL_GENDER', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactshomeless_c', 'homeless_c', 'LBL_HOMELESS', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactshours_c', 'hours_c', 'LBL_HOURS', '', '', 'Contacts', 'int', 255, 0, '', '2019-10-28 22:30:02', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactshousing_c', 'housing_c', 'LBL_HOUSING', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'housing_list', NULL, NULL, NULL),
('Contactsincarcerated_c', 'incarcerated_c', 'LBL_INCARCERATED', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsintakedate_c', 'intakedate_c', 'LBL_INTAKEDATE', '', '', 'Contacts', 'date', NULL, 0, '', '2019-10-29 19:57:10', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Contacts', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Contactsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Contacts', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Contactsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Contacts', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Contactsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Contacts', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Contactslifecoach_c', 'lifecoach_c', 'LBL_LIFECOACH', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsmarital_c', 'marital_c', 'LBL_MARITAL', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'marrital_list', NULL, NULL, NULL),
('Contactsmentallyill_c', 'mentallyill_c', 'LBL_MENTALLYILL', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsmental_illness_c', 'mental_illness_c', 'LBL_MENTAL_ILLNESS', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsmiddle_name_c', 'middle_name_c', 'LBL_MIDDLE_NAME', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsmonthly_income_c', 'monthly_income_c', 'LBL_MONTHLY_INCOME', '', '', 'Contacts', 'currency', 26, 0, '', '2019-10-28 22:09:14', 0, 0, 0, 0, 1, 'true', '', '', '', ''),
('Contactsother_assist_c', 'other_assist_c', 'LBL_OTHER_ASSIST', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsoutcome_c', 'outcome_c', 'LBL_OUTCOME', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactspassport_c', 'passport_c', 'LBL_PASSPORT', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactspresently_employed_c', 'presently_employed_c', 'LBL_PRESENTLY_EMPLOYED', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactspublic_assistance_c', 'public_assistance_c', 'LBL_PUBLIC_ASSISTANCE', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsreferraltype_c', 'referraltype_c', 'LBL_REFERRALTYPE', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'referraltype_list', NULL, NULL, NULL),
('Contactsreferral_c', 'referral_c', 'LBL_REFERRAL', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, '', NULL, NULL, NULL),
('Contactsresumeav_c', 'resumeav_c', 'LBL_RESUMEAV', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsresumelink_c', 'resumelink_c', 'LBL_RESUMELINK', '', '', 'Contacts', 'url', 255, 0, '', '2019-10-28 21:56:09', 0, 0, 0, 0, 1, 'true', '', '', '0', '_blank'),
('Contactsschool_c', 'school_c', 'LBL_SCHOOL', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsservicesprovided_c', 'servicesprovided_c', 'LBL_SERVICESPROVIDED', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsshelter_name_c', 'shelter_name_c', 'LBL_SHELTER_NAME', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsssn_c', 'ssn_c', 'LBL_SSN', NULL, NULL, 'Contacts', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsstatus_c', 'status_c', 'LBL_STATUS', '', '', 'Contacts', 'enum', 100, 0, NULL, '2019-10-25 20:47:06', 0, 0, 0, 0, 1, 'true', 'status_list', '', '', ''),
('Contactsveteranstatus_c', 'veteranstatus_c', 'LBL_VETERANSTATUS', '', '', 'Contacts', 'multienum', 100, 0, NULL, '2019-10-28 21:53:23', 0, 0, 0, 0, 1, 'true', 'veteranstatus_list', '', '', ''),
('Contactsveteran_c', 'veteran_c', 'LBL_VETERAN', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsvispdat_screen_c', 'vispdat_screen_c', 'LBL_VISPDAT_SCREEN', NULL, NULL, 'Contacts', 'bool', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
('Contactsworkauth_c', 'workauth_c', 'LBL_WORKAUTH', NULL, NULL, 'Contacts', 'enum', 100, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'workauth_list', NULL, NULL, NULL),
('Contactswork_visa_c', 'work_visa_c', 'LBL_WORK_VISA', '', '', 'Contacts', 'image', 255, 0, NULL, '2019-10-28 21:57:20', 0, 0, 0, 0, 1, 'true', '', '120', '', ''),
('dd214_c', 'dd214_c', 'LBL_DD214', NULL, NULL, 'Contacts', 'image', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, '120', NULL, NULL),
('driver_license_image_c', 'driver_license_image_c', 'LBL_DRIVER_LICENSE_IMAGE', NULL, NULL, 'Contacts', 'image', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, '120', NULL, NULL),
('Leadsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Leads', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Leadsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Leads', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Leadsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Leads', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Leadsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Leads', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Meetingsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Meetings', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Meetingsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Meetings', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Meetingsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Meetings', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Meetingsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Meetings', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Opportunitiesjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Opportunities', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Opportunitiesjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Opportunities', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Opportunitiesjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Opportunities', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Opportunitiesjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Opportunities', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('passport_image_c', 'passport_image_c', 'LBL_PASSPORT_IMAGE', NULL, NULL, 'Contacts', 'image', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, '120', NULL, NULL),
('Projectjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Project', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Projectjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Project', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Projectjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Project', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Projectjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Project', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Prospectsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Prospects', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Prospectsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Prospects', 'varchar', 255, 0, NULL, '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Prospectsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Prospects', 'float', 10, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Prospectsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Prospects', 'float', 11, 0, '0.00000000', '2019-10-25 19:50:11', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('ssndoc_c', 'ssndoc_c', 'LBL_SSNDOC', NULL, NULL, 'Contacts', 'image', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, '120', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fields_meta_data`
--
ALTER TABLE `fields_meta_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_meta_id_del` (`id`,`deleted`),
  ADD KEY `idx_meta_cm_del` (`custom_module`,`deleted`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
