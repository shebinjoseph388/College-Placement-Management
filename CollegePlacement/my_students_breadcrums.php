	 <!-- breadcrumb -->
	<?php /*$class_query = mysql_query("select * from teacher_class
	LEFT JOIN class ON class.class_id = teacher_class.class_id
	LEFT JOIN semester ON semester.semester_id = teacher_class.semester_id
	where teacher_class_id = '$get_id'")or die(mysql_error());
	$class_row = mysql_fetch_array($class_query);*/
	?>
				
	<ul class="breadcrumb">
		<!--<li><a href="#"><?php //echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
		<li><a href="#"><?php //echo $class_row['name']; ?></a> <span class="divider">/</span></li>
		<li><a href="#">School Year: <?php //echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
		<li><a href="#"><b>My Students</b></a></li>-->
	</ul>
	<!-- end breadcrumb -->