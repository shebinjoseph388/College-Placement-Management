<?php  include('header.php'); ?>
<?php  include('session.php');
adminconfirm_logged_in(); ?>
    <body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Distribution</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
                         <?php 
								$query_recruitor = mysql_query("select * from recruitor")or die(mysql_error());
								$count_recruitor = mysql_num_rows($query_recruitor);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_recruitor; ?>"><?php echo $count_recruitor; ?></div>
                                    <div class="chart-bottom-heading"><strong>Recruitors</strong>

                                    </div>
                                </div>
                                <?php 
								$query_placement = mysql_query("select * from placementReg")or die(mysql_error());
								$count_placement = mysql_num_rows($query_placement);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_placement; ?>"><?php echo $count_placement; ?></div>
                                    <div class="chart-bottom-heading"><strong>Placements</strong>

                                    </div>
                                </div>
									<?php 
								$query_placed = mysql_query("select * from student_placementreg where grade3 != '' ")or die(mysql_error());
								$count_placed = mysql_num_rows($query_placed);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_placed; ?>"><?php echo $count_placed; ?></div>
                                    <div class="chart-bottom-heading"><strong>Placed Candidates</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_teacher = mysql_query("select * from teacher")or die(mysql_error());
								$count_teacher = mysql_num_rows($query_teacher);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_teacher; ?>"><?php echo $count_teacher ?></div>
                                    <div class="chart-bottom-heading"><strong>Executives</strong>

                                    </div>
                                </div>
								
								
								
										<?php 
								$query_student = mysql_query("select * from student")or die(mysql_error());
								$count_student = mysql_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Students</strong>

                                    </div>
                                </div>
								
								
								<?php 
								$query_student = mysql_query("select * from student where status='Registered'")or die(mysql_error());
								$count_student = mysql_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Students</strong>

                                    </div>
                                </div>
								
								
							
								
									<?php 
								$query_member = mysql_query("select * from members")or die(mysql_error());
								$count_member = mysql_num_rows($query_member);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_member; ?>"><?php echo $count_member; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Colleges</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_file = mysql_query("select * from files")or die(mysql_error());
								$count_file = mysql_num_rows($query_file);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_file; ?>"><?php echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Uploaded Studymaterials</strong>

                                    </div>
                                </div>
								
								
										
						
                       
						
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>