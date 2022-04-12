/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : gup

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2022-04-12 20:48:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ms_gup
-- ----------------------------
DROP TABLE IF EXISTS `ms_gup`;
CREATE TABLE `ms_gup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float(255,0) DEFAULT NULL COMMENT '成交额',
  `amplitude` float(255,0) DEFAULT NULL COMMENT '振幅',
  `chg` float(255,0) DEFAULT NULL COMMENT '涨跌额',
  `code` varchar(255) DEFAULT NULL COMMENT '代码',
  `currency` varchar(255) DEFAULT NULL COMMENT '货币单位',
  `current` float(255,0) DEFAULT NULL COMMENT '当前价格',
  `current_ext` float(255,0) DEFAULT NULL COMMENT '价格2',
  `dividend` float(255,0) DEFAULT NULL COMMENT '股息(TTM)',
  `dividend_yield` float(255,0) DEFAULT NULL COMMENT '股息率(TTM)',
  `eps` float(255,0) DEFAULT NULL COMMENT '每股收益',
  `exchange` varchar(255) DEFAULT NULL COMMENT '交易所？',
  `float_market_capital` float(255,0) DEFAULT NULL COMMENT '流通值',
  `float_shares` int(255) DEFAULT NULL COMMENT '流通股',
  `high` float(255,0) DEFAULT NULL COMMENT '最高',
  `high52w` float(255,0) DEFAULT NULL COMMENT '52周最高',
  `last_close` float(255,0) DEFAULT NULL COMMENT '昨收',
  `limit_down` float(255,0) DEFAULT NULL COMMENT '跌停',
  `limit_up` float(255,0) DEFAULT NULL COMMENT '涨停',
  `low` float(255,0) DEFAULT NULL COMMENT '最低',
  `low52w` float(255,0) DEFAULT NULL COMMENT '52周最低',
  `market_capital` float(255,0) DEFAULT NULL COMMENT '总市值',
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `navps` float(255,0) DEFAULT NULL COMMENT '每股净资产',
  `open` float(255,0) DEFAULT NULL COMMENT '今开',
  `pb` varchar(255) DEFAULT NULL COMMENT '市净率',
  `pe_ttm` float(255,0) DEFAULT NULL COMMENT '市盈率(TTM)',
  `percent` float(255,0) DEFAULT NULL COMMENT '涨跌幅',
  `time` float(30,0) DEFAULT NULL COMMENT '当前时间',
  `total_shares` int(255) DEFAULT NULL COMMENT '总股本',
  `turnover_rate` float(255,0) DEFAULT NULL COMMENT '换手',
  `volume_ratio` float(255,0) DEFAULT NULL COMMENT '量比',
  `symbol` varchar(255) DEFAULT NULL COMMENT '详细代码',
  `status` varchar(255) DEFAULT NULL COMMENT '当日获取数据时状态：交易中,休市中,已收盘',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
