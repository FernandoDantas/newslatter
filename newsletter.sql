/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : newsletter

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-07-20 17:45:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_administrador
-- ----------------------------
DROP TABLE IF EXISTS `tb_administrador`;
CREATE TABLE `tb_administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_administrador
-- ----------------------------
INSERT INTO `tb_administrador` VALUES ('1', 'Fernando', '$2y$11$oXRafuU6K8.tU7QDSFnJTudr/v4NodokSI8NDqt4aM/3whl.UIO6e', 'fernandojrsud@hotmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Fernando ', 'fernandojrsud@hotmail.com', '1');
INSERT INTO `users` VALUES ('2', 'Tiago pastor da silva', 'tiagopastor92@gmail.com', '2');
INSERT INTO `users` VALUES ('3', 'Hed Vital Colaço Dantas', 'hed_sud@hotmail.com', '2');
INSERT INTO `users` VALUES ('4', 'Fernando Jr', 'fernandojrlds@gmail.com', '1');
INSERT INTO `users` VALUES ('5', 'teste', 'teste@email.com', '2');
