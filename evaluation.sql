-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 02:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_1`
--

CREATE TABLE `form_1` (
  `form_1_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `province_score` varchar(255) NOT NULL,
  `total_score` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `form_1`
--

INSERT INTO `form_1` (`form_1_id`, `sex`, `age`, `status`, `province`, `study`, `province_score`, `total_score`) VALUES
(30, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(31, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(32, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(33, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(34, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(35, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(36, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(37, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(38, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(39, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6'),
(40, 'ชาย', '0-34 ปี', 'โสด', 'พะเยา', 'ปริญญาตรี และสูงกว่า', '2', '7'),
(41, 'ชาย', '0-34 ปี', 'โสด', '', 'ปริญญาตรี และสูงกว่า', '0', '5'),
(42, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรี และสูงกว่า', '1', '6');

-- --------------------------------------------------------

--
-- Table structure for table `form_2`
--

CREATE TABLE `form_2` (
  `form_2_id` int(11) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `pressureup` varchar(255) NOT NULL,
  `pressuredown` varchar(255) NOT NULL,
  `waistline` varchar(255) NOT NULL,
  `fat` varchar(255) NOT NULL,
  `fatblood` varchar(255) NOT NULL,
  `bloodlevel` varchar(255) NOT NULL,
  `pregnant` varchar(255) NOT NULL,
  `ovary` varchar(255) NOT NULL,
  `total_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `form_2`
--

INSERT INTO `form_2` (`form_2_id`, `height`, `weight`, `bmi`, `pressureup`, `pressuredown`, `waistline`, `fat`, `fatblood`, `bloodlevel`, `pregnant`, `ovary`, `total_score`) VALUES
(1, '0.00', '0.00', '1', 'น้', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 0),
(2, '0.00', '0.00', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(3, '182.00', '55.00', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(4, '0.00', '0.00', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(5, '0.00', '0.00', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(6, '', '', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(7, '182', '55', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(8, '182', '55', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(9, '', '', '1', '1', '2', 'น้อยกว่า 80 mmHg', '1', '1', '2', '1', '1', 10),
(10, '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 10),
(11, '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 21),
(12, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 20),
(13, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 21),
(14, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 22),
(15, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 22),
(16, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 22),
(17, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 22),
(18, '', '', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 22);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `province_scores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `province_scores`) VALUES
(1, 'แม่ฮ่องสอน', '1'),
(2, 'ตาก', '1'),
(3, 'ปทุมธานี', '1'),
(4, 'ระยอง', '1'),
(5, 'นครพนม', '1'),
(6, 'กระบี่', '1'),
(7, 'ระนอง', '1'),
(8, 'ชุมพร', '1'),
(9, 'สตูล', '1'),
(10, 'ปัตตานี', '1'),
(11, 'ยะลา', '1'),
(12, 'เชียงใหม่', '2'),
(13, 'ลำพูน', '2'),
(14, 'น่าน', '2'),
(15, 'พะเยา', '2'),
(16, 'เชียงราย', '2'),
(17, 'สุโขทัย', '2'),
(18, 'เพชรบูรณ์', '2'),
(19, 'นครสวรรค์', '2'),
(20, 'กำแพงเพชร', '2'),
(21, 'นนทบุรี', '2'),
(22, 'พระนครศรีอยุธยา', '2'),
(23, 'กาญจนบุรี', '2'),
(24, 'เพชรบุรี', '2'),
(25, 'ประจวบคีรีขันธ์', '2'),
(26, 'สมุทรปราการ', '2'),
(27, 'ชลบุรี', '2'),
(28, 'ฉะเชิงเทรา', '2'),
(29, 'ปราจีนบุรี', '2'),
(30, 'สระแก้ว', '2'),
(31, 'บึงกาฬ', '2'),
(32, 'หนองบัวลำภู', '2'),
(33, 'ศรีสะเกษ', '2'),
(34, 'นครศรีธรรมราช', '2'),
(35, 'ภูเก็ต', '2'),
(36, 'สุราษฎร์ธานี', '2'),
(37, 'สงขลา', '2'),
(38, 'พัทลุง', '2'),
(39, 'นราธิวาส', '2'),
(40, 'กรุงเทพมหานคร', '2'),
(41, 'ลำปาง', '3'),
(42, 'แพร่', '3'),
(43, 'พิษณุโลก', '3'),
(44, 'ชัยนาท', '3'),
(45, 'พิจิตร', '3'),
(46, 'ลพบุรี', '3'),
(47, 'สระบุรี', '3'),
(48, 'ราชบุรี', '3'),
(49, 'สุพรรณบุรี', '3'),
(50, 'นครปฐม', '3'),
(51, 'สมุทรสาคร', '3'),
(52, 'สมุทรสงคราม', '3'),
(53, 'จันทบุรี', '3'),
(54, 'ตราด', '3'),
(55, 'ร้อยเอ็ด', '3'),
(56, 'อุดรธานี', '3'),
(57, 'หนองคาย', '3'),
(58, 'สกลนคร', '3'),
(59, 'นครราชสีมา', '3'),
(60, 'บุรีรัมย์', '3'),
(61, 'สุรินทร์', '3'),
(62, 'ชัยภูมิ', '3'),
(63, 'อำนาจเจริญ', '3'),
(64, 'มุกดาหาร', '3'),
(65, 'พังงา', '3'),
(66, 'ตรัง', '3'),
(67, 'อุตรดิตถ์', '4'),
(68, 'อุทัยธานี', '4'),
(69, 'อ่างทอง', '4'),
(70, 'สิงห์บุรี', '4'),
(71, 'นครนายก', '4'),
(72, 'ขอนแก่น', '4'),
(73, 'มหาสารคาม', '4'),
(74, 'กาฬสินธุ์', '4'),
(75, 'เลย', '4'),
(76, 'อุบลราชธานี', '4'),
(77, 'ยโสธร', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_1`
--
ALTER TABLE `form_1`
  ADD PRIMARY KEY (`form_1_id`);

--
-- Indexes for table `form_2`
--
ALTER TABLE `form_2`
  ADD PRIMARY KEY (`form_2_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_1`
--
ALTER TABLE `form_1`
  MODIFY `form_1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `form_2`
--
ALTER TABLE `form_2`
  MODIFY `form_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
