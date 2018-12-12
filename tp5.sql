-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-15 15:11:26
-- 服务器版本： 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp5`
--

-- --------------------------------------------------------

--
-- 表的结构 `lc_banner`
--

CREATE TABLE `lc_banner` (
  `id` int(11) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态,1:显示,0不显示',
  `delete_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '删除时间',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片分类',
  `remark` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '分类备注'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='幻灯片表';

--
-- 转存表中的数据 `lc_banner`
--

INSERT INTO `lc_banner` (`id`, `status`, `delete_time`, `name`, `remark`) VALUES
(1, 1, 0, '默认幻灯片', 'laucher');

-- --------------------------------------------------------

--
-- 表的结构 `lc_banner_item`
--

CREATE TABLE `lc_banner_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_id` int(11) NOT NULL DEFAULT '0' COMMENT '幻灯片id',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态,1:显示;0:隐藏',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '幻灯片名称',
  `image` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片图片',
  `url` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片链接',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '友情链接打开方式',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '幻灯片描述',
  `content` text CHARACTER SET utf8 COMMENT '幻灯片内容',
  `more` text COMMENT '链接打开方式'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='幻灯片子项表';

--
-- 转存表中的数据 `lc_banner_item`
--

INSERT INTO `lc_banner_item` (`id`, `slide_id`, `status`, `list_order`, `title`, `image`, `url`, `target`, `description`, `content`, `more`) VALUES
(1, 1, 1, 10001, 'WELCOME', '20180807\\e81621ee5bafde562a63cb829a6072df.jpg', '/tp5/thinkphp_5.0.10/public/', '', '欢迎来到本网站', '这是一个dome测试，随时可以更改它', NULL),
(2, 1, 1, 10002, 'LAUCHER-FASSS', '20180807\\7fe2b8f44d6b6f283a9befa5d27dc480.jpg', '/tp5/thinkphp_5.0.10/public/1', '', '这是dome幻灯片2', 'hello world！', NULL),
(3, 1, 1, 10003, '多撒多', '20180807\\1843e2b1607a87aa3ad30af1a9f4b6ac.png', 'dd ', '', 'dd', 'dd', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lc_link`
--

CREATE TABLE `lc_link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态;1:显示;0:不显示',
  `rating` int(11) NOT NULL DEFAULT '0' COMMENT '友情链接评级',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '友情链接描述',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '友情链接地址',
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '友情链接名称',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '友情链接图标',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '友情链接打开方式',
  `rel` varchar(50) NOT NULL DEFAULT '' COMMENT '链接与网站的关系'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='友情链接表';

--
-- 转存表中的数据 `lc_link`
--

INSERT INTO `lc_link` (`id`, `status`, `rating`, `list_order`, `description`, `url`, `name`, `image`, `target`, `rel`) VALUES
(1, 1, 1, 1, 'thinkcmf官网', 'http://www.thinkcmf.com', 'ThinkCMF', '20180807\\b6ba97440eacc9261880ef1da1df5ee7.jpg', '_blank', ''),
(2, 1, 0, 2, '大多撒多撒', 'czhlove.cn', '多撒多撒', '20180807\\0fc664e7bd5b74ca58384992e0e7996e.jpg', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `lc_user`
--

CREATE TABLE `lc_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '用户类型;1:admin;2:普通用户;3:vip;4:svip',
  `sex` tinyint(2) NOT NULL DEFAULT '0' COMMENT '性别;0:保密,1:男,2:女',
  `birthday` int(11) NOT NULL DEFAULT '0' COMMENT '生日',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `coin` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '金币',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `register_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `user_status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '用户状态;0:禁用,1:正常,2:未验证',
  `user_login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码;cmf_password加密',
  `user_nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户昵称',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '用户登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网址',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像',
  `signature` varchar(255) NOT NULL DEFAULT '' COMMENT '个性签名',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '中国手机不带国家代码，国际手机号格式为：国家代码-手机号',
  `more` text COMMENT '扩展属性',
  `count` int(10) DEFAULT '1',
  `user_state` int(10) NOT NULL DEFAULT '1' COMMENT '默认为1,2为停用',
  `delete_time` int(11) DEFAULT NULL COMMENT '软删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户表';

--
-- 转存表中的数据 `lc_user`
--

INSERT INTO `lc_user` (`id`, `user_type`, `sex`, `birthday`, `last_login_time`, `score`, `coin`, `balance`, `register_time`, `user_status`, `user_login`, `user_pass`, `user_nickname`, `user_email`, `user_url`, `avatar`, `signature`, `last_login_ip`, `user_activation_key`, `mobile`, `more`, `count`, `user_state`, `delete_time`) VALUES
(1, 0, 2, 0, 1533647990, 1, 1, '0.00', 1531636605, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '196663624@qq.com', '', '', '', '0.0.0.2', '', '1300000000000', NULL, 42, 1, NULL),
(2, 1, 1, 0, 1532493392, 1, 1, '0.00', 1531636605, 1, '123', '202cb962ac59075b964b07152d234b70', 'laucher72811', '196663624@qq.com', '', '', '', '0.0.0.2', '', '1300000000000', NULL, 6, 1, NULL),
(3, 1, 1, 0, 0, 0, 0, '0.00', 0, 1, '666', '21232f297a57a5a743894a0e4a801fc3', 'laucher', '196663624@qq.com', '', '', '', '', '', '1300000000000', NULL, 1, 2, NULL),
(5, 1, 1, 0, 1532844446, 0, 0, '0.00', 1532586253, 1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test@qq.com', '', '', '', '', '', '11111111111', NULL, 2, 1, NULL),
(6, 0, 1, 0, 0, 0, 0, '0.00', 1532586412, 1, 'czh', '623df13aa8e8874363281b85b42e9df0', '我是管理员', '1@qq.com', '', '', '', '', '', '11111222222', NULL, 1, 2, NULL),
(9, 4, 1, 0, 1532840351, 0, 0, '0.00', 1532790803, 1, '196663624', 'f1d0b05363174752ac1a7829acde248b', '刘晨', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 3, 1, NULL),
(10, 2, 1, 0, 0, 0, 0, '0.00', 1532843706, 1, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.co', '', '', '', '', '', '13206029263', NULL, 1, 1, NULL),
(11, 2, 1, 0, 0, 0, 0, '0.00', 1532843742, 1, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.co', '', '', '', '', '', '13206029263', NULL, 1, 1, 1532845128),
(12, 2, 1, 0, 0, 0, 0, '0.00', 1532843747, 1, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.co', '', '', '', '', '', '13206029263', NULL, 1, 1, NULL),
(13, 2, 1, 0, 0, 0, 0, '0.00', 1532843831, 1, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.co', '', '', '', '', '', '13206029263', NULL, 1, 1, NULL),
(14, 2, 1, 0, 0, 0, 0, '0.00', 1532843833, 1, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.co', '', '', '', '', '', '13206029263', NULL, 1, 1, NULL),
(15, 2, 1, 0, 0, 0, 0, '0.00', 1532843862, 1, '11111133', '96e79218965eb72c92a549dd5a330112', '111111', '196663624@qq.c', '', '', '', '', '', '13206029265', NULL, 1, 1, NULL),
(16, 2, 1, 0, 0, 0, 0, '0.00', 1532843896, 1, 'user666', 'b59c67bf196a4758191e42f76670ceba', '1111', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 2, NULL),
(17, 2, 1, 0, 0, 0, 0, '0.00', 1532843902, 1, 'user666', 'b59c67bf196a4758191e42f76670ceba', '1111', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(18, 2, 1, 0, 0, 0, 0, '0.00', 1532843915, 1, 'user666', 'b59c67bf196a4758191e42f76670ceba', '1111', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(19, 2, 1, 0, 0, 0, 0, '0.00', 1532844006, 1, 'chen', 'b59c67bf196a4758191e42f76670ceba', 'laucher6', '196663624@qq.co', '', '', '', '', '', '13206026299', NULL, 1, 2, NULL),
(20, 2, 1, 0, 0, 0, 0, '0.00', 1532844008, 1, 'chen', 'b59c67bf196a4758191e42f76670ceba', 'laucher6', '196663624@qq.co', '', '', '', '', '', '13206026299', NULL, 1, 2, NULL),
(21, 2, 1, 0, 0, 0, 0, '0.00', 1532844033, 1, 'user', 'b59c67bf196a4758191e42f76670ceba', 'laucher1', '196663624@qq.co', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(22, 2, 1, 0, 0, 0, 0, '0.00', 1532844035, 1, 'user', 'b59c67bf196a4758191e42f76670ceba', 'laucher1', '196663624@qq.co', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(23, 2, 1, 0, 0, 0, 0, '0.00', 1532844096, 1, 'user666', '698d51a19d8a121ce581499d7b701668', '333', '', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(24, 2, 1, 0, 0, 0, 0, '0.00', 1532844098, 1, 'user666', '698d51a19d8a121ce581499d7b701668', '333', '', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(25, 4, 1, 0, 0, 0, 0, '0.00', 1532844125, 1, 'user666', '1f2121f36f817bd18540e5fa7de06f59', 'laucher6', '111@qq.com', '', '', '', '', '', '13896422327', NULL, 1, 1, NULL),
(26, 2, 1, 0, 0, 0, 0, '0.00', 1532844127, 1, 'user666', '1f2121f36f817bd18540e5fa7de06f59', 'laucher6', '111@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(27, 2, 1, 0, 0, 0, 0, '0.00', 1532844127, 1, 'user666', '1f2121f36f817bd18540e5fa7de06f59', 'laucher6', '111@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(28, 2, 1, 0, 0, 0, 0, '0.00', 1532844128, 1, 'user666', '1f2121f36f817bd18540e5fa7de06f59', 'laucher6', '111@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(29, 2, 1, 0, 0, 0, 0, '0.00', 1532844131, 1, 'user666', '1f2121f36f817bd18540e5fa7de06f59', 'laucher6', '111@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(30, 2, 1, 0, 0, 0, 0, '0.00', 1532844168, 1, 'user666', '3e920e34faed7875441e9c6a6d0911ff', 'dsad', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(31, 2, 1, 0, 0, 0, 0, '0.00', 1532844169, 1, 'user666', '3e920e34faed7875441e9c6a6d0911ff', 'dsad', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(32, 2, 1, 0, 0, 0, 0, '0.00', 1532844170, 1, 'user666', '3e920e34faed7875441e9c6a6d0911ff', 'dsad', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL),
(33, 2, 1, 0, 0, 0, 0, '0.00', 1532844170, 1, 'user666', '3e920e34faed7875441e9c6a6d0911ff', 'dsad', '196663624@qq.com', '', '', '', '', '', '13206026299', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lc_video`
--

CREATE TABLE `lc_video` (
  `id` int(10) NOT NULL,
  `state` int(2) NOT NULL DEFAULT '0' COMMENT '视频状态，0::停用;1:启用',
  `url` varchar(100) NOT NULL COMMENT '视频路径',
  `delete_time` int(50) NOT NULL COMMENT 'tp5软删除'
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `lc_web_info`
--

CREATE TABLE `lc_web_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autoload` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '是否自动加载;1:自动加载;0:不自动加载',
  `option_name` varchar(64) NOT NULL DEFAULT '' COMMENT '配置名',
  `option_value` mediumtext COMMENT '配置值'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='全站配置表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `lc_web_info`
--

INSERT INTO `lc_web_info` (`id`, `autoload`, `option_name`, `option_value`) VALUES
(1, 1, 'site_info', '{\"site_name\":\"\\u6211\\u662f\\u7f51\\u7ad9info\",\"site_seo_keywords\":\"SEO\\u5173\\u952e\\u5b57\",\"site_seo_description\":\"SEO\\u63cf\\u8ff0\",\"site_email\":\"196663624@qq.com\",\"site_copyright\":\"\\u5e95\\u90e8\\u4fe1\\u606f\",\"site_icp\":\"icp\",\"site_analytics\":\"\\u7edf\\u8ba1\\u4ee3\\u7801\",\"from_name\":\"LAUCHER-FASSS666\",\"smtp_secure\":\"ssl\",\"host\":\"smtp.yeah.net\",\"port\":\"465\",\"username\":\"laucher@yeah.net\",\"password\":\"liuchen520\",\"from\":\"laucher@yeah.net\",\"site_closure\":\"1\",\"stop_time\":\"2018\\/09\\/03 23:11:32\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lc_banner`
--
ALTER TABLE `lc_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_banner_item`
--
ALTER TABLE `lc_banner_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_id` (`slide_id`);

--
-- Indexes for table `lc_link`
--
ALTER TABLE `lc_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `lc_user`
--
ALTER TABLE `lc_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_login` (`user_login`),
  ADD KEY `user_nickname` (`user_nickname`);

--
-- Indexes for table `lc_video`
--
ALTER TABLE `lc_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_web_info`
--
ALTER TABLE `lc_web_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lc_banner`
--
ALTER TABLE `lc_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `lc_banner_item`
--
ALTER TABLE `lc_banner_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `lc_link`
--
ALTER TABLE `lc_link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `lc_user`
--
ALTER TABLE `lc_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用表AUTO_INCREMENT `lc_video`
--
ALTER TABLE `lc_video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `lc_web_info`
--
ALTER TABLE `lc_web_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
