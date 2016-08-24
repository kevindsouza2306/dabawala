<?php
 ob_start(); 
 error_reporting(E_ALL ^ E_NOTICE); 
 session_start();
include 'core/init.php';

$varCurrDate = date("d/m/y : H:i:s", time()) ;
$varInsertBy = 'Web Interface';

$option = $_REQUEST['option'];


if($option=='add')
{

 if (isset($_GET["prod"]) && (int)$_GET["price"]>0) //add product to cart with productID=$add2cart
    {
       
        //$_SESSION['gids'] contains product IDs
        //$_SESSION['counts'] contains item quantities ($_SESSION['counts'][$i] corresponds to $_SESSION['gids'][$i])
        //$_SESSION['gids'][$i] == 0 means $i-element is 'empty' (does not refer to any product)
        if (!isset($_SESSION["prod"]))
        {
            $_SESSION["prod"] = array();
			$_SESSION["price"]= array();
            $_SESSION["counts"] = array();
        }
        //check for current product in visitor's shopping cart content
        $i=0;
        while ($i<count($_SESSION["prod"]) && $_SESSION["prod"][$i] != $_GET["prod"]) $i++;
        if ($i < count($_SESSION["prod"])) //increase current product's item quantity
        {
            $_SESSION["counts"][$i]++;
			
			
        }
        else //no such product in the cart - add it
        {
            $_SESSION["prod"][] = $_GET["prod"];
            $_SESSION["price"][] = $_GET["price"];
			$_SESSION["counts"][] = 1;
			
			
        }
    } 
	
	header("Location:".$_SERVER['HTTP_REFERER']);

     


}


if($option=='register')
{
$varFirstName = htmlspecialchars($_REQUEST['firstname']);
$varLastName = htmlspecialchars($_REQUEST['lastname']);
$varContactNo = htmlspecialchars($_REQUEST['contact']);
$varEmailId = htmlspecialchars($_REQUEST['email']);
$varAddress = htmlspecialchars($_REQUEST['address']);
$varUserName = htmlspecialchars($_REQUEST['username']);
$varPassword = htmlspecialchars($_REQUEST['password']);


$varUserid = 0;






$query = "insert into userdetails (user_id,first_name,last_name,contact_no,email_id,address,user_name,password,insert_date,insert_by,update_date,update_by) values (".$varUserid.",'".$varFirstName."', '".$varLastName."', '".$varContactNo."','". $varEmailId."','".$varAddress."','".$varUserName."','".$varPassword."','".$varCurrDate."','".$varInsertBy."','".$varCurrDate."','".$varInsertBy."')";
$result=mysql_query($query);	
if(!$result)
{
  header("Location:form.php?rmsg=".mysql_error()."&fn=".$varFirstName."&ln=".$varLastName."&cno=".$varContactNo."&email=".$varEmailId."&add=".$varAddress."&pwd=".$varPasword);
}
 else
     {
		
		$query1 = "insert into user (username, password) values (".$varUserName."','".$varPassword.")";
		$result1=mysql_query($query1);
	    
		header("Location:form.php?rmsg=Thanks for registering. Please Login");
					 
      }
        


}






 if($option=='login')
  { 
    $varUserName = htmlspecialchars($_REQUEST['txtUserName']);
    $varPassword= htmlspecialchars($_REQUEST['txtPassword']);
	
	$varLoginDate = date("d/m/y : H:i:s", time()) ;
 
   $query="select u.* from userdetails u where  u.user_name = '".$varUserName."' and u.password = '".$varPassword."' ";
    echo $query;
	$result=mysql_query($query);
		
		if(!$result)
		{
		  die('Invalid Query'.mysql_error());
		 }
		else
		{
		
		
		 if($row = @mysql_fetch_assoc($result))
		 {
		 echo 'success';
		     
 	         $_SESSION['login'] =  'TRUE';
			  $_SESSION['user_id']=  $row['user_id'];
		     $_SESSION['user_name'] =  $row['first_name']. " ".$row['last_name'];
			 $_SESSION['last_login'] = $row['last_login'];
		   
		 
		  $query="update userdetails set  last_login = '" . $varLoginDate."' where user_id =".$row['user_id'] ;
 		   $result=mysql_query($query);
		   
		   	header("Location: bankhome.php");
	      
		  		    
		 }
		 else
		 {
		 	header("Location:bank.php?msg=Invalid Login Details");
		 }
	
	}

  }


if($option=='payment')
{
  	
				 
				
     			
				unset($_SESSION["prod"]);
				unset($_SESSION["price"]);
            	unset($_SESSION["counts"]);
	 
					header("Location:payment.php?rmsg=Payment Succesful");  
	
}


if($option=='emptycart')
{
unset($_SESSION["prod"]);
				unset($_SESSION["price"]);
            	unset($_SESSION["counts"]);
				header('Location:'.$_SERVER['HTTP_REFERER']);
}

?>