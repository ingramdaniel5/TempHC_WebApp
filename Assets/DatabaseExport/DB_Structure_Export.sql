-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for h_choices_db
CREATE DATABASE IF NOT EXISTS `h_choices_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `h_choices_db`;

-- Dumping structure for table h_choices_db.attack_log
CREATE TABLE IF NOT EXISTS `attack_log` (
  `id` int(11) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_account` varchar(172) DEFAULT NULL,
  `attempted_attack` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table logs all attack attempts caught by the php application';

-- Dumping data for table h_choices_db.attack_log: ~0 rows (approximately)
/*!40000 ALTER TABLE `attack_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `attack_log` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.numeric_field
CREATE TABLE IF NOT EXISTS `numeric_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_name` varchar(172) NOT NULL COMMENT 'encrypted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.numeric_field: ~2 rows (approximately)
/*!40000 ALTER TABLE `numeric_field` DISABLE KEYS */;
INSERT INTO `numeric_field` (`id`, `is_confirmed`, `date_entered`, `field_name`) VALUES
	(1, 0, '2019-06-24 01:29:58', '3Lkt6RhN5UVwOnqdQ9b4k6/ZCdU4YAgH9TBa9aVXI1XtX9YSx9jevKVOLILwCvM3KabWH1nMqPqSBPJIYsyBiRPGi3P4DZPoQy+/EtMANNpPqE4RTEuzJMHod4afj9iB'),
	(2, 0, '2019-06-24 01:32:50', '7OYGQAXWNBoUHrMo9XmYjCYqUJiRKvCVdWRQmN6oUC/BrPn7xLDD12baZqg8/fxaKj3X1rZzUMsPyHFZRxR0v2uBqMUaJVNYRHZPA7Qu3KJdl97lwn+h0Uzzu7soQyhI');
/*!40000 ALTER TABLE `numeric_field` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.numeric_field_abbreviation
CREATE TABLE IF NOT EXISTS `numeric_field_abbreviation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeric_field_id` int(11) DEFAULT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_abbreviation` varchar(172) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.numeric_field_abbreviation: ~0 rows (approximately)
/*!40000 ALTER TABLE `numeric_field_abbreviation` DISABLE KEYS */;
INSERT INTO `numeric_field_abbreviation` (`id`, `numeric_field_id`, `is_confirmed`, `date_entered`, `field_abbreviation`) VALUES
	(1, 1, 0, '2019-06-24 05:31:53', 'J2t05OrhbC7WeJ4pItxF6fRA8QagYSuQsB0pEqOhcl/TAOrQPCt3qQFoZ7mMjfuHKk/iGFeWpFfTtxCMvZU/STrJiaJueE0JUZSh24X4/Sc6w9Cn38JLylTWdnBRtSTKfWqNTGRIu7B2idVT3VYyiQ=='),
	(2, 1, 0, '2019-07-09 13:29:49', '1M9cGOe6pksTTnumeric_field_abbreviation09QIWzPS0H48K1MexBlAsmZNTWzYIBHgkgjk6RZZTT3rjtBhf42LcPEYHOQkYcIN70syvcYP+siAzwRdag0lQUYbKL3eKfrwt3HF+jPRssMyQYEz+2m'),
	(3, 2, 0, '2019-07-09 13:30:25', 'aVrA498+RQhFFcAe/viRMKcoi1Sn6jisTDzTWjuzRy9ESg9W+9ZvA8dd+v9CbYLI31zYwq+zK6fZRzHgsE+GJWeqJ8P04ImZMhBCwtdWH/E18BQMmQUFimLK8iZ3xFxQ'),
	(4, 1, 0, '2019-07-09 13:31:22', 'DkgKaOC4ahvsnaCEI1E4R3sGmob07SVHin4ohdTolyigGk9w9jxB35q7hz+Ji4GAf5XtQAaFa0VU0eFyhnJrN00n6+w3wp+o/+FxEswk2gTUykzk0ad6NsnnKk9IQJNV');
/*!40000 ALTER TABLE `numeric_field_abbreviation` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.numeric_field_value
CREATE TABLE IF NOT EXISTS `numeric_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeric_field_id` int(11) DEFAULT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) DEFAULT NULL,
  `field_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.numeric_field_value: ~0 rows (approximately)
/*!40000 ALTER TABLE `numeric_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `numeric_field_value` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.standardized_field
CREATE TABLE IF NOT EXISTS `standardized_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_name` varchar(172) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.standardized_field: ~2 rows (approximately)
/*!40000 ALTER TABLE `standardized_field` DISABLE KEYS */;
INSERT INTO `standardized_field` (`id`, `is_confirmed`, `date_entered`, `field_name`) VALUES
	(5, 0, '2019-06-24 01:27:44', '6zWB/l9Au4el07vs1+y5FhgJTdHS1TuCdyV45AguIeHHFL9peSzo3hpeuQaeh/Fww/B4L6ucdTAtXrDg6b1wQcM9ZclCUeSHN6PRO6+imf+OGFTlCtw93HkhF+A1GI60'),
	(6, 0, '2019-06-24 01:29:32', '0xAiOZrYOOyRXcQ4dsmVMMR5JU5NnVkl34TxNecJg3NFeLMoPI6K6Sk2ZsGOSmOBDJl8VbT6445luz8NsFBnnC2AeE63neRTqjjZA+OSdGBiCo9qMofsnJfEDv5+55yoRvasHSFy4F6lfYPyco/OwQ=='),
	(7, 0, '2019-06-24 01:31:01', 'Xbb/GfdrGThzUnjWTWaVr4+3kxdO6EnnR2nQJa8TfawxyIo36O8DNTfJLKKGekHTIOvOynakT8W85KJWpAkw+3V4nMGPfeSonquy27T+qVHHWaFmcUv4SuIu9e83LzP5');
