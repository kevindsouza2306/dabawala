


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />-->
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css">
<script src="script.js"></script>

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
            <li><a href="form.php">SignIn</a>
				<ul class="sub-menu">
				<li><a href="form.php">Register</a></li>
				<li><a href="form.php">LogIn</a></li>								
				</ul>
			</li>
        </ul>
    </nav>
		 
    
	</div>
</div>
</div>
<div id="wrapper5">
<?php  error_reporting(E_ALL ^ E_NOTICE);  ob_start(); 
 error_reporting(E_ALL ^ E_NOTICE); 
 session_start();?> 
<div class="innerdiv">
<!-- Required Div Starts Here -->
<h3 align="left">Register HERE!</h3>
<div>
		<span class="style1"> <?php echo $_REQUEST['rmsg']; ?></span>
		</div>
<form action="dbProcess.php?option=register" id="myForm" method='post' name="myForm">

<table width="500" height="300">
<tr>
<td><b> First Name</b></td>
<td><input id='firstname1' name='firstname' onblur="validate('firstname', this.value)" type='text'></td>
<td>
<div id='firstname'></div>
</td>
</tr>
<tr>
<td><b>Last Name</b></td>
<td><input id='lastname1' name='lastname' onblur="validate('lastname', this.value)" type='text'></td>
<td>
<div id='lastname'></div>
</td>
</tr>
<tr>
<td><b>Address</b></td>
<td><input id='address1' name='address' onblur="validate('address', this.value)" type='text'></td>
<td>
<div id='address'></div>
</td>
</tr>
<tr>
<td><b>Username</b></td>
<td><input id='username1' name='username' onblur="validate('username', this.value)" type='text'></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
<td>
<div id='password'></div>
</td>
</tr>
<tr>
<td><b>Email</b></td>
<td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td><b>contact no</b></td>
<td><input id='contact1' name='contact' onblur="validate('contact', this.value)" type='text'></td>
<td>
<div id='contact'></div>
</td>
</tr>
</table>
<input onclick="checkForm()" type='submit' value='Submit'>
</form>
</div>


	<div id="login_form">
		<div><h3> Login</h3></div>
		<div>
		<span class="style1"> <?php echo $_REQUEST['msg']; ?></span>
		<form name="login" id="login" method="post" action="login.php">  
			<div>
			<table width="250" height="80">
			<tr><td width="200" height="27"><span class="style9">User Name</span></td>
			<td width="150"><input type="text" name="username" id="txtUserName"  size="15"/> </td>
			</tr>
			<tr> <td><span class="style9">Password</span></td>
			<td><input type="password" name="password" id="txtPassword" value="" size="15" /></td></tr>
			</table>
			</div>
			<div style="margin-left:80px;">
			<input type="submit" name="LOGIN" value="LOGIN"  ></div>
		</form>
		</div>
	</div>
</div>
<div id="wrapper4">
	<div id="footer" class="container">
		<div>
			<header class="title">
				<h2>Follow Us On</h2>
				<span class="byline"></span> </header>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="copyright">
	<p>Copyright (c) 2013 Dabawala.com. All rights reserved. <p><br>
	<a href="#">Privacy policy</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="#">Delivary policy</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="#">Terms & conditions</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="#">Contact us</a>
	
</div>
</body>
</html>