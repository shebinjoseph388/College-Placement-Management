<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
$enddate=$_POST['enddate'];
	$company=$_POST['company'];
	$fdesc=$_POST['fdesc'];
	
$id = $_POST['id'];
$get_id = $_POST['get_id'];
	mysql_query("update placementreg set enddate = '$enddate' , company = '$company' , fdesc = '$fdesc' where placementReg_id = '$id' ") or die(mysql_error());

?>
<script>
	window.location = 'Placement-Panel<?php echo '?id='.$get_id; ?>'
</script>