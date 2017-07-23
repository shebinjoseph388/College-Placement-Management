<?php
error_reporting('E_ALL^E_NOTICE');

include('dbcon.php');
include('session.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
 $que= mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
														$row1 = mysql_fetch_array($que);
														$teacher = $row1['firstname']." ".$row1['lastname'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 $query = mysql_query("select * from student where student_id = '$id[$i]'");
	 $row = mysql_fetch_array($query);
	 $student = $row['RegisterNo'];
	  mysql_query("insert into activity_log (username,date,action) values('$teacher',NOW(),'Deleted $student')");
	 mysql_query("DELETE FROM student where student_id='$id[$i]'");
	 mysql_query("DELETE FROM teacher_class_student where student_id='$id[$i]'");
}
header("location: Student-List");
}
?>