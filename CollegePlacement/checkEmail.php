<?php
include('dbcon.php');
error_reporting('E_ALL^E_NOTICE');
$email=trim($_REQUEST['email']);

if($email=="")
{
	echo "Please provide your Email Address.";
}
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email))
		{
			echo "<span style='color:green;'>Invalid Email Address.</span>";
			
		}
else
{
	$sel=mysql_query("SELECT * FROM placementform WHERE email='$email'");
	$count=mysql_num_rows($sel);
	
		
	 if($count!=0)
	{
		echo "Same Email Already Exist.";
	}
	
	
		/*else
		{
			echo "<span style='color:green;'>Correct.</span>";		
		}*/
	
}
?>