<?php include('header_dashboard.php'); 
error_reporting('E_ALL^E_NOTICE');
?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_overview_link_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
										<?php //$class_query = mysql_query("select * from teacher_class
										//LEFT JOIN class ON class.class_id = teacher_class.class_id
										//LEFT JOIN semester ON semester.semester_id = teacher_class.semester_id
										//where teacher_class_id = '$get_id'")or die(mysql_error());
										//$class_row = mysql_fetch_array($class_query);
										$sql = "Select * from student join class ON student.class_id = class.class_id where student_id ='$session_id' ";
						$result = mysql_query($sql) or die (mysql_error());
						$row = mysql_fetch_array($result) ;
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
                            <li><a href="#">Batch: <?php echo $row['year_of_studying']; ?></a> <span class="divider">/</span></li>
						<!--	<li><a href="#"><?php //echo $class_row['placement_code']; ?></a> <span class="divider">/</span></li>-->
							<li><a href="#"><b>Attempt Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  											<?php $query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
										
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
										$id = $row['teacher_class_id'];
				
										?>
										
										
										Company Attended: <strong><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></strong>
															<br>
															<!--<img id="avatar" class="img-polaroid" src="nehadmin/<?php 
															//echo $row['location']; ?>" width>-->
															<p><a href=""><i class="icon-search"></i> view info</a></p>
															<hr>
										<?php 
										//$query = mysql_query("select * from teacher_class
											//LEFT JOIN class_placement_overview ON class_placement_overview.teacher_class_id = teacher_class.teacher_class_id
											//where class_placement_overview.teacher_class_id = '$get_id'")or die(mysql_error());
											$row_placement = mysql_fetch_array($query); ?>
										<?php echo $row_placement['content']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>