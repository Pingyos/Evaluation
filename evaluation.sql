-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 10:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_1`
--

INSERT INTO `form_1` (`form_1_id`, `sex`, `age`, `status`, `province`, `study`, `province_score`, `total_score`) VALUES
(56, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(57, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(58, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(59, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `form_2`
--

CREATE TABLE `form_2` (
  `form_2_id` int(11) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `study` varchar(50) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `bmi` varchar(20) DEFAULT NULL,
  `pressureup` varchar(20) DEFAULT NULL,
  `pressuredown` varchar(20) DEFAULT NULL,
  `waistline` varchar(50) DEFAULT NULL,
  `fat` varchar(50) DEFAULT NULL,
  `fatblood` varchar(50) DEFAULT NULL,
  `bloodlevel` varchar(50) DEFAULT NULL,
  `pregnant` varchar(20) DEFAULT NULL,
  `ovary` varchar(20) DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_2`
--

INSERT INTO `form_2` (`form_2_id`, `sex`, `age`, `status`, `province`, `study`, `height`, `weight`, `bmi`, `pressureup`, `pressuredown`, `waistline`, `fat`, `fatblood`, `bloodlevel`, `pregnant`, `ovary`, `total_score`) VALUES
(1, 'ชาย', '0', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 8),
(2, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 8),
(3, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 15),
(4, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', 156, 45, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 15);

-- --------------------------------------------------------

--
-- Table structure for table `form_3`
--

CREATE TABLE `form_3` (
  `form_3_id` int(11) NOT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `study` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `bmi` varchar(255) DEFAULT NULL,
  `pressureup` varchar(255) DEFAULT NULL,
  `pressuredown` varchar(255) DEFAULT NULL,
  `waistline` varchar(255) DEFAULT NULL,
  `fat` varchar(255) DEFAULT NULL,
  `fatblood` varchar(255) DEFAULT NULL,
  `bloodlevel` varchar(255) DEFAULT NULL,
  `pregnant` varchar(255) DEFAULT NULL,
  `ovary` varchar(255) DEFAULT NULL,
  `section1` varchar(255) DEFAULT NULL,
  `section2` varchar(255) DEFAULT NULL,
  `section3` varchar(255) DEFAULT NULL,
  `section4` varchar(255) DEFAULT NULL,
  `section5` varchar(255) DEFAULT NULL,
  `section6` varchar(255) DEFAULT NULL,
  `section7` varchar(255) DEFAULT NULL,
  `section8` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_3`
--

INSERT INTO `form_3` (`form_3_id`, `sex`, `age`, `status`, `province`, `study`, `height`, `weight`, `bmi`, `pressureup`, `pressuredown`, `waistline`, `fat`, `fatblood`, `bloodlevel`, `pregnant`, `ovary`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `score`, `created_at`) VALUES
(1, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '156', '45', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'ไม่เคยเลย', 'ไม่เคยเลย', 'ไม่เคยเลย', 'ไม่เคยเลย', 'ไม่เคยเลย', 'ไม่เคยเลย', 'ไม่เคยเลย', 23, '2024-02-05 07:02:03'),
(2, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '156', '45', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'ไม่เคยเลย', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 55, '2024-02-05 07:02:39'),
(3, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '156', '45', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'ไม่เคยเลย', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 35, '2024-02-05 07:02:57'),
(4, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '156', '45', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 4, '2024-02-05 07:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `province_scores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `form_3`
--
ALTER TABLE `form_3`
  ADD PRIMARY KEY (`form_3_id`);

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
  MODIFY `form_1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `form_2`
--
ALTER TABLE `form_2`
  MODIFY `form_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_3`
--
ALTER TABLE `form_3`
  MODIFY `form_3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
