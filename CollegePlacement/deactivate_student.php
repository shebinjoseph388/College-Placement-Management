<?php
error_reporting('E_ALL^E_NOTICE');

include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update student set count = 3  where student_id = '$get_id'");
header('location:teachers.php');
?>