<?php
error_reporting('E_ALL^E_NOTICE');

include('dbcon.php');
if (isset($_POST['backup_delete'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM quiz where quiz_id='$id[$i]'");
}
header("location: Aptitude-Exam");
}
?>