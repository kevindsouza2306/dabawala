<?php include "imports/header.php"?>

<div id="wrapper3">
	<div class="cart_area"> <p align="right">  Items in Cart : <?php echo count($_SESSION["prod"]); ?> | <a href="dbProcess.php?option=emptycart"> Empty Cart </a> </p> </div>
	<div id="portfolio" class="container">
		<div class="search">
	<form id="search-form">
  	<input type="text" />
  	<input type="submit" value="Search" />
	</form>
	</div>
		<div class="title">
			<h2>Todays Specials</h2>
			<span class="byline"></span> </div>
		<div class="column1">
			<div class="box"> <a href="#"><img src="images/Chicken_makhani.jpg" alt="" class="image image-full" /></a>
				<h3>Butter Chicken</h3>
				
				<a href="dbProcess.php?option=add&prod=Butter Chicken&price=250" class="button button-small">Order Now</a> </div>
		</div>
		<div class="column2">
			<div class="box"> <a href="#"><img src="images/food-thali1.jpg" alt="" class="image image-full" /></a>
				<h3>Veg Thali</h3>
				
				<a href="dbProcess.php?option=add&prod=veg Thali&price=50" class="button button-small">Order Now</a> </div>
		</div>
		<div class="column3">
			<div class="box"> <a href="#"><img src="images/nonveg thali.jpg" alt="" class="image image-full" /></a>
				<h3>Non-veg Thali</h3>
				
				<a href="dbProcess.php?option=add&prod=Non-veg Thali&price=200" class="button button-small">Order Now</a> </div>
		</div>
		<div class="column4">
			<div class="box"> <a href="#"><img src="images/tandoori-chicken-recipe.jpg" alt="" class="image image-full" /></a>
				<h3>tandoori-chicken</h3>
				
				<a href="dbProcess.php?option=add&prod=tandoori-chicken&price=200" class="button button-small">Order Now</a> </div>
		</div>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<!--<h2>Welcome to our website</h2>
			<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
		<div class="content">
			<p>This is <strong>Fervency</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
			<a href="#" class="button">Etiam posuere</a>-->
			<a href="#"><img src="images/Party_Order.jpg" alt="" class="image image-full" />
			</div>
	</div>
</div><!--<div id="wrapper2">
	<div id="newsletter" class="container">
		<div class="title">
			<h2>Newsletter Signup</h2>
			<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span> </div>
		<div class="content">
			<form method="post" action="#">
				<div class="row half">
					<div class="6u">
						<input type="text" class="text" name="name" placeholder="Name" />
					</div>
					<div class="6u">
						<input type="text" class="text" name="email" placeholder="Email" />
					</div>
				</div>
				<div class="row half">
					<div class="12u">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="12u"> <a href="#" class="button submit">Send Message</a> </div>
				</div>
			</form>
		</div>
	</div>
</div>-->
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
