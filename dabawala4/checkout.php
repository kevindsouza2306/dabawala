

<?php include "imports/header.php"?>

<div id="wrapper3">
<div style="margin-left:100px;">
 
<h2>Items in <span>Cart</span></h2>
		
		<span class="style1"> <?php	echo $_REQUEST['rmsg']; ?></span>
<?php 
if(count($_SESSION["prod"]) > 0)
		{
		?>		

        <table width="600" border="0" cellspacing="10">
  <tr>
    <td><div align="center"><strong>Item </strong></div></td>
    <td><div align="center"><strong>Quantity </strong></div></td>
    <td><div align="center"><strong>Price </strong></div></td>
    <td><div align="center"><strong>Total </strong></div></td>
  </tr>
  
<?php 
       	$i=0;
		$varTotal=0;
		
		
        while ($i<count($_SESSION["prod"]))
		 { 
		?> 
		 <tr>
    <td><div align="left"><?php	echo   $_SESSION["prod"][$i]; ?> </div></td>
    <td><div align="center">1 </div></td>
    <td><div align="center"><?php	echo   $_SESSION["price"][$i]; ?> </div></td>
    <td><div align="center"><?php	echo   $_SESSION["price"][$i]; ?> </div></td>
  </tr>
		  <?php
		  
		  $varTotal = $varTotal + (int)$_SESSION["price"][$i];
			$_SESSION['total_amount'] = $varTotal;
			$i++;
		 }
		
?> 
		 <tr>
	<td colspan="3"><div align="right"><strong> </strong></div></td>
    <td><div align="center"> </div></td>
	</tr>
	
    <td colspan="3"><div align="right"><strong> Total Amount </strong></div></td>
    <td><div align="center"><?php	echo   $varTotal; ?> </div></td>
  </tr>
	</table>	
    <br />
	<br />
	<hr />
	
	
	<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"> <strong> Continue Shopping </strong> </a>&nbsp;&nbsp;&nbsp; |<a href="payment.php"> <strong> Proceed to Payment </strong> </a>
	
	<?php 
	}
	else
	{
	
	echo '<strong> No Items in Cart </strong> <br><a href="index.php"> <strong> Continue Shopping </strong> </a>';
	}
	
	?>
	
    </div> <!-- end of content -->
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