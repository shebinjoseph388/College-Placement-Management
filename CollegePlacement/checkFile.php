<?php
error_reporting('E_ALL^E_NOTICE');

include('dbcon.php');
$file=trim($_REQUEST['file']);
//$file1 =trim($_REQUEST['file']['name']);
//$file2 =trim($_REQUEST['file']['type']);
//$file3 =trim($_REQUEST['file']['error']);
//echo $file;

if($file=="")
	{
		echo "<span style='color:green;'>Image Is Required.</span>";
		
	}
	//$file= $_GET["file"]["name"];
// echo $_GET["file"]["name"] . "Image upload already exist. ";
//$file=trim($_REQUEST['files']);
$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".",$file);
		$extension = end($temp);
		//echo $extension  ;
		$file2 = $extension;

	
	if ((($file2 == "gif")
		|| ($file2 == "jpeg")
		|| ($file2 == "jpg")
		|| ($file2 == "pjpeg")
		|| ($file2 == "x-png")
		|| ( $file2 == "png"))
		
		&& in_array($extension, $allowedExts)) 
		{	
		 // if ( $file3 > 0) 
		 // {
		//	echo "Return Code: " .  $file3 . "<br>";
		//  } 
		  if (file_exists("img/" .  $file)) 
				{
				  echo  $file1 . "Image upload already exist. ";
    			} 
				else
				{
				  move_uploaded_file( $_REQUEST["file"]["tmp_name"],
				  "img/" .   $file);
				 
    			}
	
		}
		  
	
	