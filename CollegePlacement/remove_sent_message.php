<?php
error_reporting('E_ALL^E_NOTICE');
 include('nehadmin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from message_sent where message_sent_id = '$id'")or die(mysql_error());
?>

