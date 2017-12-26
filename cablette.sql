/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.50 : Database - cablette
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cablette` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cablette`;

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m000000_000000_base',1513322924),('m130524_201442_init',1513322929);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`surname`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`) values (1,NULL,NULL,'admin','N-0fJsNT11mLDys31m383yVwQE46nYYB','$2y$13$dQGz8b6CX5q.mDx/K7kuaeGIB2Tr/Nfsfkatj98JvdMQ4NgdiFvRe','rQz4uHI8j3g3I_7Rw69eaHp0Co82rNVm_1510553255','s',10,1513322948,1513322948),(9,'Stepan','Kakosyan','stepan123','qBQF796pv9GU0guzWbmkssPZV3i0PjYC','$2y$13$9fAqwHRW6hH7YCLpmiIk2eBNOrZL..aBUX5ANbVH4Arn0aqFJeN8W',NULL,'stepankakosyan22@gmail.com',10,1513594196,1513594196),(10,'Gedeon','Simonyan','gedeon123','4KmNKYRupZVoIkBK_2MDBemscRWAwkL_','$2y$13$IOkFNYjJgN7L.rou9rF/o.1tdV68q7Q.oUKXgCEbNA6hZ7qFFQKOq',NULL,'gedeon@gmail.com',10,1513661062,1513661062),(11,'Test','Testyan','test123','j3w21yOnec14mRzXTbP5LeKMPPHnSbew','$2y$13$md8dFX.lr8xZHNOGGAXkU.cTThc4jPf8Km48CAW0nQ0Gqv61Ek1BW',NULL,'test@gmail.com',10,1513837049,1513837049);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
