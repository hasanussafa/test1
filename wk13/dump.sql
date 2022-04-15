DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `firstname` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'hasanussafa','kazihasanus.safa@georgebrown.ca','kazi','safa',1),
							(2,'nihal','nihal@gmail.com','Nihal','Abdullah',1),
							(3,'benblanc','ben.blanc@georgebrown.ca','Ben','Blanc',1),
							(4,'user4','user4@gmail.com','user','4',0),
							(5,'user5','user5@gmail.com','user','5',1);
