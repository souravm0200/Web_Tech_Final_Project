-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 12:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `id`, `course_name`, `marks`) VALUES
(106, 32, 'Bangla', 70),
(107, 32, 'Math', 70);

-- --------------------------------------------------------

--
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `id` int(10) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`id`, `dept`) VALUES
(21, 'CSE'),
(25, 'BBA'),
(26, 'EEE'),
(29, 'CSE'),
(32, 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `courseName` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `links` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`courseName`, `day`, `date`, `links`) VALUES
('Bangla', 'Sunday [ 10:00-11:00]', '2022-05-01', 'https://meet.google.com/vzz-wnxq-gfc'),
('English', 'Sunday [12:00-1:00]', '2022-05-01', 'https://meet.google.com/xhf-mbbz-afi'),
('Genarel Mathematics', 'Monday [10:00-11:00] ', '2022-05-02', 'https://meet.google.com/cza-hzvr-zgk'),
('Physics', 'Monday [10:00-11:00]', '2022-05-02', 'https://meet.google.com/mxy-ochr-riv');

-- --------------------------------------------------------

--
-- Table structure for table `notice_archive`
--

CREATE TABLE `notice_archive` (
  `notice_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `notice` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_archive`
--

INSERT INTO `notice_archive` (`notice_id`, `title`, `id`, `date`, `notice`) VALUES
(1, 'This is first notice', 2, '2022-04-05', 'nothing to see here.. this a test notice.. have a great day'),
(2, 'Possible downtime due to PORTAL server maintenance', 2, '2022-04-02', 'Due to planned AIUB server maintenance, we are shutting down our systems and hence, UMS and all websites will go offline starting from 16th, March, 5 PM till 19th, March, 10 PM.\n\n \n\nWe sincerely apologize for the inconveniences that might have caused and will try our level best to bring our systems back online at the shortest possible time'),
(4, 'Error do eos ex null', 2, '2022-04-08', 'Ex et asperiores ut '),
(6, 'Deleniti nisi et nes', 2, '2022-04-08', 'At accusamus et iste'),
(7, 'Aut pariatur Sed te', 2, '2022-04-08', 'Ipsum sit fugiat a a'),
(8, 'Ea mollit tempora ve', 2, '2022-04-08', 'Maiores optio ut vo');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `amount` decimal(10,0) NOT NULL DEFAULT 0,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `status`, `amount`, `date`) VALUES
(21, 'active', '8000', '2022-04-02'),
(25, 'active', '6988', '2022-04-04'),
(26, 'inactive', '100', '2022-04-01'),
(29, 'active', '2144', '2022-04-06'),
(32, 'active', '9000', '2022-03-03'),
(21, 'active', '6900', '2022-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `salary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, '64500'),
(2, '963300'),
(13, '498535'),
(18, '601107'),
(20, '234244'),
(21, '639875'),
(22, '32000'),
(23, '472402'),
(24, '501115'),
(25, '470802'),
(26, '332573'),
(114, '791085'),
(115, '525317');

-- --------------------------------------------------------

--
-- Table structure for table `student_group`
--

CREATE TABLE `student_group` (
  `grp_id` int(50) NOT NULL,
  `id` int(10) NOT NULL,
  `grp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studnet_financial`
--

CREATE TABLE `studnet_financial` (
  `id` int(11) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `due` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studnet_financial`
--

INSERT INTO `studnet_financial` (`id`, `balance`, `due`) VALUES
(32, '10000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `examName` varchar(50) NOT NULL,
  `examLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`examName`, `examLink`) VALUES
('History', 'https://docs.google.com/forms/d/1moZ4VEdTddpRabPfGTfJ_Kv1gI5JVuOtTttAPfO1VcI/edit?usp=forms_home&ths=true'),
('History', 'https://docs.google.com/forms/d/1moZ4VEdTddpRabPfGTfJ_Kv1gI5JVuOtTttAPfO1VcI/edit?usp=forms_home&ths=true');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `id` int(10) NOT NULL,
  `userType` varchar(10) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT '../assets/default/profile_picture.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`id`, `userType`, `username`, `password`, `f_name`, `l_name`, `dob`, `gender`, `phone`, `email`, `address`, `profile_picture`) VALUES
(1, 'admin', 'blackops', '12345', 'Azran', 'Hossain', '2000-03-17', 'Male', '123546', 'mr69751@gmail.com', 'Dhaka BD', '../assets/usersPicture/1.jpg'),
(2, 'stuff', 'rin', '12345', 'Aiza', 'Azrin', '2008-03-06', 'Female', '+1 (464) 838-69', 'boryxipedy@mailinator.com', 'Quae blanditiis nequ', '../assets/usersPicture/2.jpg'),
(13, 'stuff', 'pywiny', 'Pa$$w0rd!', 'Oscar Cole', 'Echo Ellis', '1971-07-24', 'Other', '+1 (255) 913-70', 'geve@mailinator.com', 'N/A', '../assets/default/profile_picture.jpg'),
(18, 'admin', 'xuquv', 'Pa$$w0rd!', 'Griffin Harvey', 'Brock Miranda', '1984-11-12', 'Male', '+1 (597) 387-63', 'wohicy@mailinator.com', 'Enim velit cupidata', '../assets/default/profile_picture.jpg'),
(20, 'faculty', 'dijyr', 'Pa$$w0rd!', 'Eaton Berg', 'Scarlett Murphy', '1984-10-09', 'Other', '+1 (657) 832-42', 'vyhy@mailinator.com', 'Ut ab doloremque eaq', '../assets/default/profile_picture.jpg'),
(21, 'student', 'gygat', 'Pa$$w0rd!', 'Fulton Gillespie', 'Lael Marks', '1983-09-17', 'Female', '+1 (319) 372-82', 'email@mail.com', 'Tenetur laboris itaq', '../assets/default/profile_picture.jpg'),
(22, 'stuff', 'qygilezij', 'Pa$$w0rd!', 'Pandora ', 'Amethyst ', '2012-05-18', 'Female', '+1 (974) 812-85', 'hysasuz@mailinator.com', 'Corporis est quae c', '../assets/default/profile_picture.jpg'),
(23, 'stuff', 'pevosek', 'Pa$$w0rd!', 'Ciara', 'Keefe', '1984-08-21', 'Male', '+1 (923) 712-49', 'qoca@mailinator.com', 'Ullam qui excepturi ', '../assets/usersPicture/pevoseJJ.jpg'),
(24, 'faculty', 'hymevazyk', 'Pa$$w0rd!', 'Keegan Crosby', 'Rowan Briggs', '2011-09-13', 'Male', '+1 (127) 846-11', 'dedarugyna@mailinator.com', 'Facere quae nostrud ', '../assets/default/profile_picture.jpg'),
(25, 'student', 'butuwumypi', 'Pa$$w0rd!', 'Michelle Wallace', 'Raya Pope', '1982-02-03', 'Female', '+1 (569) 682-92', 'xiloleme@mailinator.com', 'Ab facilis dolore et', '../assets/default/profile_picture.jpg'),
(26, 'student', 'tebukuga', 'Pa$$w0rd!', 'Lila Franklin', 'Serina Guy', '1990-03-25', 'Other', '+1 (231) 234-18', 'debohasyp@mailinator.com', 'Temporibus duis quia', '../assets/default/profile_picture.jpg'),
(29, 'student', 'vumuh', 'Pa$$w0rd!', 'Mcintosh', 'Scarlet ', '1995-10-16', 'Male', '+1 (671) 991-38', 'qarikyvor@mailinator.com', 'Aspernatur adipisci ', '../assets/default/profile_picture.jpg'),
(32, 'student', 'SouravBhai', '123', 'Sourav  ', '  Mondal', '0000-00-00', 'Male', '  01712345679', 'souravm0200@gmail.com', 'Munshigonj ', '../assets/usersPicture/xonobylo.jpg'),
(114, 'faculty', 'fozygebag', 'Pa$$w0rd!', 'Lester Odonnell', 'Shellie Avila', '2007-07-08', 'Male', '+1 (126) 842-21', 'bimym@mailinator.com', 'Velit et mollit dolo', '../assets/default/profile_picture.jpg'),
(115, 'faculty', 'rygewysyx', 'Pa$$w0rd!', 'Kelly Mullins', 'Imani Hays', '1991-07-22', 'Other', '+1 (107) 183-97', 'dymexitevy@mailinator.com', 'Culpa voluptatem R', '../assets/default/profile_picture.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `courses_fk0` (`id`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notice_archive`
--
ALTER TABLE `notice_archive`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `notice_archive_fk0` (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD KEY `payment_history_fk0` (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD KEY `salary_fk0` (`id`);

--
-- Indexes for table `student_group`
--
ALTER TABLE `student_group`
  ADD PRIMARY KEY (`grp_id`),
  ADD KEY `student_group_fk0` (`id`);

--
-- Indexes for table `studnet_financial`
--
ALTER TABLE `studnet_financial`
  ADD KEY `studnet_financial_fk0` (`id`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `notice_archive`
--
ALTER TABLE `notice_archive`
  MODIFY `notice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_group`
--
ALTER TABLE `student_group`
  MODIFY `grp_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`);

--
-- Constraints for table `depertment`
--
ALTER TABLE `depertment`
  ADD CONSTRAINT `dept_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notice_archive`
--
ALTER TABLE `notice_archive`
  ADD CONSTRAINT `notice_archive_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`);

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_group`
--
ALTER TABLE `student_group`
  ADD CONSTRAINT `student_group_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`);

--
-- Constraints for table `studnet_financial`
--
ALTER TABLE `studnet_financial`
  ADD CONSTRAINT `studnet_financial_fk0` FOREIGN KEY (`id`) REFERENCES `usersinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
