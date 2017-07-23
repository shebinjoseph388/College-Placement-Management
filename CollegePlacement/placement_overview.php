<?php include('header_dashboard.php'); 
error_reporting('E_ALL^E_NOTICE');
?>
<?php include('session.php');
executiveconfirm_logged_in(); ?>
<?php $get_id = $_GET['id']; ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_overview_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
					     <ul class="breadcrumb">
								<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<!--<li><a href="#"><?php //echo $class_row['semester_code']; ?></a> <span class="divider">/</span></li>-->
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>placement Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
									<?php $query = mysql_query("select * from teacher_class
										LEFT JOIN class_placement_overview ON class_placement_overview.teacher_class_id = teacher_class.teacher_class_id
										where class_placement_overview.teacher_class_id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
										$id = $row['class_placement_overview_id'];
										$count = mysql_num_rows($query);
									if ($count > 0){
									?>
										  <a href="edit_Placement-Overview<?php echo '?id='.$get_id; ?>&<?php echo 'placement_id='.$id; ?>" class="btn btn-info"><i class="icon-pencil"></i> Edit placement Overview</a>
									 <?php }else{ ?>
										     <a href="add_Placement-Overview<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-plus-sign"></i> Add placement Overview</a>
									 <?php } ?>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php echo $row['content']; ?>
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