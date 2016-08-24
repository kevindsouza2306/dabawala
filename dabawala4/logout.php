<?php
/**************************************************************************************
* Send Friend Request, Accept or Decline Request using Ajax, Jquery and PHP
* This script has been released with the aim that it will be useful.
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
* All Copy Rights Reserved by Vasplus Programming Blog
***************************************************************************************/
include "core/init.php";
ob_start();
session_unset();
session_destroy();
mysql_query("UPDATE `user` SET `status` = 0 WHERE username='$username'");
header("location: index.php");
?>
