create database if not exists `asmv1`;

USE `asmv1`;

CREATE TABLE if NOT EXISTS `category`(
                                         `id_cate` int PRIMARY KEY AUTO_INCREMENT,
                                         `name_cate` VARCHAR(50) NOT NULL,
    `image_cate` VARCHAR(50)


    );

INSERT INTO `category` (`name_cate`, `image_cate`)
VALUES
    ('Ceramic', 'a'),
    ('Wood', 'b'),
    ('Metal', 'c');



CREATE TABLE IF NOT EXISTS `product` (
                                         `id_p` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                         `name_p` varchar(255) NOT NULL,
    `image_p` VARCHAR(50) NOT NULL,
    `price_p` varchar(50) NOT NULL,
    `size_p` varchar(50) NOT NULL,
    `description_p` varchar(500),
    `categoryId` INT,
    FOREIGN KEY (`categoryId`) REFERENCES `category`(`id_cate`) -- ON DELETE cascade
    );


INSERT INTO `product` (`name_p`, `image_p`, `price_p`, `size_p`, `description_p`, `categoryId`)
VALUES
    ('Wooden house','a', '50', 'M', 'A handmade house will be a meaningful birthday gift', 3),
    ('Wooden dog','b', '50', 'M', 'A meaningful birthday gift', 1),
    ('Ceramic jars','c', '50', 'M', 'Flower vase decoration', 3),
    ('Vase','d', '50', 'M', 'A handmade house will be a meaningful birthday gift', 2),
    ('Copper vase','e', '50', 'M', 'Valuable decorations for partners, housewarming, superiors or collectors.', 2),
    ('Bronze statue','f', '50', 'M', 'Alloy model', 1);



CREATE TABLE IF NOT EXISTS `admin` (
    `username` varchar(255) NOT NULL PRIMARY KEY ,
    `fullName_a` varchar(255) NOT NULL,
    `phone_a` varchar(250) NOT NULL,
    `email_a` varchar(250) NOT NULL,
    `password` varchar(500) NOT NULL


    );


CREATE TABLE IF NOT EXISTS `customer` (
                                          `id_c` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                          `fullName_c` varchar(255) NOT NULL,
    `phone_c` varchar(250) NOT NULL,
    `email_c` varchar(250) NOT NULL,
    `address_c` varchar(500) NOT NULL
    );
