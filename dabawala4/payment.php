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
				<li><a href="#">About Us</a></li>	
				</ul>
			</li>
			<li><a href="checkout.php">Checkout</a></li>
			<?php
			include "core/init.php";

			$query1 = mysql_query("SELECT * FROM user WHERE username='".$_SESSION['username']."'");
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
				<li><a href="form.php">Logout</a></li>								
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

<style type="text/css">

.style1 {font-weight: bold}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
</style>

<div id="wrapper3">
<?php  error_reporting(E_ALL ^ E_NOTICE);  ob_start(); 
 error_reporting(E_ALL ^ E_NOTICE); 
 session_start();?> 
<div style="margin-left:100px;">

<h2 >Payment <span></span></h2>
		
		<span class="style2"> <?php	 
		
		
		if($_REQUEST['rmsg']=="Payment Succesful")
		{
		 echo $_REQUEST['rmsg']; 
		
	
		}
		
		?></span>
		
       <!-- <span class="style2"><?php  echo $_REQUEST['rmsg']; ?></span>-->
   <form action="dbProcess.php?option=payment" method="post">
   <table width="500" border="0" height="200">
  <tr>
    <td><strong>Credit Card Number </strong></td>
    <td><input name="txtCreditCardNo" type="text" id="txtCreditCardNo" maxlength="16"></td>
  </tr>
  <tr>
    <td><strong>Name on Card </strong></td>
    <td><input name="txtNameOnCard" type="text" id="txtNameOnCard"></td>
  </tr>
  <tr>
    <td><strong>CCV No </strong></td>
    <td><input name="txtCCVNo" type="text" id="txtCCVNo"></td>
  </tr>
  <tr>
    <td><strong>Expiry Date </strong></td>
    <td><select name="ddlMonth" id="ddlMonth">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
      <select name="ddlYear" id="ddlYear">
        <option value="12">2012</option>
        <option value="13">2013</option>
        <option value="14">2014</option>
        <option value="15">2015</option>
        <option value="16">2016</option>
        <option value="17">2017</option>
        <option value="18">2018</option>
        <option value="19">2019</option>
        <option value="20">2020</option>
      </select>
      </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Payment">
    </div></td>
    </tr>
</table>

   
   
   
   </form>
   
    <br />
	<br />
	<hr />
	
	<a href="index.php"> <strong> Continue Shopping </strong> </a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
	<a href="payment.php"> <strong> Proceed to Payment </strong> </a>
	
   
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
