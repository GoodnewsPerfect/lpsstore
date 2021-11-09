/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.5.41 : Database - zendstore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zendstore` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `zendstore`;

/*Table structure for table `active_pages` */

DROP TABLE IF EXISTS `active_pages`;

CREATE TABLE `active_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `active_pages` */

insert  into `active_pages`(`id`,`name`,`enabled`) values (1,'blog',1);

/*Table structure for table `bank_accounts` */

DROP TABLE IF EXISTS `bank_accounts`;

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bank_accounts` */

/*Table structure for table `blog_posts` */

DROP TABLE IF EXISTS `blog_posts`;

CREATE TABLE `blog_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `blog_posts` */

insert  into `blog_posts`(`id`,`image`,`url`,`time`) values (1,'wd2.jpg','My_First_Experience_at_the_Loveworld_Partnership_Shop_1',1636120203);

/*Table structure for table `blog_translations` */

DROP TABLE IF EXISTS `blog_translations`;

CREATE TABLE `blog_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `blog_translations` */

insert  into `blog_translations`(`id`,`title`,`description`,`abbr`,`for_id`) values (1,'','','bg',1),(2,'My First Experience at the Loveworld Partnership Shop.','<p>My experience here on this platform so has has been beautiful.</p>\r\n','en',1),(3,'','','gr',1);

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `brands` */

/*Table structure for table `confirm_links` */

DROP TABLE IF EXISTS `confirm_links`;

CREATE TABLE `confirm_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` char(32) NOT NULL,
  `for_order` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `confirm_links` */

/*Table structure for table `cookie_law` */

DROP TABLE IF EXISTS `cookie_law`;

CREATE TABLE `cookie_law` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cookie_law` */

/*Table structure for table `cookie_law_translations` */

DROP TABLE IF EXISTS `cookie_law_translations`;

CREATE TABLE `cookie_law_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `learn_more` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`abbr`,`for_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cookie_law_translations` */

/*Table structure for table `discount_codes` */

DROP TABLE IF EXISTS `discount_codes`;

CREATE TABLE `discount_codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `valid_from_date` int(10) unsigned NOT NULL,
  `valid_to_date` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-enabled, 0-disabled',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `discount_codes` */

/*Table structure for table `history` */

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `history` */

/*Table structure for table `keys` */

DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `keys` */

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `abbr` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currencyKey` varchar(5) NOT NULL,
  `flag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `languages` */

insert  into `languages`(`id`,`abbr`,`name`,`currency`,`currencyKey`,`flag`) values (1,'bg','bulgarian','лв','BGN','bg.jpg'),(2,'en','english','$','USD','en.jpg'),(3,'gr','greece','EUR','EUR','gr.png');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL COMMENT 'point to public_users ID',
  `products` text NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'viewed status is change when change processed status',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `orders` */

/*Table structure for table `orders_clients` */

DROP TABLE IF EXISTS `orders_clients`;

