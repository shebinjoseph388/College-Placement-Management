<?php 
error_reporting('E_ALL^E_NOTICE');
include('nehadmin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from teacher_notification where teacher_notification_id = '$id'")or die(mysql_error());

//$row3 =mysql_query("select * from notification where teacher_class_announcements_id = '$id' ")or die(mysql_error());
//$notid =$row3['notification_id'];
mysql_query("delete from notification_read_teacher where notification_id = '$id' ")or die(mysql_error());


?>

