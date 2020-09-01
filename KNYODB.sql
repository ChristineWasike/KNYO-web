-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 10:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knyo`
--
CREATE DATABASE IF NOT EXISTS `knyo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `knyo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_telephone` int(50) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_avator` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_email`, `u_telephone`, `u_pass`, `u_avator`) VALUES
(1, 'Julius Okello', 'juliusbassist@students.uonbi.ac.ke', 708371675, '$2y$10$g74GsGxcpKX6qjNDOjfFF.yZzUiZsbQnGOF9/NoGEtbcwxzY3XHpq', 0x494d472d32303139313230322d5741303032342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `apply_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

DROP TABLE IF EXISTS `bio`;
CREATE TABLE `bio` (
  `id` int(10) NOT NULL,
  `b_about` text NOT NULL,
  `b_mission` text NOT NULL,
  `b_logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `b_about`, `b_mission`, `b_logo`) VALUES
(1, 'The KNYO is a project of the Art of Music Foundation, initially in partnership with the GoDown Arts Center and the Ministry of Heritage. It has continued under the Art of Music Foundation with support from many partners who have offered various help in cash and kind over the years.', 'The Art of Music\'s mission is to promote the performance and appreciation of art music in Kenya. The foundation aims to raise awareness, provide information, and encourage excellence, in order to increase the opportunities for those pursuing careers in art music. It also aims to make art music more accessible to the Kenyan public.', 0x6b6e796f5f6c6f676f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `b_author_name` varchar(30) NOT NULL,
  `b_date` date NOT NULL,
  `b_avator` blob NOT NULL,
  `b_title` varchar(50) NOT NULL,
  `b_blog` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventbookings`
--

DROP TABLE IF EXISTS `eventbookings`;
CREATE TABLE `eventbookings` (
  `id` int(10) NOT NULL,
  `ea_audience_address` varchar(255) NOT NULL,
  `ea_audience_email` varchar(255) NOT NULL,
  `ea_audience_f_name` varchar(255) NOT NULL,
  `ea_audience_phone` varchar(255) NOT NULL,
  `ea_event_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `e_name` varchar(30) NOT NULL,
  `e_date` date NOT NULL,
  `e_time` varchar(30) NOT NULL,
  `e_venue` varchar(255) NOT NULL,
  `e_short_des` varchar(255) NOT NULL,
  `e_description` varchar(255) NOT NULL,
  `e_avator` blob NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_name`, `e_date`, `e_time`, `e_venue`, `e_short_des`, `e_description`, `e_avator`, `id`) VALUES
('KNYO @ 10 Virtual Experience', '2020-08-27', 'Three Weeks', 'KNYO Online Platforms', 'This is a commemoration of 10 years of making music in KNYO. Join us in our online platforms as we celebrate this period', 'This is a commemoration of 10 years of making music in KNYO. Join us in our online platforms as we celebrate this period. We mark this special occasion because it coincides with the celebration of 10 years since the promulgation of Kenya\'s new constitutio', 0x494d472d32303230303832372d5741303030332e6a7067, 1),
('KNYO @ 10 Virtual Experience', '2020-08-28', 'Three Weeks', 'KNYO Online Platforms', 'This is a commemoration of 10 years of making music in KNYO. Join us in our online platforms as we celebrate this period', 'This is a commemoration of 10 years of making music in KNYO. Join us in our online platforms as we celebrate this period. We mark this special occasion because it coincides with the celebration of 10 years since the promulgation of Kenya\'s new constitutio', 0x494d472d32303230303832372d5741303030312e6a7067, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `f_quiz` varchar(1000) NOT NULL,
  `f_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `f_quiz`, `f_answer`) VALUES
(1, 'What qualifications do I need so as to audition for KNYO?', 'You need to be aged between 14 and 25, with good playing skills. One is required to audition for one musical instrument but knowledge in other instruments is very welcome.'),
(2, 'Do you need to have a personal instrument to be able to play for KNYO?', 'Not really. KNYO provides instruments for its players during residentials and performances. You are however welcome to come with your own. ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `g_photo` blob NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_photo`, `id`) VALUES
(0x31333632373936345f3236323136383033373439343131365f313234343331313035315f6e2e6a7067, 1),
(0x31323634303334365f31303230373932323435313335393932375f383333353931343130353130383136363736305f6f2e6a7067, 5),
(0x313438373831392e6a7067, 6),
(0x31333632383039385f313536333334333935373239343639355f3538313030363631375f6e2e6a7067, 7),
(0x31333633363136385f3133353430383139363838383734335f3735323736353137345f6e2e6a7067, 8),
(0x31333634393134305f313830323232373932363636373932375f323039363438313431385f6e2e6a7067, 9),
(0x31333634393334395f3633393334333837363233323938365f313035393038313536345f6e2e6a7067, 10);

-- --------------------------------------------------------

--
-- Table structure for table `itemarquire`
--

DROP TABLE IF EXISTS `itemarquire`;
CREATE TABLE `itemarquire` (
  `id` int(11) NOT NULL,
  `i_item_name` varchar(100) NOT NULL,
  `i_item_price` varchar(50) NOT NULL,
  `i_buyer_name` varchar(100) NOT NULL,
  `i_buyer_telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `m_sender_name` varchar(30) NOT NULL,
  `m_sender_email` varchar(100) NOT NULL,
  `m_subject` varchar(1000) NOT NULL,
  `m_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `st_item_name` varchar(30) NOT NULL,
  `st_item_price` int(10) NOT NULL,
  `st_item_description` varchar(255) NOT NULL,
  `st_item_avator` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `sub_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

DROP TABLE IF EXISTS `supporters`;
CREATE TABLE `supporters` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_avator` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supporters`
--

INSERT INTO `supporters` (`id`, `s_name`, `s_avator`) VALUES
(1, 'Peponi Secondary School', 0x32323333383839325f313630383138363233353839383235325f363338313331383939313338343030363631315f6f2e6a7067),
(2, 'Hillcrest Secondary School', 0x32313237323530355f313431313532333739353536383935385f323238343337343731333632303238313332345f6e2e6a7067),
(3, 'St. Andrews School, Turi', 0x3534373830325f3431303432393734393030323331365f31313535343636345f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_portfolio` varchar(30) NOT NULL,
  `t_category` varchar(1000) NOT NULL,
  `t_avator` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `g_video` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`g_video`, `id`) VALUES
('VID-20200827-WA0005.mp4', 1),
('VID-20200825-WA0009.mp4', 2),
('VID-20200822-WA0001.mp4', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventbookings`
--
ALTER TABLE `eventbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemarquire`
--
ALTER TABLE `itemarquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporters`
--
ALTER TABLE `supporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventbookings`
--
ALTER TABLE `eventbookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `itemarquire`
--
ALTER TABLE `itemarquire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supporters`
--
ALTER TABLE `supporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
