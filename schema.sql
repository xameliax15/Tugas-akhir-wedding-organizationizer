CREATE DATABASE IF NOT EXISTS `wedding_organizer`;
USE `wedding_organizer`;

CREATE TABLE `User` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `role` int DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE `Userphoto` (
  `id` char(36) NOT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `key` mediumtext,
  `filename` mediumtext,
  `mimetype` mediumtext,
  `encoding` mediumtext,
  `url` mediumtext,
  PRIMARY KEY (`id`)
);

CREATE TABLE `UserInPhoto` (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `photo_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `photo_id` (`photo_id`),
  CONSTRAINT `userinphoto_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`),
  CONSTRAINT `userinphoto_ibfk_2` FOREIGN KEY (`photo_id`) REFERENCES `Userphoto` (`id`)
);

CREATE TABLE `Booking` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `noWhatsApp` mediumtext,
  `address` mediumtext,
  `message` mediumtext,
  `status` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
);

CREATE TABLE `Product` (
  `id` char(36) NOT NULL,
  `name` mediumtext,
  `description` mediumtext,
  `tag` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `ProductPhoto` (
  `id` char(36) NOT NULL,
  `product_id` char(36) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `key` mediumtext,
  `filename` mediumtext,
  `mimetype` mediumtext,
  `encoding` mediumtext,
  `url` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`),
  CONSTRAINT `productphoto_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`)
);

CREATE TABLE `Item` (
  `id` char(36) NOT NULL,
  `product_id` char(36) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`)
);

UPDATE User SET password = 'HASIL_HASH_DISINI' WHERE email = 'admin@example.com'; 