<?php 
error_reporting('E_ALL^E_NOTICE');
include('nehadmin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysql_error());

$row3 =mysql_query("select * from notification where teacher_class_announcements_id = '$id' ")or die(mysql_error());
$notid =$row3['notification_id'];
mysql_query("delete from notification_read where notification_id = '$notid' ")or die(mysql_error());


mysql_query("delete from notification where teacher_class_announcements_id = '$id'")or die(mysql_error());
?>

