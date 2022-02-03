-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `hire` text COLLATE utf8_unicode_ci NOT NULL,
  `hirelink` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_span`, `title`, `description`, `hire`, `hirelink`) VALUES
(1, 'About Us', 'Who Am I?', '<strong>Hi Im Mohammad Mostofa</strong> On her way she met a copy. The copy warned the Little Blind Text,that where it came from it would have been rewritten a thousand times and everything that was left fromits origin would be the word \"and\" and the Little Blind Text should turn around and return to its own,<br><br>\r\nEven the all-powerful Pointing has no control about the blind texts it is an almost unorthographic lifeOne day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World', 'I am happy to know you <br>that 5+ projects done sucessfully!', '');

-- --------------------------------------------------------

--
-- Table structure for table `aside_tbl`
--

CREATE TABLE `aside_tbl` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `span_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `copyr` text COLLATE utf8_unicode_ci NOT NULL,
  `copyrlink` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink1` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink2` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink3` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink4` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink5` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aside_tbl`
--

INSERT INTO `aside_tbl` (`id`, `image`, `name`, `span_title`, `copyr`, `copyrlink`, `sociallink`, `sociallink1`, `sociallink2`, `sociallink3`, `sociallink4`, `sociallink5`) VALUES
(1, 'user8-128x128.jpg', 'mohammad mostofa', 'web developer', 'mohammad mostofa', '#', '#', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `blog_title` text COLLATE utf8_unicode_ci NOT NULL,
  `written` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `readmorelink` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`id`, `title_span`, `title`, `blog_title`, `written`, `date`, `subject`, `des`, `image`, `readmorelink`) VALUES
(1, '', 'Recent Blog', 'Renovating National Gallery', 'Written By Mostofa', 'April 14, 2018', 'Web Design', 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a largelanguage ocean.Separated they live in Bookmarksgrove right at the coast of the ', 'blog1.jpg', 'blog-readmore.php'),
(2, '', '', 'Renovating National Gallery2', 'Written By Mostofa ', 'April 14, 2018', ' Web Design', 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Separated they live in Bookmarksgrove right at the coast of the Semantics', 'blog2.jpg', 'blog-readmore2.php'),
(3, '', '', 'Renovating National Gallery3', 'Written By Mostofa', 'April 14, 2018', 'Web Design', 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Separated they live in Bookmarksgrove right at the coast of the Semantics', 'blog3.jpg', 'blog-readmore3.php');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `client_des` text COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `client_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `socialmedia` text COLLATE utf8_unicode_ci NOT NULL,
  `socialmedia1` text COLLATE utf8_unicode_ci NOT NULL,
  `socialmedia2` text COLLATE utf8_unicode_ci NOT NULL,
  `socialmedia3` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink1` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink2` text COLLATE utf8_unicode_ci NOT NULL,
  `sociallink3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `title_span`, `title`, `image`, `client_des`, `client_name`, `client_span`, `socialmedia`, `socialmedia1`, `socialmedia2`, `socialmedia3`, `sociallink`, `sociallink1`, `sociallink2`, `sociallink3`) VALUES
(1, 'client', 'Recent client', 'user8-128x128.jpg', '\"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.\"', 'Chanel Iman', 'CEO of Pinterest', 'icofont-facebook', 'icofont-email', 'icofont-twitter', 'icofont-instagram', '#', '#', '#', '#'),
(2, '', '', 'user4-128x128.jpg', '\"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.\"', 'Shima islam', 'CEO of Pinterest', 'icofont-facebook', 'icofont-email', 'icofont-twitter', 'icofont-instagram', '#', '#', '#', '#'),
(3, '', '', 'avatar04.png', '\"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.\"', 'reajul kasem', 'CEO of Pinterest', 'icofont-facebook', 'icofont-email', 'icofont-twitter', 'icofont-instagram', '#', '#', '#', '#'),
(4, '', '', 'client2.jpg', '\"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.\"', 'somapti islam', 'CEO of Pinterest', 'icofont-facebook', 'icofont-email', 'icofont-twitter', 'icofont-instagram', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title_span`, `title`, `gmail`, `location`, `phone`) VALUES
(1, 'Get in Touch', 'Contact', 'mostofa.s.cse@gmail', 'Habigonj,Sylhet', '+8801728839989');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title`, `value`, `title1`, `value1`, `title2`, `value2`, `title3`, `value3`, `image`) VALUES
(1, 'Cups of coffee', '350', 'Projects', '30', 'Clients', '20', 'Partners', '40', 'cover_bg_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_des` text COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_des1` text COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_title2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_des2` text COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_title3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `panel_group_des3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title_span`, `title`, `panel_group_title`, `panel_group_des`, `panel_group_title1`, `panel_group_des1`, `panel_group_title2`, `panel_group_des2`, `panel_group_title3`, `panel_group_des3`) VALUES
(1, 'Education', 'Education', 'Master Degree of Computer Science', 'Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and\r\n                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of\r\n                                the Semantics, a large language ocean.', 'Diploma in Information Technology', 'Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and\r\n                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of\r\n                                the Semantics, a large language ocean.', 'Diploma in Information Technology', 'Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and\r\n                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of\r\n                                the Semantics, a large language ocean.', 'High School Secondary Education', 'Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and\r\n                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of\r\n                                the Semantics, a large language ocean.');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timeline_title` text COLLATE utf8_unicode_ci NOT NULL,
  `timeline_date` text COLLATE utf8_unicode_ci NOT NULL,
  `timeline_des` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title_span`, `title`, `timeline_title`, `timeline_date`, `timeline_des`) VALUES
