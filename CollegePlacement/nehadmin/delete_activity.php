<?php
include('dbcon.php');
//$get_id = $_GET['id'];
if (isset($_POST['delete'])){

$id=$_POST['selector'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("delete from activity_log where activity_log_id ='$id[$i]'");
}
header("location: Admin-Activity-Details");

}
