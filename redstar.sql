-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 01:21 PM
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
-- Database: `redstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `a_id` int(255) NOT NULL,
  `m_id` int(255) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_tel` varchar(11) NOT NULL,
  `m_add` char(255) NOT NULL,
  `m_province` varchar(50) NOT NULL,
  `m_district` varchar(50) NOT NULL,
  `m_subdis` varchar(50) NOT NULL,
  `m_zip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`a_id`, `m_id`, `m_name`, `m_tel`, `m_add`, `m_province`, `m_district`, `m_subdis`, `m_zip`) VALUES
(10, 3, 'medemo', '012345678', 'aaaaaaaaaaaaaaaaaaaaa', 'chiang mai', 'sanpatong', 'tungsatok', 50120),
(11, 3, '9999', '99999', '99', '9', '9', '9', 9999),
(12, 3, '11111', '111111', '2222222', '2', '2', '2', 2),
(13, 2, 'qe2', '0684599865', 'eagawhbfdndfhn', 'erherh', 'saherh', 'erhehr', 56231),
(14, 1, 'admin', '0689568956', 'admiadmin', 'admin1', 'aweg', 'awgeag', 12347);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(255) NOT NULL,
  `m_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `m_pass` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_email`, `m_pass`) VALUES
(1, 'admin@admin', 'admin1234'),
(2, 'paintcillssz@gmail.com', '1111'),
(3, 'medemoeto@gmail.com', 'Dm123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(255) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_time` time NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_total` varchar(20) NOT NULL,
  `pay_img` varchar(255) NOT NULL,
  `m_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `p_brand` varchar(50) CHARACTER SET utf8 NOT NULL,
  `p_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `p_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `p_details` text CHARACTER SET utf8 NOT NULL,
  `p_price` varchar(20) CHARACTER SET utf8 NOT NULL,
  `p_tprice` varchar(20) CHARACTER SET utf8 NOT NULL,
  `p_img` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_brand`, `p_type`, `p_name`, `p_details`, `p_price`, `p_tprice`, `p_img`) VALUES
(1, 'MSI', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'MSI Notebook Raider GE77HX 12UGS-045TH', 'Raider GE77 HX\r\n\r\nแรงสุด ประสิทธิภาพระดับเดสก์ท็อป\r\n\r\n????GE77HX 12UGS-045TH????\r\n\r\nตอบโจทย์ทุกการเล่นเกม พร้อมฟินๆกับหน้าจอ17.3 2K\r\n\r\n.\r\n\r\nAlder Lake i7-12800HX\r\n\r\nRTX3070Ti GDDR6 8GB\r\n\r\nDDR5 16GB*2 (4800MHz)\r\n\r\n17.3\" QHD (2560*1440), 240Hz DCI-P3 100% typica\r\n\r\n1TB NVMe PCIe Gen4x4 SSD\r\n\r\nPer key RGB steelseries KB\r\n\r\nWindows11 Home +Office 365\r\n\r\n2 Year Warranty (1 year Global+ 1 Year Thailand )\r\n\r\nราคา???? 99,990.-', '฿99,990', '', 'img/brand/p_msi/MSI Notebook Raider GE77HX 12UGS-045TH.jpg'),
(2, 'ASUS', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'ASUS Notebook ROG STRIX SCAR 17 SE G743CX-LL058W ประกัน 3Y', 'ROG STRIX SCAR 17 SE G743CX-LL058W\r\n\r\n.\r\n\r\nOperating System : Windows 11 Home\r\n\r\nCPU : Intel® Core™ i9-12950HX\r\n\r\nGraphic Card : RTX 3080Ti 16GB GDDR6\r\n\r\nRAM : 32GB DDR5-4800 SO-DIMM (16GB x2)\r\n\r\nStorage : 1TB PCIe® 4.0 NVMe™ M.2 SSD\r\n\r\nDisplay : 17.3\" WQHD (2560 x 1440)\r\n\r\n240Hz, 3ms, 100% DCI-P3\r\n\r\nKeyboard : Backlit Chiclet Keyboard Per-Key RGB\r\n\r\nDiscrete/Optimus : MUX Switch + Optimus\r\n\r\nWarranty : 3Y Onsite + 1Y Perfect\r\n\r\nราคา : ????124,990.- บาท', '฿124,990', '', 'img/brand/p_asus/ASUS Notebook ROG STRIX SCAR 17 SE G743CX-LL058W ประกัน 3Y.jpg'),
(3, 'ASUS', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'ASUS Notebook ROG Strix Scar 15 G543ZX-HF058W ประกัน 3Y', 'ถอยไปรุ่นใหญ่จะเดิน ROG Strix Scar 15\r\n\r\nรุ่น ????G543ZX-HF058W????ตัวท็อปแรงสุดของรุ่น\r\n\r\n.\r\n\r\n????i9-12900H | RTX3080TI TGP 150W\r\n\r\n????จอภาพระดับ 15.6 FHD 300Hz 100% SRGB\r\n\r\n????ใช้สารนำความร้อนแบบ Liquid Metal\r\n\r\n????รองรับ Dolby Vision และ Dolby Atmos\r\n\r\n????Backlit Chiclet Keyboard Per-Key RGB\r\n\r\n????ไฟ RGB แบบแยกโซนพร้อมรองรับ Aura Sync\r\n\r\n.\r\n\r\n• Intel Core i9-12900H\r\n\r\n• 32GB (16GB x2) DDR5 4800MHz\r\n\r\n• 1TB PCIe/NVMe M.2 SSD\r\n\r\n• 15.6\" Full HD IPS Anti-Glare 300Hz\r\n\r\n• NVIDIA GeForce RTX 3080Ti 16 GB GDDR6\r\n\r\n• Windows 11 Home\r\n\r\nWarranty 3Y Onsite + 1Y Perfect', '฿114,990', '', 'img/brand/p_asus/ASUS Notebook ROG Strix Scar 15 G543ZX-HF058W ประกัน 3Y.jpg'),
(4, 'ASUS', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'ASUS Notebook TUF GAMING F15 FX506LHB-HN323W ประกัน 2Y', 'F15 FX506LHB-HN323W\r\n\r\n.\r\n\r\nFX506LHB-HN323W : Bonfire Black\r\n\r\nOS: Windows 11 Home\r\n\r\nCPU: Intel® Core™ i5-10300H Processor\r\n\r\nGPU: NVIDIA® GeForce® GTX 1650, 4GB GDDR6\r\n\r\nRAM: 8GB DDR4 SO-DIMM 2933MHz\r\n\r\nStorage: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n\r\nDisplay: 15.6” FHD (1920 x 1080) 16:9,\r\n\r\nIPS-level panel, 144Hz\r\n\r\nWifi: Wifi 6 support', '฿24,990', '฿26,990', 'img/brand/p_asus/ASUS Notebook TUF GAMING F15 FX506LHB-HN323W ประกัน 2Y.jpg'),
(5, 'LENOVO', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'Lenovo Notebook IdeaPad Gaming 3i-81Y400PATA ประกัน 2Y', 'โน๊ตบุ๊คเกมมิ่งราคาสบายกระเป๋า เพียง 25,990.-\r\n\r\nได้ I5-11320H จับคู่กับ GTX1650 มาตราฐานเกมมิ่ง\r\n\r\nทำงาน/เรียน เล่นเกม ได้สบายๆ\r\n\r\n.\r\n\r\n????Lenovo IdeaPad Gaming 3i-82K1019LTA????\r\n\r\n- Intel Core i5-11320H\r\n\r\n- 8 GB DDR4 2933 MHz\r\n\r\n- GeForce GTX 1650 (4GB GDDR6)\r\n\r\n- 15.6\" 1920x1080 (FHD), IPS, 120Hz,\r\n\r\n- 512GB PCIe NVMe M.2 2242 SSD\r\n\r\n- WINDOWS 11 HOME\r\n\r\nWarranty 2 Y', '฿25,990', '', 'img/brand/p_lenovo/Lenovo Notebook IdeaPad Gaming 3i-81Y400PATA ประกัน 2Y.jpg'),
(6, 'ASUS', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'Asus Notebook ROG Strix G15 GL543IM-HN135W', 'ROG Strix G15 GL543IM-HN135W\r\n\r\n.\r\n\r\nScreen Size 15.6-inch\r\n\r\nProcessor AMD Ryzen 7 4800H Mobile\r\n\r\nProcessor Speed 8C/16T, 12MB Cache, 4.2 GHz Max Boost\r\n\r\nDisplay FHD (1920 x 1080) 16:9\r\n\r\nMemory 16GB DDR4-3200 SO-DIMM\r\n\r\nStorage 512GB M.2 NVMe PCIe 3.0 SSD\r\n\r\nGraphics NVIDIA GeForce RTX 3060 Laptop GPU\r\n\r\nOperating System Windows 11 Home\r\n\r\nCamera N/A\r\n\r\nOptical Drive No.\r\n\r\nConnection ports 1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery, 3x USB 3\r\n\r\nWireless Wi-Fi 6(802.11ax)+Bluetooth 5.1 (Dual band) 2*2 (*BT version may chang\r\n\r\nBattery 90WHrs, 4S1P, 4-cell Li-ion\r\n\r\nBattery Life N/A\r\n\r\nColor Eclipse Gray\r\n\r\nDimensions W x D x H 35.4 x 25.9 x 2.26 ~ 2.72 cm.\r\n\r\nWeight 2.30 Kg.\r\n\r\nWarranty 3 Years OSS + 1 Year Perfect warranty\r\n\r\nOption Keyboard TH/EN', '฿41,990', '', 'img/brand/p_asus/Asus Notebook ROG Strix G15 GL543IM-HN135W.jpg'),
(7, 'ASUS', 'คอมพิวเตอร์/โน๊ตบุ๊ค', 'ASUS Notebook ROG STRIX G15 GL543IE-HN062W', 'ROG STRIX G15 GL543IE-HN062W\r\n\r\n.\r\n\r\nScreen Size 15.6 inch\r\n\r\nProcessor AMD Ryzen 7 4800H\r\n\r\nProcessor Speed 8C/16T, 12MB Cache, 4.2 GHz Max Boost\r\n\r\nDisplay FHD (1920 x 1080) 16:9\r\n\r\nMemory 16GB DDR4-3200 SO-DIMM\r\n\r\nStorage 512GB M.2 NVMe PCIe 3.0 SSD\r\n\r\nGraphics NVIDIA GeForce RTX 3050 Ti\r\n\r\nOperating System Windows 11 Home\r\n\r\nCamera N/A\r\n\r\nOptical Drive No\r\n\r\nConnection ports 1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery/ 3x USB 3.2 Gen 1 Type-A//1x 3.5mm Combo Audio Jack\r\n\r\nWireless Wi-Fi 6(802.11ax)+Bluetooth 5.1 (Dual band) 2*2(*BT version may change with OS upgrades.) -RangeBoost\r\n\r\nBattery 56WHrs, 4S1P, 4-cell Li-ion\r\n\r\nBattery Life N/A\r\n\r\nColor Eclipse Gray\r\n\r\nDimensions W x D x H 35.4 x 25.9 x 2.06 ~ 2.59 cm\r\n\r\nWeight 2.10 Kg...\r\n\r\nWarranty 3 Years OSS + 1 Year Perfect warranty\r\n\r\nOption Keyboard TH/EN', '฿36,990', '฿38,990', 'img/brand/p_asus/ASUS Notebook ROG STRIX G15 GL543IE-HN062W.jpg'),
(8, 'MSI', 'ส่วนเสริม', 'stealth trooper backpack For 15.6”-17.3”', 'For 15.6”-17.3”           ', '฿1,290', '', 'img/brand/p_msi/stealth trooper backpack For 15.6”-17.3”.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `t_id` int(255) NOT NULL,
  `t_date` varchar(50) NOT NULL,
  `t_time` varchar(50) NOT NULL,
  `t_price` varchar(50) NOT NULL,
  `t_file` varchar(255) NOT NULL,
  `m_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`t_id`, `t_date`, `t_time`, `t_price`, `t_file`, `m_id`) VALUES
(1, '12', '12', '12', '12', 1),
(2, '2022-08-02', '11:30', '65100', '', 1),
(3, '2022-08-05', '', '49916', 'img/transfer', 1),
(4, '2022-08-03', '10:15', '419436', 'img/transfer', 1),
(5, '2022-07-05', '18:21', '7837', 'img/transfer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
