<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
$id = $_POST['id'];
$get_id = $_POST['get_id'];
$query3 =mysql_query("select * from notification where placementReg_id = '$id' ")or die(mysql_error());
$row3 =mysql_fetch_array($query3);
//while($row3 = mysql_fetch_array($query3)){
//$count = mysql_num_rows($row3);


$notid =$row3['notification_id'];

mysql_query("delete from student_placementReg where placementReg_id = '$id' ")or die(mysql_error());
mysql_query("delete from placementReg where placementReg_id = '$id' ")or die(mysql_error());
mysql_query("delete from notification_read where notification_id = '$notid' ")or die(mysql_error());
mysql_query("delete from notification where placementReg_id = '$id' ")or die(mysql_error());
?>
<script>
	window.location = 'Placement-Panel<?php echo '?id='.$get_id; ?>'
</script>