<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
session_start();
$collegeid = $_POST['collegeid'];
//$username = $_POST['username'];
$pwd = mysql_real_escape_string($_POST['password']);
$password = sha1($pwd);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_id = $_POST['class_id'];

//$query = mysql_query("select * from student where username='$username' and RegisterNo = '$collegeid' firstname='$firstname' and lastname='$lastname' and //class_id = '$class_id'")or die(mysql_error());
$query = mysql_query("select * from student where password='$password' and RegisterNo = '".mysql_real_escape_string($collegeid)."'  and class_id = '$class_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['student_id'];
$regno = $row['RegisterNo'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update student set status = 'Registered' where student_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	$_SESSION['userid']=$regno;
	echo 'true';
}else{
echo 'false';
}
?>