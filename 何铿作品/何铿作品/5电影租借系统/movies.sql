-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-02 04:19:26
-- 服务器版本： 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `AdminName` varchar(30) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`AdminID`, `password`, `AdminName`, `phone`) VALUES
(1, 'admin1', 'admin1', '123456'),
(2, 'admin2', 'admin2', '123456'),
(3, 'admin3', 'admin3', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE `borrow` (
  `FilmID` int(11) NOT NULL DEFAULT '0',
  `CardID` int(11) NOT NULL DEFAULT '0',
  `BorrowTime` date DEFAULT NULL,
  `ReturnTime` date DEFAULT NULL,
  `AdminID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `borrow`
--

INSERT INTO `borrow` (`FilmID`, `CardID`, `BorrowTime`, `ReturnTime`, `AdminID`) VALUES
(1000, 1000, '2018-05-16', '2018-06-16', 1),
(1000, 1003, '2018-05-16', '2018-06-16', 1),
(1000, 1004, '2018-05-16', '2018-06-16', 2),
(1000, 1005, '2018-05-16', '2011-06-16', 3),
(1001, 1000, '2018-05-30', '2018-06-29', 1),
(1023, 1004, '2018-05-16', '2011-06-16', 1);

-- --------------------------------------------------------

--
-- 表的结构 `cards`
--

CREATE TABLE `cards` (
  `CardID` int(11) NOT NULL,
  `CardName` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `job` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cards`
--

INSERT INTO `cards` (`CardID`, `CardName`, `department`, `job`) VALUES
(1000, 'aaa', 'CS', 'T'),
(1003, 'bbb', 'CS', 'S'),
(1004, 'ccc', 'SE', 'T'),
(1005, 'ddd', 'SE', 'S');

-- --------------------------------------------------------


-- 表的结构 `actor`
--

CREATE TABLE actor (
  actor_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  last_update TIMESTAMP NOT NULL,
  PRIMARY KEY  (actor_id),
  KEY idx_actor_last_name (last_name)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `actor`
--

INSERT INTO `actor` (`actor_id`, `first_name`, `last_name`, `last_update`) VALUES
(1000, 'aaa', 'CS', '2018-1-1'),
(1003, 'bbb', 'CS', '2018-1-1'),
(1004, 'ccc', 'SE', '2018-1-1'),
(1005, 'ddd', 'SE', '2018-1-1');

-- --------------------------------------------------------

-- 表的结构 `address`
--

CREATE TABLE address (
  address_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  address VARCHAR(50) NOT NULL,
  address2 VARCHAR(50) DEFAULT NULL,
  district VARCHAR(20) NOT NULL,
  city_id SMALLINT UNSIGNED NOT NULL,

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `address`
--

INSERT INTO `actor` (`address_id`, `address2`, `district`, `city_id`) VALUES
(1000, 'aaa', 'CS', '梅州'),
(1003, 'bbb', 'CS', '揭阳'),
(1004, 'ccc', 'SE', '广州'),
(1005, 'ddd', 'SE', '惠州');

-- --------------------------------------------------------
-- 表的结构 `city`

CREATE TABLE city (
  city_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  city VARCHAR(50) NOT NULL,
  country_id SMALLINT UNSIGNED NOT NULL,

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `city`
--

INSERT INTO `actor` (` city_id`, `city`, `country_id`,) VALUES
(1000, 'aaa', '1'),
(1003, 'bbb', '2'),
(1004, 'ccc', '3'),
(1005, 'ddd', '4');

-- --------------------------------------------------------

-- 表的结构 `film_category`

CREATE TABLE film_category (
  film_id SMALLINT UNSIGNED NOT NULL,
  category_id TINYINT UNSIGNED NOT NULL,

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `film_category`
--

INSERT INTO `actor` (`film_id`, `category_id`) VALUES
(1000, '1'),
(1003, '2'),
(1004, '3'),
(1005, '4');

-- -------------------

--
-- 表的结构 `films`
--

CREATE TABLE `films` (
  `FilmID` int(11) NOT NULL,
  `FilmCategory` varchar(30) DEFAULT NULL,
  `FilmName` varchar(30) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `actor` varchar(30) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Inventory` int(11) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `films`
--

INSERT INTO `films` (`FilmID`, `FilmCategory`, `FilmName`, `year`, `actor`, `price`, `Total`, `Inventory`, `country`, `language`) VALUES
(1000, '动画片', '小猪佩奇', 2000, '佩奇', '12.00', 2, 2, '美国', '英语'),
(1001, '爱情片', '美丽人生', 1997, '罗伯托.贝尼尼', '12.00', 100, 102, '意大利', '意大利语'),
(1002, '爱情片', '泰坦尼克号', 1998, '莱昂纳多', '13.00', 100, 100, '美国', '英语'),
(1003, '爱情片', '乱世佳人', 1939, '托马斯.米切尔', '14.00', 100, 100, '美国', '英语'),
(1004, '爱情片', '摩登时代', 1936, '查理.卓别林', '15.00', 100, 100, '美国', '英语'),
(1005, '爱情片', '怦然心动', 2010, '玛德琳.卡罗尔', '16.00', 100, 100, '美国', '英语'),
(1006, '文艺片', '灿烂人生', 2003, '路易吉.洛.卡肖', '17.00', 100, 100, '意大利', '意大利'),
(1007, '文艺片', '阿飞正传', 1990, '张国荣', '18.00', 100, 100, '中国香港', '粤语'),
(1008, '文艺片', '一代宗师', 2013, '梁朝伟', '19.00', 100, 100, '中国', '普通话'),
(1009, '文艺片', '情书', 1995, '中山美穗', '20.00', 100, 100, '日本', '日语'),
(1010, '文艺片', '李米的猜想', 2008, '周迅', '21.00', 100, 100, '中国', '普通话'),
(1011, '文艺片', '花与爱丽丝', 2004, '铃木杏', '22.00', 100, 100, '日本', '日语'),
(1012, '文艺片', '燕尾蝶', 1996, '恰拉', '23.00', 100, 100, '日本', '日语'),
(1013, '历史片', '芳华', 2018, '钟楚曦', '24.00', 100, 100, '中国', '普通话'),
(1014, '历史片', '第一夫人', 2018, '娜塔莉.波特曼', '25.00', 100, 100, '美国', '英语'),
(1015, '历史片', '杨贵妃', 2015, '范冰冰', '26.00', 100, 100, '中国', '普通话'),
(1016, '历史片', '黄金时代', 2014, '汤唯', '27.00', 100, 100, '中国', '普通话'),
(1017, '战争片', '敦刻尔克', 2017, '菲恩.怀特海德', '28.00', 100, 100, '英国', '英语'),
(1018, '战争片', '现代启示录', 1979, '马龙.白兰度', '28.00', 100, 100, '英国', '英语'),
(1019, '战争片', '阿拉伯的劳伦斯', 1962, '比的.奥图尔', '28.00', 100, 100, '英国', '英语'),
(1020, '战争片', '太极旗飘扬', 2004, '张东健', '28.00', 100, 100, '韩国', '韩语'),
(1021, '战争片', '荡寇风云', 2017, '赵文卓', '28.00', 100, 100, '中国', '普通话'),
(1022, '音乐片', '音乐之声', 1965, '朱莉.安德鲁斯', '28.00', 100, 100, '美国', '英语'),
(1023, '音乐片', '绿野仙踪', 1939, '朱迪.加兰', '28.00', 100, 100, '美国', '英语'),
(1024, '音乐片', '音乐之声', 1965, '朱莉.安德鲁斯', '28.00', 100, 100, '美国', '英语'),
(1025, '音乐片', '周末夜狂热', 1977, '约翰.特拉沃尔塔', '28.00', 100, 100, '美国', '英语'),
(1026, '音乐片', '音乐之声', 1965, '朱莉.安德鲁斯', '28.00', 100, 100, '美国', '英语'),
(1027, '音乐片', '卡门', 1983, '安东尼奥.加德斯', '28.00', 100, 100, '西班牙', '西班牙'),
(1028, '音乐片', '雨中曲', 1965, '吉恩.凯利', '28.00', 100, 100, '美国', '英语'),
(1029, '悬疑片', '盗梦空间', 2010, '莱昂纳多', '28.00', 100, 100, '美国', '英语'),
(1030, '悬疑片', '无间道', 2002, '刘德华', '28.00', 100, 100, '中国香港', '粤语'),
(1031, '悬疑片', '刺杀肯尼迪', 1991, '凯文.科斯特纳', '28.00', 100, 100, '美国', '英语'),
(1032, '悬疑片', '七宗罪', 2010, '摩根.弗里曼', '28.00', 100, 100, '美国', '英语'),
(1033, '悬疑片', '消失的爱人', 2014, '本.阿弗莱克', '28.00', 100, 100, '美国', '英语'),
(1034, '悬疑片', '记忆碎片', 2010, '盖.皮尔斯', '28.00', 100, 100, '美国', '英语'),
(1035, '悬疑片', '杀死一只知更鸟', 1962, '格利高里.派克', '28.00', 100, 100, '美国', '英语'),
(1036, '悬疑片', '王牌对王牌', 1998, '塞缪尔.杰克逊', '28.00', 100, 100, '美国', '英语'),
(1037, '悬疑片', '源代码', 2011, '杰克.吉伦哈尔', '28.00', 100, 100, '美国', '英语'),
(1038, '动画片', '千与千寻', 2001, '柊瑠美', '28.00', 100, 100, '美国', '英语'),
(1039, '动画片', '机器人总动员', 2008, '安德鲁.斯坦顿', '28.00', 100, 100, '美国', '英语'),
(1040, '动画片', '疯狂动物城', 2016, '金妮弗.古德温', '28.00', 100, 100, '美国', '英语'),
(1041, '动画片', '龙猫', 1988, '日高法子', '28.00', 100, 100, '日本', '日语'),
(1042, '动画片', '天空之城', 1986, '田中真弓', '28.00', 100, 100, '日本', '日语'),
(1043, '动画片', '哪吒闹海', 1979, '梁正辉', '28.00', 100, 100, '中国', '普通话');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`FilmID`,`CardID`),
  ADD KEY `Card_id` (`CardID`),
  ADD KEY `Ad_id` (`AdminID`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`CardID`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`FilmID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `cards`
--
ALTER TABLE `cards`
  MODIFY `CardID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- 使用表AUTO_INCREMENT `films`
--
ALTER TABLE `films`
  MODIFY `FilmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
