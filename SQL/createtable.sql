CREATE DATABASE twitter_alerts;

CREATE TABLE `twitter_alerts`.`tweets` (
`id` BIGINT UNSIGNED NOT NULL ,
`text` VARCHAR( 150 ) NOT NULL ,
`screen_name` VARCHAR( 255 ) NOT NULL ,
`followers_count` INT NOT NULL ,
`created_at` DATETIME NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = InnoDB;

GRANT ALL PRIVILEGES ON twitter_alerts.tweets TO 'twitter_alerts'@'localhost' IDENTIFIED BY 'somepasword';
