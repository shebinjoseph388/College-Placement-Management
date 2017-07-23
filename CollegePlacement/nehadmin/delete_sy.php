<?php
include('dbcon.php');
if (isset($_POST['delete_year'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM year where y_id='$id[$i]'");
}
header("location: College-Batch-Year");
}
?>