DROP TABLE IF EXISTS `#__operatorassistant_params`;
 
CREATE TABLE `#__operatorassistant_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enabled` int(1) NOT NULL DEFAULT '0',
  `frequency` int(5) NOT NULL DEFAULT '10',
  `directory` TEXT NOT NULL ,
  `mail` TEXT NOT NULL ,
  `title` TEXT NOT NULL ,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 
INSERT INTO `#__operatorassistant_params` (`frequency`, `enabled`, `directory`, `mail`, `title`) VALUES ('10', '0', 'directory', 'mail', 'titolo');