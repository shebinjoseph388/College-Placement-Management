<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update teacher set teacher_stat = 'Activated' where teacher_id = '$get_id'");
header('location:Admin-TeacherLists');
?>