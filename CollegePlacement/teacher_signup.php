<?php
include('nehadmin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = sha1($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department_id = $_POST['department_id'];

$query = mysql_query("select * from teacher where  firstname='".mysql_real_escape_string($firstname)."' and lastname='".mysql_real_escape_string($lastname)."' and department_id = '$department_id' and teacher_stat='Activated'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['teacher_id'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update teacher set username='".mysql_real_escape_string($username)."',password = '".mysql_real_escape_string($password)."', teacher_status = 'Registered' where teacher_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	$_SESSION['userid']=$username;
	echo 'true';
}else{
	echo 'false';
}
?>