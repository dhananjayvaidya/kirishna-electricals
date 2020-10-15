-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2020 at 11:57 AM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u705346860_krishna_electr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(11) NOT NULL DEFAULT 0,
  `mod_timestamp` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `full_name`, `email_id`, `phone_number`, `subject`, `message`, `timestamp`, `mod_timestamp`, `status`, `note`) VALUES
(1, 'ddd', 'dmdmd@mdmdm', '121122121', 'mdmdm', 'mdmmd', 1597820509, 1597820509, 1, ''),
(2, 'ddd', 'dmdmd@mdmdm', '121122121', 'mdmdm', 'mdmmd', 1597820542, 1597820542, 1, ''),
(3, 'ddd', 'dmdmd@mdmdm', '121122121', 'mdmdm', 'mdmmd', 1597861571, 1597861571, 1, ''),
(4, 'Dhananjay', 'jasonvaidya123@gmail.com', '9898989898989', 'sdfsdf', 'sdfsdfsdf', 1598010043, 1598010043, 1, ''),
(5, 'Dhananjay', 'jasonvaidya1234@kdkdk', '9239239239', 'kdkdk', 'kdkd', 1598010126, 1598010126, 1, ''),
(6, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010172, 1598010172, 1, ''),
(7, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010172, 1598010172, 1, ''),
(8, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010185, 1598010185, 1, ''),
(9, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010185, 1598010185, 1, ''),
(10, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010227, 1598010227, 1, ''),
(11, 'dhaah', 'jdjdj@jdjdj', '93923329239', 'kdkdk', 'kdkd', 1598010227, 1598010227, 1, ''),
(12, 'sjdsjksdj', 'jdjjdj@jdjdjj', '399239023', 'qjjdjd', 'lkkld', 1598010339, 1598010339, 1, ''),
(13, 'sjdsjksdj', 'jdjjdj@jdjdjj', '399239023', 'qjjdjd', 'lkkld', 1598010339, 1598010339, 1, ''),
(14, 'sjdsjksdj', 'jdjjdj@jdjdjj', '399239023', 'qjjdjd', 'lkkld', 1598010347, 1598010347, 1, ''),
(15, 'sjdsjksdj', 'jdjjdj@jdjdjj', '399239023', 'qjjdjd', 'lkkld', 1598010347, 1598010347, 1, ''),
(16, 'kamaljeet singh', 'skamaljeet882@gmail.com', '08556883919', 'repair', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598012046, 1598012046, 1, ''),
(18, 'kamaljeet singh', 'skamaljeet882@gmail.com', '6280058114', 'repair', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598013179, 1598013179, 1, ''),
(19, 'kamaljeet singh', 'skamaljeet882@gmail.com', '08556883919', '1121212212', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598013261, 1598013261, 1, ''),
(20, ' singh', 'skamaljeet882@gmail.com', '151696841634165', 'sammy', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598013587, 1598013587, 1, ''),
(21, ' singh', 'skamaljeet882@gmail.com', '151696841634165', 'sammy', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598013587, 1598013587, 1, ''),
(22, 'karan', 'karan@gmail.com', '9654687852', 'ac', 'need service', 1598028027, 1598028027, 1, ''),
(23, 'karan', 'karan@gmail.com', '9654687852', 'ac', 'need service', 1598028029, 1598028029, 1, ''),
(24, 'bushan', 'bushan@gmail.com', '3514267', '123456789', 'service', 1598028102, 1598028102, 1, ''),
(25, 'bushan', 'bushan@gmail.com', '3514267', '123456789', 'service', 1598028245, 1598028245, 1, ''),
(26, 'alex', 'alex@gmail.com', '123456789', 'service', 'delhi', 1598028364, 1598028364, 1, ''),
(27, 'alex raja', 'alex@gmail.com', '123456789', 'service', 'delhi', 1598028465, 1598028465, 1, ''),
(28, 'alex raja', 'alexraja@gmail.com', '456123', 'service', 'gurugram', 1598028564, 1598028564, 1, ''),
(29, 'test', 'test@gmail.com', '123456789', 'test service', 'gurugram', 1598029162, 1598029162, 1, ''),
(30, 'testonceagian', 'testoneagain@gmail.com', '574158269', 'test', 'error coming', 1598029850, 1598029850, 1, ''),
(31, 'kamaljeet singh', 'skamaljeet882@gmail.com', '08556883919', 'test service', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598029930, 1598029930, 1, ''),
(32, ' singh', 'skamaljeet882@gmail.com', '08556883919', 'test service', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598030002, 1598030002, 1, ''),
(33, 'kamaljeet singh', 'skamaljeet882@gmail.com', '08556883919', 'test service', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598030018, 1598030018, 1, ''),
(34, 'kamaljeet singh', 'skamaljeet882@gmail.com', '08556883919', 'repair', 'village maira defence road\r\nbehind k2 resort\r\nsujanpur distt pathankot', 1598082016, 1598082016, 1, ''),
(35, 'bbb', 'buuue@uuu', '883838388', 'ndndn', 'nndn', 1598154518, 1598154518, 1, ''),
(36, 'akkakk', 'skdkk@gmail.com', '9833465034', 'wm', 'ajhdsjhiuds', 1598634702, 1598634702, 1, ''),
(37, 'akkakk', 'skdkk@gmail.com', '9833465034', 'wm', 'ajhdsjhiuds', 1598634705, 1598634705, 1, ''),
(38, 'akkakk', 'skdkk@gmail.com', '9833465034', 'wm', 'ajhdsjhiuds', 1598634709, 1598634709, 1, ''),
(39, 'akkakk', 'skdkk@gmail.com', '9833465034', 'wm', 'ajhdsjhiuds', 1598634719, 1598634719, 1, ''),
(40, 'ddd', 'ddddd@ddd', '1233333', 'dddd', 'ddd', 1598797809, 1598797809, 1, ''),
(41, 'ddd', 'ddddd@ddd', '1233333', 'dddd', 'ddd', 1598797911, 1598797911, 1, ''),
(42, 'dsfsdfs', 'dfsf@dfsfd', '12111121212', 'sdfsdf', 'sdfsdf', 1598798786, 1598798786, 1, ''),
(43, 'dd', 'ddd@ddd', 'd3232323', 'sdsd', 'sssd', 1598798915, 1598798915, 1, ''),
(44, 'dd', 'ddd@ddd', 'd3232323', 'sdsd', 'sssd', 1598799056, 1598799056, 1, ''),
(45, 'Dhananjay vaidya', 'jasonvaidya123@gmail.com', '9594309488', 'Subject', 'Something am just testing', 1598799401, 1598799401, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `set_name` varchar(255) NOT NULL,
  `set_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `set_name`, `set_value`) VALUES
(1, 'COMPANY_NAME', 'Krishna Electricals'),
(2, 'COMPANY_LOGO', 'uploads/logo/1601831061-logo.png'),
(3, 'COMPANY_PRIMARY_PHONE_NUMBER', '7710998826'),
(4, 'COMPANY_WHATSAPP_NUMBER', ''),
(5, 'COMPANY_FULL_ADDRESS', 'Shop no 7, Siddhivinayak Jyot, Lane no. 2, Nr. Model English School Pandurangwadi, Dombivli East, Maharashtra 421201'),
(6, 'COMPANY_SHORT_ADDRESS', 'Pandurangwadi, Dombivli East, Maharashtra 421201'),
(7, 'COMPANY_EMAIL_ADDRESS', 'info@krishna-electricals.in'),
(8, 'COMPANY_FACEBOOK_LINK', 'd'),
(9, 'COMPANY_INSTAGRAM_LINK', 'd'),
(10, 'COMPANY_YOUTUBE_LINK', 'dd'),
(11, 'COMPANY_TWITTER_LINK', 'dkd'),
(12, 'COMPANY_LINKEDIN_LINK', 'd'),
(13, 'COMPANY_GST_NUMBER', '27AANFK3883A2ZF'),
(14, 'WEBSITE_THEME', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `timestamp` int(11) NOT NULL DEFAULT 0,
  `mod_timestamp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_id`, `password`, `role`, `account_status`, `timestamp`, `mod_timestamp`) VALUES
(1, 'Admin', 'Admin', 'admin@demo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'SUADMIN', 1, 1596127264, 1596127264);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `set_name` (`set_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
