<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
studconfirm_logged_in();
uniquestudconfirm_logged_in(); ?>
<?php $get_id = $_GET['id']; 


?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
								<!-- breadcrumb -->
									<?php //$class_query = mysql_query("select * from teacher_class
									//LEFT JOIN class ON class.class_id = teacher_class.class_id
									//LEFT JOIN placement ON placement.semester_id = teacher_class.semester_id
									//where teacher_class_id = '$get_id'")or die(mysql_error());
									//$class_row = mysql_fetch_array($class_query);
									$sql = "Select * from student join class ON student.class_id = class.class_id where student_id ='$session_id' ";
						$result = mysql_query($sql) or die (mysql_error());
						$row = mysql_fetch_array($result) ;
									?>
												
									<ul class="breadcrumb">
										<li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
										
										<li><a href="#">Batch: <?php echo $row['year_of_studying']; ?></a> <span class="divider">/</span></li>
										<li><a href="#"><b>Placement Calendar</b></a></li>
									</ul>
									<!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span12">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Placement Calendar</div>
										</div>
										<div id='calendar'></div>		
							<!-- block -->
									</div>
										
							
							
						
										</div>
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
		<?php include('class_calendar_script.php'); ?>
    </body>
</html>