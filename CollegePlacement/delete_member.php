<?php
error_reporting('E_ALL^E_NOTICE');

$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
include('dbcon.php');
include('session.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = $conn->query("select * from placementform where student_id ='$id[$i]'")or die(mysql_error());
	$row = $query->fetch();
	$given_name = $row['s_name'];
	//$surname = $row['surname'];
	$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Delete Member $given_name')")or die (mysql_error());
//	$conn->query("DELETE FROM members where member_id ='$id[$i]'");
}
header("location: members.php");
}
?>