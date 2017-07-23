<?php 
error_reporting('E_ALL^E_NOTICE');
include('nehadmin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from message where message_id = '$id'")or die(mysql_error());
?>

