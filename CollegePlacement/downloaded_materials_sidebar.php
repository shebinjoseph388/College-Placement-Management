<div class="span3" id="sidebar">

<?php 
					if($row['location']==''){ ?>
                    					<img id="avatar" class="img-polaroid" src="nehadmin/uploads/propic.jpg">

					<?php }else { ?>
					<img id="avatar" class="img-polaroid" src="nehadmin/<?php echo $row['location']; ?>"> <?php } ?>					<?php include('count.php'); ?>
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li ><a href="Student-Dashboard"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
			<li class="">
				<a href="Notification-Student"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
			<?php
			$message_query = mysql_query("select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysql_error());
			$count_message = mysql_num_rows($message_query);
			?>
			<li class="">
			<a href="Mssages-Student"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
			</a>
			</li>
			 <li class=""><a href="Submit-PlacementForm"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;Placement Form</a></li>
              <li><a href="PlacementForm-View"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;My Resume</a></li>
              <li class="active"><a href="StudyMaterials"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Study Materials</a></li>
                                      <li class=""><a href="Exam-View-List<?php //echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-reorder"></i>&nbsp;Exam</a></li>

		</ul>
					<?php /* include('search_other_class.php');  */?>	
</div>

