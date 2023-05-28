-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `namee`, `location`, `facebook`, `website`, `gmail`) VALUES
(1, 'qq', 'qq', 'qq', 'qq', 'qq@saa'),
(2, 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd!qds@ds'),
(3, 'sa', 'asas', 'ass', 'asdasd', 'sadasd@sd'),
(4, 'njkh', 'jj', 'njkn', 'j', 'njk@rt'),
(5, 'LCKDFQ', 'NSAFDNJ', 'LNDSJAN', 'JNJDSN', 'dnsajfn@gmail'),
(6, '', '', '', '', ''),
(7, 'gdf', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '4444444', '543', '', '', ''),
(11, 'fdsffds', 'fdsfs', 'fdsfsd', 'fsdfsd', 'qasddase@gsaq'),
(12, 'qusai', 'aljo', 'daa', 'djskdjwh', 'gasyafg@gmail'),
(13, 'lugin', 'SDFSD', 'FSDFSD', 'DSA', 'dasdas@das'),
(14, 'qusai', 'ew', 'eweew', 'ewew', 'hash@gma'),
(15, 'adckljJ', 'JDKSB', 'JDHSKJAHB', 'JLHDJSHJ`', 'DJB@GMSDK');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `ID` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `linkedin_profile` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`ID`, `namee`, `linkedin_profile`, `github`, `resume`, `website`, `gmail`, `image`) VALUES
(3, 'FSDF', '', '', '', '', 'SDFSDFSD@FSD', ''),
(25, 'vcxbvcb', 'vbcxbvc', 'vbcvbc', 'vcbvcb', 'vbcvcb', 'saDASD@FDASF', ''),
(26, 'sdad', 'sasad', 'sad', 'asdasd', 'sadasd', 'sdasad@ds', ''),
(27, 'saa', 'asas', 'ass', 'asas', 'ass', 'asas@ds', ''),
(28, 'qusai', 'qwq', 'qq', 'qqqq', 'qqqq', 'qq@qw', 'image'),
(29, 'xcvcv', 'cxzc', 'dsdf', 'j', 'jj', 'jccx@gm', 'image'),
(30, 'cda', 'csds', 'kkl', 'dsds', 'dsds', 'SDFSDFSD@FSD', ''),
(31, 'cda', 'csds', 'kkl', 'dsds', 'dsds', 'SDFSDFSD@FSD', ''),
(32, 'CDKSVJ', 'KCDSODK', 'LKDFSKLFJ', 'DWFKNFKODS', 'KMDSAKL', 'NFJDSJ@GDHFBDSJ', ''),
(33, 'QUASISIAS', 'DSQK', 'DJIWSH', 'JFISJD', 'JFDH', 'FSHAUHF@GMA.COM', ''),
(34, 'ghd', 'fddfs', 'dfsfds', 'fddfs', 'dfds', 'qasddase@gsaq', ''),
(35, 'dssd', '<br />\r\n<b>Warning</b>:  Undefined variable $location in <b>C:xampphtdocsAR-business-dcard-mainanl-card-freelancer.php</b> on line <b>40</b><br />\r\n', '<br />\r\n<b>Warning</b>:  Undefined variable $facebook in <b>C:xampphtdocsAR-business-dcard-mainanl-card-freelancer.php</b> on line <b>41</b><br />\r\n', 'dsdsds', 'dsdsds', 'DSADAS@DSAD', ''),
(36, 'qqqqq', '<br />\n<b>Warning</b>:  Undefined variable $location in <b>C:xampphtdocsAR-business-dcard-mainanl-card-freelancer.php</b> on line <b>40</b><br />\n', '<br />\r\n<b>Warning</b>:  Undefined variable $facebook in <b>C:xampphtdocsAR-business-dcard-mainanl-card-freelancer.php</b> on line <b>41</b><br />\r\n', 'qqqqqqqqqq', 'qqqqqqqqqq', 'qqqqqqqqqqq@q', ''),
(37, '', '<br />\r\n<b>Warning</b>:  Undefined variable $linkedin_profile in <b>C:xampphtdocsAR-business-dcard-mainanl-card-freelancer.php</b> on line <b>40</b><br />\r\n', '', '', '', '', ''),
(38, 'das', 'sadas', 'dsada', 'sadsa', 'saasd', 'dasdasd@sdad', ''),
(39, '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', ''),
(42, 'fadi', '', '', '', 'faifd', 'DSADAS@DSAD', '');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `ID` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`ID`, `namee`, `location`, `facebook`, `website`, `video`, `gmail`) VALUES
(1, 'dd', 'SDFSD', 'FSDFSD', 'sdfsdaaf', 'FSDFSDFSD', 'dasdas@das'),
(2, 'dssd', 'sdsd', 'sdsd', 'sd', 'ssd', 'dasdasd@sdad'),
(3, 'fd', '', '', 'FSDFSD', '', 'ASDASD@FDASF'),
(4, 'jj', 'j', 'jjk', 'jk', 'jk', 'jkjk2JJ@j'),
(5, 'NBVC', 'GFDF', 'GFDFEW', 'RGFD1', 'GF', 'GDSSE@WGH');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `linkedin_profile` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `namee`, `linkedin_profile`, `github`, `resume`, `gmail`) VALUES
(1, 'gfd', 'fdg', 'fdg', 'fg', 'fdgfdg@edw'),
(2, 'ds', 'sdsd', 'sdsd', 'dssd', 'ds@dsd'),
(3, 'lugin', 'asdasd', 'asdas', 'dsfsd', 'ASDASD@FDASF'),
(4, 'MTS', 'DLCFADLFK', 'DKMSQFKLQ', 'DQKEFM', 'DSDFMA@EDSA'),
(5, 'qusai', '', 'dncjsan', '', 'qusai@gmail.com'),
(6, 'samksal', '', 'jlhjlh', '', 'qusai@rfqghja'),
(7, 'samksal', '', 'jlhjlh', '', 'qusai@rfqghja'),
(8, 'samksal', '', 'jlhjlh', '', 'qusai@rfqghja'),
(9, 'dccacs', '', 'jnjnjn', '', 'sda@wd'),
(10, 'dca', '', 'njnjnj', '', 'jj@dfa'),
(11, 'qusai', '', 'qusai', 'qusai', 'qusai@gail'),
(12, 'qusai', 'fadi', 'qudai', 'fadi', 'quai@wsx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
