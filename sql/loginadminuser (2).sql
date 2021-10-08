-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 06:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginadminuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Story` varchar(1080) NOT NULL,
  `Category` text NOT NULL,
  `File_photo` text NOT NULL,
  `File_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `Username`, `Story`, `Category`, `File_photo`, `File_video`) VALUES
(74, 'vdsvvd', 'vdsvs', 'สถูปจำลองดินเผา', 'img/01.jpg', '1.jpg'),
(76, 'กริชรามันห์', '“ชุมชนตะโละหะลอ” อ.รามัน จ.ยะลา อีกหนึ่งแหล่งเรียนรู้ที่มีความน่าสนใจที่ยังคงสืบทอด “กริชรามันห์” ศิลปะชั้นสูงนี้ไว้จนถึงทุกวันนี้ “ชุมชนตะโละหะลอ” ตั้งอยู่ที่ หมู่ที่ 5 บ้านบึงน้ำใส ต.ตะโละหะลอ อ.รามัน จ.ยะลา เป็นพื้นที่ที่มีช่างทำกริชสืบทอดมาตั้งแต่อดีตถึงปัจจุบัน นอกจากจะสร้างคุณค่าในความเป็นเอกลักษณ์ของพื้นที่แล้ว ยังสามารถสร้างรายได้เป็นกอบเป็นกำด้วยเช่นกัน เพราะกริชรามันห์นั้นมีความโดดเด่นนอกจากใบมีดที่คดงอแล้ว กริชรามันห์เป็นกริชในตระกูลของท่านปันไดสาระ ซึ่งได้รับการยอมรับในกลุ่มคนทำกริช หรือกลุ่มผู้นิยมกริชทั่วโลก เพราะเป็นกริชที่มีลักษณะโดดเด่นเป็นพิเศษกว่ากริชชนิดที่อื่น โดยเฉพาะใบกริชและหัวกริช ', 'สถูปจำลองดินเผา', 'img/14.jpg', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode_link`
--

CREATE TABLE `qrcode_link` (
  `qrcode_id` int(255) NOT NULL,
  `qrcode_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qrcode_link`
--

INSERT INTO `qrcode_link` (`qrcode_id`, `qrcode_url`) VALUES
(12, 'http://127.0.0.1/loginadminuser/qrcord-get.php'),
(19, 'http://127.0.0.1/loginadminuser/edit_form.php?id=72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcode_link`
--
ALTER TABLE `qrcode_link`
  ADD PRIMARY KEY (`qrcode_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `qrcode_link`
--
ALTER TABLE `qrcode_link`
  MODIFY `qrcode_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
