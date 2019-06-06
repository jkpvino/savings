
CREATE TABLE `bluefills`.`SHOP_ADMIN` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`username` VARCHAR(255) NOT NULL , 
	`password` VARCHAR(500) NOT NULL , 
	`status` TINYINT NOT NULL DEFAULT '1' , 
	`roles` ENUM('10','20') NULL DEFAULT '20' COMMENT '10=>super Admin, 20 => Branch Admin' , 
	`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
	`modified_at` DATETIME on update CURRENT_TIMESTAMP NULL , 
	`profileimage` VARCHAR(500) NULL , 
	PRIMARY KEY (`id`), UNIQUE `username` (`username`)
) ENGINE = InnoDB;
ALTER TABLE `shop_admin`  ADD `fullname` VARCHAR(255) NULL  AFTER `id`;
ALTER TABLE `shop_admin` ADD `email` VARCHAR(255) NULL AFTER `password`;


INSERT INTO `SHOP_ADMIN` (`id`, `username`, `password`, `status`, `roles`, `created_at`, `modified_at`, `profileimage`) 
VALUES (NULL, 'admin', MD5('admin123'), '1', '10', CURRENT_TIMESTAMP, NULL, 'vinoth.png');

CREATE TABLE `bluefills`.`SHOP_INFO` (
 `id` INT NOT NULL AUTO_INCREMENT ,
 `shop_name` VARCHAR(500) NULL ,
 `url_key` VARCHAR(500) NULL , 
 `address` TEXT NULL ,
 `contact_no` VARCHAR(10) NOT NULL ,
 `gmap_url` TEXT NULL , 
 `logo` VARCHAR(500) NOT NULL , 
 `admin_id` INT(11) NOT NULL , 
 `status` ENUM('10','20') NOT NULL COMMENT '10 => Active, 20 => Deactive' , 
 `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
 `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL , 
 PRIMARY KEY (`id`), UNIQUE `url_key` (`url_key`),  
 CONSTRAINT SHOP_INFO_MAP_SHOP_ADMIN 
 FOREIGN KEY (admin_id) REFERENCES SHOP_ADMIN(id)
 ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `shop_info` (`id`, `shop_name`, `url_key`, `address`, `contact_no`, `gmap_url`, `logo`, `admin_id`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Harini Jewellers', 'harinijewellers', 'Harini Jewellers, South Avani Street, Madurai', '8220466675', NULL, 'harinijewellers.jpg', '1', '10', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');