(1, 'Experience', 'Work Experience', 'Full Stack Developer', '2019-2020', 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how\r\n                              cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth\r\n                              chief trees but rooms think may.'),
(2, '', '', 'Front End Developer', '2019-2020', 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how\r\n                              cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth\r\n                              chief trees but rooms think may.'),
(3, '', '', 'System Analyst', '2019-2020', 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how\r\n                              cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth\r\n                              chief trees but rooms think may.'),
(4, '', '', 'Creative Designer', '2019-2020', 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how\r\n                              cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth\r\n                              chief trees but rooms think may.'),
(5, '', '', 'UI/UX Designer at Envato', '2019-2020', 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how\r\n                              cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth\r\n                              chief trees but rooms think may.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `services_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `services_des` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_span`, `title`, `image`, `services_title`, `services_des`) VALUES
(1, 'What I do?', 'Here are some of my<br> expertise', 'services1.jpeg', 'Innovative Ideas', 'Separated they live in Bookmarksgrove right at the coast of the Semantics'),
(2, '', '', 'services2.jpg', 'Software', 'Separated they live in Bookmarksgrove right at the coast of the Semantics'),
(3, '', '', 'services3.jpeg', 'Application', 'Separated they live in Bookmarksgrove right at the coast of the Semantics'),
(4, '', '', 'services4.jpeg', 'Graphic Design', 'Separated they live in Bookmarksgrove right at the coast of the Semantics'),
(5, '', '', 'services5.png', 'Software', 'Separated they live in Bookmarksgrove right at the coast of the Semantics'),
(6, '', '', 's5.png', 'Application', 'Separated they live in Bookmarksgrove right at the coast of the Semantics');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `title_span`, `title`, `description`, `skill_name`, `value`) VALUES
(1, 'my specialty', 'my skills', 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and\r\n                      devious Semikoli, but the Little Blind Text didnt listen. She packed her seven versalia, put her initial into\r\n                      the belt and made herself on the way.', 'Photoshop', '50%'),
(2, '', '', '', 'jQuery', '60%'),
(3, '', '', '', 'HTML5', '95%'),
(4, '', '', '', 'CSS3', '80%'),
(5, '', '', '', 'WordPress', '70%'),
(6, '', '', '', 'SEO', '65%');

-- --------------------------------------------------------

--
-- Table structure for table `slide_tbl`
--

CREATE TABLE `slide_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8_unicode_ci NOT NULL,
  `slogan2` text COLLATE utf8_unicode_ci NOT NULL,
  `cv` text COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_tbl`
--

INSERT INTO `slide_tbl` (`id`, `name`, `name2`, `image`, `image2`, `slogan`, `slogan2`, `cv`, `profile`) VALUES
(1, 'Hi! <br>I am Mostofa          ', 'I am a <br>Designer', 'jr-web-developer-banner.jpg', 'software-developer-vs-web-developer-1024x682.jpg', '100% html5 bootstrap templates', '100% html5 bootstrap templates', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `email`, `phone`, `password`, `image`) VALUES
(4, 'User', 'user@gmail.com', '01700000000', 'e10adc3949ba59abbe56e057f20f883e', 'avatar04.png');

-- --------------------------------------------------------

--
-- Table structure for table `work_tbl`
--

CREATE TABLE `work_tbl` (
  `id` int(11) NOT NULL,
  `title_span` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_btn` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `download` text COLLATE utf8_unicode_ci NOT NULL,
  `demo` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `readmorelink` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work_tbl`
--

INSERT INTO `work_tbl` (`id`, `title_span`, `title`, `work_btn`, `name`, `download`, `demo`, `image`, `readmorelink`) VALUES
(1, 'My Work.', 'Recent Work', 'portfolio', 'portfolio', '#', '#', 'work1.jpg', ''),
(2, '', '', 'e-comarce', 'e-comarce', '#', '#', 'work2.jpg', ''),
(3, '', '', 'schoolmanagement', 'schoolmanagement', '#', '#', 'work3.jpg', ''),
(4, '', '', 'dashboard', 'dashboard', '#', '#', 'work5.jpg', ''),
(5, '', '', 'apps', 'apps', '#', '#', 'work6.jpg', ''),
(6, '', '', 'shop', 'shop', '#', '#', 'Empty.jpg', ''),
(7, '', '', 'business', 'business', '#', '#', 'Empty.jpg', ''),
(8, '', '', 'bootstrap', 'bootstrap', '#', '#', 'Empty.jpg', ''),
(9, '', '', 'contact-form', 'contact-form', '#', '#', 'Empty.jpg', ''),
(10, '', '', 'education', 'education', '#', '#', 'Empty.jpg', ''),
(11, '', '', 'event', 'event', '#', '#', 'Empty.jpg', ''),
(12, '', '', 'hotel', 'hotel', '#', '#', 'Empty.jpg', ''),
(13, '', '', 'wordpress', 'wordpress', '#', '#', 'Empty.jpg', ''),
(14, '', '', 'login-form', 'login-form', '#', '#', 'Empty.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aside_tbl`
--
ALTER TABLE `aside_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_tbl`
--
ALTER TABLE `slide_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_tbl`
--
ALTER TABLE `work_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aside_tbl`
--
ALTER TABLE `aside_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide_tbl`
--
ALTER TABLE `slide_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_tbl`
--
ALTER TABLE `work_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
