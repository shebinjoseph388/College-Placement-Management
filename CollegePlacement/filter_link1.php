<div class="span3" id="sidebar">
	<?php 
					if($row['location']==''){ ?>
                    					<img id="avatar" class="img-polaroid" src="nehadmin/uploads/propic.jpg">

					<?php }else { ?>
					<img id="avatar" class="img-polaroid" src="nehadmin/<?php echo $row['location']; ?>"> <?php } ?>
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="Executive-Dashboard"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="MyStudents<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Students</a></li>
				<li class=""><a href="Placement-Overview<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;placement Overview</a></li>
				<li class=""><a href="Downloadable-Materials<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-download"></i>&nbsp;Downloadable Materials</a></li>
				<li class=""><a href="Placement-Panel<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Add Placement</a></li>
				<li class=""><a href="Executive-Announcement<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Announcements</a></li>
                <li class="active"><a href="#<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;StudentFilter</a></li>
				<li class=""><a href="Placement-Calendar<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Placement Calendar</a></li>
			   <!-- <li class=""><a href="class_quiz.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Quiz Overview</a></li>-->
			</ul>
			<?php include('search_other_class.php'); ?>		
</div>

