
CREATE TABLE IF NOT EXISTS `userdetails` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `update_date` varchar(30) NOT NULL,
  `update_by` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;