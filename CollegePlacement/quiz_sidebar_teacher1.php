<div class="span3" id="sidebar">
<?php 
					if($row['location']==''){ ?>
                    					<img id="avatar" class="img-polaroid" src="nehadmin/uploads/propic.jpg">

					<?php }else { ?>
					<img id="avatar" class="img-polaroid" src="nehadmin/<?php echo $row['location']; ?>"> <?php } ?>	<?php include('teacher_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="Executive-Dashboard"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
		<li class=""><a href="Executive-Notifications"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
		<li class=""><a href="Executive-Messages"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message</a></li> 
		<li class=""><a href="Executive-Backpack"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backpack</a></li> 
                 <li class=""><a href="Student-List"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Students</a></li> 
		<!--<li class=""><a href="add_downloadable.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Student Filter</a></li> -->
		<li class=""><a href="add_announcement.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Announcement</a></li> 
		<li class=""><a href="add_placement.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add New Placement</a></li> 
        <li ><a href="Add-Studymaterials"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add StudyMaterials</a></li>
		<li class="active"><a href="teacher_quiz.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Placement Status</a></li>
		<li class=""><a href="Placement-Details"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;PlacementForms</a></li>
         <li class=""><a href="Aptitude-Exam"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Exam</a></li>
         		<li class=""><a href="MyShare"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;My Share</a></li>

	</ul>
	<?php include('search_other_class.php'); ?>	
</div>

