-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2020 at 01:15 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_config`
--

CREATE TABLE `app_config` (
  `id` int(11) NOT NULL,
  `config_type_id` int(11) NOT NULL,
  `config_key` varchar(1000) NOT NULL,
  `config_value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `app_config_type`
--

CREATE TABLE `app_config_type` (
  `id` int(11) NOT NULL,
  `config_type` varchar(50) NOT NULL,
  `config_type_display` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `business_unit`
--

CREATE TABLE `business_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bu_deparment`
--

CREATE TABLE `bu_deparment` (
  `id` int(123) NOT NULL,
  `location_id` int(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `description` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bu_location`
--

CREATE TABLE `bu_location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bu_id` int(11) NOT NULL,
  `address_line1` varchar(500) NOT NULL,
  `address_line2` varchar(500) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `id` int(11) NOT NULL,
  `createat` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `yrdetails` varchar(45) NOT NULL,
  `throatpain` varchar(45) NOT NULL,
  `bodyweak` varchar(45) NOT NULL,
  `nohunger` varchar(45) NOT NULL,
  `coughrange` varchar(45) NOT NULL,
  `shortness` varchar(45) NOT NULL,
  `breathing` varchar(45) NOT NULL,
  `drowsy` varchar(45) NOT NULL,
  `chestpain` varchar(45) NOT NULL,
  `weaknessbody` varchar(45) NOT NULL,
  `visitedoutside` varchar(45) NOT NULL,
  `contactaffect` varchar(45) NOT NULL,
  `infectedcountry` varchar(45) NOT NULL,
  `familycontact` varchar(45) NOT NULL,
  `healthcondition` varchar(45) NOT NULL,
  `diseasesymptoms` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `casecol` varchar(45) DEFAULT NULL,
  `feelingsmell` varchar(45) NOT NULL,
  `drycough` varchar(45) NOT NULL,
  `fever` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `taking_test` varchar(45) NOT NULL,
  `district` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Artifacts` varchar(45) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `resolution` varchar(200) DEFAULT NULL,
  `reinvestigate` varchar(200) DEFAULT NULL,
  `countries` varchar(100) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `monetaryvalue` varchar(45) DEFAULT NULL,
  `period` varchar(45) DEFAULT NULL,
  `namepi` varchar(45) DEFAULT NULL,
  `designationpi` varchar(45) DEFAULT NULL,
  `departmentpi` varchar(45) DEFAULT NULL,
  `nameyd` varchar(45) DEFAULT NULL,
  `emailyd` varchar(45) DEFAULT NULL,
  `phonenoyd` varchar(45) DEFAULT NULL,
  `authorityknows` varchar(45) DEFAULT NULL,
  `nameauth` varchar(45) DEFAULT NULL,
  `emailauth` varchar(45) DEFAULT NULL,
  `phoneauth` varchar(45) DEFAULT NULL,
  `incidentinfo` varchar(100) DEFAULT NULL,
  `NPname` varchar(45) DEFAULT NULL,
  `BName` varchar(45) DEFAULT NULL,
  `bankaccountno` varchar(45) DEFAULT NULL,
  `AHN` varchar(45) DEFAULT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `BANo` varchar(45) DEFAULT NULL,
  `PCS` varchar(100) DEFAULT NULL,
  `Ideai` varchar(100) DEFAULT NULL,
  `ran` varchar(45) DEFAULT NULL,
  `secretkey` varchar(45) DEFAULT NULL,
  `MOperandi` varchar(100) DEFAULT NULL,
  `WBU` varchar(100) DEFAULT NULL,
  `MUpdate` varchar(100) DEFAULT NULL,
  `Synopsis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `district` varchar(200) NOT NULL,
  `yrdetails` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ran` varchar(200) NOT NULL,
  `secretkey` varchar(200) NOT NULL,
  `taking_test` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `fever` varchar(45) NOT NULL,
  `drycough` varchar(45) NOT NULL,
  `feelingsmell` varchar(45) NOT NULL,
  `throatpain` varchar(45) NOT NULL,
  `bodyweak` varchar(200) NOT NULL,
  `nohunger` varchar(45) NOT NULL,
  `coughrange` varchar(45) NOT NULL,
  `shortness` varchar(45) NOT NULL,
  `breathing` varchar(45) NOT NULL,
  `drowsy` varchar(45) NOT NULL,
  `chestpain` varchar(45) NOT NULL,
  `weaknessbody` varchar(45) NOT NULL,
  `visitedoutside` varchar(45) CHARACTER SET dec8 NOT NULL,
  `contactaffect` varchar(45) NOT NULL,
  `infectedcountry` varchar(45) NOT NULL,
  `familycontact` varchar(45) NOT NULL,
  `healthcondition` varchar(45) NOT NULL,
  `diseasesymptoms` varchar(45) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Artifacts` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE `checkbox` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `plan_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `companytable`
--

CREATE TABLE `companytable` (
  `id` int(10) NOT NULL,
  `company` varchar(50) NOT NULL,
  `legalname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ministry` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bu_location_id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `createat` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `countries` varchar(100) DEFAULT NULL,
  `bname` varchar(45) DEFAULT NULL,
  `bankac` varchar(45) DEFAULT NULL,
  `AHN` varchar(45) DEFAULT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `BAN` varchar(45) DEFAULT NULL,
  `BTC` varchar(100) DEFAULT NULL,
  `ETC` varchar(100) DEFAULT NULL,
  `secretkey` varchar(100) DEFAULT NULL,
  `ran` varchar(100) DEFAULT NULL,
  `PCS` varchar(45) DEFAULT NULL,
  `Ideai` varchar(45) DEFAULT NULL,
  `WBUpdate` varchar(200) DEFAULT NULL,
  `MUpdate` varchar(200) DEFAULT NULL,
  `reward` varchar(50) DEFAULT NULL,
  `resolution` varchar(200) DEFAULT NULL,
  `reinvestigate` varchar(200) DEFAULT NULL,
  `Artifacts` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infoses`
--

CREATE TABLE `infoses` (
  `id` int(11) NOT NULL,
  `selimg` varchar(45) NOT NULL,
  `distt` varchar(200) NOT NULL,
  `Descriptions` varchar(200) NOT NULL,
  `Artifact` varchar(45) NOT NULL,
  `yrdetail` varchar(45) NOT NULL,
  `name1` varchar(45) NOT NULL,
  `email1` varchar(45) NOT NULL,
  `phone1` varchar(45) NOT NULL,
  `infokey` varchar(200) NOT NULL,
  `infosec` varchar(200) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investigator`
--

CREATE TABLE `investigator` (
  `id` int(11) NOT NULL,
  `SMLoss` varchar(45) NOT NULL,
  `MOperandi` varchar(45) NOT NULL,
  `WBUpdate` varchar(45) NOT NULL,
  `MUpdate` varchar(45) NOT NULL,
  `idinvestigator` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `project_description` text,
  `assigned_to` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `signuptable`
--

CREATE TABLE `signuptable` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submain`
--

CREATE TABLE `submain` (
  `id` int(10) NOT NULL,
  `subclass` varchar(50) NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `stripe_subscription_id` varchar(100) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `current_period_end` int(11) NOT NULL,
  `current_period_start` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_start` int(11) NOT NULL,
  `trial_end` int(11) NOT NULL,
  `started_at` int(11) NOT NULL,
  `next_payment_at` int(11) DEFAULT NULL,
  `ended_at` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `description` text NOT NULL,
  `due_date` date DEFAULT NULL,
  `assignee` int(11) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `attachment` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `from_Id` int(4) DEFAULT NULL,
  `to_Id` int(4) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `company_id` int(11) NOT NULL,
  `string` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `middle_name`, `password`, `email`, `company_id`, `string`, `created_at`, `phone_no`) VALUES
(1, 'well', 'ness', NULL, 'wellness', 'wellness@nixwhistle.com', 7, NULL, '2020-04-16 12:45:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity_log`
--

CREATE TABLE `user_activity_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `logged_in_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_out_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `industry` varchar(250) DEFAULT NULL,
  `twitter` text,
  `site` varchar(250) DEFAULT NULL,
  `image_name` varchar(250) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wellness`
--

CREATE TABLE `wellness` (
  `id` int(11) NOT NULL,
  `dist` varchar(45) NOT NULL,
  `udetails` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `quitetrivial` varchar(45) NOT NULL,
  `dryness` varchar(45) NOT NULL,
  `positivefeeling` varchar(45) NOT NULL,
  `breathing` varchar(45) NOT NULL,
  `getgoing` varchar(45) NOT NULL,
  `situations` varchar(45) NOT NULL,
  `shakiness` varchar(45) NOT NULL,
  `relax` varchar(45) NOT NULL,
  `anxious` varchar(45) NOT NULL,
  `forward` varchar(45) NOT NULL,
  `upset` varchar(45) NOT NULL,
  `nervous` varchar(45) NOT NULL,
  `saddepressed` varchar(45) NOT NULL,
  `impatient` varchar(45) NOT NULL,
  `faintness` varchar(45) NOT NULL,
  `lostinterest` varchar(45) NOT NULL,
  `worthperson` varchar(45) NOT NULL,
  `touchy` varchar(45) NOT NULL,
  `noticeably` varchar(45) NOT NULL,
  `goodreason` varchar(45) NOT NULL,
  `worthwhile` varchar(45) NOT NULL,
  `winddown` varchar(45) NOT NULL,
  `swallowing` varchar(45) NOT NULL,
  `enjoyment` varchar(45) NOT NULL,
  `physicalexertion` varchar(45) NOT NULL,
  `feltdown` varchar(45) NOT NULL,
  `irritable` varchar(45) NOT NULL,
  `closepanic` varchar(45) NOT NULL,
  `somethingupset` varchar(45) NOT NULL,
  `trivial` varchar(45) NOT NULL,
  `enthusiastic` varchar(45) NOT NULL,
  `interruptions` varchar(45) NOT NULL,
  `nervoustension` varchar(45) NOT NULL,
  `prettyworthless` varchar(45) NOT NULL,
  `intolerant` varchar(45) NOT NULL,
  `terrified` varchar(45) NOT NULL,
  `hopefulabout` varchar(45) NOT NULL,
  `meaningless` varchar(45) NOT NULL,
  `agitated` varchar(45) NOT NULL,
  `panic` varchar(45) NOT NULL,
  `trembling` varchar(45) NOT NULL,
  `difficultwork` varchar(45) NOT NULL,
  `infowellkey` varchar(200) NOT NULL,
  `infowellsec` varchar(45) NOT NULL,
  `risk` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `Synopsis` varchar(200) DEFAULT 'null',
  `WBU` varchar(200) DEFAULT 'null',
  `genuine` varchar(45) DEFAULT NULL,
  `resolution` varchar(45) DEFAULT 'null',
  `reinvestigate` varchar(200) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wellness`
--

INSERT INTO `wellness` (`id`, `dist`, `udetails`, `name`, `email`, `phone`, `address`, `category`, `quitetrivial`, `dryness`, `positivefeeling`, `breathing`, `getgoing`, `situations`, `shakiness`, `relax`, `anxious`, `forward`, `upset`, `nervous`, `saddepressed`, `impatient`, `faintness`, `lostinterest`, `worthperson`, `touchy`, `noticeably`, `goodreason`, `worthwhile`, `winddown`, `swallowing`, `enjoyment`, `physicalexertion`, `feltdown`, `irritable`, `closepanic`, `somethingupset`, `trivial`, `enthusiastic`, `interruptions`, `nervoustension`, `prettyworthless`, `intolerant`, `terrified`, `hopefulabout`, `meaningless`, `agitated`, `panic`, `trembling`, `difficultwork`, `infowellkey`, `infowellsec`, `risk`, `status`, `Synopsis`, `WBU`, `genuine`, `resolution`, `reinvestigate`) VALUES
(25, 'Ariyalur', 'Anonymouss', '', '', '', '', 'ALCOHOL/DRUGUSE', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'All the time', 'All the time', 'All the time', 'Not at all', 'Not at all', 'Not at all', 'All the time', 'All the time', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'All the time', 'All the time', 'kAXCtb39nb', '1000080001396760', '', 'created', 'null', 'null', NULL, 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_config`
--
ALTER TABLE `app_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CONFIG_TYPE` (`config_type_id`);

--
-- Indexes for table `app_config_type`
--
ALTER TABLE `app_config_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_unit`
--
ALTER TABLE `business_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BU_COMP_ID` (`company_id`);

--
-- Indexes for table `bu_deparment`
--
ALTER TABLE `bu_deparment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `bu_location`
--
ALTER TABLE `bu_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BU_ID` (`bu_id`),
  ADD KEY `bu_id` (`bu_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`,`shortness`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkbox`
--
ALTER TABLE `checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_COMPANY_NAME` (`name`),
  ADD KEY `FK_INDUSTRY_ID` (`industry_id`),
  ADD KEY `FK_COMP_UPDATED_BY` (`updated_by`);

--
-- Indexes for table `companytable`
--
ALTER TABLE `companytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BUL_ID` (`bu_location_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infoses`
--
ALTER TABLE `infoses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigator`
--
ALTER TABLE `investigator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `signuptable`
--
ALTER TABLE `signuptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submain`
--
ALTER TABLE `submain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stripe_subscription_id` (`stripe_subscription_id`),
  ADD KEY `FK_COMPANY` (`company_id`),
  ADD KEY `FK_PLAN` (`plan_id`) USING BTREE;

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_DPET_ID` (`department_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_activity_log`
--
ALTER TABLE `user_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ROLE_ID` (`role_id`),
  ADD KEY `FK_USER_ID` (`user_id`);

--
-- Indexes for table `wellness`
--
ALTER TABLE `wellness`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_config`
--
ALTER TABLE `app_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_config_type`
--
ALTER TABLE `app_config_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_unit`
--
ALTER TABLE `business_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bu_deparment`
--
ALTER TABLE `bu_deparment`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bu_location`
--
ALTER TABLE `bu_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companytable`
--
ALTER TABLE `companytable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infoses`
--
ALTER TABLE `infoses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investigator`
--
ALTER TABLE `investigator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wellness`
--
ALTER TABLE `wellness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
