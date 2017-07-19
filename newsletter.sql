/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : newsletter

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-07-19 01:14:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `newsletter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Fernando ', 'fernandojrsud@hotmail.com', '1');
INSERT INTO `users` VALUES ('2', 'Tiago pastor da silva', 'tiagopastor92@gmail.com', '1');
INSERT INTO `users` VALUES ('3', 'Hed Vital Colaço Dantas', 'hed_sud@hotmail.com', '1');
