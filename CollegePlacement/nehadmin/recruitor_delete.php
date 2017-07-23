<?php
include('dbcon.php');
if (isset($_POST['recruitor_delete'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysql_query("DELETE FROM recruitor where recruitor_id='$id[$i]'");
	 
}
header("location: Admin-Recruitors");
}
?>