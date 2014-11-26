/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : stu

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-11-20 21:29:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('0', 'name', 'pw');
INSERT INTO `admin` VALUES ('1', 'admin1', '123');
INSERT INTO `admin` VALUES ('8', '101102', '1234');
INSERT INTO `admin` VALUES ('9', '101103', '123');
INSERT INTO `admin` VALUES ('10', 'teacher', '123');
INSERT INTO `admin` VALUES ('11', '101104', '123');
INSERT INTO `admin` VALUES ('12', '101105', '123');
INSERT INTO `admin` VALUES ('123', '101107', '123');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '软件开发', '1', '101');
INSERT INTO `class` VALUES ('2', '软件测试', '1', '102');
INSERT INTO `class` VALUES ('3', '移动互联网', '1', '103');
INSERT INTO `class` VALUES ('4', '数据库开发', '1', '104');
INSERT INTO `class` VALUES ('5', '多媒体开发', '2', '501');
INSERT INTO `class` VALUES ('6', '英语翻译', '4', '401');
INSERT INTO `class` VALUES ('7', '网络工程', '5', '502');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `XF` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('101', '软件工程', '3');
INSERT INTO `course` VALUES ('102', '计算机基础', '2');
INSERT INTO `course` VALUES ('103', '软件测试概论', '3');
INSERT INTO `course` VALUES ('104', '心理素质', '1');
INSERT INTO `course` VALUES ('105', '高等数学', '3');
INSERT INTO `course` VALUES ('106', 'web网页制作', '2');
INSERT INTO `course` VALUES ('107', '军事理论', '3');
INSERT INTO `course` VALUES ('108', 'java基础', '4');
INSERT INTO `course` VALUES ('109', 'C语言基础', '2');

-- ----------------------------
-- Table structure for dep
-- ----------------------------
DROP TABLE IF EXISTS `dep`;
CREATE TABLE `dep` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dep
-- ----------------------------
INSERT INTO `dep` VALUES ('1', '软件工程');
INSERT INTO `dep` VALUES ('2', '管理');
INSERT INTO `dep` VALUES ('3', '数码媒体');
INSERT INTO `dep` VALUES ('4', '外语');
INSERT INTO `dep` VALUES ('5', '网络技术');
INSERT INTO `dep` VALUES ('6', '国贸');

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `Sid` int(11) NOT NULL,
  `Crid` int(11) NOT NULL,
  `Score` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`Sid`,`Crid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of score
-- ----------------------------
INSERT INTO `score` VALUES ('101101', '101', '100.00');
INSERT INTO `score` VALUES ('101101', '102', '85.00');
INSERT INTO `score` VALUES ('101101', '103', '85.00');
INSERT INTO `score` VALUES ('101101', '104', '92.00');
INSERT INTO `score` VALUES ('101101', '105', '97.00');
INSERT INTO `score` VALUES ('101102', '101', '60.00');
INSERT INTO `score` VALUES ('101102', '102', '65.00');
INSERT INTO `score` VALUES ('101102', '103', '87.00');
INSERT INTO `score` VALUES ('101102', '104', '90.00');
INSERT INTO `score` VALUES ('101102', '105', '82.00');
INSERT INTO `score` VALUES ('101103', '101', '92.00');
INSERT INTO `score` VALUES ('101103', '102', '75.00');
INSERT INTO `score` VALUES ('101103', '104', '91.00');
INSERT INTO `score` VALUES ('101104', '101', '77.00');
INSERT INTO `score` VALUES ('101105', '101', '31.00');
INSERT INTO `score` VALUES ('101106', '101', '21.00');
INSERT INTO `score` VALUES ('101107', '101', '12.00');
INSERT INTO `score` VALUES ('101109', '101', '90.00');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `Sname` char(8) DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Zxf` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('101101', '1', '王林', '男', '1990-02-10', '50');
INSERT INTO `student` VALUES ('101102', '2', '程成', '男', '1990-02-11', '50');
INSERT INTO `student` VALUES ('101103', '1', '王燕', '女', '1990-02-22', '48');
INSERT INTO `student` VALUES ('101104', '2', '李艳', '女', '1991-01-04', '50');
INSERT INTO `student` VALUES ('101105', '1', '李小孝', '女', '1991-10-05', '50');
INSERT INTO `student` VALUES ('101106', '3', '李敏', '女', '1993-09-15', '45');
INSERT INTO `student` VALUES ('101107', '1', '李明', '男', '1991-10-04', '50');
INSERT INTO `student` VALUES ('101108', '2', '王欢', '女', '1994-11-25', '48');
INSERT INTO `student` VALUES ('101109', '1', '毛东', '男', '1991-10-22', '45');
INSERT INTO `student` VALUES ('101110', '1', '许多', '男', '1991-10-22', '45');
INSERT INTO `student` VALUES ('101111', '1', '徐鱼', '男', '1991-10-11', '45');
INSERT INTO `student` VALUES ('101112', '1', '王玉', '女', '1991-11-01', '49');

-- ----------------------------
-- Table structure for teach
-- ----------------------------
DROP TABLE IF EXISTS `teach`;
CREATE TABLE `teach` (
  `tid` int(11) NOT NULL,
  `crid` int(11) NOT NULL,
  PRIMARY KEY (`tid`,`crid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teach
-- ----------------------------

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `Tid` int(11) NOT NULL,
  `TName` char(8) DEFAULT NULL,
  `Did` int(11) DEFAULT NULL,
  `Pass` char(8) DEFAULT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('101', '李小明', '1', '123');
INSERT INTO `teacher` VALUES ('102', '陈信', '1', '123');
INSERT INTO `teacher` VALUES ('103', '王尔', '1', '123');
INSERT INTO `teacher` VALUES ('104', '李丽', '1', '123');
INSERT INTO `teacher` VALUES ('105', '王光', '1', '123');
INSERT INTO `teacher` VALUES ('106', '李敏', '1', '123');
INSERT INTO `teacher` VALUES ('107', '张欣', '1', '123');
INSERT INTO `teacher` VALUES ('401', '于明', '4', '123');
INSERT INTO `teacher` VALUES ('501', '郭涛', '5', '123');
INSERT INTO `teacher` VALUES ('502', '平安', '5', '123');
