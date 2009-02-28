-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2009 at 12:55 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(2) NOT NULL,
  `is_allowed_purchase` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `is_allowed_purchase`) VALUES
(1, 'United States', 'US', 1),
(2, 'Canada', 'CA', 1),
(3, 'Mexico', 'MX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `is_newsletter` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `created`, `modified`, `firstname`, `lastname`, `email`, `phone`, `password`, `ip`, `is_newsletter`, `is_active`) VALUES
(1, '2009-02-20 20:38:17', '2009-02-20 20:38:20', 'Kyle', 'Spearrin', 'kyle@websolvents.com', '9048604263', '123456', '111.111.11.11', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE IF NOT EXISTS `customer_addresses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) unsigned NOT NULL,
  `country_id` int(11) unsigned NOT NULL,
  `region_id` int(11) unsigned NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `customer_id`, `country_id`, `region_id`, `firstname`, `lastname`, `company`, `address_1`, `address_2`, `city`, `postal_code`) VALUES
(1, 1, 1, 1, 'Kyle', 'Spearrin', 'WebSolvents', '12131 Sunowa Springs Trail', NULL, 'Bryceville', '32009');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_class_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `sku` varchar(20) NOT NULL,
  `weight` float(12,4) NOT NULL DEFAULT '0.0000',
  `new_from` date DEFAULT NULL,
  `new_to` date DEFAULT NULL,
  `price` float(12,2) NOT NULL DEFAULT '0.00',
  `is_stocked` tinyint(1) NOT NULL DEFAULT '1',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `is_infinite_quantity` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_shippable` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `tax_class_id`, `created`, `modified`, `title`, `short_description`, `description`, `sku`, `weight`, `new_from`, `new_to`, `price`, `is_stocked`, `quantity`, `is_infinite_quantity`, `meta_keywords`, `meta_description`, `is_shippable`, `is_active`) VALUES
(1, 0, '2009-02-24 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use. new one.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-28', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(2, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(3, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(4, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 5.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(5, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(6, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 0, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(9, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(10, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(11, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(12, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(13, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(14, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'HP Laptop', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 0, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(15, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1),
(16, 0, '2009-02-19 23:10:27', '2009-02-20 01:04:47', 'Dell PC', 'This is a Dell PC. It''s great for all to use.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus. Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh. Proin tincidunt tortor non nibh. Praesent augue. Etiam aliquam ipsum non nisi. Suspendisse potenti. Aliquam mi erat, tincidunt sed, varius volutpat, sollicitudin id, nisi.</p>\r\n<p>Ut eget diam sit amet sem venenatis dapibus. Sed suscipit ante sed dui. Integer at leo eget purus viverra fermentum. Proin fringilla. Morbi ornare dolor sit amet nunc. Suspendisse sed odio. Phasellus lorem. Morbi justo. Nulla interdum. Nulla facilisi. Mauris interdum. Quisque eu justo a diam vestibulum fringilla. Ut lobortis, magna ut convallis tempus, urna neque pretium ipsum, eget sodales ligula dolor eget ligula. Etiam nec ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, suscipit in, eleifend sit amet, tristique a, odio. Nulla fermentum sollicitudin ipsum. Nulla dictum scelerisque nibh. Donec sed justo blandit mauris fermentum molestie.</p>', '111222', 5.0000, '2009-02-19', '2009-02-19', 2.00, 1, 22, 0, 'dell, pc, laptop', 'THis is a Dell Laptop', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE IF NOT EXISTS `product_attributes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `title`, `is_active`) VALUES
(1, 'Color', 1),
(2, 'Size', 1),
(3, 'Manufacturer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes_products`
--

CREATE TABLE IF NOT EXISTS `product_attributes_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_attribute_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product_attributes_products`
--

INSERT INTO `product_attributes_products` (`id`, `product_attribute_id`, `product_id`, `value`) VALUES
(9, 3, 1, 'Dell'),
(8, 2, 1, 'Large'),
(7, 1, 1, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `lft` int(11) unsigned DEFAULT NULL,
  `rght` int(11) unsigned DEFAULT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=20 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `lft`, `rght`, `image_filename`, `name`, `description`, `meta_keywords`, `meta_description`, `is_active`) VALUES
(6, NULL, 9, 10, '', 'Hard Drives', 'Big hard drives.', 'hard, drives', 'these are some hard drives.', 1),
(4, NULL, 1, 8, '', 'Computers', 'Here are some computers.', NULL, NULL, 1),
(5, 4, 2, 5, 'cc-logo.jpg', 'Laptops', 'Laptops.', NULL, NULL, 1),
(7, 4, 6, 7, '', 'PC''s', 'these are the pc''s', NULL, NULL, 1),
(8, NULL, 11, 12, '', 'Processors', 'Fast processors!', NULL, NULL, 1),
(9, 5, 3, 4, '', 'Dell''s', 'Dell laptops', NULL, NULL, 1),
(10, NULL, 13, 14, '', 'Testing', '', NULL, NULL, 1),
(11, NULL, 15, 16, '', 'test2', '', NULL, NULL, 1),
(12, NULL, 17, 18, '', 'another cat', '', NULL, NULL, 1),
(13, NULL, 19, 20, '', 'and another', '', NULL, NULL, 1),
(14, NULL, 21, 22, '', 'yep another', '', NULL, NULL, 1),
(19, NULL, 23, 24, '', 'testing1', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories_products`
--

CREATE TABLE IF NOT EXISTS `product_categories_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `product_category_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=38 ;

--
-- Dumping data for table `product_categories_products`
--

INSERT INTO `product_categories_products` (`id`, `product_id`, `product_category_id`) VALUES
(17, 1, 7),
(16, 1, 5),
(19, 1, 9),
(20, 2, 7),
(21, 3, 7),
(22, 4, 7),
(23, 5, 7),
(24, 6, 7),
(25, 7, 7),
(26, 7, 7),
(27, 9, 7),
(28, 10, 7),
(29, 11, 7),
(30, 12, 7),
(31, 13, 7),
(32, 14, 7),
(33, 15, 7),
(34, 16, 7),
(37, 14, 19);

-- --------------------------------------------------------

--
-- Table structure for table `product_discounts`
--

CREATE TABLE IF NOT EXISTS `product_discounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `discount` float(12,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_discounts`
--


-- --------------------------------------------------------

--
-- Table structure for table `product_downloads`
--

CREATE TABLE IF NOT EXISTS `product_downloads` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_downloads`
--

INSERT INTO `product_downloads` (`id`, `title`, `filename`) VALUES
(1, 'eBook "PCs for Dummies"', 'dummies.zip'),
(2, 'eBook "Macs for Dummies"', 'macs.zip');

-- --------------------------------------------------------

--
-- Table structure for table `product_downloads_products`
--

CREATE TABLE IF NOT EXISTS `product_downloads_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_download_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_downloads_products`
--


-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `title`, `filename`, `is_featured`) VALUES
(4, 2, 'Dell PC', 'dell2.jpg', 0),
(2, 1, 'dell laptop', 'dell2.jpg', 0),
(3, 1, 'another look', 'dell3.jpg', 1),
(5, 2, '', 'dell3.jpg', 1),
(6, 3, '', 'dell2.jpg', 0),
(7, 3, '', 'dell2.jpg', 1),
(8, 4, '', 'dell2.jpg', 1),
(9, 4, '', 'dell2.jpg', 0),
(10, 4, '', 'dell2.jpg', 0),
(11, 4, '', 'dell2.jpg', 0),
(12, 5, '', 'dell2.jpg', 1),
(13, 6, '', 'dell2.jpg', 1),
(14, 7, '', 'dell2.jpg', 1),
(15, 8, '', 'dell2.jpg', 1),
(16, 8, '', 'dell2.jpg', 1),
(17, 9, '', 'dell2.jpg', 1),
(18, 10, '', 'dell2.jpg', 1),
(19, 11, '', 'dell2.jpg', 1),
(20, 12, '', 'dell2.jpg', 1),
(21, 13, '', 'dell2.jpg', 1),
(22, 14, '', 'dell2.jpg', 1),
(23, 15, '', 'dell2.jpg', 1),
(24, 16, '', 'dell2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE IF NOT EXISTS `product_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`id`, `product_id`, `title`) VALUES
(1, 1, 'Color'),
(2, 1, 'Charger');

-- --------------------------------------------------------

--
-- Table structure for table `product_option_values`
--

CREATE TABLE IF NOT EXISTS `product_option_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_option_id` int(11) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  `price` float(12,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_option_values`
--

INSERT INTO `product_option_values` (`id`, `product_option_id`, `value`, `price`) VALUES
(1, 1, 'Blue', 15.00),
(2, 1, 'Pink', 10.00),
(3, 1, 'Black', -4.01),
(4, 2, 'Yes', 50.00),
(5, 2, 'No', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE IF NOT EXISTS `product_reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT '0',
  `review` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=50 ;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `created`, `name`, `rating`, `review`, `is_active`) VALUES
(1, 1, '2009-02-20 16:57:51', 'John Doe', 4, '<p>This was the best item ever. I really lied it.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus.</p>\r\n<p>Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh.</p>', 1),
(2, 1, '2009-02-10 17:00:02', 'Bill Johnny', 2, '<p>This was the best item ever. I really lied it.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus.</p>\r\n<p>Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh.</p>', 1),
(3, 1, '2009-02-02 17:00:02', 'Bill Johnny', 1, '<p>This was the best item ever. I really lied it.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis elit ac enim. Praesent orci. Etiam pharetra, magna eget vehicula pellentesque, elit justo tincidunt libero, vitae rhoncus sapien tellus nec purus.</p>\r\n<p>Quisque viverra. Proin aliquam, felis id laoreet mollis, risus lacus fermentum purus, quis rutrum velit orci pellentesque elit. Duis tempus nulla vel orci. Donec iaculis sem non nibh.</p>', 1),
(4, 4, '2009-02-25 22:25:29', 'Joe Bob', 1, '<p>Great Product!!!</p>', 1),
(5, 2, '2009-02-25 23:18:47', 'Cool Man', 1, '<p>cool</p>', 1),
(6, 2, '2009-02-25 23:19:05', 'Bill Johnny', 2, '<p>great deal!</p>', 1),
(7, 1, '2009-02-25 23:19:48', 'Bill Johnny', 1, '<p>Awesome stuff!</p>', 1),
(8, 15, '2009-02-25 23:22:46', 'Cool Man', 1, '<p>great stuff!</p>', 1),
(9, 0, '2009-02-27 22:28:11', 'Kyle', 3, 'Not bad.', 0),
(10, 0, '2009-02-27 22:33:10', 'Kyle', 2, 'Woohoo!', 0),
(11, 1, '2009-02-27 22:42:14', 'Kyle S', 5, 'This is a good product.', 1),
(12, 1, '2009-02-27 22:48:31', 'Kyle S', 2, 'This is a good product.2222', 0),
(13, 1, '2009-02-27 22:48:32', 'Kyle S', 2, 'This is a good product.2222', 0),
(14, 1, '2009-02-27 22:49:37', 'Johnny A', 1, 'review text', 0),
(15, 1, '2009-02-27 22:49:37', 'Johnny A', 1, 'review text', 0),
(16, 1, '2009-02-27 23:04:59', 'Johnny A', 1, 'review text', 0),
(17, 1, '2009-02-27 23:15:42', 'Joe Joe', 1, 'this is my review', 0),
(18, 1, '2009-02-27 23:15:44', 'Joe Joe', 1, 'this is my review', 0),
(19, 1, '2009-02-27 23:15:45', 'Joe Joe', 1, 'this is my review', 0),
(20, 1, '2009-02-27 23:15:45', 'Joe Joe', 1, 'this is my review', 0),
(21, 1, '2009-02-27 23:15:45', 'Joe Joe', 1, 'this is my review', 0),
(22, 1, '2009-02-27 23:17:55', '1111', 1, '111', 0),
(23, 1, '2009-02-27 23:18:40', '222', 2, '22222222', 0),
(24, 1, '2009-02-27 23:19:11', '111', 5, '1', 0),
(25, 1, '2009-02-27 23:32:17', '22222222', 1, '333333333333', 0),
(26, 1, '2009-02-27 23:43:59', 'Jimmy Bobby', 2, 'Great laptop!', 0),
(27, 1, '2009-02-27 23:46:29', 'Kyle Jimmy Bobby', 3, 'sss', 0),
(28, 1, '2009-02-27 23:50:16', 'me', 1, 'me', 0),
(29, 1, '2009-02-27 23:58:49', 'Kyle', 2, 'sss', 0),
(30, 1, '2009-02-28 00:00:53', '111', 1, '111', 0),
(31, 1, '2009-02-28 00:05:54', '12123123', 2, '21312312', 0),
(32, 1, '2009-02-28 00:07:03', '11212', 1, '213123', 0),
(33, 1, '2009-02-28 00:13:32', 'fgsdfgsdfg', 3, 'sdfgsdfg', 0),
(34, 1, '2009-02-28 00:14:57', 'werewr', 5, 'qwerqwer', 0),
(35, 1, '2009-02-28 00:15:43', 'sdfgdsfgsdfg', 5, 'sdfggg', 0),
(36, 1, '2009-02-28 00:20:29', 'cvxbxbcvxb', 3, 'cvxbxcvbxcvbv', 0),
(37, 1, '2009-02-28 00:24:25', 'sdfasfdg', 5, 'dfsgdfg', 0),
(38, 1, '2009-02-28 00:25:16', 'cc', 2, 'cccccccccccc', 0),
(39, 1, '2009-02-28 00:26:33', 'dsfsdfsdg', 2, 'aaa', 0),
(40, 1, '2009-02-28 00:28:55', 'sdfasdfasdf', 5, 'adsfasdf', 0),
(41, 1, '2009-02-28 00:29:21', 'sdfgsdfgs', 3, 'dfgsdfgsdfg', 0),
(42, 1, '2009-02-28 00:30:00', 'sdfdfasdf', 2, 'asdfasdf', 0),
(43, 1, '2009-02-28 00:30:38', 'asdfasdfasd', 5, 'fasdfasdf', 0),
(44, 1, '2009-02-28 00:37:10', 'dvasdfs', 5, 'dfasdfasdf', 0),
(45, 1, '2009-02-28 00:39:16', 'fsdgsfdgfd', 3, 'gsdfgsfdg', 0),
(46, 1, '2009-02-28 00:40:41', 'asdfasdf', 5, 'asdfasdf', 0),
(47, 1, '2009-02-28 00:42:37', 'sdfgsdfg', 3, 'sdfgsdfgsdfg', 0),
(48, 1, '2009-02-28 00:51:15', 'afasdfhasdlkfj', 4, 'asdfasdfasdf', 0),
(49, 1, '2009-02-28 00:51:42', 'Mark', 2, 'asdfasdf mark is gay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(2) NOT NULL,
  `is_allowed_purchase` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `country_id`, `name`, `code`, `is_allowed_purchase`) VALUES
(1, 1, 'Florida', 'FL', 1),
(2, 1, 'Georgia', 'GA', 1),
(3, 1, 'California', 'CA', 1),
(4, 1, 'South Carolina', 'SC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes`
--

CREATE TABLE IF NOT EXISTS `tax_classes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_classes`
--

INSERT INTO `tax_classes` (`id`, `title`, `description`) VALUES
(1, 'Taxable Goods', 'Goods that are taxable.');

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes_tax_rates`
--

CREATE TABLE IF NOT EXISTS `tax_classes_tax_rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_class_id` int(11) unsigned NOT NULL,
  `tax_rate_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_classes_tax_rates`
--

INSERT INTO `tax_classes_tax_rates` (`id`, `tax_class_id`, `tax_rate_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE IF NOT EXISTS `tax_rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) unsigned NOT NULL,
  `region_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `rate` float(12,4) NOT NULL DEFAULT '0.0000',
  `zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_rates`
--

INSERT INTO `tax_rates` (`id`, `country_id`, `region_id`, `title`, `rate`, `zip`) VALUES
(1, 1, 1, 'Florida Tax', 7.0000, NULL);
