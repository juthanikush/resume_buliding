-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 02:28 PM
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
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtemp`
--

CREATE TABLE `addtemp` (
  `addid` int(11) NOT NULL,
  `title` varchar(22) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(22) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtemp`
--

INSERT INTO `addtemp` (`addid`, `title`, `img`, `date`, `file`) VALUES
(1, 'simple', '../temimg/resume1.PNG', '', '../tampalate/resume1.php'),
(2, 'Professional', '../temimg/resume3.PNG', '', '../tampalate/resume12.php'),
(3, 'Professional', '../temimg/Resume2.PNG', '', '../tampalate/resume11.php'),
(4, 'Professional', '../temimg/resume5.PNG', '', '../tampalate/resume.php'),
(5, 'simple', '../temimg/resume4.PNG', '', '../tampalate/resume2.php');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'kushjuthani', '12345678'),
(2, 'alokguriya', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mess` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `mess`) VALUES
(4, 'KUSH  JUTHNAI', 'juthanikush@gmail.com', '9427368831', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Ed_id` int(5) NOT NULL,
  `Pe_id` varchar(5) NOT NULL,
  `School_name` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Degree_Name` varchar(20) NOT NULL,
  `College_Name` varchar(20) NOT NULL,
  `Graduation_date` date DEFAULT NULL,
  `End_year` varchar(50) NOT NULL,
  `Standard` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Ed_id`, `Pe_id`, `School_name`, `City`, `State`, `Degree_Name`, `College_Name`, `Graduation_date`, `End_year`, `Standard`) VALUES
