<?php
include('dbcon.php');
//$get_id = $_GET['id'];
if (isset($_POST['delete'])){

$id=$_POST['selector'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("delete from user_log where user_log_id='$id[$i]'");
}
header("location: Admin-AdminUsers-LogDetails");

}
//mysql_query("delete from user_log where user_log_id = '$get_id'")or die(mysql_error());
?>
<script>
//window.location = 'Admin-AdminUsers-LogDetails';
</script>