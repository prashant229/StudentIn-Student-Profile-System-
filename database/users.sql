-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 03:39 PM
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
-- Database: `itw2a`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `roll` varchar(12) NOT NULL,
  `section` varchar(1) NOT NULL,
  `skill_1` int(1) NOT NULL,
  `skill_2` int(1) NOT NULL,
  `skill_3` int(1) NOT NULL,
  `skill_4` int(1) NOT NULL,
  `skill_5` int(1) NOT NULL,
  `skill_6` int(1) NOT NULL,
  `skill_7` int(1) NOT NULL,
  `skill_8` int(1) NOT NULL,
  `others` varchar(30) NOT NULL,
  `cgpa` double DEFAULT NULL,
  `linkedIn_id` varchar(40) NOT NULL,
  `Instagram_id` varchar(40) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `github_id` varchar(50) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `acheivements` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `roll`, `section`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `others`, `cgpa`, `linkedIn_id`, `Instagram_id`, `email_id`, `github_id`, `contact_number`, `password`, `acheivements`) VALUES
(123848989, '5580', 'Prateek', 'Niket', 'BT20CSE001', 'A', 1, 1, 0, 0, 0, 0, 0, 0, 'None', 8.13, 'https://www.linkedin.com/in/prateekniket', 'https://www.instagram.com/bruhhhh.teek/\r', 'bt20cse001@iiitn.ac.in', 'https://github.com/prateekniket\r\n', 99114567890, 'admin', 'codechef 3*'),
(124848967, '5584', 'Sujal', 'Barsaiyan', 'BT20CSE005', 'A', 1, 0, 1, 0, 0, 0, 0, 0, 'None', 7.34, 'https://www.linkedin.com/in/sujal-barsai', 'https://www.instagram.com/sujal_barsaiya', 'bt20cse005@iiitn.ac.in', 'https://github.com/sujal\r\n', 9787612301, 'admin', 'codechef 4*'),
(124848402, '5587', 'Yatharth', 'Anand', 'BT20CSE008', 'A', 0, 0, 0, 0, 1, 1, 0, 0, 'None', 8.27, 'https://www.linkedin.com/in/yatharth-ana', 'https://www.instagram.com/yatharth_anand', 'bt20cse008@iiitn.ac.in', 'https://github.com/yatharth\r\n', 9303176083, 'admin', 'codechef 4*'),
(12385739, '5570', 'Shobhit', 'Kumar', 'BT20CSE032', 'A', 0, 0, 1, 0, 0, 0, 0, 0, 'Graphics Design', 8.2, 'https://www.linkedin.com/in/shobhit-kuma', 'https://www.instagram.com/shobhit_kumar\r', 'bt20cse032@iiitn.ac.in', 'https://github.com/shobhitkumar\r\n', 9898767654, 'admin', 'codechef 4*'),
(12385839, '5571', 'Uday', 'Gaidhane', 'BT20CSE043', 'A', 1, 0, 0, 1, 0, 0, 0, 0, 'None', 8.1, 'https://www.linkedin.com/in/udhay-gaidha', 'https://www.instagram.com/uday_gaidhane\r', 'bt20cse043@iiitn.ac.in', 'https://github.com/udaygaidhane\r\n', 9800767654, 'admin', 'codechef 3*'),
(12384419, '5577', 'Ayush', 'Babbar', 'BT20CSE047', 'A', 0, 0, 1, 0, 0, 0, 0, 0, 'Cyber Security', 8, 'https://in.linkedin.com/in/ayush-babbar-', 'https://www.instagram.com/babbar-ayush\r\n', 'bt20cse047@iiitn.ac.in', 'https://github.com/ayushbabbar\r\n', 7048989898, 'admin', 'codechef 3*'),
(12384489, '5576', 'Ambuj', 'Raj', 'BT20CSE054', 'A', 1, 0, 0, 0, 1, 0, 0, 0, 'None', 8.6, 'https://in.linkedin.com/in/ambuj-raj-542', 'https://www.instagram.com/real_ambuj\r\n', 'bt20cse054@iiitn.ac.in', 'https://github.com/ambujraj\r\n', 7041234561, 'admin', 'codechef 4*'),
(12385838, '5572', 'Nikhil', 'Dahriya', 'BT20CSE062', 'A', 0, 0, 0, 0, 0, 1, 0, 0, 'None', 8.4, 'https://www.linkedin.com/nikhil-dahhriya', 'https://www.instagram.com/nikhil_dahriya', 'bt20cse062@iiitn.ac.in', 'https://github.com/nikhildahriya\r\n', 9100763654, 'admin', 'codechef 3*'),
(2147483647, '5695', 'Kushagra', 'Saxena', 'BT20CSE081', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 'None', 8.4, 'ksaxena@linkedIn.com', 'ksaxena@instagram', 'ksaxena@gmail.com', 'ksaxena@github', 9871239871, 'admin', 'codechef 4*'),
(12384838, '5573', 'Mridul', 'Gupta', 'BT20CSE092', 'A', 1, 0, 0, 1, 0, 0, 0, 0, 'None', 8.3, 'https://in.linkedin.com/in/mridul-gupta-', 'https://www.instagram.com/mridul_gupta\r\n', 'bt20cse092@iiitn.ac.in', 'https://github.com/mridulgupta\r\n', 9100888854, 'admin', 'codechef 4*'),
(12384848, '5574', 'Vaibhav', 'Aggarwal', 'BT20CSE102', 'A', 0, 0, 0, 1, 1, 0, 0, 0, 'None', 8.8, 'https://in.linkedin.com/in/vaibhav-aggar', 'https://www.instagram.com/vaibhav_aggarw', 'bt20cse102@iiitn.ac.in', 'https://github.com/vaibhavaggarwal\r\n', 9910123354, 'admin', 'codechef 5*'),
(124848812, '5585', 'Maitreya', 'Zalte', 'BT20CSE106', 'B', 1, 0, 1, 0, 0, 0, 0, 0, 'AR/VR/XR', 7.79, 'https://www.linkedin.com/in/maitreya-zal', 'https://www.instagram.com/maitreya_zalte', 'bt20cse106@iiitn.ac.in', 'https://github.com/maitreya\r\n', 9134998722, 'admin', 'codechef 4*'),
(123848979, '5581', 'Paras', 'Palte', 'BT20CSE112', 'B', 1, 0, 0, 1, 1, 0, 0, 0, 'None', 8.92, 'https://www.linkedin.com/in/paras-patle-', 'https://www.instagram.com/palte.paras/\r\n', 'bt20cse112@iiitn.ac.in', 'https://github.com/paraspatle\r\n', 9900012345, 'admin', 'codechef 5*'),
(12384488, '5575', 'Kinshu', 'Jain', 'BT20CSE116', 'B', 1, 0, 0, 0, 0, 0, 0, 1, 'None', 7.5, 'https://in.linkedin.com/in/kinshu-jain-3', 'https://www.instagram.com/jain_kinshu\r\n', 'bt20cse116@iiitn.ac.in', 'https://github.com/kinshujain\r\n', 9999123456, 'admin', 'codechef 3*'),
(124848403, '5588', 'Pavan', 'Kumar', 'BT20CSE118', 'B', 0, 0, 0, 0, 1, 1, 0, 0, 'None', 8.44, 'https://www.linkedin.com/in/pavan-kumar-', 'https://www.instagram.com/pavan_kumar\r\n', 'bt20cse118@iiitn.ac.in', 'https://github.com/pavankumar\r\n', 9311207561, 'admin', 'codechef 3*'),
(123848967, '5582', 'Achyut', 'Shirgaonkar', 'BT20CSE131', 'B', 1, 1, 0, 1, 0, 0, 0, 0, 'None', 7.88, 'https://www.linkedin.com/in/achyut-shirg', 'https://www.instagram.com/achyutshirgaon', 'bt20cse131@iiitn.ac.in', 'https://github.com/achyut\r\n', 9818716154, 'admin', 'codechef 3*'),
(124848967, '5583', 'Kaushal', 'Shirode', 'BT20CSE171', 'B', 0, 0, 0, 0, 1, 1, 0, 0, 'None', 8.46, 'https://www.linkedin.com/in/kaushal-shir', 'https://www.instagram.com/kaushal.shirod', 'bt20cse171@iiitn.ac.in', 'https://github.com/kaushalshirode\r\n', 9819080706, 'admin', 'codechef 5*'),
(124848812, '5586', 'Krushna', 'Patil', 'BT20CSE200', 'B', 1, 0, 0, 1, 0, 0, 0, 0, 'None', 7.63, 'https://www.linkedin.com/in/krushna-pati', 'https://www.instagram.com/krushna_patil\r', 'bt20cse200@iiitn.ac.in', 'https://github.com/krushna\r\n', 9440361234, 'admin', 'codechef 3*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
