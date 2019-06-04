/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : phpcourse

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-04 16:34:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chart
-- ----------------------------
DROP TABLE IF EXISTS `chart`;
CREATE TABLE `chart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chart
-- ----------------------------
INSERT INTO `chart` VALUES ('1', '111', 'dwa', '1558669125');
INSERT INTO `chart` VALUES ('2', '111', 'dwa', '1558669187');
INSERT INTO `chart` VALUES ('3', '111', '11', '1558669220');
INSERT INTO `chart` VALUES ('4', '111', '这是啥', '1559117280');
INSERT INTO `chart` VALUES ('5', '111', '测试测试 提交到数据库', '1559117303');
INSERT INTO `chart` VALUES ('6', '110', '1', '1559270379');
INSERT INTO `chart` VALUES ('7', '114', 'dwadw', '1559272297');
INSERT INTO `chart` VALUES ('8', '114', '11', '1559273682');
INSERT INTO `chart` VALUES ('9', '114', '达瓦', '1559273904');
INSERT INTO `chart` VALUES ('10', '114', '的味道', '1559273932');
INSERT INTO `chart` VALUES ('11', '114', '达瓦达瓦', '1559273982');
INSERT INTO `chart` VALUES ('12', '114', '吊袜带', '1559273984');
INSERT INTO `chart` VALUES ('13', '114', '达瓦达瓦', '1559273987');
INSERT INTO `chart` VALUES ('14', '114', '哇哇哇哇哇', '1559273995');

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `comment` text NOT NULL,
  `addtime` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES ('78', '115', '个人中心已经初步完成，各位用户可以进入个人中心查看消息哦~', '1558772896', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('73', '112', '甜橙大影院\r\n', '1558610776', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('74', '110', 'XX今晚BISS', '1558610801', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('75', '114', '我来看看我的头像', '1558610824', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('76', '114', '原来和甜橙撞车了', '1558610836', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('77', '111', '更改模式 重新测试', '1558616057', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('67', '113', '				\r\n					\r\n \r\n众荷喧哗\r\n\r\n\r\n洛夫\r\n\r\n\r\n\r\n众荷喧哗\r\n而你是挨我最近\r\n最静，最最温婉的一朵\r\n要看，就看荷去吧\r\n我就喜欢看你撑着一把碧油伞\r\n从水中升起\r\n\r\n我向池心\r\n轻轻扔过去一拉石子\r\n你的脸\r\n便哗然红了起来\r\n惊起的\r\n一只水鸟\r\n如火焰般掠过对岸的柳枝\r\n再靠近一些\r\n只要再靠我近一点\r\n便可听到\r\n水珠在你掌心滴溜溜地转\r\n\r\n你是喧哗的荷池中\r\n一朵最最安静的\r\n夕阳\r\n蝉鸣依旧\r\n依旧如你独立众荷中时的寂寂\r\n\r\n我走了，走了一半又停住\r\n等你\r\n等你轻声唤我				\r\n			', '1558514879', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('71', '111', '测试测试\r\n', '1558604398', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('65', '113', '我要留言', '1558513801', '127.0.0.1', '0');

-- ----------------------------
-- Table structure for userlist
-- ----------------------------
DROP TABLE IF EXISTS `userlist`;
CREATE TABLE `userlist` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `regtime` int(11) DEFAULT NULL,
  `regip` varchar(15) DEFAULT NULL,
  `logintime` int(11) DEFAULT NULL,
  `loginip` varchar(15) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `isadmin` tinyint(1) DEFAULT '0',
  `charttime` int(11) DEFAULT '0',
  `getcharttime` int(11) DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userlist
-- ----------------------------
INSERT INTO `userlist` VALUES ('113', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'uploads/2019/05/5991.jpg', '1558513785', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('110', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'uploads/2019/05/8282.png', '1557912313', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('114', 'skin', '37c24a3158dc6f1aab7f6398e8cf5f70', 'skin', 'uploads/2019/05/5986.png', '1558603094', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('115', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'uploads/2019/05/5793.png', '1558772864', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('112', '甜橙', '5c4fefda27cfe84c3999be13e6b8608a', '甜橙', 'uploads/2019/05/9285.png', '1558063958', '127.0.0.1', null, null, '0', '0', '0', '0');

-- ----------------------------
-- Table structure for usertable
-- ----------------------------
DROP TABLE IF EXISTS `usertable`;
CREATE TABLE `usertable` (
  `uid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usertable
-- ----------------------------
INSERT INTO `usertable` VALUES ('2', 'admin2', '2', 'admin2', null);
INSERT INTO `usertable` VALUES ('3', 'admin3', '3', 'admin3', null);
