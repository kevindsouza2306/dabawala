<?php
error_reporting(0);

$type1 = $_POST['type1'];
$type2 = $_POST['type2'];
$search = $_POST['search1'];
$search = strtoupper($search);




?>
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
            <li><a href="#">Homepage</a></li>
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
            <li><a href="form.html">SignIn</a>
				<ul class="sub-menu">
				<li><a href="form.html">Register</a></li>
				<li><a href="form.html">LogIn</a></li>								
				</ul>
			</li>
        </ul>
    </nav>
	</div>
</div>
<div class="blockwrapper">
<div class="block1">
<div class="innerblock" > 
<center>
<form action="search.php" method="post" >
<select  autofocus="autofocus" width="400" style="width: 300px;height: 50px;font-size:20px;border-color:green;border-size:2px;" name="type1">
<option value=""disabled selected> Categories of food </option>
<option value="INDIAN"> INDIAN food </option>
<option value="CHINISE"> CHINISE food </option>
</select>

<select  autofocus="autofocus" width="400" style="width: 300px;height: 50px;font-size:20px; border-color:green;border-size:2px;" name="type2" >
<option value=""disabled selected> select of food type </option>
<option value="NON VEG"> NON VEG food </option>
<option value="VEG"> VEG food </option>
<option value="SWEETDISH"> SWEETDISH </option>
</select>

<div class="search_bar">
<input type="text"  size="60" name="search1"  placeholder="SEARCH FOR FOOD ITEM" style="width:600px; height:50px; border-color:green;"/>
<input type="submit" style="width :200px; height:50px; "  value="SEARCH"/>
<form>
</center>
<?php
include "core/init.php";
$querry = mysql_query("SELECT * FROM catlog2 WHERE typ1='$type1'&&type2='$type2'&&name LIKE '%{$search}%'");
$limit = 3;
$count = 0;
echo " <B>SEARCH RESULT FOR:</B> $type1 ";
echo "$type2 ";
echo "$search ";
echo "<center><table id=news>";
while($row = mysql_fetch_assoc($querry))
{ $name = $row['name'];
  $mimage = $row['path'];
  $cost = $row['cost'];
  $typ1 = $row['typ1'];
  $typ2 = $row['type2'];
 
 

  if($count < $limit)
    { 
     if($count == 0)
	  {
		  echo "<tr><td>";
	   }
	   echo "<table >";
	   echo "<tr><td><center><h2><span>$name</span></h2></center></td></tr><tr><td>";?>
 <img src="<?php echo $mimage;?>" height="200px" width="200px">
 
 <?php
	   echo"</td></tr><tr><td>$cost</td></tr><tr><td>$typ1</td></tr><tr><td>$typ2</td></tr>"; 
	   echo "</table >";
	   echo "<td>";
	}
	else
	   {
			$count = 0;
			echo"</tr><tr><td>";
			echo"<table>";
	   echo "<tr><td><center><h2><span>$name</span></h2></center></td></tr><tr><td>";?>
 <img src="<?php echo $mimage;?>"height="200px" width="200px">
 
 <?php
	   echo"</td></tr><tr><td>$cost</td></tr><tr><td>$typ1</td></tr><tr><td>$typ2</td></tr>"; 
	   echo"</table>";
			echo"<td>";
		}
		$count++;
		
  }
  echo"</tr></table></center>";
	
	

?>
</div>
</div>
</div>
</div>

















</body>
</html>