(1, '1', 'K.G.Dholakiya', 'Rajkot', 'Gujarat', 'BCA', 'ATMIYA UNIVERSITY', '0000-00-00', '2018', '12'),
(7, '2', 'K.G.Dholakiya', 'Rajkot', 'Gujarat', 'BCA', 'ATMIYA UNIVERCITY', '2020-10-07', '2018', '12'),
(8, '3', 'K.G.Dholakiya', 'Rajkot', 'Gujarat', 'BCA', 'ATMIYA UNIVERCITY', '2021-01-26', '2018', 'Gujarat'),
(9, '4', 'K.G.Dholakiya', 'Rajkot', 'Gujarat', 'BCA', 'ATMIYA UNIVERCITY', '2021-02-16', '2018', 'Gujarat'),
(10, '1', 'K.G.Dholakiya', 'Rajkot', '10 to 12', 'BCA', 'ATMIYA UNIVERCITY', '2021-03-27', '2018', '10 to 12'),
(11, '5', 'K.G.Dholakiya', 'Rajkot', 'Gujarat', 'BCA', 'ATMIYA UNIVERCITY', '2021-03-04', '2018', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `Ex_id` int(5) NOT NULL,
  `Pe_id` varchar(5) NOT NULL,
  `Company_Name` varchar(20) NOT NULL,
  `Job_title` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date DEFAULT NULL,
  `Job_Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`Ex_id`, `Pe_id`, `Company_Name`, `Job_title`, `City`, `State`, `Start_Date`, `End_Date`, `Job_Description`) VALUES
(1, '1', 'Atmiya University', 'Full Stack Devloper', 'Rajkot', 'Gujarat', '2021-01-01', '2021-01-14', 'Pictures, abstract symbols, materials, and colors are among the ingredients with which a designer or engineer works. To design is to discover relation'),
(2, '2', 'Atmiya University', 'MCA', 'Rajkot', 'Gujarat', '2021-01-01', NULL, 'for better upgrashion'),
(3, '3', 'TATA', 'MANAGER', 'Rajkot', 'Gujarat', '2001-06-08', '2021-01-05', 'A job description is an internal document that clearly states the essential job requirements, job duties, job responsibilities, and skills required to'),
(4, '4', 'Atmiya University', 'MANAGER', 'Rajkot', 'Gujarat', '2021-02-10', '2021-02-17', 'A job description is an internal document that clearly states the essential job requirements, job duties, job responsibilities, and skills required to'),
(5, '1', 'Atmiya University', 'MCA', 'Rajkot', 'Gujarat', '2021-03-23', '2021-03-10', 'test'),
(6, '5', 'Atmiya University', 'MCA', 'Rajkot', 'Gujarat', '2021-02-18', '0000-00-00', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Pe_id` varchar(5) NOT NULL,
  `First_name` varchar(10) NOT NULL,
  `Last_name` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Img` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zip_code` int(6) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Pe_id`, `First_name`, `Last_name`, `Address`, `Img`, `Email`, `Phone`, `City`, `Zip_code`, `Country`) VALUES
('2', 'ALOK', 'GURIYA', 'KALAVAD ROAD,AMIN MA', 'profilephoto/alok.jpg', 'alokguriya@gmail.com', 9456321789, 'Rajkot', 360007, 'INDIA'),
('3', 'Manoj', 'Parkha', 'The Address Street No 10/11, B/h Kathiawad Gymkhana, Jagnath Plot, Rajkot, Gujarat 360001', '?PNG\r\n\Z\n\0\0\0\rIHDR\0\0V\0\0\0\0\0\0?><?\0\0\0sRGB\0???\0\0\0gAMA\0\0???a\0\0??IDATx^???e???\'[???*\n\n*??\r?XOE???y6??lg???w????T?g=A??(E?m)Ko[???3?L??nf7??]?????wJ&?d\'???;?%˳?ć???B)??+??^?\0T?3??@??,??8??????n???[??d??I?uKMIq?\0?l?????/??m??ٳ\'י\0\0????`?0Hr&?????I.?g?q??ҨA=g@?ٲu?l޺?\0\0???W?????#\Z??J??I.?g?M?f??@?k԰??i??\0\0??&?`5??V\0U-`W????Ն??۸a=??H7?\0?[ff?	X???7Gv\0\0??Qj?j׹Q?T\'Z?j?m??T+????̐F\r?;-\0????g6#??R?ћ#;\0\0@?(5X-,??\Z\0?Waa?3?:?_??3?:?_??3\0\0???\0 ????T?ie??&???:\0\0?*Qz?jN', 'manoj@gmail.com', 9456327845, 'Rajkot', 360001, 'INDIA'),
('1', 'KUSH', 'JUTHNAI', 'Place Road', 'profilephoto/20180809_210003.jpg', 'juthanikush@gmail.com', 9427368831, 'Rajkot', 360001, 'INDIA'),
('4', 'yash', 'parakha', 'Kala vada Road ,Rajokt', 'profilephoto/SAVE_20201216_133215.jpg', 'yash@gmai.com', 9874563214, 'Rajkot', 360001, 'india'),
('1', 'KUSH', 'JUTHNAI', 'Place Road', 'profilephoto/WhatsApp Image 2021-03-19 at 22.06.17.jpeg', 'juthanikush@gmail.com', 9427368831, 'Rajkot', 360001, 'INDIA'),
('5', 'lalo', 'patal', 'Place Road', 'profilephoto/resume.PNG', 'lalo@gmail.com', 9427784512, 'surata', 360001, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info_biodat`
--

CREATE TABLE `personal_info_biodat` (
  `Per_id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `Brother_Name` varchar(20) NOT NULL,
  `Sister_Name` varchar(20) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Native_Place` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Hobbies` varchar(20) NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Width` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professio_info_biodata`
--

CREATE TABLE `professio_info_biodata` (
  `Pr_id` int(11) NOT NULL,
  `Pe_id` int(11) NOT NULL,
  `job` text NOT NULL,
  `job_address` text NOT NULL,
  `Father_job` text NOT NULL,
  `Profession` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resumeselect`
--

CREATE TABLE `resumeselect` (
  `Res_id` int(11) NOT NULL,
  `Resume` int(30) NOT NULL,
  `Se_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumeselect`
--

INSERT INTO `resumeselect` (`Res_id`, `Resume`, `Se_id`) VALUES
(1, 2, 1),
(3, 1, 1),
(4, 1, 1),
(5, 3, 1),
(6, 4, 1),
(7, 1, 1),
(8, 4, 1),
(9, 4, 4),
(10, 1, 1),
(11, 2, 1),
(12, 3, 1),
(13, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sing_up`
--

CREATE TABLE `sing_up` (
  `Re_id` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sing_up`
--

INSERT INTO `sing_up` (`Re_id`, `Name`, `E_mail`, `Password`) VALUES
(1, 'KUSH  JUTHNAI', 'juthanikush@gmail.com', '12345678'),
(2, 'ALOK GURIYA', 'alokguriya@gmail.com', 'alokalok'),
(3, 'manoj parakha', 'manoj@gmail.com', '74185296'),
(4, 'yash', 'yash@gmail.com', '12345678'),
(5, 'lalo', 'lalo@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `Sk_id` int(5) NOT NULL,
  `Pe_id` int(5) NOT NULL,
  `Skill_Name` varchar(15) NOT NULL,
  `Skill_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`Sk_id`, `Pe_id`, `Skill_Name`, `Skill_level`) VALUES
(133, 1, 'php', 'Expert'),
(134, 1, 'java', 'Experienced'),
(135, 1, 'python', 'Expert'),
(136, 1, 'database', 'Experienced'),
(137, 1, 'laravel', 'Biginner'),
(138, 1, 'html', 'Experienced'),
(139, 2, 'css', 'Skillful'),
(140, 2, 'java', 'Skillful'),
(141, 2, 'python', 'Experienced'),
(142, 2, 'database', 'Expert'),
(143, 2, 'laravel', 'Expert'),
(144, 2, 'djanog', 'Expert'),
(145, 3, 'html', 'Experienced'),
(146, 3, 'java', 'Experienced'),
(147, 3, 'python', 'Expert'),
(148, 3, 'database', 'Experienced'),
(149, 3, 'laravel', 'Expert'),
(150, 3, 'djanog', 'Expert'),
(151, 4, 'php', 'Expert'),
(152, 4, 'java', 'Expert'),
(153, 4, 'DATABASE', 'Expert'),
(154, 4, 'Python', 'Experienced'),
(155, 4, 'html', 'Skillful'),
(156, 4, 'laravel', 'Expert'),
(157, 5, 'php', 'Experienced'),
(158, 5, 'java', 'Skillful'),
(159, 5, 'DATABASE', 'Expert'),
(160, 5, 'Python', 'Biginner'),
(161, 5, 'LARAVEL', 'Novice'),
(162, 5, 'DJANOG', 'Biginner');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `Su_id` int(5) NOT NULL,
  `Pe_id` int(5) NOT NULL,
  `Summary` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`Su_id`, `Pe_id`, `Summary`) VALUES
(1, 1, 'i am vaery hard working.'),
(3, 2, 'HARD WORKING PERSON OF THE WORD AND VERY EXPERT IN DATABASE EXPERT IN JAVA AND EXPERT IN PYTHON EXPERT IN PHP AND EXPERT IN DJANGO AND EXPERT IN PHP'),
(4, 3, 'Present: Talk a little bit about what your current role is, the scope of it, and perhaps a big recent accomplishment.Present: Talk a little bit about what your current role is, the scope of it, and perhaps a big recent accomplishment.Present: Talk a little bit about what your current role is, the scope of it, and perhaps a big recent accomplishment.'),
(9, 4, 'A job description is an internal document that clearly states the essential job requirements, job duties, job responsibilities, and skills required to perform a specific role. A more detailed job description will cover how success is measured in the role so it can be used during performance evaluations.A job description is an internal document that clearly states the essential job requirements, job duties, job responsibilities, and skills required to perform a specific role. A more detailed job description will cover how success is measured in the role so it can be used during performance eval'),
(10, 1, 'test'),
(11, 1, ''),
(12, 1, ''),
(13, 1, ''),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, 'test'),
(18, 1, 'test'),
(19, 1, 'test'),
(20, 1, 'test'),
(21, 1, ''),
(22, 1, ''),
(23, 1, ''),
(24, 1, ''),
(25, 1, 'test'),
(26, 5, 'reesfasdfasdfasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtemp`
--
ALTER TABLE `addtemp`
  ADD PRIMARY KEY (`addid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`Ed_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`Ex_id`);

--
-- Indexes for table `resumeselect`
--
ALTER TABLE `resumeselect`
  ADD PRIMARY KEY (`Res_id`);

--
-- Indexes for table `sing_up`
--
ALTER TABLE `sing_up`
  ADD PRIMARY KEY (`Re_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`Sk_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`Su_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtemp`
--
ALTER TABLE `addtemp`
  MODIFY `addid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Ed_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `Ex_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumeselect`
--
ALTER TABLE `resumeselect`
  MODIFY `Res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sing_up`
--
ALTER TABLE `sing_up`
  MODIFY `Re_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `Sk_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `Su_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
