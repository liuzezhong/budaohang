-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-23 17:03:10
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
-- 转存表中的数据 `bdh_admin`
--

INSERT INTO `bdh_admin` (`user_id`, `username`, `password`, `email`, `mobile`, `wechat`, `company`, `job`, `describes`, `headerimg`, `lastloginip`, `lastlogintime`, `registertime`, `status`) VALUES
(1, '刘老狗2', 'fdccea0ff0966c9e35b9a572346f562d', 'zhongliuze@gmadil.com', '18206183097', '18852983610', '闲时科技', 'CEO', '淡淡的大是大非', '/bdh/upload/2017/02/06/58986bbd9efab.jpg', '127.0.0.1', 1486383604, 1486186847, 1),
(2, '刘老狗', 'fdccea0ff0966c9e35b9a572346f562d', '', '18852983610', NULL, NULL, NULL, NULL, NULL, '127.0.0.1', 1486196986, 1486186937, 1),
(3, '吕单单单单单凤', 'fdccea0ff0966c9e35b9a572346f562d', 'zhongliuze@gmail.com', '18206183093', 'handsome5533', '闲时科技', '业务经理', '我胖我骄傲我自豪', 'Public/img/1.jpg', '127.0.0.1', 1492527438, 1486192710, 1),
(4, '刘老公', 'fdccea0ff0966c9e35b9a572346f562d', '', '18762977564', NULL, NULL, NULL, NULL, 'Public/img/moren.jpg', '127.0.0.1', 1492832430, 1492832421, 1),
(5, '刘老公2', 'fdccea0ff0966c9e35b9a572346f562d', '', '18852983611', NULL, NULL, NULL, NULL, '/upload/2017/04/23/58fc240a7d809.jpg', '127.0.0.1', 1492833572, 1492833565, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bdh_label`
--

CREATE TABLE `bdh_label` (
  `label_id` int(11) NOT NULL COMMENT '标签ID',
  `label_name` varchar(20) NOT NULL COMMENT '标签名',
  `user_id` int(11) NOT NULL COMMENT '创建用户ID',
  `create_time` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签表';

--
-- 转存表中的数据 `bdh_label`
--

INSERT INTO `bdh_label` (`label_id`, `label_name`, `user_id`, `create_time`) VALUES
(1, 'bootstrap', 1, 1492954684),
(2, '前端', 1, 1492954689),
(3, 'PHP', 1, 1492958915),
(4, '娱乐', 1, 1492958925),
(5, 'Windows', 1, 1492958965),
(6, 'JAVA', 1, 1492954684),
(7, '开源', 1, 1492954689),
(8, '实用工具', 1, 1492958915),
(9, '黄色网站', 1, 1492958925),
(10, '国外网站', 1, 1492958965);

-- --------------------------------------------------------

--
-- 表的结构 `bdh_product`
--

CREATE TABLE `bdh_product` (
  `product_id` int(11) NOT NULL COMMENT '产品ID',
  `name` varchar(250) NOT NULL COMMENT '产品名',
  `website` varchar(500) NOT NULL COMMENT '产品官网',
  `describes` varchar(500) NOT NULL COMMENT '产品描述',
  `kind` int(11) NOT NULL COMMENT '产品类别',
  `company` varchar(250) NOT NULL COMMENT '开发公司',
  `uptime` int(11) NOT NULL COMMENT '上线时间',
  `type` tinyint(4) NOT NULL COMMENT '项目类型：0开源项目，1创业项目，2其它',
  `version` varchar(20) NOT NULL COMMENT '最新版本',
  `support` int(11) NOT NULL COMMENT '支持平台：0为Windows，1为Linux，2为IOS，3为 Android',
  `introduction` varchar(1000) NOT NULL COMMENT '详细介绍',
  `user_id` int(11) NOT NULL COMMENT '上传用户ID',
  `upload_time` int(11) NOT NULL COMMENT '上传时间',
  `status` tinyint(4) NOT NULL COMMENT '产品审核状态：0待审核、-1审核不通过、1审核通过'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品信息表';

-- --------------------------------------------------------

--
-- 表的结构 `bdh_productset`
--

CREATE TABLE `bdh_productset` (
  `productset_id` int(11) NOT NULL COMMENT '产品集ID',
  `name` varchar(200) NOT NULL COMMENT '产品集名称',
  `describes` varchar(500) NOT NULL COMMENT '产品集描述',
  `cover` varchar(500) NOT NULL COMMENT '产品集封面',
  `user_id` int(11) NOT NULL COMMENT '创建用户ID',
  `create_time` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品集表';

-- --------------------------------------------------------

--
-- 表的结构 `bdh_productset_list`
--

CREATE TABLE `bdh_productset_list` (
  `list_id` int(11) NOT NULL COMMENT '列表ID',
  `productset_id` int(11) NOT NULL COMMENT '产品集合ID',
  `product_id` int(11) NOT NULL COMMENT '产品ID',
  `add_time` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `bdh_product_img`
--

CREATE TABLE `bdh_product_img` (
  `img_id` int(11) NOT NULL COMMENT '图片ID',
  `product_id` int(11) NOT NULL COMMENT '产品ID',
  `img_url` varchar(250) NOT NULL COMMENT '图片路径'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品图片表';

-- --------------------------------------------------------

--
-- 表的结构 `bdh_product_label`
--

CREATE TABLE `bdh_product_label` (
  `product_label_id` int(11) NOT NULL COMMENT '产品标签ID',
  `label_id` int(11) NOT NULL COMMENT '标签ID',
  `product_id` int(11) NOT NULL COMMENT '产品ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品标签表';

-- --------------------------------------------------------

--
-- 表的结构 `bdh_product_type`
--

CREATE TABLE `bdh_product_type` (
  `type_id` int(11) NOT NULL COMMENT '类别ID',
  `type_name` varchar(20) NOT NULL COMMENT '类别名',
  `create_time` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品类别表';

--
-- 转存表中的数据 `bdh_product_type`
--

INSERT INTO `bdh_product_type` (`type_id`, `type_name`, `create_time`) VALUES
(1, '电子商务', 1492954684),
(2, '社交应用', 1492954699),
(3, '互联网教育', 1492955684),
(4, '旅游产品', 1492954799);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdh_admin`
--
ALTER TABLE `bdh_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bdh_label`
--
ALTER TABLE `bdh_label`
  ADD PRIMARY KEY (`label_id`);

--
-- Indexes for table `bdh_product`
--
ALTER TABLE `bdh_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `bdh_productset_list`
--
ALTER TABLE `bdh_productset_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `bdh_product_img`
--
ALTER TABLE `bdh_product_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `bdh_product_label`
--
ALTER TABLE `bdh_product_label`
  ADD PRIMARY KEY (`product_label_id`);

--
-- Indexes for table `bdh_product_type`
--
ALTER TABLE `bdh_product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bdh_admin`
--
ALTER TABLE `bdh_admin`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户ID号', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `bdh_label`
--
ALTER TABLE `bdh_label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标签ID', AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `bdh_product`
--
ALTER TABLE `bdh_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID';
--
-- 使用表AUTO_INCREMENT `bdh_productset_list`
--
ALTER TABLE `bdh_productset_list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '列表ID';
--
-- 使用表AUTO_INCREMENT `bdh_product_img`
--
ALTER TABLE `bdh_product_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片ID';
--
-- 使用表AUTO_INCREMENT `bdh_product_label`
--
ALTER TABLE `bdh_product_label`
  MODIFY `product_label_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品标签ID';
--
-- 使用表AUTO_INCREMENT `bdh_product_type`
--
ALTER TABLE `bdh_product_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '类别ID', AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
