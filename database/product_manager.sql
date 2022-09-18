-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2022 at 06:23 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `del`) VALUES
(1, 'xe hơi', 0),
(2, 'Vi mạch điện tử', 0),
(3, 'Máy tính', 0),
(4, 'Dược phẩm', 0),
(5, 'Dầu mỏ', 0),
(6, 'Xăng dầu', 0),
(7, 'Xe tải', 0),
(8, 'Phụ tùng xe hơi', 0),
(9, 'Thiết bị y tế', 0),
(10, 'Trang sức', 0),
(26, 'Vàng', 0),
(27, 'Điện thoại', 0),
(28, 'Kim cương', 0),
(29, 'Đồ chơi', 0),
(30, 'Máu động vật', 0),
(31, 'Máy bay', 0),
(32, 'Dây cách điện', 0),
(33, 'Thiết bị phát thanh truyền hình', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` char(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` int(2) NOT NULL,
  `image` char(20) NOT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_products_category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image`, `del`) VALUES
('sp00000101', 'Insight', 1, 'img1.png', 0),
('sp00000201', 'Elantra', 1, 'img2.png', 0),
('sp00000301', 'Forte', 1, 'img3.png', 0),
('sp00000401', 'Niro Hybird', 1, 'img4.png', 0),
('sp00000501', 'Crosstrek', 1, 'img5.png', 0),
('sp00000601', 'WRX', 1, 'img6.png', 0),
('sp00000701', 'Sonata', 1, 'img7.png', 0),
('sp00000801', 'Optima', 1, 'img8.png', 0),
('sp00000901', 'Legacy', 1, 'img9.png', 0),
('sp00001001', 'Outback', 1, 'img10.png', 0),
('sp00001101', 'Camry', 1, 'img11.png', 0),
('sp00001201', 'Avalon', 1, 'img12.png', 0),
('sp00001301', 'G70', 1, 'img13.png', 0),
('sp00001401', 'ES', 1, 'img14.png', 0),
('sp00001501', '5 Series', 1, 'img15.png', 0),
('sp00001601', 'G80', 1, 'img16.png', 0),
('sp00001701', 'G90', 1, 'img17.png', 0),
('sp00001801', 'Kona', 1, 'img18.png', 0),
('sp00001901', 'CX-5', 1, 'img19.png', 0),
('sp00002001', 'Santa Fe', 1, 'img20.png', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_category` FOREIGN KEY (`category`) REFERENCES `categorys` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
