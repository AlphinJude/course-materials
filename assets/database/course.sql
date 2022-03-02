-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 10:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `academic_year` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `co_curricular` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `award` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `c_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`academic_year`, `name`, `co_curricular`, `event_name`, `venue`, `award`, `a_date`, `certificate`, `c_path`) VALUES
('2021-2022', 'sneka', 'abc', 'xyz', 'aaa', 'bbb', '0000-00-00', '2020-12-01', 'qqqq'),
('2021-2022', 'rashmi', 'abc', 'xyz', 'aaa', 'bbb', '0000-00-00', '2020-12-01', 'qqqq'),
('2021-2022', 'alphin', 'abc', 'xyz', 'aaa', 'bbb', '0000-00-00', '2020-12-01', 'qqqq'),
('2021-2022', 'dhanush', 'abc', 'xyz', 'aaa', 'bbb', '0000-00-00', '2020-12-01', 'qqqq'),
('2020-2021', 'sruthi', 'abc', 'xyz', 'aaa', 'bbb', '0000-00-00', '2020-12-01', 'qqqq');

-- --------------------------------------------------------

--
-- Table structure for table `guest_lecture`
--

CREATE TABLE `guest_lecture` (
  `role` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `resource_person` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `attachments` text NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_lecture`
--

INSERT INTO `guest_lecture` (`role`, `year`, `topic`, `date`, `duration`, `resource_person`, `venue`, `attachments`, `path`) VALUES
('industry', '2019-2020', 'kjgkj', '2022-12-30', '96', 'lkjg', 'lgk', 'library_management.sql', '../papers/library_management.sql'),
('alumini', '2021-2022', 'bjjlh', '2022-01-01', ';gu', 'fyu', 'jlbk', 'library_management.sql', '../papers/library_management.sql');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `regulation_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`regulation_id`, `subject_id`, `file_name`) VALUES
('R2020', '20CS301', 'IT  02 - III sem UG (1).pdf'),
('R2020', '20CS302', 'IT  02 - III sem UG (1).pdf'),
('R2020', '20CS303', 'PART B Inference theory (6) (6) (1).pdf'),
('R2020', '20CS304', 'PART B Inference theory (6) (6) (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `online_certification`
--

CREATE TABLE `online_certification` (
  `academic_year` varchar(255) NOT NULL,
  `o_role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `marks` float NOT NULL,
  `date` date NOT NULL,
  `o_certificate` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_certification`
--

INSERT INTO `online_certification` (`academic_year`, `o_role`, `name`, `course_name`, `venue`, `duration`, `marks`, `date`, `o_certificate`, `path`) VALUES
('2021-2022', 'student', 'Sneka Thiagarajan', 'python', 'coursera', '4 weeks', 23, '2021-12-14', '14marks.pdf', '../papers/14marks.pdf'),
('2021-2022', 'faculty', 'kishore', 'gklh', 'klg', 'lkjg', 4, '2022-01-01', 'library_management.sql', '../papers/library_management.sql');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `academic_year` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal_name` varchar(255) NOT NULL,
  `journal_type` varchar(255) NOT NULL,
  `journal_url` varchar(255) NOT NULL,
  `impact_factor` varchar(255) NOT NULL,
  `doi` varchar(255) NOT NULL,
  `issn` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `volumn` int(11) NOT NULL,
  `page_no` int(11) NOT NULL,
  `month_pub` varchar(255) NOT NULL,
  `attach_file` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`academic_year`, `author_name`, `title`, `journal_name`, `journal_type`, `journal_url`, `impact_factor`, `doi`, `issn`, `issue`, `volumn`, `page_no`, `month_pub`, `attach_file`, `path`) VALUES
('2023-2024', 'ganesh', 'lkfu', 'lkuf', 'fklu', 'fklu', 'lfku', 'lfku', 'fuk', 'lkfu', 1, 2, '2022-02', 'library_management.sql', '../papers/library_management.sql'),
('2021-2022', 'Arvind', 'jkl', 'lkh', 'lkhj', 'khlk', 'lh', 'lkh', 'hjkl', 'lkhj', 4, 4, '2023-02', 'library_management.sql', '../papers/library_management.sql');

-- --------------------------------------------------------

--
-- Table structure for table `regulation`
--

