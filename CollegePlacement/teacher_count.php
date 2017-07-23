					<?php
error_reporting('E_ALL^E_NOTICE');
						
						?>
				
					<?php $query_yes = mysql_query("select * from teacher_notification
					LEFT JOIN notification_read_teacher on teacher_notification.teacher_notification_id =  notification_read_teacher.notification_id
					where teacher_id = '$session_id' 
					")or die(mysql_error());
					$count_no = mysql_num_rows($query_yes);
		            ?>
					<?php $query = mysql_query("select * from teacher_notification
					LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
					LEFT JOIN student on student.student_id = teacher_notification.student_id
					LEFT JOIN placementReg on placementReg.placementReg_id = teacher_notification.placementReg_id 
					LEFT JOIN class on teacher_class.class_id = class.class_id
					where teacher_class.teacher_id = '$session_id' 
					")or die(mysql_error());
					$count = mysql_num_rows($query);
		            ?>
					
					<?php $not_read = $count -  $count_no; ?>