<?php
include('dbcon.php');
if (isset($_POST['delete_placement'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM placement where placement_id='$id[$i]'");
}
header("location: placements.php");
}
?>