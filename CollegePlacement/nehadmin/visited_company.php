<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update recruitor set status = 'visited' where recruitor_id = '$get_id'");
header('location:Admin-Recruitors');
?>