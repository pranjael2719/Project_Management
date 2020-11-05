-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 05:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `category`) VALUES
('18BCE0495', '12345', 'Student'),
('18BCE2506', '12345', 'Student'),
('18BCE2509', '12345', 'Student'),
('18BCE2320', '12345', 'Student'),
('18BCE0873', '12345', 'Student'),
('18BCE2354', '12345', 'Student'),
('18BCE0741', '12345', 'Student'),
('18BCE2507', '12345', 'Student'),
('18BCE0408', '12345', 'Student'),
('18BCE2081', '12345', 'Student'),
('18BCE2094', '12345', 'Student'),
('18BCE0091', '12345', 'Student'),
('18BCE0671', '12345', 'Student'),
('18BCE0213', '12345', 'Student'),
('18BCE2409', '12345', 'Student'),
('18BCE0691', '12345', 'Student'),
('18BCE0501', '12345', 'Student'),
('18BCE0276', '12345', 'Student'),
('18BCE0956', '12345', 'Student'),
('18BCE0770', '12345', 'Student'),
('18BCE0249', '12345', 'Student'),
('18BCE0668', '12345', 'Student'),
('18BCE0883', '12345', 'Student'),
('18BCE0450', '12345', 'Student'),
('18BCE0083', '12345', 'Student'),
('18BCE0977', '12345', 'Student'),
('18BCE0048', '12345', 'Student'),
('18BCE0162', '12345', 'Student'),
('18BCE0171', '12345', 'Student'),
('18BCE0279', '12345', 'Student'),
('18BCE0586', '12345', 'Student'),
('18BCE0269', '12345', 'Student'),
('18BCE2281', '12345', 'Student'),
('18BCE2325', '12345', 'Student'),
('18BCE0990', '12345', 'Student'),
('18BCE2516', '12345', 'Student'),
('18BCE0136', '12345', 'Student'),
('18BCE0328', '12345', 'Student'),
('18BCE0654', '12345', 'Student'),
('18BCE2446', '12345', 'Student'),
('18BCE0181', '12345', 'Student'),
('18BCE0234', '12345', 'Student'),
('18BCE2510', '12345', 'Student'),
('18BCE0044', '12345', 'Student'),
('18BCE0582', '12345', 'Student'),
('18BCE0646', '12345', 'Student'),
('18BCE0823', '12345', 'Student'),
('18BCE0824', '12345', 'Student'),
('18BCE0435', '12345', 'Student'),
('18BCE0908', '12345', 'Student'),
('18BCE2106', '12345', 'Student'),
('18BCE0071', '12345', 'Student'),
('18BCE0985', '12345', 'Student'),
('18BCE2318', '12345', 'Student'),
('18BCE0551', '12345', 'Student'),
('18BCE0585', '12345', 'Student'),
('18BCE2052', '12345', 'Student'),
('18BCE2514', '12345', 'Student'),
('18BCE0555', '12345', 'Student'),
('18BCE2186', '12345', 'Student'),
('18BCE2243', '12345', 'Student'),
('18BCE0172', '12345', 'Student'),
('18BCE0294', '12345', 'Student'),
('18BCE0529', '12345', 'Student'),
('18BCE0731', '12345', 'Student'),
('18BCE0165', '12345', 'Student'),
('18BCE2342', '12345', 'Student'),
('18BCE0139', '12345', 'Student'),
('18BCE0154', '12345', 'Student'),
('18BCE0250', '12345', 'Student'),
('18BCE0270', '12345', 'Student'),
('18BCE0305', '12345', 'Student'),
('18BCE0467', '12345', 'Student'),
('18BCE0567', '12345', 'Student'),
('18BCE0579', '12345', 'Student'),
('18BCE2511', '12345', 'Student'),
('18BCE0141', '12345', 'Student'),
('18BCE0323', '12345', 'Student'),
('18BCE0458', '12345', 'Student'),
('18BCE0769', '12345', 'Student'),
('18BCE0534', '12345', 'Student'),
('18BCE2513', '12345', 'Student'),
('18BCE2527', '12345', 'Student'),
('18BCE0017', '12345', 'Student'),
('18BCE2293', '12345', 'Student'),
('18BCE0018', '12345', 'Student'),
('18BCE0145', '12345', 'Student'),
('18BCE0816', '12345', 'Student'),
('18BCE2370', '12345', 'Student'),
('18BCE0584', '12345', 'Student'),
('18BCE0700', '12345', 'Student'),
('18BCE2395', '12345', 'Student'),
('18BCE2517', '12345', 'Student'),
('18BCE2518', '12345', 'Student'),
('18BCE0110', '12345', 'Student'),
('18BCE0159', '12345', 'Student'),
('18BCE0265', '12345', 'Student'),
('18BCE0894', '12345', 'Student'),
('18BCE2386', '12345', 'Student'),
('18BCE2508', '12345', 'Student'),
('18BCE0064', '12345', 'Student'),
('18BCE0483', '12345', 'Student'),
('18BCE0570', '12345', 'Student'),
('18BCE0089', '12345', 'Student'),
('18BCE0296', '12345', 'Student'),
('18BCE0511', '12345', 'Student'),
('18BCE2398', '12345', 'Student'),
('18BCE0295', '12345', 'Student'),
('18BCE2240', '12345', 'Student'),
('18BCE2375', '12345', 'Student'),
('18BCE2512', '12345', 'Student'),
('18BCE0107', '12345', 'Student'),
('18BCE0167', '12345', 'Student'),
('18BCE0457', '12345', 'Student'),
('18BCE0575', '12345', 'Student'),
('18BCE0767', '12345', 'Student'),
('18BCE0850', '12345', 'Student'),
('18BCE0221', '12345', 'Student'),
('18BCE0431', '12345', 'Student'),
('18BCE0538', '12345', 'Student'),
('18BCE0760', '12345', 'Student'),
('18BCE0310', '12345', 'Student'),
('18BCE0926', '12345', 'Student'),
('18BCE0600', '12345', 'Student'),
('18BCE0054', '12345', 'Student'),
('18BCE0379', '12345', 'Student'),
('18BCE0506', '12345', 'Student'),
('18BCE2228', '12345', 'Student'),
('18BCE2086', '12345', 'Student'),
('18BCE2121', '12345', 'Student'),
('18BCE2476', '12345', 'Student'),
('18BCE0711', '12345', 'Student'),
('18BCE0845', '12345', 'Student'),
('18BCE0073', '12345', 'Student'),
('18BCE2164', '12345', 'Student'),
('18BCE0078', '12345', 'Student'),
('18BCE0209', '12345', 'Student'),
('18BCE0429', '12345', 'Student'),
('18BCE0569', '12345', 'Student'),
('18BCE0709', '12345', 'Student'),
('18BCE0825', '12345', 'Student'),
('18BCE0870', '12345', 'Student'),
('18BCE0011', '12345', 'Student'),
('18BCE0121', '12345', 'Student'),
('18BCE0140', '12345', 'Student'),
('18BCE0170', '12345', 'Student'),
('18BCE0233', '12345', 'Student'),
('18BCE0285', '12345', 'Student'),
('18BCE0736', '12345', 'Student'),
('18BCE0950', '12345', 'Student'),
('16414', '67890', 'Teacher'),
('15776', '67890', 'Teacher'),
('10696', '67890', 'Teacher'),
('14055', '67890', 'Teacher'),
('10781', '67890', 'Teacher'),
('10946', '67890', 'Teacher'),
('11989', '67890', 'Teacher'),
('15919', '67890', 'Teacher'),
('15257', '67890', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `Sr_No` varchar(100) NOT NULL,
  `Emp_ID` varchar(100) NOT NULL,
  `Subject_Name` varchar(100) NOT NULL,
  `Slot` varchar(100) NOT NULL,
  `Max_Students` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`Sr_No`, `Emp_ID`, `Subject_Name`, `Slot`, `Max_Students`) VALUES
