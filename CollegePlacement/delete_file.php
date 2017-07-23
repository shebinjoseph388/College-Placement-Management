<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
$id = $_POST['id'];


$query3 =mysql_query("select * from notification where file_id = '$id' ")or die(mysql_error());
$row3 =mysql_fetch_array($query3);
//while($row3 = mysql_fetch_array($query3)){
//$count = mysql_num_rows($row3);
$notid =$row3['notification_id'];



mysql_query("delete from files where file_id = '$id' ")or die(mysql_error());
mysql_query("delete from notification_read where notification_id = '$notid' ")or die(mysql_error());
mysql_query("delete from notification where file_id = '$id' ")or die(mysql_error());
?>
