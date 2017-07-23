<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');
include('session.php');

	$content = $_POST['content'];		
	$id=$_POST['selector'];
		$N = count($id);

		for($i=0; $i < $N; $i++)
		{
			mysql_query("insert into teacher_class_announcements (teacher_class_id,teacher_id,content,date) values('$id[$i]','$session_id','$content',NOW())")or die(mysql_error());
			
			$res =mysql_query("select teacher_class_announcements_id from teacher_class_announcements where teacher_class_id='$id[$i]' AND teacher_id='$session_id' AND content = '$content' AND date = NOW()")or die(mysql_error());
								$row1=mysql_fetch_array($res);
								$teacher_class_announcements_id=$row1['teacher_class_announcements_id'];
									mysql_query("insert into notification (teacher_class_id,teacher_class_announcements_id,notification,date_of_notification,link) value('$id[$i]','$teacher_class_announcements_id','Add Annoucements',NOW(),'View-Announcements')")or die(mysql_error());
			
		}
?>


