<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id'];
executiveconfirm_logged_in(); ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
								<!-- breadcrumb -->
									<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);

									$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
									?>
												
									<ul class="breadcrumb">
											<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<!--<li><a href="#"><?php //echo $class_row['semester_code']; ?></a> <span class="divider">/</span></li>-->
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
										<li><a href="#"><b>Placement Calendar</b></a></li>
									</ul>
									<!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span8">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Calendar</div>
										</div>
															<div id='calendar'></div>		
										</div>
										
										<div class="span4">
												<?php include('add_class_event.php'); ?>
										</div>	
							<!-- block -->
						
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