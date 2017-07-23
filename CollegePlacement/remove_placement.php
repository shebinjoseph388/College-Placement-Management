<?php 
error_reporting('E_ALL^E_NOTICE');
include('nehadmin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
$resu=mysql_query("select * from student_placementReg where student_placementReg_id = '$id' ")or die(mysql_error());
$row4 = mysql_fetch_array($resu);
$stdid =$row4['student_id'];

mysql_query("update student set count = count-1 where student_id = '$stdid'");
		
mysql_query("delete from student_placementReg where student_placementReg_id = '$id'")or die(mysql_error());

$res=mysql_query("select * from teacher_notification where student_placementReg_id = '$id' ")or die(mysql_error());
$row3 = mysql_fetch_array($res);
$notid =$row3['teacher_notification_id'];
mysql_query("delete from notification_read_teacher where notification_id = '$notid' ")or die(mysql_error());


mysql_query("delete from teacher_notification where student_placementReg_id = '$id'")or die(mysql_error());
?>

