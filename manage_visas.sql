/*
 Navicat Premium Data Transfer

 Source Server         : local_sql
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : telegram_message

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 23/03/2023 21:00:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_administrators
-- ----------------------------
DROP TABLE IF EXISTS `tbl_administrators`;
CREATE TABLE `tbl_administrators`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Admin\'s full name',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Admin\'s email address',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Admin\'s password',
  `permission` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Admin\'s permission',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) COMMENT 'Datetime Admin\'s created',
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Datetime Admin\'s updated',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_administrators
-- ----------------------------
INSERT INTO `tbl_administrators` VALUES (1, 'Kevin Harris', 'kevin.nike95@gmail.com', '123456789', 1, '2023-03-13 02:59:12', '2023-03-17 01:26:07');
INSERT INTO `tbl_administrators` VALUES (3, 'Vincent Newman', 'vincent.newman@gmail.com', '123456789', 1, '2023-03-15 23:34:02', '2023-03-17 01:26:28');

-- ----------------------------
-- Table structure for tbl_bots
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bots`;
CREATE TABLE `tbl_bots`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Email for bot activity',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Password for bot activity',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_bots
-- ----------------------------
INSERT INTO `tbl_bots` VALUES (1, 'anat2081@gmail.com', 'anat2081@gmail.com');
INSERT INTO `tbl_bots` VALUES (2, 'asdf', 'asdfsdf');
INSERT INTO `tbl_bots` VALUES (3, 'sdfsdfsdf', 'sdfsdfsdfsdf');

-- ----------------------------
-- Table structure for tbl_logs
-- ----------------------------
DROP TABLE IF EXISTS `tbl_logs`;
CREATE TABLE `tbl_logs`  (
  `s` bigint(255) NOT NULL,
  `Rank` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Rare_New` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contract` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Balance` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Max_Buy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Max_Tax` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Sell_Tax` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Enable` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `AI_Risk` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` datetime(0) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`s`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_logs
-- ----------------------------
INSERT INTO `tbl_logs` VALUES (1, '2', '12-11', 'Red', '0x98fdjf889', '1.43', '1%', '20%', '35%', '0x94532', '13%', '2023-03-06 20:27:28', '2023-03-22 20:39:52');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'User\'s firstname',
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'User\'s lastname',
  `passport` int(11) NOT NULL COMMENT 'User\'s passport number',
  `latest_day` date NOT NULL COMMENT 'Limit day for finding appointment',
  `current_appointment_day` date NULL DEFAULT NULL COMMENT 'Current appointment day which has been created',
  `priority` int(11) NOT NULL COMMENT 'Priority for sorting users',
  `bot_id` int(11) NOT NULL DEFAULT 0 COMMENT 'Bot id',
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Name of user who created this row',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) COMMENT 'Datetime user has been created',
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Datetime user has been updated',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES (1, 'SHARABI', 'ORI', 36944299, '2023-03-12', '2023-03-12', 4, 1, 'Kevin Harris', '2023-03-13 04:19:54', '2023-03-16 23:25:59');
INSERT INTO `tbl_users` VALUES (2, 'CASEY', 'KEVIN', 44252124, '2023-03-11', '2023-03-13', 2, 0, 'Kevin Harris', '2023-03-13 04:19:54', '2023-03-16 23:28:56');
INSERT INTO `tbl_users` VALUES (4, 'asdf', 'asdf', 123, '2023-03-03', '2023-03-19', 1, 0, 'Kevin Harris', '2023-03-16 06:41:47', '2023-03-16 23:31:14');
INSERT INTO `tbl_users` VALUES (6, 'asdf', 'rtr', 5455, '2023-03-15', '2023-03-06', 3, 0, 'Kevin Harris', '2023-03-17 00:58:10', '2023-03-17 01:01:23');
INSERT INTO `tbl_users` VALUES (7, '', '', 0, '0000-00-00', NULL, 0, 0, '', '2023-03-23 20:21:47', '2023-03-23 20:21:47');

SET FOREIGN_KEY_CHECKS = 1;
