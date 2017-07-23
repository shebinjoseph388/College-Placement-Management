<?php
error_reporting('E_ALL^E_NOTICE');

$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
include('dbcon.php');
include('session.php');
if (isset($_POST['delete_form'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = $conn->query("select * from placementform where student_id ='$regno'")or die(mysql_error());
	$row = $query->fetch();
	$given_name = $row['s_name'];
	//$surname = $row['surname'];
	$conn->query("insert into activity_log (username,date,action) values('$given_name',NOW(),'Deleted Placement form $given_name')")or die (mysql_error());
	$conn->query("DELETE FROM placementform where student_id ='$regno'");
}
header("location: Submit-PlacementForm");
}
?>