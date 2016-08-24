



<?php include "imports/header.php"?>
<div class="blockwrapper">
<div class="block1">
<div class="innerblock" > 
<center>
<form action="search.php" method="post" >
<select  autofocus="autofocus"  style="width: 300px;height: 50px;font-size:20px;border-color:green;border-size:2px;" name="type1">
<option value=""disabled selected> Categories of food </option>
<option value="INDIAN"> INDIAN food </option>
<option value="CHINISE"> CHINISE food </option>
</select>

<select  autofocus="autofocus" width="300" style="width: 300px;height: 50px;font-size:20px; border-color:green;border-size:2px;" name="type2" >
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
<div class="cart_area"> <p align="right">  Items in Cart : <?php echo count($_SESSION["prod"]); ?> | <a href="dbProcess.php?option=emptycart"> Empty Cart </a> </p> </div>
<?php
include "core/init.php";
error_reporting(0);
$querry = mysql_query("SELECT * FROM catlog2");
$limit = 3;
$count = 0;
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
	   echo'</td></tr><tr><td><center>'.$cost.'</center></td></tr><tr><td><center>'.$typ1.'</center></td></tr><tr><td><center>'.$typ2.'</center></td></tr><tr><td><center><a href="dbProcess.php?option=add&prod='.$name.'&price='.$cost.'" class="button button-small">Order Now</a></td></center></tr>'; 
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
	   echo'</td></tr><tr><td><center>'.$cost.'</center></td></tr><tr><td><center>'.$typ1.'</center></td></tr><tr><td><center>'.$typ2.'</center></td></tr><tr><td><center><a href="dbProcess.php?option=add&prod='.$name.'&price='.$cost.'" class="button button-small">Order Now</a></td></center></tr>'; 
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

















</html>