-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 09:32 AM
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
-- Database: `learning management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `acad_id` int(11) NOT NULL,
  `current_cgpa` float NOT NULL,
  `inter_marks_out_of_1100` int(11) NOT NULL,
  `matric_marks_out_1100` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`acad_id`, `current_cgpa`, `inter_marks_out_of_1100`, `matric_marks_out_1100`) VALUES
(92, 3.4, 974, 975),
(99, 4.34, 344, 344);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Aid` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Aid`, `Email`) VALUES
('Mahmood Yousaf', 123, 'mahmoodyousaf975974@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Log_id` int(11) NOT NULL,
  `Aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Log_id`, `Aid`) VALUES
(12, 123);

-- --------------------------------------------------------

--
-- Table structure for table `admin_personal_info`
--

CREATE TABLE `admin_personal_info` (
  `Aid` int(11) NOT NULL,
  `Personal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alloted_cources_to_teachers`
--

CREATE TABLE `alloted_cources_to_teachers` (
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `ass_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assignments_details_for_students`
--

CREATE TABLE `assignments_details_for_students` (
  `level_id` int(11) NOT NULL,
  `ass_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `attend_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_id`, `Name`) VALUES
(0, 'Digital Logic Design'),
(555, 'mja nhi pta ayar'),
(4884, 'Mahmood Yousaf Logic design course');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `Name`) VALUES
(7, 'cs'),
(12, 'Electrical Engineering'),
(14, 'Agri School'),
(5555, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `name`) VALUES
(7, 'Hi'),
(12, '2nd Year'),
(13, '3rd Yeaer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Log_id` int(11) NOT NULL,
  `login_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Log_id`, `login_password`) VALUES
(2, 'namal123'),
(12, 'pakistan123');

-- --------------------------------------------------------

--
-- Table structure for table `manage_courses`
--

CREATE TABLE `manage_courses` (
  `Cid` int(11) NOT NULL,
  `Aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_courses`
--

INSERT INTO `manage_courses` (`Cid`, `Aid`) VALUES
(0, 123),
(555, 123),
(4884, 123);

-- --------------------------------------------------------

--
-- Table structure for table `manage_departments`
--

CREATE TABLE `manage_departments` (
  `Aid` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_levels`
--

CREATE TABLE `manage_levels` (
  `Aid` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_status`
--

CREATE TABLE `manage_status` (
  `Aid` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_students`
--

CREATE TABLE `manage_students` (
  `Aid` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `acad_id1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_students`
--

INSERT INTO `manage_students` (`Aid`, `std_id`, `level_id`, `department_id`, `pid`, `acad_id1`) VALUES
(123, 91, 7, 7, 74, 92),
(123, 4954, 7, 7, 90, 99);

-- --------------------------------------------------------

--
-- Table structure for table `manage_teachers`
--

CREATE TABLE `manage_teachers` (
  `Aid` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_teachers`
--

INSERT INTO `manage_teachers` (`Aid`, `teacher_id`, `pid`) VALUES
(123, 898, 33);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Personal_id` int(11) NOT NULL,
  `age` int(4) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Personal_id`, `age`, `date_of_birth`, `Gender`) VALUES
(33, 33, '2021-02-02', 'male'),
(74, 20, '2019-04-04', 'Male'),
(90, 34, '2022-03-31', 'mALE');

-- --------------------------------------------------------

--
-- Table structure for table `registered_courses_students`
--

CREATE TABLE `registered_courses_students` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `registered_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `student_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `Level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Req_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `grades_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_requests_by_admin`
--

CREATE TABLE `review_requests_by_admin` (
  `Aid` int(11) NOT NULL,
  `Req_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Std_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Std_id`, `Name`, `Email`) VALUES
(0, 'mAHMO', ''),
(1, 'Mahmood Yousaf', ''),
(4, 'Mahmood', 'mahmoodyousaf975974@gmail.com'),
(8, 'khan alone', 'mahf@fd.com'),
(33, 'Khan', 'dfdj$dfd.co@cl.com'),
(45, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(90, 'Mahmood Yousaf', 'mahmoodyousaf78678@gmail.com'),
(91, 'Mahmood Yousaf', 'mahmoodyousaf975974@gmail.com'),
(143, 'Mahmood Yousaf', 'yousaf2018@namal.edu.pk\r\n'),
(383, 'Manzoor Namal', 'manzof@a.ocm'),
(392, 'Hameed Khan', 'hamdded@efc.com'),
(934, 'Mahmood', 'fjdjf@jjc.com'),
(4243, 'Yousaf Khan', 'khanmahmood648@gma.com'),
(4532, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(4555, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(4954, 'fdjfj1', 'dfdl@djfjf.com'),
(8838, 'Mahmoodf', 'djfjdf@fdf.com'),
(45323, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(49543, 'fdjfj1', 'dfdl@djfjf.com'),
(93499, 'Mahmood', 'fjdjf@jjc.com'),
(94393, 'Mahmood ', 'jfdjf.@dfj.com'),
(453232, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(4532325, 'Hamdan Ali Baloch', 'jdfj@fdol.com'),
(9349944, 'Mahmood', 'fjdjf@jjc.com'),
(934994433, 'Mahmood', 'fjdjf@jjc.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_academic_details`
--

CREATE TABLE `student_academic_details` (
  `Student_id` int(11) NOT NULL,
  `acad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `teacher_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `Attend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Log_id` int(11) NOT NULL,
  `Std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_info`
--

CREATE TABLE `student_personal_info` (
  `std_id` int(11) NOT NULL,
  `Personal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_results`
--

CREATE TABLE `student_results` (
  `student_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submit_request_by_student`
--

CREATE TABLE `submit_request_by_student` (
  `student_id` int(11) NOT NULL,
  `Req_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submit_request_by_teacher`
--

CREATE TABLE `submit_request_by_teacher` (
  `Req_id` int(11) NOT NULL,
  `Teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Tid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Tid`, `Name`, `Email`) VALUES
(3, 'Mahmood ', 'jdfj@fdjj.com'),
(90, 'Dr Malik Jahan', 'jahan2018@namal.edu.pk'),
(98, 'Dr Malik jahan3', 'jahna2@30.com'),
(134, 'Dr Malik Jahan', 'malik@gmail.com'),
(333, 'Mahmoodsds ', 'mahmoodyousaf975974@gmail.codds'),
(897, 'Mahmood', 'mahmoodyousaf975974@gmail.com'),
(898, 'Mahmood ', 'fjjd@jfjf.com'),
(949, 'Mahmood', 'mahmoodyousaf975974@gmail.com'),
(49848, 'Dr Adnan Iqbal', 'iqbal2018@gmail.com'),
(84832, 'Mahmood Yousf', 'jdfjdf@dfi');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendence`
--

CREATE TABLE `teacher_attendence` (
  `Teacher_id` int(11) NOT NULL,
  `Attend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `Log_id` int(11) NOT NULL,
  `Tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_personal_info`
--

CREATE TABLE `teacher_personal_info` (
  `teacher_id` int(11) NOT NULL,
  `Personal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `update_result_by_teachers`
--

CREATE TABLE `update_result_by_teachers` (
  `teacher_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `upload_assignment_by_teacher`
--

CREATE TABLE `upload_assignment_by_teacher` (
  `teacher_id` int(11) NOT NULL,
  `ass_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`acad_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Aid`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Indexes for table `admin_personal_info`
--
ALTER TABLE `admin_personal_info`
  ADD PRIMARY KEY (`Aid`),
  ADD KEY `Personal_id` (`Personal_id`);

--
-- Indexes for table `alloted_cources_to_teachers`
--
ALTER TABLE `alloted_cources_to_teachers`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assignments_details_for_students`
--
ALTER TABLE `assignments_details_for_students`
  ADD PRIMARY KEY (`ass_id`),
  ADD KEY `assignments_details_for_students_ibfk_2` (`level_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Log_id`),
  ADD UNIQUE KEY `login_password` (`login_password`);

--
-- Indexes for table `manage_courses`
--
ALTER TABLE `manage_courses`
  ADD PRIMARY KEY (`Cid`),
  ADD KEY `Aid` (`Aid`);

--
-- Indexes for table `manage_departments`
--
ALTER TABLE `manage_departments`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `Aid` (`Aid`);

--
-- Indexes for table `manage_levels`
--
ALTER TABLE `manage_levels`
  ADD PRIMARY KEY (`level_id`),
  ADD KEY `Aid` (`Aid`);

--
-- Indexes for table `manage_status`
--
ALTER TABLE `manage_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `Aid` (`Aid`);

--
-- Indexes for table `manage_students`
--
ALTER TABLE `manage_students`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `Aid` (`Aid`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `acad_id1` (`acad_id1`);

--
-- Indexes for table `manage_teachers`
--
ALTER TABLE `manage_teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `Aid` (`Aid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`Personal_id`);

--
-- Indexes for table `registered_courses_students`
--
ALTER TABLE `registered_courses_students`
  ADD PRIMARY KEY (`registered_course_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `Level_id` (`Level_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Req_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `review_requests_by_admin`
--
ALTER TABLE `review_requests_by_admin`
  ADD PRIMARY KEY (`Req_id`),
  ADD KEY `Aid` (`Aid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Std_id`);

--
-- Indexes for table `student_academic_details`
--
ALTER TABLE `student_academic_details`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `acad_id` (`acad_id`);

--
-- Indexes for table `student_attendence`
--
ALTER TABLE `student_attendence`
  ADD PRIMARY KEY (`Attend_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Std_id`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Indexes for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `Personal_id` (`Personal_id`);

--
-- Indexes for table `student_results`
--
ALTER TABLE `student_results`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `result_id` (`result_id`);

--
-- Indexes for table `submit_request_by_student`
--
ALTER TABLE `submit_request_by_student`
  ADD PRIMARY KEY (`Req_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `submit_request_by_teacher`
--
ALTER TABLE `submit_request_by_teacher`
  ADD PRIMARY KEY (`Req_id`),
  ADD KEY `Teacher_id` (`Teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD PRIMARY KEY (`Attend_id`),
  ADD KEY `Teacher_id` (`Teacher_id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`Log_id`),
  ADD KEY `Tid` (`Tid`);

--
-- Indexes for table `teacher_personal_info`
--
ALTER TABLE `teacher_personal_info`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `Personal_id` (`Personal_id`);

--
-- Indexes for table `update_result_by_teachers`
--
ALTER TABLE `update_result_by_teachers`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `upload_assignment_by_teacher`
--
ALTER TABLE `upload_assignment_by_teacher`
  ADD PRIMARY KEY (`ass_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `acad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `Personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD CONSTRAINT `admin_login_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_login_ibfk_2` FOREIGN KEY (`Log_id`) REFERENCES `login` (`Log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_personal_info`
--
ALTER TABLE `admin_personal_info`
  ADD CONSTRAINT `admin_personal_info_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_personal_info_ibfk_2` FOREIGN KEY (`Personal_id`) REFERENCES `personal_info` (`Personal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alloted_cources_to_teachers`
--
ALTER TABLE `alloted_cources_to_teachers`
  ADD CONSTRAINT `alloted_cources_to_teachers_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alloted_cources_to_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignments_details_for_students`
--
ALTER TABLE `assignments_details_for_students`
  ADD CONSTRAINT `assignments_details_for_students_ibfk_1` FOREIGN KEY (`ass_id`) REFERENCES `assignments` (`ass_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignments_details_for_students_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignments_details_for_students_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_courses`
--
ALTER TABLE `manage_courses`
  ADD CONSTRAINT `manage_courses_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_courses_ibfk_2` FOREIGN KEY (`Cid`) REFERENCES `courses` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_departments`
--
ALTER TABLE `manage_departments`
  ADD CONSTRAINT `manage_departments_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_departments_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_levels`
--
ALTER TABLE `manage_levels`
  ADD CONSTRAINT `manage_levels_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_levels_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_status`
--
ALTER TABLE `manage_status`
  ADD CONSTRAINT `manage_status_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_status_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_students`
--
ALTER TABLE `manage_students`
  ADD CONSTRAINT `manage_students_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_students_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_students_ibfk_4` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_students_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_students_ibfk_6` FOREIGN KEY (`pid`) REFERENCES `personal_info` (`Personal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_teachers`
--
ALTER TABLE `manage_teachers`
  ADD CONSTRAINT `manage_teachers_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_teachers_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `personal_info` (`Personal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registered_courses_students`
--
ALTER TABLE `registered_courses_students`
  ADD CONSTRAINT `registered_courses_students_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_courses_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD CONSTRAINT `registered_students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_students_ibfk_2` FOREIGN KEY (`Level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_students_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_students_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_requests_by_admin`
--
ALTER TABLE `review_requests_by_admin`
  ADD CONSTRAINT `review_requests_by_admin_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_requests_by_admin_ibfk_2` FOREIGN KEY (`Req_id`) REFERENCES `request` (`Req_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_academic_details`
--
ALTER TABLE `student_academic_details`
  ADD CONSTRAINT `student_academic_details_ibfk_2` FOREIGN KEY (`Student_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_attendence`
--
ALTER TABLE `student_attendence`
  ADD CONSTRAINT `student_attendence_ibfk_1` FOREIGN KEY (`Attend_id`) REFERENCES `attendence` (`attend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attendence_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attendence_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_login`
--
ALTER TABLE `student_login`
  ADD CONSTRAINT `student_login_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `login` (`Log_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_login_ibfk_2` FOREIGN KEY (`Std_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
  ADD CONSTRAINT `student_personal_info_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_personal_info_ibfk_3` FOREIGN KEY (`Personal_id`) REFERENCES `personal_info` (`Personal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_results`
--
ALTER TABLE `student_results`
  ADD CONSTRAINT `student_results_ibfk_1` FOREIGN KEY (`result_id`) REFERENCES `result` (`result_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_results_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submit_request_by_student`
--
ALTER TABLE `submit_request_by_student`
  ADD CONSTRAINT `submit_request_by_student_ibfk_1` FOREIGN KEY (`Req_id`) REFERENCES `request` (`Req_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submit_request_by_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`Std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submit_request_by_teacher`
--
ALTER TABLE `submit_request_by_teacher`
  ADD CONSTRAINT `submit_request_by_teacher_ibfk_1` FOREIGN KEY (`Req_id`) REFERENCES `request` (`Req_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submit_request_by_teacher_ibfk_2` FOREIGN KEY (`Teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD CONSTRAINT `teacher_attendence_ibfk_1` FOREIGN KEY (`Attend_id`) REFERENCES `attendence` (`attend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_attendence_ibfk_3` FOREIGN KEY (`Teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD CONSTRAINT `teacher_login_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `login` (`Log_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_login_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_personal_info`
--
ALTER TABLE `teacher_personal_info`
  ADD CONSTRAINT `teacher_personal_info_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_personal_info_ibfk_3` FOREIGN KEY (`Personal_id`) REFERENCES `personal_info` (`Personal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `update_result_by_teachers`
--
ALTER TABLE `update_result_by_teachers`
  ADD CONSTRAINT `update_result_by_teachers_ibfk_1` FOREIGN KEY (`result_id`) REFERENCES `result` (`result_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `update_result_by_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload_assignment_by_teacher`
--
ALTER TABLE `upload_assignment_by_teacher`
  ADD CONSTRAINT `upload_assignment_by_teacher_ibfk_1` FOREIGN KEY (`ass_id`) REFERENCES `assignments` (`ass_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_assignment_by_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