/*!40000 ALTER TABLE `standardized_field` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.standardized_field_abbreviation
CREATE TABLE IF NOT EXISTS `standardized_field_abbreviation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standardized_field_id` int(11) DEFAULT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_abbreviation` varchar(172) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.standardized_field_abbreviation: ~0 rows (approximately)
/*!40000 ALTER TABLE `standardized_field_abbreviation` DISABLE KEYS */;
INSERT INTO `standardized_field_abbreviation` (`id`, `standardized_field_id`, `is_confirmed`, `date_entered`, `field_abbreviation`) VALUES
	(1, 5, 0, '2019-07-09 12:53:07', 'CtvTN0//jP2kwY1wuqqj8ola9E7eqRjuwyObZSVfglZcEcMFHryISZrtPCXEFk+xa5nOQ3V6k/MJL5TON/b+aZUi0gAQHjmxw1cR5Ne43RT5bWJfeblZkp8LvTOihcATsdtKgK7CgqjOtCMRbhaSAg=='),
	(2, 5, 0, '2019-07-09 12:53:28', 'OntN93xEay7chty7yysHYizL8cvQMLoELimP5q9cRCt3MFO6UuvZyUK5SSk6rRGUCCkbNwE2FqbedE0GQl2DCSa2VhtQppb0bWxxogaIu1ebiewO89zlf0PxKixRK/Q2'),
	(3, 5, 0, '2019-07-09 12:55:56', '7AfwStxK03yE1T9OevfoZNTtwpnEhhSRydsmvxxC4Pm/SZ9zPBCOAi+49KOZUW+G8S+56DHqkPUpsmcTstuFZBY5dL0p6+CvQUKZKHsbMsPZjZgInJK1LlfGsAnxVYH6'),
	(4, 7, 0, '2019-07-09 12:58:13', 'XsGjPZoSiHIQgaALy//dl473sCkyUy0X1UJ6z/zxHEi0advGHNYXPBs6w0oOrMosw7sdU8elO+Gg5NV9+hSrhh8wVB1TPKPyfIx0g9ewD6ddkZ3WDkJI2uC+UVksMoOBj/j23PFVFLgkDrGiB7MIwA==');
/*!40000 ALTER TABLE `standardized_field_abbreviation` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.standardized_field_option
CREATE TABLE IF NOT EXISTS `standardized_field_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standardized_field_id` int(11) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `standardized_field_option_name` varchar(172) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.standardized_field_option: ~0 rows (approximately)
/*!40000 ALTER TABLE `standardized_field_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `standardized_field_option` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.standardized_field_option_abbreviation
CREATE TABLE IF NOT EXISTS `standardized_field_option_abbreviation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standardized_field_option_id` int(11) DEFAULT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_option_abbreviation` varchar(172) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.standardized_field_option_abbreviation: ~0 rows (approximately)
/*!40000 ALTER TABLE `standardized_field_option_abbreviation` DISABLE KEYS */;
/*!40000 ALTER TABLE `standardized_field_option_abbreviation` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.standardized_field_value
CREATE TABLE IF NOT EXISTS `standardized_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standardized_field_id` int(11) DEFAULT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) DEFAULT NULL,
  `standardized_field_option_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.standardized_field_value: ~0 rows (approximately)
/*!40000 ALTER TABLE `standardized_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `standardized_field_value` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.student
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `globally_unique_id` char(36) DEFAULT NULL,
  `first_name` varchar(172) NOT NULL DEFAULT 'UNKNOWN',
  `last_name` varchar(172) NOT NULL DEFAULT 'UNKNOWN',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains the object for the student data item';

-- Dumping data for table h_choices_db.student: ~0 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.text_field
CREATE TABLE IF NOT EXISTS `text_field` (
  `id` int(11) NOT NULL,
  `is_confirmed` tinyint(4) DEFAULT NULL,
  `date_entered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `field_name` varchar(172) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.text_field: ~1 rows (approximately)
/*!40000 ALTER TABLE `text_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `text_field` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.text_field_abbreviation
CREATE TABLE IF NOT EXISTS `text_field_abbreviation` (
  `id` int(11) NOT NULL,
  `is_confirmed` int(11) DEFAULT NULL,
  `date_entered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `text_field_id` int(11) DEFAULT NULL,
  `field_abbreviation` varchar(172) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `text_field_id` (`text_field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.text_field_abbreviation: ~0 rows (approximately)
/*!40000 ALTER TABLE `text_field_abbreviation` DISABLE KEYS */;
/*!40000 ALTER TABLE `text_field_abbreviation` ENABLE KEYS */;

-- Dumping structure for table h_choices_db.text_field_value
CREATE TABLE IF NOT EXISTS `text_field_value` (
  `id` int(11) NOT NULL,
  `text_field_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `value` varchar(172) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table h_choices_db.text_field_value: ~0 rows (approximately)
/*!40000 ALTER TABLE `text_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `text_field_value` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
