<?php
include('dbcon.php');
if (isset($_POST['delete_course'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM course where course_id='$id[$i]'");
}
header("location: College-Courses");
}
?>