CREATE TABLE `orders_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `orders_clients` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folder` int(10) unsigned DEFAULT NULL COMMENT 'folder with images',
  `image` varchar(255) NOT NULL,
  `time` int(10) unsigned NOT NULL COMMENT 'time created',
  `time_update` int(10) unsigned NOT NULL COMMENT 'time updated',
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `shop_categorie` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `procurement` int(10) unsigned NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `position` int(10) unsigned NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id`,`folder`,`image`,`time`,`time_update`,`visibility`,`shop_categorie`,`quantity`,`procurement`,`in_slider`,`url`,`virtual_products`,`brand_id`,`position`,`vendor_id`) values (1,1635418146,'rolo.jpg',1635418200,1636119512,1,6,20,0,1,'Gold_1',NULL,NULL,11,0),(2,1636114486,'red_dress.jpg',1636114806,1636114887,1,5,10,0,1,'children_2',NULL,NULL,1,0),(3,1636115006,'pink_dress.jpg',1636115068,0,1,5,19,0,1,'Pink_Top_3',NULL,NULL,2,0),(4,1636115244,'back_view_men_shirt.jpg',1636115364,0,1,8,5,0,1,'Men_Native_4',NULL,NULL,3,0),(5,1636115479,'women_dress1.jpg',1636115532,0,1,4,30,0,1,'women_dress_5',NULL,NULL,4,0),(6,1636115588,'women_dress2.jpg',1636115672,0,1,7,30,0,0,'women_dress_6',NULL,NULL,5,0),(7,1636115772,'women_dress3.jpg',1636115870,0,1,7,10,0,1,'women_long_dress_7',NULL,NULL,6,0),(8,1636115930,'men_complete_suit.jpg',1636115992,0,1,8,5,0,1,'Men_Suit_8',NULL,NULL,7,0),(9,1636116066,'kichen1.jpg',1636116118,1636119554,1,10,5,0,1,'utensils_9',NULL,NULL,12,0),(10,1636116195,'kitchen2.jpg',1636116251,0,1,10,5,0,1,'kitchen_set_10',NULL,NULL,8,0),(11,1636116356,'Back-to-School-Kit-Example.jpg',1636116412,0,1,9,30,0,1,'Back_to_school_kit_11',NULL,NULL,9,0),(12,1636116420,'download.jpg',1636116509,1636120083,1,9,10,0,0,'school_items_12',NULL,NULL,16,0),(13,1636119219,'rollon1.jpg',1636119295,1636119586,1,6,10,0,1,'Body_Spray_for_men_13',NULL,NULL,14,0),(14,1636119902,'rollon2.jpg',1636119985,1636120052,1,6,10,0,1,'body_spray_14',NULL,NULL,15,0);

/*Table structure for table `products_translations` */

DROP TABLE IF EXISTS `products_translations`;

CREATE TABLE `products_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `basic_description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `old_price` varchar(20) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

/*Data for the table `products_translations` */

insert  into `products_translations`(`id`,`title`,`description`,`basic_description`,`price`,`old_price`,`abbr`,`for_id`) values (1,'','','','','','bg',1),(2,'women Body Spray','<p>48hours body spray or women</p>\r\n','','30','','en',1),(3,'','','','','','gr',1),(4,'','','','','','bg',2),(5,'children','<p>children clothes</p>\r\n','','10','15','en',2),(6,'','','','','','gr',2),(7,'','','','','','bg',3),(8,'Pink Top','<p>Pink top for girls 4-5years</p>\r\n','','10','10','en',3),(9,'','','','','','gr',3),(10,'','','','','','bg',4),(11,'Men Native','<p>Complete men native in different sizes.</p>\r\n','','25','20','en',4),(12,'','','','','','gr',4),(13,'','','','','','bg',5),(14,'women dress','<h4>Fashion Woman Elegant O-neck Puffy Hand Dres</h4>\r\n','','15','','en',5),(15,'','','','','','gr',5),(16,'','','','','','bg',6),(17,'women dress','<h4>Spliced O Neck Dress - Multicolour</h4>\r\n','','10','','en',6),(18,'','','','','','gr',6),(19,'','','','','','bg',7),(20,'women long dress','<h4>Alphabet Dress</h4>\r\n','','10','','en',7),(21,'','','','','','gr',7),(22,'','','','','','bg',8),(23,'Men Suit','<h4>Men\'s Office Suit - Grey</h4>\r\n','','25','','en',8),(24,'','','','','','gr',8),(25,'','','','','','bg',9),(26,'utensils','<h4>Kitchen Essentials Bundle</h4>\r\n','','30','','en',9),(27,'','','','','','gr',9),(28,'','','','','','bg',10),(29,'kitchen set','<p>&nbsp;</p>\r\n\r\n<p>Kitchen Bundle</p>\r\n','','30','','en',10),(30,'','','','','','gr',10),(31,'','','','','','bg',11),(32,'Back to school kit','<p>Back to school complete kit</p>\r\n','','25','','en',11),(33,'','','','','','gr',11),(34,'','','','','','bg',12),(35,'school items','<p>Geddes school supplies.</p>\r\n','','8','','en',12),(36,'','','','','','gr',12),(37,'','','','','','bg',13),(38,'Body Spray for men','<p>24hours body spray for men</p>\r\n','','5','','en',13),(39,'','','','','','gr',13),(40,'','','','','','bg',14),(41,'body spray','<p>48hours unisex body spray</p>\r\n','','10','15','en',14),(42,'','','','','','gr',14);

/*Table structure for table `seo_pages` */

DROP TABLE IF EXISTS `seo_pages`;

CREATE TABLE `seo_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `seo_pages` */

insert  into `seo_pages`(`id`,`name`) values (1,'home'),(2,'checkout'),(3,'contacts'),(4,'blog');

/*Table structure for table `seo_pages_translations` */

DROP TABLE IF EXISTS `seo_pages_translations`;

CREATE TABLE `seo_pages_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `page_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `seo_pages_translations` */

/*Table structure for table `shop_categories` */