CREATE TABLE `regulation` (
  `regulation_id` varchar(255) NOT NULL,
  `regulation_year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regulation`
--

INSERT INTO `regulation` (`regulation_id`, `regulation_year`) VALUES
('R2017', 2017),
('R2019', 2019),
('R2020', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `regulation_subject`
--

CREATE TABLE `regulation_subject` (
  `regulation_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `sem` int(20) NOT NULL,
  `status_code` int(20) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regulation_subject`
--

INSERT INTO `regulation_subject` (`regulation_id`, `subject_id`, `sem`, `status_code`, `path`) VALUES
('R2020', '20CS201', 2, 0, NULL),
('R2020', '20CS211', 2, 0, NULL),
('R2020', '20CS212', 2, 0, NULL),
('R2020', '20CS301', 3, 2, 'assets/downloads/IT  02 - III sem UG (1).pdf'),
('R2020', '20CS302', 3, 2, 'assets/downloads/IT  02 - III sem UG (1).pdf'),
('R2020', '20CS303', 3, 1, 'assets/downloads/PART B Inference theory (6) (6) (1).pdf'),
('R2020', '20CS304', 3, 1, 'assets/downloads/PART B Inference theory (6) (6) (1).pdf'),
('R2020', '20CS311', 3, 0, NULL),
('R2020', '20CS312', 3, 0, NULL),
('R2020', '20CS313', 3, 0, NULL),
('R2020', '20CS314', 3, 0, NULL),
('R2020', '20CS315', 3, 0, NULL),
('R2020', '20EC203', 2, 0, NULL),
('R2020', '20EC213', 2, 0, NULL),
('R2020', '20EC307', 3, 0, NULL),
('R2020', '20EC315', 3, 0, NULL),
('R2020', '20EN201', 2, 0, NULL),
('R2020', '20IT201', 2, 0, NULL),
('R2020', '20MA205', 2, 0, NULL),
('R2020', '20MA305', 3, 0, NULL),
('R2020', '20PH201', 2, 0, NULL),
('R2020', '20PH211', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_info`
--

CREATE TABLE `status_info` (
  `status_code` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_info`
--

INSERT INTO `status_info` (`status_code`, `status`) VALUES
(0, 'Not yet uploaded'),
(1, 'Uploaded'),
(2, 'Modified');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
('20CS201', 'Programming In C & Data Structure'),
('20CS211', 'Engineering Exploration - II'),
('20CS212', 'Programming In C & Data Structure Lab'),
('20CS301', 'Operating Systems'),
('20CS302', 'Advanced  Data Structure and Algorithms'),
('20CS303', 'Database Management Systems'),
('20CS304', 'Object Oriented Programming'),
('20CS311', 'Engineering Exploration-III'),
('20CS312', 'Operating System Laboratory'),
('20CS313', 'Object Oriented Programming Laboratory'),
('20CS314', 'Advanced  Data Structure Laboratory'),
('20CS315', 'Database Management Systems Laboratory'),
('20EC203', 'Digital Principles And System Design'),
('20EC213', 'Digital Principles And System Design Lab'),
('20EC307', 'Microprocessor and Microcontroller'),
('20EC315', 'Microprocessor and Microcontroller Laboratory'),
('20EN201', 'Applied English Skills'),
('20IT201', 'Computer Architecture'),
('20MA205', 'Advanced Calculus And Set Algebra'),
('20MA305', 'Discrete Mathematics'),
('20PH201', 'Applied Physics For Information Science'),
('20PH211', 'Applied Physics For Information Science Lab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`regulation_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `regulation_id` (`regulation_id`);

--
-- Indexes for table `regulation`
--
ALTER TABLE `regulation`
  ADD PRIMARY KEY (`regulation_id`);

--
-- Indexes for table `regulation_subject`
--
ALTER TABLE `regulation_subject`
  ADD PRIMARY KEY (`regulation_id`,`subject_id`,`sem`),
  ADD KEY `regulation_id` (`regulation_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `status_code` (`status_code`);

--
-- Indexes for table `status_info`
--
ALTER TABLE `status_info`
  ADD PRIMARY KEY (`status_code`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `main`
--
ALTER TABLE `main`
  ADD CONSTRAINT `main_ibfk_1` FOREIGN KEY (`regulation_id`) REFERENCES `regulation` (`regulation_id`),
  ADD CONSTRAINT `main_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `main_ibfk_3` FOREIGN KEY (`regulation_id`) REFERENCES `regulation` (`regulation_id`),
  ADD CONSTRAINT `regulation_id` FOREIGN KEY (`regulation_id`) REFERENCES `regulation` (`regulation_id`),
  ADD CONSTRAINT `subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `regulation_subject`
--
ALTER TABLE `regulation_subject`
  ADD CONSTRAINT `fk_regulation_id` FOREIGN KEY (`regulation_id`) REFERENCES `regulation` (`regulation_id`),
  ADD CONSTRAINT `fk_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `regulation_subject_ibfk_1` FOREIGN KEY (`status_code`) REFERENCES `status_info` (`status_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
