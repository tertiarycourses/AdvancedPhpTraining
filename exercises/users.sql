DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=2;

INSERT INTO `users` VALUES (1,'alfred','12345678','Alfred','Ang');

grant all privileges on photo_gallery.* to 'alfred'@'localhost' identified by '12345678'


DROP TABLE IF EXISTS `photographs`;
CREATE TABLE `photographs` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
);