('1', '16414', 'Blockchain and Cryptocurrency Technologies', 'C1+TC1', NULL),
('2', '16414', 'Blockchain and Cryptocurrency Technologies', 'C2+TC2', NULL),
('3', '16414', 'Java Programming', 'G2+TG2', NULL),
('4', '15776', 'Virtualization', 'F1+TF1', '4'),
('5', '15776', 'Text, Web and Social Media Analytic', 'B2+TB2', NULL),
('6', '15776', 'Internet and Web Programming', 'B1+TB2', '3'),
('7', '10696', 'Technical Answers for Real World Problems (TARP)', 'TG1', NULL),
('8', '10696', 'Cyber Security', 'C2+TC2', NULL),
('9', '10696', 'Machine Learning Techniques', 'B2', NULL),
('10', '14055', 'Artificial Intelligence', 'G1+TG1', NULL),
('11', '14055', 'Artificial Intelligence', 'G2+TG2', NULL),
('12', '10781', 'Technical Answers for Real World Problems (TARP)', 'TG1', NULL),
('13', '10781', 'Blockchain and Cryptocurrency Technologies', 'C1+TC1', NULL),
('14', '10781', 'Network Security', 'B1+TB1', NULL),
('15', '10946', 'Software Engineering', 'A1', NULL),
('16', '10946', 'Human Computer Interaction', 'A2', NULL),
('17', '11989', 'Natural Language Processing', 'A2+TA2', NULL),
('18', '11989', 'Deep Learning and its Applications', 'E2', NULL),
('19', '15919', 'Applications of Differential and Difference Equations', 'B1+TB1', NULL),
('20', '15919', 'Applied Numerical Methods', 'A2+TA2+TAA2+V3', NULL),
('21', '15919', 'Applied Numerical Methods', 'A1+TA1+TAA1+V1', NULL),
('22', '15257', 'Web Mining', 'G1+TG1', NULL),
('23', '15257', 'Web Mining', 'G2+TG2', NULL),
('24', '15257', 'Human Computer Interaction', 'A1+TA1', NULL),
('25', '15257', 'Human Computer Interaction', 'A2+TA2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_code`
--

CREATE TABLE `project_code` (
  `Sr_No` varchar(100) NOT NULL,
  `Roll_No` varchar(100) NOT NULL,
  `Group_Code` varchar(100) DEFAULT NULL,
  `Team_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_code`
--

INSERT INTO `project_code` (`Sr_No`, `Roll_No`, `Group_Code`, `Team_Name`) VALUES
('4', '18BCE0495', 'MTQwMTA2Mw==', 'PROJECT_MANAGEMENT'),
('4', '18BCE2506', 'MTQwMTA2Mw==', 'PROJECT_MANAGEMENT'),
('4', '18BCE2509', 'MTQwMTA2Mw==', 'PROJECT_MANAGEMENT'),
('4', '18BCE2320', 'MTQwMTA2Mw==', 'PROJECT_MANAGEMENT'),
('4', '18BCE0873', 'NULL', 'NULL'),
('4', '18BCE2354', 'NULL', 'NULL'),
('4', '18BCE0741', 'NULL', 'NULL'),
('4', '18BCE2507', 'NULL', 'NULL'),
('4', '18BCE0408', 'NzE3NjE0OQ==', 'DUMBLES'),
('4', '18BCE2081', 'NULL', 'NULL'),
('4', '18BCE2094', 'NULL', 'NULL'),
('4', '18BCE0091', 'NULL', 'NULL'),
('4', '18BCE0671', 'NULL', 'NULL'),
('4', '18BCE0213', 'NULL', 'NULL'),
('4', '18BCE2409', 'NULL', 'NULL'),
('4', '18BCE0691', 'NzE3NjE0OQ==', 'DUMBLES'),
('4', '18BCE0501', 'NULL', 'NULL'),
('4', '18BCE0276', 'NULL', 'NULL'),
('4', '18BCE0956', 'NzE3NjE0OQ==', 'DUMBLES'),
('4', '18BCE0770', 'NULL', 'NULL'),
('4', '18BCE0249', 'NULL', 'NULL'),
('4', '18BCE0668', 'NULL', 'NULL'),
('4', '18BCE0883', 'NULL', 'NULL'),
('4', '18BCE0450', 'NULL', 'NULL'),
('4', '18BCE0083', 'NULL', 'NULL'),
('4', '18BCE0977', 'NULL', 'NULL'),
('4', '18BCE0048', 'NULL', 'NULL'),
('4', '18BCE0162', 'NULL', 'NULL'),
('4', '18BCE0171', 'NULL', 'NULL'),
('4', '18BCE0279', 'NULL', 'NULL'),
('4', '18BCE0760', 'NULL', 'NULL'),
('4', '18BCE0310', 'NULL', 'NULL'),
('4', '18BCE0926', 'NULL', 'NULL'),
('4', '18BCE0600', 'NULL', 'NULL'),
('4', '18BCE0054', 'NULL', 'NULL'),
('4', '18BCE0379', 'NULL', 'NULL'),
('4', '18BCE0506', 'NULL', 'NULL'),
('4', '18BCE2228', 'NULL', 'NULL'),
('4', '18BCE2086', 'NULL', 'NULL'),
('4', '18BCE2121', 'NULL', 'NULL'),
('4', '18BCE2476', 'NULL', 'NULL'),
('4', '18BCE0711', 'NULL', 'NULL'),
('4', '18BCE0845', 'NULL', 'NULL'),
('4', '18BCE0073', 'NULL', 'NULL'),
('4', '18BCE2164', 'NULL', 'NULL'),
('4', '18BCE0078', 'NULL', 'NULL'),
('4', '18BCE0209', 'NULL', 'NULL'),
('4', '18BCE0429', 'NULL', 'NULL'),
('4', '18BCE0569', 'NULL', 'NULL'),
('4', '18BCE0709', 'NULL', 'NULL'),
('4', '18BCE0825', 'NULL', 'NULL'),
('4', '18BCE0870', 'NULL', 'NULL'),
('4', '18BCE0011', 'NULL', 'NULL'),
('4', '18BCE0121', 'NULL', 'NULL'),
('4', '18BCE0140', 'NULL', 'NULL'),
('4', '18BCE0170', 'NULL', 'NULL'),
('4', '18BCE0233', 'NULL', 'NULL'),
('4', '18BCE0285', 'NULL', 'NULL'),
('4', '18BCE0736', 'NULL', 'NULL'),
('4', '18BCE0950', 'NULL', 'NULL'),
('5', '18BCE0586', 'NULL', 'NULL'),
('5', '18BCE0269', 'NULL', 'NULL'),
('5', '18BCE2281', 'NULL', 'NULL'),
('5', '18BCE2325', 'NULL', 'NULL'),
('5', '18BCE0990', 'NULL', 'NULL'),
('5', '18BCE2516', 'NULL', 'NULL'),
('5', '18BCE0136', 'NULL', 'NULL'),
('5', '18BCE0328', 'NULL', 'NULL'),
('5', '18BCE0654', 'NULL', 'NULL'),
('5', '18BCE2446', 'NULL', 'NULL'),
('5', '18BCE0181', 'NULL', 'NULL'),
('5', '18BCE0234', 'NULL', 'NULL'),
('5', '18BCE2510', 'NULL', 'NULL'),
('5', '18BCE0044', 'NULL', 'NULL'),
('5', '18BCE0582', 'NULL', 'NULL'),
('5', '18BCE0646', 'NULL', 'NULL'),
('5', '18BCE0823', 'NULL', 'NULL'),
('5', '18BCE0824', 'NULL', 'NULL'),
('5', '18BCE0435', 'NULL', 'NULL'),
('5', '18BCE0908', 'NULL', 'NULL'),
('5', '18BCE2106', 'NULL', 'NULL'),
('5', '18BCE0071', 'NULL', 'NULL'),
('5', '18BCE0985', 'NULL', 'NULL'),
('5', '18BCE2318', 'NULL', 'NULL'),
('5', '18BCE0551', 'NULL', 'NULL'),
('5', '18BCE0585', 'NULL', 'NULL'),
('5', '18BCE2052', 'NULL', 'NULL'),
('5', '18BCE2514', 'NULL', 'NULL'),
('5', '18BCE0555', 'NULL', 'NULL'),
('5', '18BCE2186', 'NULL', 'NULL'),
('5', '18BCE2243', 'NULL', 'NULL'),
('5', '18BCE0172', 'NULL', 'NULL'),
('5', '18BCE0294', 'NULL', 'NULL'),
('5', '18BCE0529', 'NULL', 'NULL'),
('5', '18BCE0731', 'NULL', 'NULL'),
('5', '18BCE0165', 'NULL', 'NULL'),
('5', '18BCE2342', 'NULL', 'NULL'),
('5', '18BCE0139', 'NULL', 'NULL'),
('5', '18BCE0154', 'NULL', 'NULL'),
('5', '18BCE0250', 'NULL', 'NULL'),
('5', '18BCE0270', 'NULL', 'NULL'),
('5', '18BCE0305', 'NULL', 'NULL'),
('5', '18BCE0467', 'NULL', 'NULL'),
('5', '18BCE0567', 'NULL', 'NULL'),
('5', '18BCE0579', 'NULL', 'NULL'),
('5', '18BCE2511', 'NULL', 'NULL'),
('5', '18BCE0141', 'NULL', 'NULL'),
('5', '18BCE0323', 'NULL', 'NULL'),
('5', '18BCE0458', 'NULL', 'NULL'),
('5', '18BCE0769', 'NULL', 'NULL'),
('5', '18BCE0534', 'NULL', 'NULL'),
('5', '18BCE2513', 'NULL', 'NULL'),
('5', '18BCE2527', 'NULL', 'NULL'),
('5', '18BCE0017', 'NULL', 'NULL'),
('5', '18BCE2293', 'NULL', 'NULL'),
('5', '18BCE0018', 'NULL', 'NULL'),
('5', '18BCE0145', 'NULL', 'NULL'),
('5', '18BCE0816', 'NULL', 'NULL'),
('5', '18BCE2370', 'NULL', 'NULL'),
('5', '18BCE0584', 'NULL', 'NULL'),
('6', '18BCE0495', 'NULL', 'NULL'),
('6', '18BCE2506', 'NULL', 'NULL'),
('6', '18BCE2509', 'NULL', 'NULL'),
('6', '18BCE2320', 'NULL', 'NULL'),
('6', '18BCE0873', 'NULL', 'NULL'),
('6', '18BCE2354', 'NULL', 'NULL'),
('6', '18BCE0741', 'NULL', 'NULL'),
('6', '18BCE2507', 'NULL', 'NULL'),
('6', '18BCE0408', 'NULL', 'NULL'),
('6', '18BCE2081', 'NULL', 'NULL'),
('6', '18BCE2094', 'NULL', 'NULL'),
('6', '18BCE0091', 'NULL', 'NULL'),
('6', '18BCE0249', 'NULL', 'NULL'),
('6', '18BCE0668', 'NULL', 'NULL'),
('6', '18BCE0883', 'NULL', 'NULL'),
('6', '18BCE0450', 'NULL', 'NULL'),
('6', '18BCE0083', 'NULL', 'NULL'),
('6', '18BCE0977', 'OTgzOTExNw==', 'ABCD'),
('6', '18BCE0048', 'NULL', 'NULL'),
('6', '18BCE0162', 'NULL', 'NULL'),
('6', '18BCE0171', 'NULL', 'NULL'),
('6', '18BCE0279', 'NULL', 'NULL'),
('6', '18BCE0586', 'NULL', 'NULL'),
('6', '18BCE0269', 'NULL', 'NULL'),
('6', '18BCE0234', 'NULL', 'NULL'),
('6', '18BCE2510', 'NULL', 'NULL'),
('6', '18BCE0044', 'NULL', 'NULL'),
('6', '18BCE0582', 'NULL', 'NULL'),
('6', '18BCE0646', 'NULL', 'NULL'),
('6', '18BCE0823', 'NULL', 'NULL'),
('6', '18BCE0824', 'NULL', 'NULL'),
('6', '18BCE0435', 'NULL', 'NULL'),
('6', '18BCE0908', 'NULL', 'NULL'),
('6', '18BCE2106', 'NULL', 'NULL'),
('6', '18BCE0172', 'NULL', 'NULL'),
('6', '18BCE0294', 'NULL', 'NULL'),
('6', '18BCE0529', 'NULL', 'NULL'),
('6', '18BCE0731', 'NULL', 'NULL'),
('6', '18BCE0165', 'NULL', 'NULL'),
('6', '18BCE2342', 'NULL', 'NULL'),
('6', '18BCE0139', 'NULL', 'NULL'),
('6', '18BCE0154', 'NULL', 'NULL'),
('6', '18BCE0250', 'NULL', 'NULL'),
('6', '18BCE0270', 'NULL', 'NULL'),
('6', '18BCE0305', 'NULL', 'NULL'),
('6', '18BCE0467', 'NULL', 'NULL'),
('6', '18BCE0567', 'NULL', 'NULL'),
('6', '18BCE0579', 'NULL', 'NULL'),
('6', '18BCE0078', 'NULL', 'NULL'),
('6', '18BCE0209', 'NULL', 'NULL'),
('6', '18BCE0429', 'NULL', 'NULL'),
('6', '18BCE0569', 'NULL', 'NULL'),
('6', '18BCE0709', 'NULL', 'NULL'),
('6', '18BCE0825', 'NULL', 'NULL'),
('6', '18BCE0870', 'NULL', 'NULL'),
('6', '18BCE0011', 'NULL', 'NULL'),
('6', '18BCE0121', 'NULL', 'NULL'),
('6', '18BCE0140', 'NULL', 'NULL'),
('6', '18BCE0170', 'NULL', 'NULL'),
('6', '18BCE0233', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll_No` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_No`, `Name`) VALUES
('18BCE0495', 'Pranjael Bagaria'),
('18BCE2506', 'Riddhi Gupta'),
('18BCE2509', 'Abhishek Kumar Singh'),
('18BCE2320', 'AKASH BHAKAT'),
('18BCE0873', 'Rachit Trilok'),
('18BCE2354', 'Prajeeth Kumar M.J'),
('18BCE0741', 'Devina Varshney'),
('18BCE2507', 'Varun Manohar Mulchandani'),
('18BCE0408', 'Hrishita Chakrabarti'),
('18BCE2081', 'Prachi Singh'),
('18BCE2094', 'Sahaaj Singh Chawla'),
('18BCE0091', 'Gauri Shankar Gupta'),
('18BCE0671', 'R.S.Hariharan'),
('18BCE0213', 'Navyaa Sharma'),
('18BCE2409', 'Tulika Shivani'),
('18BCE0691', 'Arya Abrol'),
('18BCE0501', 'Shubham Gupta'),
('18BCE0276', 'Yash Anand'),
('18BCE0956', 'BASIL JACOB'),
('18BCE0770', 'Navya Saxena'),
('18BCE0249', 'Rishik Reddy'),
('18BCE0668', 'Abhaas Goyal'),
('18BCE0883', 'Suchismitaa Chakraverty'),
('18BCE0450', 'Bharath Surendar I'),
('18BCE0083', 'Samyak Jain'),
('18BCE0977', 'Bhuvanjeet Singh Gandhi'),
('18BCE0048', 'Srinivas Natarajan'),
('18BCE0162', 'Yashaswi Shivank'),
('18BCE0171', 'Aashraya Singal'),
('18BCE0279', 'Atharva Gulhane'),
('18BCE0586', 'Aditya Agrawal'),
('18BCE0269', 'Nikhil Kumar Singh'),
('18BCE2281', 'Henil Satra'),
('18BCE2325', 'Francis Alex'),
('18BCE0990', 'Palak Munshi'),
('18BCE2516', 'Manorama Maharana'),
('18BCE0136', 'Ritesh Somani'),
('18BCE0328', 'Nimit Kumar Jain'),
('18BCE0654', 'Deepak Jha'),
('18BCE2446', 'Ashish Poudel'),
('18BCE0181', 'Deepanshu'),
('18BCE0234', 'Varun Mishra'),
('18BCE2510', 'Rishit Bansal'),
('18BCE0044', 'Pavan Siddharth'),
('18BCE0582', 'Aditya Ajayprakash Ruhatiya'),
('18BCE0646', 'SHAIK HASEEB UR RAHMAN'),
('18BCE0823', 'Navtika Kumar'),
('18BCE0824', 'Lakshit Dua'),
('18BCE0435', 'Fenil Jain'),
('18BCE0908', 'Shivam Yadav'),
('18BCE2106', 'N Kishore Kumar'),
('18BCE0071', 'V Sai Harsha Vardhan'),
('18BCE0985', 'Saakshi Mittal'),
('18BCE2318', 'Aadarsh Sreekumar'),
('18BCE0551', 'Mahavir Gala'),
('18BCE0585', 'Divyansh Chaudhary'),
('18BCE2052', 'Andrew suraj'),
('18BCE2514', 'HIMANSHU RAMESH AGARWAL'),
('18BCE0555', 'Himanshu Ruwatia'),
('18BCE2186', 'Agnim Chakraborty'),
('18BCE2243', 'Prakhar Dungarwal'),
('18BCE0172', 'Ayush Sharma'),
('18BCE0294', 'Yash Kumar'),
('18BCE0529', 'Anukrati Saxena'),
('18BCE0731', 'Pusuluri Sidhartha Aravind'),
('18BCE0165', 'Harshit Goel'),
('18BCE2342', 'Elsa Mariam Ninan'),
('18BCE0139', 'Ananya Ganesh'),
('18BCE0154', 'Ritik Gupta'),
('18BCE0250', 'Sukriti Jaitly'),
('18BCE0270', 'Vishaal Selvaraj'),
('18BCE0305', 'Aditya Dinesh Oke'),
('18BCE0467', 'PUNEET TIWARI'),
('18BCE0567', 'Manan Agrawal'),
('18BCE0579', 'Himanshu Kaushik'),
('18BCE2511', 'Ritika Mandal'),
('18BCE0141', 'Komanduri Srikar'),
('18BCE0323', 'Shreekanth J S'),
('18BCE0458', 'Navdeep Chawla'),
('18BCE0769', 'Anushka Kulshrestha'),
('18BCE0534', 'Shivang Kasana'),
('18BCE2513', 'Pranav Khurana'),
('18BCE2527', 'Shaunak Sensarma'),
('18BCE0017', 'Kushagra Singh'),
('18BCE2293', 'Sriya I. Reddi'),
('18BCE0018', 'RAHUL'),
('18BCE0145', 'NAVEEN S V E'),
('18BCE0816', 'Rishabh Kumar'),
('18BCE2370', 'GUNTHA ROHITH'),
('18BCE0584', 'Archit Nahta'),
('18BCE0700', 'Jay Tiwari'),
('18BCE2395', 'Ashish Thapa'),
('18BCE2517', 'Sakshi Gupta'),
('18BCE2518', 'Ritika Kayal'),
('18BCE0110', 'Abhisar Shukl'),
('18BCE0159', 'Mihir Mangesh Pavuskar'),
('18BCE0265', 'Ishaan Ohri'),
('18BCE0894', 'Ishika Ahuja'),
('18BCE2386', 'REEMA AGARWAL'),
('18BCE2508', 'Ramachandran R'),
('18BCE0064', 'Pratyansh Chauhan'),
('18BCE0483', 'REECE BAPTIST D\'SOUZA'),
('18BCE0570', 'Bhavya Taneja'),
('18BCE0089', 'Sai Pranav Tavva'),
('18BCE0296', 'P.G.V.SAIKARTHIK'),
('18BCE0511', 'Ritwik Saraswat'),
('18BCE2398', 'Subarna Lamsal'),
('18BCE0295', 'Dheeraj Rathee'),
('18BCE2240', 'Sri Siddarth Chakaravarthy P'),
('18BCE2375', 'Jenise James'),
('18BCE2512', 'Prithiraj Bhuyan'),
('18BCE0107', 'Naman Agarwal'),
('18BCE0167', 'Shreya Maheshwari'),
('18BCE0457', 'Mary Nikitha'),
('18BCE0575', 'SHREESH S YADAV'),
('18BCE0767', 'Priyanshu Garg'),
('18BCE0850', 'Simran Juneja'),
('18BCE0221', 'Rohan Mukherjee'),
('18BCE0431', 'GANDHAM SAI SIVA NEELA ROHITH'),
('18BCE0538', 'Kollipara Venkata Naga Hemanth'),
('18BCE0760', 'Chitresh Kansal'),
('18BCE0310', 'BHARGAV ROY'),
('18BCE0926', 'Pavitra Kadiyala'),
('18BCE0600', 'PRABHAKAR RAJESH'),
('18BCE0054', 'Sahaj Adlakha'),
('18BCE0379', 'K.Puneeth Sai'),
('18BCE0506', 'Sanchita Suryavanshi'),
('18BCE2228', 'Urjit Dwivedi'),
('18BCE2086', 'DEVANSH MEHTA'),
('18BCE2121', 'Jeswin Jacob J'),
('18BCE2476', 'Sundaram Yadav'),
('18BCE0711', 'Kshitij Kumar'),
('18BCE0845', 'Lavanya Middha'),
('18BCE0073', 'P Naveen Kalyan Chakravarthi'),
('18BCE2164', 'Anuraag Velamati'),
('18BCE0078', 'Harish Bharadwaj S'),
('18BCE0209', 'Vemula Poorna Chandra'),
('18BCE0429', 'Suarabh Vaid'),
('18BCE0569', 'Saket Prem'),
('18BCE0709', 'Atharva Anup Kokate'),
('18BCE0825', 'Divyansh Rai'),
('18BCE0870', 'VASUDHA TAPRIYA'),
('18BCE0011', 'M.Manikanta Sahith'),
('18BCE0121', 'Vinjamuri Venkata L N S V Raghavan'),
('18BCE0140', 'B. Chandrakanth reddy'),
('18BCE0170', 'Umang Raval'),
('18BCE0233', 'Shaswat'),
('18BCE0285', 'A VENKATA SRIKAR VISHNU DATTA'),
('18BCE0736', 'Sagnik Sarkar'),
('18BCE0950', 'STUTI TIWARI');

-- --------------------------------------------------------

--
-- Table structure for table `subject_name`
--

CREATE TABLE `subject_name` (
  `Course_Code` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_name`
--

INSERT INTO `subject_name` (`Course_Code`, `Subject`) VALUES
('CSE1006', 'Blockchain and Cryptocurrency Technologies'),
('CSE2008', 'Network Security'),
('CSE3001', 'Software Engineering'),
('CSE4022', 'Natural Language Processing'),
('CSE6037', 'Deep Learning and its Applications'),
('MAT2002', 'Applications of Differential and Difference Equations'),
('MAT3005', 'Applied Numerical Methods'),
('CSE3024', 'Web Mining'),
('CSE4015', 'Human Computer Interaction'),
('CSE3013', 'Artificial Intelligence'),
('CSE3999', 'Technical Answers for Real World Problems (TARP)'),
('CSE1007', 'Java Programming'),
('CSE4011', 'Virtualization'),
('CSE6019', 'Text, Web and Social Media Analytic'),
('CSE3022', 'Internet and Web Programming'),
('CSE4003', 'Cyber Security'),
('CSE6024', 'Machine Learning Techniques');

-- --------------------------------------------------------

--
-- Table structure for table `subject_slot`
--

CREATE TABLE `subject_slot` (
  `Course_Code` varchar(100) NOT NULL,
  `Slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_slot`
--

INSERT INTO `subject_slot` (`Course_Code`, `Slot`) VALUES
('CSE1006', 'C1+TC1'),
('CSE1006', 'C2+TC2'),
('CSE1007', 'G2+TG2'),
('CSE4011', 'F1+TF1'),
('CSE6019', 'B2+TB2'),
('CSE3022', 'B1+TB2'),
('CSE3999', 'TG1'),
('CSE4003', 'C2+TC2'),
('CSE6024', 'B2'),
('CSE3013', 'G1+TG1'),
('CSE3013', 'G2+TG2'),
('CSE3999', 'TG1'),
('CSE1006', 'C1+TC1'),
('CSE2008', 'B1+TB1'),
('CSE3001', 'A1'),
('CSE4015', 'A2'),
('CSE4022', 'A2+TA2'),
('CSE6037', 'E2'),
('MAT2002', 'B1+TB1'),
('MAT3005', 'A2+TA2+TAA2+V3'),
('MAT3005', 'A1+TA1+TAA1+V1'),
('CSE3024', 'G1+TG1'),
('CSE3024', 'G2+TG2'),
('CSE4015', 'A1+TA1'),
('CSE4015', 'A2+TA2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Emp_ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Emp_ID`, `Name`) VALUES
('16414', 'RAGUNTHAR T'),
('15776', 'LOKESH KUMAR R'),
('10696', 'ANAND M'),
('14055', 'GERALDINE BESSIE AMALI D'),
('10781', 'UMADEVI K S'),
('10946', 'SWATHI J.N'),
('11989', 'SHARMILA BANU K'),
('15919', 'RACHNA BHATIA'),
('15257', 'SHASHANK MOULI SATAPATHY');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
