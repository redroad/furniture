-- --------------------------------------------------------
-- Host:                         
-- Server version:               5.5.25 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-02-05 11:44:52
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
-- Dumping data for table furniture.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping data for table furniture.mapping_cart_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `mapping_cart_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapping_cart_product` ENABLE KEYS */;

-- Dumping data for table furniture.member: ~3 rows (approximately)
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT IGNORE INTO `member` (`id`, `name_display`, `name`, `last_name`, `email`, `password`, `gender`, `birthdate`, `phone`, `number`, `room`, `floor`, `building`, `village`, `group`, `alley`, `road`, `subdistrict`, `district`, `province`, `zipcode`) VALUES
	(1, 'first ', 'name', 'lastname', 'email', 'pass', 'gender', '1998-01-10', '111111', 'number', 'room', 'floor', 'building', 'vill', 'moo', 'soi', 'road', 'sub', 'dis', 'prov', 'zip'),
	(2, 'User', 'user1', 'useruser', 'mail@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'F', '1997-02-09', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(3, 'etimzaa', 'ss', 'aaaaa', 'aaaa', '81dc9bdb52d04dc20036dbd8313ed055', 'F', '2001-01-16', '', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;

-- Dumping data for table furniture.order_status: ~4 rows (approximately)
/*!40000 ALTER TABLE `order_status` DISABLE KEYS */;
INSERT IGNORE INTO `order_status` (`id`, `status`) VALUES
	(1, 'สั่งจอง'),
	(2, 'ชำระแล้ว'),
	(3, 'ยกเลิก'),
	(4, 'จัดส่งแล้ว');
/*!40000 ALTER TABLE `order_status` ENABLE KEYS */;

-- Dumping data for table furniture.product: ~49 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT IGNORE INTO `product` (`id`, `product_name`, `product_detail`, `price`, `img`, `available`, `type_id`) VALUES
	(15, 'EASTER', 'EASTER โซฟา 3+2 ที่นั่ง พร้อม ออตโต้แมน ON  สีส้ม', 47700, '110017520.jpg', 100, 4),
	(16, 'GALA', 'GALA เก้าอี้พักผ่อน(PU) BN  สีน้ำตาล', 6990, '110016840.jpg', 50, 4),
	(17, 'CHEVY', 'CHEVY เก้าอี้พักผ่อน รุ่นเชวี่  สีเทา', 7900, '110016742.jpg', 35, 4),
	(18, 'BRITISH', 'BRITISH โซฟาผ้า 2 ที่นั่ง RD  สีแดง', 22000, '110019914.jpg', 45, 4),
	(19, 'PARASSO', 'PARASSO โซฟาผ้า 2 ที่นั่ง BE  สีเบจ', 21400, '110018583.jpg', 100, 4),
	(20, 'BACHELOR ', 'BACHELOR โซฟาผ้ามุมขวา DGY  สีเทาเข้ม', 27900, '110019869.jpg', 32, 4),
	(21, 'PERCY', 'PERCY โซฟารูปตัวแอล รุ่นเพอร์ซี่ย์  สีเทา', 15900, '110017872.jpg', 30, 4),
	(22, 'CONCETTI', 'CONCETTI โซฟาผ้าเข้ามุม GY  สีเทา', 49500, '110017070.jpg', 50, 4),
	(23, 'TIESTO ', 'TIESTO โซฟาหนัง 3 ที่นั่ง GY  สีเทา', 29000, '110020041.jpg', 10, 4),
	(24, 'TAGA ', 'TAGA เก้าอี้ เฟรมโคร/hi-gloss สีBK  สีดำ', 2000, '110011791.jpg', 100, 1),
	(25, 'BLENDA', 'BLENDAเก้าอี้ ขาไม้ยางCF/หุ้มBi-castสีWT  สีขาว', 3250, '110012936.jpg', 50, 1),
	(26, 'FUJI', 'FUJI เก้าอี้ เบาะกำมะหยี่ สีRD  สีแดง', 3050, '110007168.jpg', 5, 1),
	(27, 'VICTORIA', 'VICTORIA เก้าอี้ทานอาหาร BE  สีสีเบจ', 3900, '110016972.jpg', 10, 1),
	(28, 'PEARL', 'PEARL เก้าอี้หุ้มเบาะPVCครีม สีBW  สีแบล็ควอลนัท', 2450, '110005918.jpg', 11, 1),
	(29, 'ARTHUR', 'ARTHUR เก้าอี้ทานอาหาร strip BE  สีเบจ', 4290, '110018803.jpg', 20, 1),
	(30, 'ALEXIS', 'ALEXIS เก้าอี้ทานอาหาร DBN  สีน้ำตาลเข้ม', 2990, '110020114.jpg', 50, 1),
	(31, 'PUMA', 'PUMA เก้าอี้หุ้มไวนิล สี WT  สีขาว', 3790, '110019540.jpg', 30, 1),
	(32, 'BISTROT', 'BISTROT เก้าอี้ทานอาหารoak  สีโอ๊ค', 3490, '110018425.jpg', 20, 1),
	(33, 'AUSTIN/L', 'AUSTIN/L เก้าอี้ทานอาหารหนังแข็ง สีดำ  สีดำ', 2990, '110018418.jpg', 15, 1),
	(34, 'CASTELLO', 'CASTELLO เตียง 3.5 ฟุต รุ่นคาสเทลโล่  สีอิตาเลียนโอ๊ค', 7500, '1100451.jpg', 30, 2),
	(35, 'FELIX', 'FELIX เตียง 6 FT หุ้มbi-cast สีWT  สีขาว', 15990, '110012878.jpg', 7, 2),
	(36, 'LEXIS', 'LEXIS เตียง 6 FT สีIO  สีอิตาเลียน โอ๊ค', 9800, '110015860.jpg', 20, 2),
	(37, 'LEXIS', 'LEXIS เตียง 5 FT สีWT  สีขาว', 8500, '110017498.jpg', 5, 2),
	(38, 'RIVA', 'RIVA เตียง 5 FT สีWT  สีขาว', 9300, '110013596.jpg', 5, 2),
	(39, 'BLOC', 'BLOC เตียง 5 FT หุ้มbi-cast สีWT  สีขาว', 16500, '110017588.jpg', 7, 2),
	(40, 'CAVETTO', 'CAVETTO เตียง 6 FT สีES  สีเอสเพรสโซ๋', 12800, '110017904.jpg', 3, 2),
	(41, 'HAYDEN', 'HAYDEN เตียง 6 FT สีWT#01  สีขาว', 13900, '110016662.jpg', 9, 2),
	(42, 'EMPORIO ', 'EMPORIO เตียง 6 FT สีCR#082F+พื้น  สีครีม', 18500, '110015710.jpg', 10, 2),
	(43, 'KENSINGTON', 'KENSINGTON เตียง 6 FT สีCF  สีคอฟฟี่', 13800, '110018009.jpg', 5, 2),
	(44, 'AGILA ', 'AGILA โต๊ะกลาง 80 cm โคร/topเหล็กสีBK  สีดำ', 2490, '110007486.jpg', 5, 3),
	(45, 'BENNING', 'BENNING โต๊ะกลาง 90 cmโคร/topกระจกใส  สีใสโปร่ง', 4290, '110010733.jpg', 10, 3),
	(46, 'BRIXTON/110', 'BRIXTON/110 โต๊ะกลาง CG/BK', 12000, '110018913.jpg', 10, 3),
	(47, 'BERTRAMS ', 'BERTRAMS โต๊ะกลางไม้สัก NT/Top Glass', 9900, '110017512.jpg', 10, 3),
	(48, 'BERGEN ', 'BERGEN โต๊ะกลาง 90 cm top glass#WN  สีวอลนัท', 7290, '110017098.jpg', 10, 3),
	(49, 'MAGNA', 'MAGNA โต๊ะกลาง 130cm กระจก/ขาโครม', 4990, '110017726.jpg', 10, 3),
	(50, 'NOTTE', 'NOTTE coffee table hi-gloss WT/WN  สีขาว-วอลนัท', 8490, '110016472.jpg', 10, 3),
	(51, 'NOIR', 'NOIR โต๊ะกลาง/120 HG สี WT  สีขาว', 12000, '110019594.jpg', 10, 3),
	(52, 'VOGUE', 'VOGUE โต๊ะกลาง 130 cm กระจก/หนังBN#C52  สีน้ำตาล', 7990, '110013234.jpg', 10, 3),
	(53, 'TRIPLE', 'TRIPLE โต๊ะกลาง 120 cm Higloss สีWT  สีขาว', 8500, '110011794.jpg', 10, 3),
	(54, 'ANASTASIA/2 ', 'ANASTASIA/2 ตู้โชว์ 2 บาน80cm สี WT#01  สีขาว', 19800, '110019465.jpg', 10, 6),
	(55, 'ANASTASIA', 'ANASTASIA ตู้เสื้อผ้า4บาน/180 สีWT#01  สีขาว', 25700, '110018315.jpg', 10, 5),
	(56, 'ANASTASIA', 'ANASTASIA ตู้ 6 ลิ้นชัก 80cm สีWT#01  สีขาว', 11900, '110019178.jpg', 10, 5),
	(57, 'BERRY', 'BERRY ตู้โชว์ 45 cm สีBW  สีแบล็ควอลนัท', 4890, '110009403.jpg', 10, 6),
	(58, 'Bran 4 Door', 'ตู้เสื้อผ้า 4 บาน รุ่นบลังค์', 36120, '1100668.jpg', 10, 5),
	(59, 'BISCOTTA', 'BISCOTTA ตู้เสื้อผ้าบานสไลด์ รุ่นบิสคอทต้า  สีแซนด์สโตน', 33900, '1100456.jpg', 10, 5),
	(60, 'FINALE', 'FINALE ตู้divider 150 cm สีWT  สีขาว', 9500, '110013893.jpg', 10, 6),
	(61, 'LINPING', 'LINPING ตู้เสื้อผ้า 2 บาน/80 สีGN  สีเขียว', 9950, '110018498.jpg', 10, 5),
	(63, 'LUCENT/40 ตู้โชว์ CG', 'LUCENT/40 ตู้โชว์ CG', 11000, '110019681.jpg', 10, 6),
	(64, 'MILLY/L ', 'MILLY/L ตู้โชว์ 70 cm สีWT  สีขาว', 11700, '110016202.jpg', 10, 6);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping data for table furniture.product_type: ~6 rows (approximately)
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT IGNORE INTO `product_type` (`id`, `type_name`) VALUES
	(1, 'chair'),
	(2, 'cot'),
	(3, 'table'),
	(4, 'sofa'),
	(5, 'wardrobe'),
	(6, 'showcase');
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
