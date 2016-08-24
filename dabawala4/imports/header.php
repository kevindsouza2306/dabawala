<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<span class="icon icon-fire"></span>
			<h1><a href="#">DabaWala</a></h1>
			<br>
<br>
		<!--<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="4" title="">Menu</a>
			<ul>
				<li><a href="#">View Catalog</a></li>
				<li><a href="#">Areas we serve</a></li>
											
			</ul>
				<li><a href="#" accesskey="3" title="">Party Order</a></li>
				<li id="hd2"><a href="">Contact Us</a>
			<ul class="sub-menu">
				<li><a href="#">Feedback</a></li>
				<li><a href="#">About Us</a></li>								
			</ul>
				<li><a href="#" accesskey="2" title="">SignIn</a>
			<ul class="sub-menu">
				<li><a href="#">Register</a></li>
				<li><a href="#">LogIn</a></li>								
			</ul>
			</ul>
		</div> -->
		
		<nav class="menu">
        <ul class="clearfix">
            <li><a href="index.php">Homepage</a></li>
            <li>
                <a href="#">Menu <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="catalog.php">View Catalog</a></li>
                    <li><a href="#">Areas we serve</a></li>   
                </ul>
            </li>
            <li><a href="#">Party Order</a></li>
            <li ><a href="#">Contact Us</a>
			    <ul class="sub-menu">
				<li><a href="#">Feedback</a></li>
				<li><a href="about.php">About Us</a></li>	
				</ul>
			</li>
			<li><a href="checkout.php">Checkout</a></li>
			<?php
			include "core/init.php";

			$query1 = mysql_query("SELECT * FROM userdetails WHERE user_name='".$_SESSION['username']."'");
	$numrows = mysql_num_rows($query1);
	
	
	if ($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query1))
	{
			
			$status = $row['status'];
		if($status=0)
		{		
		?>
		
		<li><a href="form.php">SignIn</a>
				<ul class="sub-menu">
				<li><a href="form.php">Register</a></li>
				<li><a href="form.php">LogIn</a></li>	
											
				</ul>
			</li>
		
		
		
		<?php
		}
else{	
			?>
            <li style="transform:uppercase"><a href=""><?php echo $_SESSION['username'];?></a>
				<ul class="sub-menu">
				<li><a href="logout.php">Logout</a></li>									
				</ul>
			</li>
			<?php
    }
	}
	}
else{	
			?>
            <li><a href="form.php">SignIn</a>
				<ul class="sub-menu">
				<li><a href="form.php">Register</a></li>
				<li><a href="form.php">LogIn</a></li>	
										
				</ul>
			</li>
			<?php
    }
			?>
        </ul>
    </nav>
		 
    
	</div>
</div>