DROP TABLE IF EXISTS `shop_categories`;

CREATE TABLE `shop_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_for` int(11) NOT NULL,
  `position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `shop_categories` */

insert  into `shop_categories`(`id`,`sub_for`,`position`) values (1,0,0),(2,0,0),(3,0,0),(4,0,0),(5,0,0),(6,0,0),(7,0,0),(8,0,0),(9,0,0),(10,0,0);

/*Table structure for table `shop_categories_translations` */

DROP TABLE IF EXISTS `shop_categories_translations`;

CREATE TABLE `shop_categories_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `shop_categories_translations` */

insert  into `shop_categories_translations`(`id`,`name`,`abbr`,`for_id`) values (1,'','bg',1),(2,'test','en',1),(3,'','gr',1),(10,'','bg',4),(11,'furniture','en',4),(12,'','gr',4),(13,'','bg',5),(14,'Children Clothes','en',5),(15,'','gr',5),(16,'','bg',6),(17,'Deodorants','en',6),(18,'','gr',6),(19,'','bg',7),(20,'Women Clothes','en',7),(21,'','gr',7),(22,'','bg',8),(23,'Men Clothes','en',8),(24,'','gr',8),(25,'','bg',9),(26,'Back to School Items','en',9),(27,'','gr',9),(28,'','bg',10),(29,'Kitchen Utensils','en',10),(30,'','gr',10);

/*Table structure for table `subscribed` */

DROP TABLE IF EXISTS `subscribed`;

CREATE TABLE `subscribed` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subscribed` */

/*Table structure for table `textual_pages_tanslations` */

DROP TABLE IF EXISTS `textual_pages_tanslations`;

CREATE TABLE `textual_pages_tanslations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `textual_pages_tanslations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'notifications by email',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`notify`,`last_login`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','your@email.com',0,1636106002);

/*Table structure for table `users_public` */

DROP TABLE IF EXISTS `users_public`;

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users_public` */

insert  into `users_public`(`id`,`name`,`email`,`phone`,`password`,`created`) values (1,'Goodnews Samuel','samuelgoodnews15@gmail.com','08053883301','21232f297a57a5a743894a0e4a801fc3','2021-10-28 14:27:11'),(2,'GoodnewsPerfect','forogun@loveworld360.org','08028228326','cf79ae6addba60ad018347359bd144d2','2021-11-08 15:53:52'),(3,'pepple Sarah','chisomnwanna4@gmail.com','09026543678','fa246d0262c3925617b0c72bb20eeb1d','2021-11-08 23:30:59');

/*Table structure for table `value_store` */

DROP TABLE IF EXISTS `value_store`;

CREATE TABLE `value_store` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thekey` varchar(50) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`thekey`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `value_store` */

insert  into `value_store`(`id`,`thekey`,`value`) values (1,'sitelogo','NewLogo.jpg'),(2,'navitext',''),(3,'footercopyright','Powered by lps © All right reserved. '),(4,'contactspage','Hello dear client'),(5,'footerContactAddr','info@thepartnershipshop.org'),(6,'footerContactEmail','support@shop.dev'),(7,'footerContactPhone','+2348053883301'),(8,'googleMaps','42.671840, 83.279163'),(9,'footerAboutUs',''),(10,'footerSocialFacebook',''),(11,'footerSocialTwitter',''),(12,'footerSocialGooglePlus',''),(13,'footerSocialPinterest',''),(14,'footerSocialYoutube',''),(16,'contactsEmailTo','contacts@shop.dev'),(17,'shippingOrder','1'),(18,'addJs',''),(19,'publicQuantity','0'),(20,'paypal_email',''),(21,'paypal_sandbox','0'),(22,'publicDateAdded','0'),(23,'googleApi',''),(24,'template','lpstemp'),(25,'cashondelivery_visibility','1'),(26,'showBrands','0'),(27,'showInSlider','0'),(28,'codeDiscounts','1'),(29,'virtualProducts','0'),(30,'multiVendor','0');

/*Table structure for table `vendors` */

DROP TABLE IF EXISTS `vendors`;

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '2021-09-16 23:33:42'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vendors` */

/*Table structure for table `vendors_orders` */

DROP TABLE IF EXISTS `vendors_orders`;

CREATE TABLE `vendors_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) NOT NULL,
  `vendor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `vendors_orders` */

/*Table structure for table `vendors_orders_clients` */

DROP TABLE IF EXISTS `vendors_orders_clients`;

CREATE TABLE `vendors_orders_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vendors_orders_clients` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
