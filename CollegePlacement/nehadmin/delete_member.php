<?php
include('dbcon.php');
if (isset($_POST['member_delete'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM members where member_id='$id[$i]'");
}
header("location: Admin-College-Member");
}
?>