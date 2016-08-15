/*
Navicat MySQL Data Transfer

Source Server         : mysql.localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : travelgo.id

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-27 13:17:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_menus
-- ----------------------------
DROP TABLE IF EXISTS `m_menus`;
CREATE TABLE `m_menus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `menu_file` varchar(255) DEFAULT NULL,
  `menu_parent` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_menus
-- ----------------------------
INSERT INTO `m_menus` VALUES ('1', 'Transaksi', null, '0');
INSERT INTO `m_menus` VALUES ('2', 'Master Data', null, '0');
INSERT INTO `m_menus` VALUES ('3', 'Trip Registration', 'trip_registration', '1');
INSERT INTO `m_menus` VALUES ('4', 'Users', 'users', '2');
INSERT INTO `m_menus` VALUES ('5', 'Members', 'members', '2');
INSERT INTO `m_menus` VALUES ('6', 'Tour', 'trip', '2');

-- ----------------------------
-- Table structure for m_role
-- ----------------------------
DROP TABLE IF EXISTS `m_role`;
CREATE TABLE `m_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `m_role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_role
-- ----------------------------
INSERT INTO `m_role` VALUES ('1', 'admin');

-- ----------------------------
-- Table structure for m_role_menus
-- ----------------------------
DROP TABLE IF EXISTS `m_role_menus`;
CREATE TABLE `m_role_menus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) DEFAULT NULL,
  `menu_id` bigint(20) DEFAULT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_role_menus
-- ----------------------------
INSERT INTO `m_role_menus` VALUES ('1', '1', '3', '1', '1', '1');
INSERT INTO `m_role_menus` VALUES ('2', '1', '4', '1', '1', '1');
INSERT INTO `m_role_menus` VALUES ('3', '1', '5', '1', '1', '1');
INSERT INTO `m_role_menus` VALUES ('4', '1', '6', '1', '1', '1');

-- ----------------------------
-- Table structure for m_users
-- ----------------------------
DROP TABLE IF EXISTS `m_users`;
CREATE TABLE `m_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role` bigint(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_users
-- ----------------------------
INSERT INTO `m_users` VALUES ('1', 'admin', 'password', 'Triadi Apprillianto', 'triadi.aprillianto@gmail.com', 'Administratoor', '1', '1', '2016-06-24 00:14:06', 'systems');

-- ----------------------------
-- Table structure for t_tour
-- ----------------------------
DROP TABLE IF EXISTS `t_tour`;
CREATE TABLE `t_tour` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(255) DEFAULT NULL,
  `tour_type` enum('FIT','GIT','SIC','CUSTOMS') DEFAULT NULL,
  `tour_location` enum('dom','int') DEFAULT NULL,
  `tour_description` varchar(255) DEFAULT NULL,
  `tour_images` varchar(255) DEFAULT NULL,
  `tour_toc` varchar(255) DEFAULT NULL,
  `tour_price_toc` text,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `str_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_tour
-- ----------------------------
INSERT INTO `t_tour` VALUES ('1', 'BANGKOK', 'FIT', 'int', 'PATTAYA', 'portfolio-1.jpg', 'syarat.pdf', '<hr>\r\n                    <p class=\"red\">**Prices are subject to change with/without prior notice before booking </p>\r\n                    </br>\r\n                    <h4><b>TOUR FARE INCLUDE : </b></h4>\r\n                    <ul>\r\n                        <li><blockquote>International Flight CGK-DMK-CGK economy Class</blockquote></li>\r\n                        <li><blockquote>Hotel</blockquote></li>\r\n                        <li><blockquote>All Transfer by Bus (AC)</blockquote></li>\r\n                        <li><blockquote>Local Guide (Guide Berbahasa Indonesia)</blockquote></li>\r\n                        <li><blockquote>Tax 1%</blockquote></li>\r\n                    </ul>\r\n                    </br>\r\n                    <h4><b>IMPORTANT NOTES :</b></h4>\r\n                     <ul>\r\n                        <li>1. Subject to change without prior notice</li>\r\n                        <li>2. Terms and condition applied by travelgo®©</li>\r\n                        <li>3. If paid by IDR, follow the latest current exchange rateapplied by travelgo®© </li>\r\n                        <li>4. Customization accepted with pre-discussion with travelgo®© </li>\r\n                        <li>5. Resellers are welcome, please contact travelgo®©</li>\r\n                    </ul>', '2016-06-24 00:35:43', 'systems', 'bangkok-pattaya');

-- ----------------------------
-- Table structure for t_tour_items
-- ----------------------------
DROP TABLE IF EXISTS `t_tour_items`;
CREATE TABLE `t_tour_items` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tour_id` bigint(20) DEFAULT NULL,
  `tour_start` datetime DEFAULT NULL,
  `tour_stop` datetime DEFAULT NULL,
  `price` float DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_tour_items
-- ----------------------------
INSERT INTO `t_tour_items` VALUES ('1', '1', '2016-06-24 00:40:01', '2016-06-26 00:40:07', '3711000', '2016-06-24 00:40:30', 'systems');
INSERT INTO `t_tour_items` VALUES ('2', '1', '2016-07-01 00:40:50', '2016-06-03 00:40:56', '3711000', '2016-06-24 00:40:30', 'systems');
INSERT INTO `t_tour_items` VALUES ('3', '1', '2016-07-08 00:41:10', '2016-07-10 00:41:17', '3811000', '2016-06-24 00:40:30', 'systems');

-- ----------------------------
-- Table structure for t_tour_itinerary
-- ----------------------------
DROP TABLE IF EXISTS `t_tour_itinerary`;
CREATE TABLE `t_tour_itinerary` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tour_id` bigint(20) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_tour_itinerary
-- ----------------------------
INSERT INTO `t_tour_itinerary` VALUES ('1', '1', 'DAY 01', 'JAKARTA – BANGKOK - PATTAYA (NO MEALS) SL 119 10:10-13:35 Meet and Greet with Local Guide Transfer to Pattaya Check In Hotel\r\n\r\n', '2016-06-24 00:37:27', 'systems');
INSERT INTO `t_tour_itinerary` VALUES ('2', '1', 'DAY 02', 'PATTAYA - BANGKOK (B/L/-) After breakfast visit Gems Jewelry Nongnooch Village with Lunch, Dried Food Transfer to Bangkok, Chocolate Shop, Shopping at MBK Check In Hotel\r\n\r\n', '2016-06-24 00:37:29', 'systems');
INSERT INTO `t_tour_itinerary` VALUES ('3', '1', 'DAY 03', 'BANGKOK – JAKARTA (B) SL 118 19:05-22:35 Free Time Transfer to airport, Back to Jakarta SHIA.\r\n\r\n', '2016-06-24 00:37:30', 'systems');
