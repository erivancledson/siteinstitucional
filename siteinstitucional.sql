# Host: localhost  (Version 5.7.12-log)
# Date: 2016-07-24 14:57:26
# Generator: MySQL-Front 5.3  (Build 6.26)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "portfolio"
#

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "portfolio"
#

INSERT INTO `portfolio` VALUES (1,'imagem.png');
