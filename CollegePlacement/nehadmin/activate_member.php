<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update members set status = 'Activated' where member_id = '$get_id'");
header('location:Admin-College-Member');
?>