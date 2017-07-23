<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['delete_form'])){
$id=$_POST['selector'];
 $que= mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
														$row1 = mysql_fetch_array($que);
														$teacher = $row1['firstname']." ".$row1['lastname'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	
	  mysql_query("insert into activity_log (username,date,action) values('$teacher',NOW(),'Deleted PlacementForms')");
	 mysql_query("DELETE FROM placementform where student_id='$id[$i]'");
	 
}
header("location: Placement-Details");
}
?>