CREATE TABLE `SITE_DB`.`item_meeting` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,

  `title` varchar(100) NOT NULL,
  `participants` text NOT NULL,
  `date` text NOT NULL,


  PRIMARY KEY  (`id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `item_meeting_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `SITE_DB`.`items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
