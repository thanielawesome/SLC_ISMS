-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `dept_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `course_code`, `course_name`, `dept_code`, `created_at`, `updated_at`) VALUES
(1, 'BSIT', 'BAchelor of Science in Information Technology', 'CASTE-IT', '2022-09-15 03:46:24', '2022-09-15 03:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_code` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `dept_name`, `dept_code`, `created_at`, `updated_at`) VALUES
(1, 'College of Arts & Sciences, Teacher Education and Information Technology', 'CASTE-IT', '2022-09-14 13:24:37', '2022-09-14 13:24:37'),
(2, 'College of Commerce, Secretarial and Accountancy', 'CSA', '2022-09-14 13:24:37', '2022-09-14 13:24:37'),
(3, 'College of Engineering and Architecture', 'CEA', '2022-09-14 13:25:00', '2022-09-14 13:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

CREATE TABLE `grade_level` (
  `glid` int(11) NOT NULL,
  `glno` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`glid`, `glno`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-09-15 03:16:11', '2022-09-15 03:16:11'),
(2, 2, '2022-09-15 04:22:45', '2022-09-15 04:22:45'),
(3, 8, '2022-09-15 16:45:42', '2022-09-15 16:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `individual_form`
--

CREATE TABLE `individual_form` (
  `id` int(11) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `year` varchar(25) NOT NULL,
  `grade` int(10) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `section` varchar(255) NOT NULL,
  `report_form` varchar(255) NOT NULL,
  `date_filed` date NOT NULL,
  `action` varchar(2555) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_name` varchar(255) NOT NULL,
  `glid` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sectionid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_name`, `glid`, `created_at`, `updated_at`, `sectionid`) VALUES
('Mathew', 1, '2022-09-15 03:32:34', '2022-09-15 03:32:34', 1),
('St. James', 2, '2022-09-15 04:23:23', '2022-09-15 04:23:23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `strandid` int(11) NOT NULL,
  `strand_name` varchar(255) NOT NULL,
  `strand_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`strandid`, `strand_name`, `strand_code`, `created_at`, `updated_at`) VALUES
(1, 'Science Technology Engineering Mathematics', 'STEM', '2022-09-15 04:05:27', '2022-09-15 04:05:27'),
(2, 'Science Technology Engineering Mathematics', 'HUMS', '2022-09-15 16:45:57', '2022-09-15 16:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `student_bed`
--

CREATE TABLE `student_bed` (
  `id` int(11) NOT NULL,
  `idnumber` int(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` text NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pg_contact_number` varchar(20) NOT NULL,
  `grade_level` varchar(10) NOT NULL,
  `strand` varchar(255) DEFAULT NULL,
  `section` varchar(255) NOT NULL,
  `entry_year` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_bed`
--

INSERT INTO `student_bed` (`id`, `idnumber`, `lastname`, `firstname`, `middlename`, `contact_number`, `age`, `sex`, `date_of_birth`, `guardian_name`, `address`, `pg_contact_number`, `grade_level`, `strand`, `section`, `entry_year`, `created_at`, `updated_at`) VALUES
(8, 13101448, 'Reyes', 'Nathaniel Julian', 'Canute', '09236021654', 24, 'Male', '2022-09-16', 'Randy Reyes', 'VICTORIA', '09236021654', '7', '', 'C', '2022-2023', '2022-09-11 16:53:39', '2022-09-11 16:53:39'),
(12, 13101441, 'Marquz', 'Nathaniel', 'Gorospe', '0912878966', 20, 'Female', '2019-06-30', 'Ruben Corpuz', 'SFC. LU.', '09128789661', '11', 'STEM', 'St. James', '2022-2023', '2022-09-15 17:47:38', '2022-09-15 17:47:38'),
(13, 10203040, 'Luna', 'Juan', 'Luna', '09987565784', 16, 'Male', '2022-09-02', 'Juan Luna', 'Lingsat, SFC, LU', 'Juana Luna', '8', '', 'Mathew', '2022-2023', '2022-09-18 20:17:16', '2022-09-18 20:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `student_college`
--

CREATE TABLE `student_college` (
  `id` int(11) NOT NULL,
  `idnumber` int(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pg_contact_number` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_college`
--

INSERT INTO `student_college` (`id`, `idnumber`, `lastname`, `firstname`, `middlename`, `contact_number`, `guardian_name`, `address`, `pg_contact_number`, `department`, `course`, `year`, `created_at`, `updated_at`) VALUES
(2, 22458796, 'Novencido', 'Vincent', 'Asuncion', 987548964, 'Ranvil Mae Reyes', 'Luna, La Union', 987542587, 'CSA', 'BSA', '3rd', '2022-09-10 14:45:31', '2022-09-10 14:45:31'),
(3, 4346346, 'Corpuz', 'Mary Janne', 'Gororspe', 45757475, 'Ruben Corpuz', 'VICTORIA, LU', 3658475, 'CASTE-IT', 'BSIT', '3', '2022-09-14 05:35:12', '2022-09-14 05:35:12'),
(4, 13101440, 'Salas', 'Jannete Melo', 'Marquez', 912878994, 'Carmelo Reyes', 'SFC. LU.', 912878966, 'CEA', 'Engineering', '2022-2023', '2022-09-15 17:43:44', '2022-09-15 17:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `sy_bed`
--

CREATE TABLE `sy_bed` (
  `syid` int(11) NOT NULL,
  `sy_duration` varchar(25) NOT NULL,
  `sy_semester` varchar(50) NOT NULL,
  `sy_code` int(4) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sy_bed`
--

INSERT INTO `sy_bed` (`syid`, `sy_duration`, `sy_semester`, `sy_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-2023', '', 2223, 'Active', '2022-09-10 15:48:05', '2022-09-10 15:48:05'),
(2, '2022-2023', '', 2023, 'Active', '2022-09-10 15:48:05', '2022-09-10 15:48:05'),
(3, '2022-2023', 'First Semester', 2231, 'Active', '2022-09-14 06:07:45', '2022-09-14 06:07:45'),
(4, '2022-2023', 'First Semester', 2231, 'Active', '2022-09-14 17:04:39', '2022-09-14 17:04:39'),
(5, '2024-2025', 'Second Semester', 22232, 'Inactive', '2022-09-14 19:20:52', '2022-09-14 19:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `sy_college`
--

CREATE TABLE `sy_college` (
  `syid` int(11) NOT NULL,
  `sy_duration` varchar(10) NOT NULL,
  `sy_semester` varchar(50) NOT NULL,
  `sy_code` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sy_college`
--

INSERT INTO `sy_college` (`syid`, `sy_duration`, `sy_semester`, `sy_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-2023', 'First Semester', '2223', 'Active', '2022-09-10 15:45:16', '2022-09-10 15:45:16'),
(2, '2022', 'First Semester', '2023', 'Inactive', '2022-09-10 15:45:16', '2022-09-10 15:45:16'),
(3, '2022-2023', 'First Semester', '2231', 'Active', '2022-09-14 17:06:39', '2022-09-14 17:06:39'),
(4, '2022-2023', 'Second Semester', '22232', 'Active', '2022-09-14 17:07:13', '2022-09-14 17:07:13'),
(5, '2023-2024', 'First Semester', '23241', 'Active', '2022-09-14 17:10:20', '2022-09-14 17:10:20'),
(6, '2023-2024', 'Second Semester', '23242', 'Active', '2022-09-14 17:12:29', '2022-09-14 17:12:29'),
(7, '2024-2025', 'Second Semester', '2231', 'Inactive', '2022-09-14 19:21:28', '2022-09-14 19:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `position` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `mname`, `lname`, `position`, `created_at`, `updated_at`) VALUES
(1, 'ncorpuz', 'leopard321', 'Nathaniel', 'Gorospe', 'Corpuz', 'Admin', '2022-08-22 13:57:06', '2022-08-22 13:57:06'),
(2, 'mcarmelo', 'carmelom', 'Carmelo', 'Gorospe', 'Mico', 'Student', '2022-08-22 14:48:40', '2022-08-22 14:48:40'),
(3, 'ldonnel', 'donnell', 'Donnel', 'Gorospe', 'Lattore', 'Student', '2022-08-22 14:49:33', '2022-08-22 14:49:33'),
(4, 'searlwil', 'earwils', 'Earlwil', 'Gorospe', 'Salas', 'Student', '2022-08-22 14:50:38', '2022-08-22 14:50:38'),
(5, 'mjasper', 'jasperm', 'Jasper', 'Gorospe', 'Madrid', 'Student', '2022-08-22 14:51:01', '2022-08-22 14:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE `year_level` (
  `ylid` int(11) NOT NULL,
  `ylno` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`ylid`, `ylno`, `created_at`, `updated_At`) VALUES
(1, 'First Year', '2022-09-15 03:58:26', '2022-09-15 03:58:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `grade_level`
--
ALTER TABLE `grade_level`
  ADD PRIMARY KEY (`glid`);

--
-- Indexes for table `individual_form`
--
ALTER TABLE `individual_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`strandid`);

--
-- Indexes for table `student_bed`
--
ALTER TABLE `student_bed`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `student_college`
--
ALTER TABLE `student_college`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `sy_bed`
--
ALTER TABLE `sy_bed`
  ADD PRIMARY KEY (`syid`);

--
-- Indexes for table `sy_college`
--
ALTER TABLE `sy_college`
  ADD PRIMARY KEY (`syid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
  ADD PRIMARY KEY (`ylid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grade_level`
--
ALTER TABLE `grade_level`
  MODIFY `glid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `individual_form`
--
ALTER TABLE `individual_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `strandid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_bed`
--
ALTER TABLE `student_bed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_college`
--
ALTER TABLE `student_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sy_bed`
--
ALTER TABLE `sy_bed`
  MODIFY `syid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sy_college`
--
ALTER TABLE `sy_college`
  MODIFY `syid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
  MODIFY `ylid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
