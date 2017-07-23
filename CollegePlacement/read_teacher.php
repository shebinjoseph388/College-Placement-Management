<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
include('session.php');
if (isset($_POST['read'])&&isset($_POST['selector'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	
	mysql_query("insert into notification_read_teacher (teacher_id,student_read,notification_id,teacher_notification_id ) values('$session_id','yes','$id[$i]','$id[$i]')")or die(mysql_error());	
}
?>
<script>
window.location = 'Executive-Notifications';
</script>
<?php
}
else{
	?>
<script>
alert("Please click the checkbox which you read");
window.location = 'Executive-Notifications';
</script>
<?php
}
?>