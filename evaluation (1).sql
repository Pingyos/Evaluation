-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 03:00 PM
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
(56, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(57, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(58, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(59, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', '1', '7'),
(60, 'หญิง', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '8'),
(61, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(62, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '2', '7'),
(63, 'หญิง', '0-34 ปี', 'สมรส', 'กรุงเทพมหานคร', 'มัธยมศึกษาตอนปลาย', '2', '7'),
(64, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', '1', '8'),
(65, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', '1', '8');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_2`
--

INSERT INTO `form_2` (`form_2_id`, `sex`, `age`, `status`, `province`, `study`, `height`, `weight`, `bmi`, `pressureup`, `pressuredown`, `waistline`, `fat`, `fatblood`, `bloodlevel`, `pregnant`, `ovary`, `total_score`) VALUES
(1, 'ชาย', '0', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 8),
(2, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 8),
(3, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 15),
(4, 'หญิง', '0-34 ปี', 'โสด', 'แม่ฮ่องสอน', 'ปริญญาตรีและสูงกว่า', 156, 45, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 15),
(5, 'หญิง', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 16),
(6, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 15),
(7, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 15),
(8, 'หญิง', '0-34 ปี', 'สมรส', 'กรุงเทพมหานคร', 'มัธยมศึกษาตอนปลาย', 182, 55, 'น้อยกว่า 18.5', '121-139 mmHg', 'มากกว่าหรือเท่ากับ 9', 'มากกว่าหรือเท่ากับ 80 cm', 'น้อยกว่า 35 mg/dL', 'มากกว่า 250 mg/dL', 'มากกว่า 126 mg%', 'ไม่มี', 'มี', 25),
(9, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 16),
(10, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', 182, 55, 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 16);

-- --------------------------------------------------------

--
-- Table structure for table `form_3`
--

CREATE TABLE `form_3` (
  `form_3_id` int(11) NOT NULL,
  `sex` varchar(255) DEFAULT NULL COMMENT 'เพศ',
  `age` varchar(255) DEFAULT NULL COMMENT 'อายุ',
  `status` varchar(255) DEFAULT NULL COMMENT 'สถานภาพ',
  `province` varchar(255) DEFAULT NULL COMMENT 'ภูมิลำเนา',
  `study` varchar(255) DEFAULT NULL COMMENT 'ระดับการศึกษา',
  `height` varchar(255) DEFAULT NULL COMMENT 'ส่วนสูง',
  `weight` varchar(255) DEFAULT NULL COMMENT 'น้ำหนัก',
  `bmi` varchar(255) DEFAULT NULL COMMENT 'ดัชนีมวลกาย (BMI)',
  `pressureup` varchar(255) DEFAULT NULL COMMENT 'ระดับความดันโลหิตตัวบน',
  `pressuredown` varchar(255) DEFAULT NULL COMMENT 'ระดับความดันโลหิตตัวล่าง',
  `waistline` varchar(255) DEFAULT NULL COMMENT 'รอบเอว ชาย/หญิง',
  `fat` varchar(255) DEFAULT NULL COMMENT 'ระดับไขมัน HDL ในเลือด (mg/dL)',
  `fatblood` varchar(255) DEFAULT NULL COMMENT 'ระดับไขมันไตรกลีเซอไรด์ในเลือด (mg/dL)',
  `bloodlevel` varchar(255) DEFAULT NULL COMMENT 'ระดับน้ำตาลในเลือดหลังอดอาหาร 6-8 ชั่วโมง',
  `pregnant` varchar(255) DEFAULT NULL COMMENT 'มีประวัติเป็นเบาหวานขณะตั้งครรภ์',
  `ovary` varchar(255) DEFAULT NULL COMMENT 'มีประวัติเป็นโรคความดันโลหิตสูง',
  `section1` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานอาหารครบ 3 มื้อ',
  `section2` varchar(255) DEFAULT NULL COMMENT 'ท่านชอบเติมเครื่องปรุงรสชาติอาหารให้มีรสหวานเสมอ เช่น น้ำตาล ผงชูรส ก้อนปรุงรส ซอส',
  `section3` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานอาหารว่างระหว่างมื้อนอกเหนือจากอาหารมื้อหลัก 3 มื้อต่อวัน',
  `section4` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานขัดสี ข้าวเหนียว ขนมปังสีขาว',
  `section5` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานเส้นก๋วยเตี๋ยว ได้แก่ เส้นเล็ก เส้นใหญ่ บะหมี่เส้นเหลือง',
  `section6` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานผลไม้อย่างไม่จำกัดปริมาณ',
  `section7` varchar(255) DEFAULT NULL COMMENT 'ท่านรับประทานอาหารมัน อาหารทอด แกงกะ',
  `section8` varchar(255) DEFAULT NULL COMMENT 'ท่านดื่มเครื่องดื่มประเภท น้ำหวาน น้ำชา กาแฟ น้ำอัดลม ที่รสชาติหวาน',
  `section9` varchar(255) DEFAULT NULL COMMENT 'ท่านออกกำลังกายประเภทแอโรบิก เช่น การวิ่งเหยาะ ๆ ว่ายน้ำ  แบดมินตัน ฟุตบอล เต้นแอโรบิก',
  `section10` varchar(255) DEFAULT NULL COMMENT 'ระยะเวลาในแต่และครั้งที่ออกกำลังกาย',
  `section11` varchar(255) DEFAULT NULL COMMENT 'ความถี่ของการออกกำลังกาย',
  `section12` varchar(255) DEFAULT NULL COMMENT 'ท่านสูบบุหรี่หรือไม่',
  `section13` varchar(255) DEFAULT NULL COMMENT 'ปริมาณการสูบบุหรี่',
  `section14` varchar(255) DEFAULT NULL COMMENT 'บุคคลใกล้ชิดของท่านเคยสูบบุหรี่หรือไม่',
  `section15` varchar(255) DEFAULT NULL COMMENT 'ท่านดื่มเครื่องดื่มแอลกอฮอล์หรือไม่',
  `section16` varchar(255) DEFAULT NULL COMMENT 'ชนิดของเครื่องดื่มแอลกอฮอล์ที่ดื่มเป็นประจำ',
  `section17` varchar(255) DEFAULT NULL COMMENT 'ปริมาณการดื่มต่อครั้ง',
  `scoreall` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_3`
--

INSERT INTO `form_3` (`form_3_id`, `sex`, `age`, `status`, `province`, `study`, `height`, `weight`, `bmi`, `pressureup`, `pressuredown`, `waistline`, `fat`, `fatblood`, `bloodlevel`, `pregnant`, `ovary`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `section10`, `section11`, `section12`, `section13`, `section14`, `section15`, `section16`, `section17`, `scoreall`) VALUES
(1, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'ไม่ใช่', 'น้อยกว่า 30 นาที', 'น้อยกว่า 3 ครั้ง/สัปดาห์', 'ไม่เคย', '', '', 'ไม่เคยดื่ม', 'สุรา', 'ไม่เคยดื่ม/ดื่มน้อยมาก', '8'),
(2, 'ชาย', '0-34 ปี', 'โสด', 'กรุงเทพมหานคร', 'ปริญญาตรีและสูงกว่า', '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 89 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', '', 'ไม่มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'ไม่เคยเลย', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 'ไม่ใช่', 'มากกว่า 30 นาที', 'มากกว่า 3 ครั้ง/สัปดาห์', 'ปัจจุบันสูบอยู่', 'น้อยกว่า 24 ม้วน/วัน', 'เคยสูบแต่เลิกแล้ว', 'ไม่เคยดื่ม', 'เบียร์', 'ดื่มน้อย', '11'),
(3, 'หญิง', '0-34 ปี', 'สมรส', 'กรุงเทพมหานคร', 'มัธยมศึกษาตอนปลาย', '182', '55', 'น้อยกว่า 18.5', '121-139 mmHg', 'มากกว่าหรือเท่ากับ 9', 'มากกว่าหรือเท่ากับ 80 cm', 'น้อยกว่า 35 mg/dL', 'มากกว่า 250 mg/dL', 'มากกว่า 126 mg%', 'ไม่มี', 'มี', 'เป็นประจำ/ปฏิบัติทุกวัน', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'ไม่เคยเลย', 'นานๆครั้ง/1-2 วัน/สัปดาห์', 'บางครั้ง/3-4 วัน/สัปดาห์', 'บ่อยครั้ง/5-6 วัน/สัปดาห์', 'ไม่ใช่', 'มากกว่า 30 นาที', 'น้อยกว่า 3 ครั้ง/สัปดาห์', 'ปัจจุบันสูบอยู่', 'มากกว่าเท่ากับ 25 ม้วน/วัน', 'เคยสูบแต่เลิกแล้ว', 'ไม่เคยดื่ม', 'ไวน์/สปาย', 'ดื่มปานกลาง', '13'),
(4, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'ไม่เคยเลย', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'ไม่ใช่', 'น้อยกว่า 30 นาที', 'น้อยกว่า 3 ครั้ง/สัปดาห์', 'ปัจจุบันสูบอยู่', 'น้อยกว่า 24 ม้วน/วัน', 'ไม่เคย', 'ไม่เคยดื่ม', 'สุรา', 'ไม่เคยดื่ม/ดื่มน้อยมาก', '11'),
(5, 'หญิง', '0-34 ปี', 'โสด', 'กระบี่', 'ประถมและต่ำกว่า', '182', '55', 'น้อยกว่า 18.5', 'น้อยกว่า 120 mmHg', 'น้อยกว่า 80 mmHg', 'น้อยกว่าหรือเท่ากับ 79 cm', 'น้อยกว่า 35 mg/dL', 'น้อยกว่า 250 mg/dL', 'น้อยกว่า 100 mg%', 'ไม่มี', 'ไม่มี', 'ไม่เคยเลย', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'เป็นประจำ/ปฏิบัติทุกวัน', 'ไม่ใช่', 'น้อยกว่า 30 นาที', 'น้อยกว่า 3 ครั้ง/สัปดาห์', 'ปัจจุบันสูบอยู่', 'น้อยกว่า 24 ม้วน/วัน', 'ไม่เคย', 'ไม่เคยดื่ม', 'สุรา', 'ไม่เคยดื่ม/ดื่มน้อยมาก', '27');

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
  MODIFY `form_1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `form_2`
--
ALTER TABLE `form_2`
  MODIFY `form_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `form_3`
--
ALTER TABLE `form_3`
  MODIFY `form_3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
