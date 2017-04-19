-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-19 15:39:06
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdh`
--

-- --------------------------------------------------------

--
-- 表的结构 `bdh_admin`
--

CREATE TABLE `bdh_admin` (
  `user_id` mediumint(6) UNSIGNED NOT NULL COMMENT '用户ID号',
  `username` varchar(250) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(250) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(250) DEFAULT '' COMMENT '邮箱',
  `mobile` varchar(250) DEFAULT '' COMMENT '手机号码',
  `wechat` varchar(250) DEFAULT NULL COMMENT '微信',
  `company` varchar(250) DEFAULT NULL COMMENT '公司名称',
  `job` varchar(250) DEFAULT NULL COMMENT '职位',
  `describes` varchar(250) DEFAULT NULL COMMENT '个性签名',
  `headerimg` varchar(250) DEFAULT NULL COMMENT '头像',
  `lastloginip` varchar(250) DEFAULT '0' COMMENT '最后登陆IP',
  `lastlogintime` int(11) UNSIGNED DEFAULT '0' COMMENT '最后登录时间',
  `registertime` int(11) NOT NULL COMMENT '注册时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdh_admin`
--
ALTER TABLE `bdh_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bdh_admin`
--
ALTER TABLE `bdh_admin`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户ID号', AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
