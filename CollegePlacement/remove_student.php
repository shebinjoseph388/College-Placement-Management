<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
$id = $_POST['id'];
$res=mysql_query("select student_id from teacher_class_student where teacher_class_student_id = '$id'")or die(mysql_error());
$row = mysql_fetch_array($res);
$studid =$row['student_id'];
mysql_query("delete from notification_read where student_id = '$studid'")or die(mysql_error());
mysql_query("delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysql_error());
?>

