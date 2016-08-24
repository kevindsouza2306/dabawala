<?php

include "core/init.php";
$username = $_POST['username'];
$password = $_POST['password'];


			
			$_SESSION['username'] = $username;

	
	
	$query = mysql_query("SELECT * FROM userdetails WHERE user_name='$username'");
	$numrows = mysql_num_rows($query);
	
	
	if ($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
			$dbusername = $row['user_name'];
			$dbpassword = $row['password'];
		}
		if ($username==$dbusername&&$password==$dbpassword)
		{
			
			//include "loginhome.php";
			 header("Location: index.php");
			 mysql_query("UPDATE `user` SET `status` = 1 WHERE user_name='$username'");
			 echo "u r in";
              //exit;
			
		}
		else
			echo "invalid password";

	}
	else{
		die("User Not Found");
	}
?>