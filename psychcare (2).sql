-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 03:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_data`
--

CREATE TABLE `answer_data` (
  `answer_ID` int(11) NOT NULL,
  `questionnaire_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anxiety_data`
--

CREATE TABLE `anxiety_data` (
  `anxiety_id` int(11) NOT NULL,
  `anxiety_questions` varchar(500) NOT NULL,
  `anxiety_choices` enum('Everytime','Often','Sometimes','Rarely','Never') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anxiety_data`
--

INSERT INTO `anxiety_data` (`anxiety_id`, `anxiety_questions`, `anxiety_choices`) VALUES
(1, 'I feel sad?', ''),
(2, 'I feel so guilty that I can barely take it?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_data`
--

CREATE TABLE `appointment_data` (
  `schedule_ID` int(11) NOT NULL,
  `user_ID` varchar(11) NOT NULL,
  `date_available` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `contact_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_data`
--

INSERT INTO `appointment_data` (`schedule_ID`, `user_ID`, `date_available`, `time_start`, `time_end`, `contact_no`) VALUES
(1, '11111111', '2018-09-13', '05:00:00', '18:00:00', '09239438909'),
(2, '11111111', '2018-09-17', '06:30:00', '16:30:00', '09999999999'),
(3, '11111111', '2018-09-18', '10:30:00', '17:30:00', '09090909090');

-- --------------------------------------------------------

--
-- Table structure for table `depression_data`
--

CREATE TABLE `depression_data` (
  `depression_id` int(11) NOT NULL,
  `depression_question` varchar(200) NOT NULL,
  `depression_choices` enum('Everytime','Often','Sometimes','Rarely','Never') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depression_data`
--

INSERT INTO `depression_data` (`depression_id`, `depression_question`, `depression_choices`) VALUES
(1, 'Feeling down, depressed, or hopeless', ''),
(2, 'Trouble falling or staying asleep, or sleeping too much?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dream_data`
--

CREATE TABLE `dream_data` (
  `dream_id` int(11) NOT NULL,
  `dream_name` text NOT NULL,
  `dream_meaning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dream_data`
--

INSERT INTO `dream_data` (`dream_id`, `dream_name`, `dream_meaning`) VALUES
(1, 'ACCESORIES', '- to dream of accessorizing yourself suggests that you are feeling incomplete. Something is missing in your life.'),
(2, 'ACHIEVEMENT', '-  to dream of an achievement denotes that you will be greatly satisfied with the outcome of a situation or project. The bigger the achievement, the greater the satisfaction.  ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_data`
--

CREATE TABLE `employee_data` (
  `emp_ID` varchar(10) NOT NULL,
  `emp_FN` varchar(25) NOT NULL,
  `emp_LN` varchar(25) NOT NULL,
  `emp_Email` varchar(25) NOT NULL,
  `emp_Contact` varchar(15) NOT NULL,
  `emp_Privilege` int(1) NOT NULL,
  `emp_Password` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_data`
--

INSERT INTO `employee_data` (`emp_ID`, `emp_FN`, `emp_LN`, `emp_Email`, `emp_Contact`, `emp_Privilege`, `emp_Password`) VALUES
('11111111', 'Guidance', 'One', 'guidance@psychcare.com', '', 1, '36b959c370dbc9e8453c49ae7571579729d6b2e1076d0e64dafcbc22dc4d6be7ad7eb9da64c3dd2a8a7d00ef9d4b7fc8472c49ff6ebedc2505e1e8b95e89d0b6'),
('22222222', 'Teacher', 'One', 'teacher@psychcare.com', '', 2, '9479e02da1fd853a19aa819fbdd6015f8777de145c34d6f3369633c229aa2b3428e3592c53e8e7b5f1552413ecdbdedf4b8617ce2a476003164841b342c4932c'),
('Admin', 'admin', 'admin', 'admin@psychcare.com', '', 3, '9c8ab8070b0f4e6af096d7557a07dc9229349c9393a034348868d8a5f924c14011029961e974204da1463d62ea46a5ebc41d2e9675a30cdd088cb5a4aff19aee');

-- --------------------------------------------------------

--
-- Table structure for table `learner_data`
--

CREATE TABLE `learner_data` (
  `learner_id` int(11) NOT NULL,
  `learner_name` int(11) NOT NULL,
  `choices` enum('Everytime','Often','Sometimes','Rarely','Almost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_data`
--

CREATE TABLE `notification_data` (
  `notif_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `notif_message` varchar(200) NOT NULL,
  `date_notified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_data`
--

CREATE TABLE `question_data` (
  `reserve_ID` int(11) NOT NULL,
  `questionnaire_ID` int(11) NOT NULL,
  `date_Reserved` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result_data`
--

CREATE TABLE `result_data` (
  `result_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `answer_ID` int(11) NOT NULL,
  `analysis_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `student_ID` int(8) NOT NULL,
  `student_FN` varchar(25) NOT NULL,
  `student_LN` varchar(25) NOT NULL,
  `student_Email` varchar(25) NOT NULL,
  `student_Contact` varchar(15) NOT NULL,
  `student_Password` varchar(130) NOT NULL,
  `user_Privilege` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`student_ID`, `student_FN`, `student_LN`, `student_Email`, `student_Contact`, `student_Password`, `user_Privilege`) VALUES
(12101582, 'Lerrie', 'Garrido', 'garridolerrie@gmail.com', '09568635580', 'student', NULL),
(13105809, 'Darlene Fely', 'Guaca', 'darleneguaca@gmail.com', '09971525514', 'student', NULL),
(15106007, 'Louie Jay', 'Albarico', 'louie@gmail.com', '09239438909', 'student', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `class_ID` int(11) NOT NULL,
  `course_code` enum('ICT','IT','CS','IS') NOT NULL,
  `class_day` enum('MW','MWF','TTH','TThSat','SatSun','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `emp_ID` varchar(10) NOT NULL,
  `course_title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`class_ID`, `course_code`, `class_day`, `time_start`, `time_end`, `emp_ID`, `course_title`) VALUES
(1, 'ICT', 'MWF', '15:00:00', '16:30:00', '22222222', 'ICT 110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_data`
--
ALTER TABLE `answer_data`
  ADD PRIMARY KEY (`answer_ID`);

--
-- Indexes for table `anxiety_data`
--
ALTER TABLE `anxiety_data`
  ADD PRIMARY KEY (`anxiety_id`);

--
-- Indexes for table `appointment_data`
--
ALTER TABLE `appointment_data`
  ADD PRIMARY KEY (`schedule_ID`);

--
-- Indexes for table `depression_data`
--
ALTER TABLE `depression_data`
  ADD PRIMARY KEY (`depression_id`);

--
-- Indexes for table `dream_data`
--
ALTER TABLE `dream_data`
  ADD PRIMARY KEY (`dream_id`);

--
-- Indexes for table `employee_data`
--
ALTER TABLE `employee_data`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `learner_data`
--
ALTER TABLE `learner_data`
  ADD PRIMARY KEY (`learner_id`);

--
-- Indexes for table `notification_data`
--
ALTER TABLE `notification_data`
  ADD PRIMARY KEY (`notif_ID`);

--
-- Indexes for table `question_data`
--
ALTER TABLE `question_data`
  ADD PRIMARY KEY (`reserve_ID`);

--
-- Indexes for table `result_data`
--
ALTER TABLE `result_data`
  ADD PRIMARY KEY (`result_ID`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`class_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anxiety_data`
--
ALTER TABLE `anxiety_data`
  MODIFY `anxiety_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_data`
--
ALTER TABLE `appointment_data`
  MODIFY `schedule_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `depression_data`
--
ALTER TABLE `depression_data`
  MODIFY `depression_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dream_data`
--
ALTER TABLE `dream_data`
  MODIFY `dream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `learner_data`
--
ALTER TABLE `learner_data`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
