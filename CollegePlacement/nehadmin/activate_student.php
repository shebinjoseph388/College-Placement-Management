<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update student set count = count-1 where student_id = '$get_id'");
header('location:Admin-Student-Lists');
?>