<div class="span3" id="sidebar">
<?php 
					if($row['location']==''){ ?>
                    					<img id="avatar" class="img-polaroid" src="nehadmin/uploads/propic.jpg">

					<?php }else { ?>
					<img id="avatar" class="img-polaroid" src="nehadmin/<?php echo $row['location']; ?>"> <?php } ?>		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class=""><a href="Student-Dashboard"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<!--<li class=""><a href="my_classmates.php<?php //echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Classmates</a></li>-->
				<li class=""><a href="Placement-Progress<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-bar-chart"></i>&nbsp;My Progress</a></li>
				<!--<li class=""><a href="subject_overview_student.php<?php// echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;Attempts Overview</a></li>-->
				<li class=""><a href="Student-Downloadable-Materials<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-download"></i>&nbsp;Downloadable Materials</a></li>
				<li class="active"><a href="Apply-For-Placement<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Register for Placement</a></li>
				<li class=""><a href="View-Announcements<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Announcements</a></li>
				<li class=""><a href="View-Placement-Calendar<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Placement Calendar</a></li>
				<!--<li class=""><a href="student_quiz_list.php<?php// echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-reorder"></i>&nbsp;Result</a></li>-->
		</ul>
	<?php /* include('search_other_class.php'); */ ?>	
</div>