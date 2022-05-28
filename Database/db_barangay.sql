/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - db_barangay
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `notifs` */

DROP TABLE IF EXISTS `notifs`;

CREATE TABLE `notifs` (
  `notif_id` int(11) NOT NULL AUTO_INCREMENT,
  `notif_subject` varchar(250) NOT NULL,
  `notif_text` text NOT NULL,
  `notif_status` int(1) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifs` */

/*Table structure for table `tblactivity` */

DROP TABLE IF EXISTS `tblactivity`;

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblactivity` */

/*Table structure for table `tblactivityphoto` */

DROP TABLE IF EXISTS `tblactivityphoto`;

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblactivityphoto` */

/*Table structure for table `tblhousehold` */

DROP TABLE IF EXISTS `tblhousehold`;

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblhousehold` */

/*Table structure for table `tblindigency` */

DROP TABLE IF EXISTS `tblindigency`;

CREATE TABLE `tblindigency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `residentid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblindigency` */

/*Table structure for table `tbllogs` */

DROP TABLE IF EXISTS `tbllogs`;

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbllogs` */

/*Table structure for table `tblofficial` */

DROP TABLE IF EXISTS `tblofficial`;

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tblofficial` */

insert  into `tblofficial`(`id`,`sPosition`,`completeName`,`pcontact`,`paddress`,`termStart`,`termEnd`,`status`) values 
(1,'Captain','YDAYLE DEL ROSARIO','','','2022-05-21','2028-05-21',''),
(2,'Kagawad','LEOPOLDO \'POL\' CRISTOBAL','','','2022-05-21','2028-05-21',''),
(3,'Kagawad','NILO \'BISOY\' CASTILLO','','','2022-05-21','2028-05-21',''),
(4,'Kagawad','GAVINA \'GINA\' ANGELES','','','2022-05-21','2028-05-21',''),
(5,'Kagawad','ROSEMARIE \'ROSE\' BELGAR','','','2022-05-21','2028-05-21',''),
(6,'Kagawad','CORNELIO \'ARNEL\' CASTILLO','','','2022-05-21','2028-05-21',''),
(7,'Kagawad','MICHAEL \'MIKE\' DE LEON','','','2022-05-21','2028-05-21',''),
(8,'Kagawad','ARMANDO \'ARMAN\' SALVADOR','','','2022-05-21','2028-05-21',''),
(9,'SK Chairman','NICKAMHEL \'MHEL\' GUMASING','','','2022-05-21','2028-05-21',''),
(10,'Barangay Treasurer','NORMITA CRISOSTOMO','','','2022-05-21','2028-05-21',''),
(11,'Barangay Secretary','ELENA LINSANGAN','','','2022-05-21','2028-05-21','');

/*Table structure for table `tblresidency` */

DROP TABLE IF EXISTS `tblresidency`;

CREATE TABLE `tblresidency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `residentid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblresidency` */

/*Table structure for table `tblresident` */

DROP TABLE IF EXISTS `tblresident`;

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `differentlyabledperson` varchar(100) NOT NULL,
  `relationtohead` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `monthlyincome` int(12) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `skills` text NOT NULL,
  `igpitID` int(11) NOT NULL,
  `philhealthNo` int(12) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `houseOwnershipStatus` varchar(50) NOT NULL,
  `landOwnershipStatus` varchar(20) NOT NULL,
  `dwellingtype` varchar(20) NOT NULL,
  `waterUsage` varchar(20) NOT NULL,
  `lightningFacilities` varchar(20) NOT NULL,
  `sanitaryToilet` varchar(20) NOT NULL,
  `formerAddress` text NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblresident` */

insert  into `tblresident`(`id`,`fname`,`mname`,`lname`,`bdate`,`bplace`,`age`,`barangay`,`zone`,`totalhousehold`,`differentlyabledperson`,`relationtohead`,`maritalstatus`,`bloodtype`,`civilstatus`,`occupation`,`monthlyincome`,`householdnum`,`lengthofstay`,`religion`,`nationality`,`gender`,`skills`,`igpitID`,`philhealthNo`,`highestEducationalAttainment`,`houseOwnershipStatus`,`landOwnershipStatus`,`dwellingtype`,`waterUsage`,`lightningFacilities`,`sanitaryToilet`,`formerAddress`,`remarks`,`image`,`username`,`password`) values 
(1,'Loid','Twilight','Forger','1996-09-05','Valenzuela',25,'55','1',3,'','Father','','O','Married','Spy',10000,123,5,'Catholic','Filipino','Male','typing',1,10,'Bachelorï¿½s degree','Own Home','Owned','1st Option','Faucet','0','Water-sealed','Zone 1 Brgy. 55','','1649987029334_Loid+F.+1.jpeg','Loid','12345678'),
(2,'Jose','Protasio','Rizal','2022-05-02','Alabang',15,'Alabang','123',1,'','','Single','','Single','IT',100000,123,7,'Catholic','Filipino','Male','',1,1,'No schooling completed','Own Home','Owned','1st Option','Faucet','Electric','Water-sealed','','','1651486255302_WireShark.png','User','User');

/*Table structure for table `tblstaff` */

DROP TABLE IF EXISTS `tblstaff`;

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblstaff` */

/*Table structure for table `tbluser` */

DROP TABLE IF EXISTS `tbluser`;

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbluser` */

insert  into `tbluser`(`id`,`username`,`password`,`type`) values 
(1,'Loid','12345678','administrator');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
