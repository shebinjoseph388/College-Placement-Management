<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $placement_id = $_GET['placement_id']; ?>
    <body>
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
                            <li><a href="#">Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>placement Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
								<a href="Placement-Overview<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-arrow-left"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php 
								$placement_query = mysql_query("select * from class_placement_overview where  class_placement_overview_id  = '$placement_id'")or die(mysql_error());
								$placement_row = mysql_fetch_array($placement_query);
								?>
														<form class="form-horizontal" method="post">
																<div class="control-group">
																	<label class="control-label" for="inputPassword">placement Overview Content:</label>
																	<div class="controls">
																			<textarea name="content" id="ckeditor_full"><?php echo $placement_row['content']; ?></textarea>
																	</div>
																</div>
														<div class="control-group">
														<div class="controls">
														
														<button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
														</div>
														</div>
														</form>
										<?php
										if (isset($_POST['save'])){
										$content = $_POST['content'];
										mysql_query("update class_placement_overview set content = '$content' where class_placement_overview_id = '$placement_id'")or die(mysql_error());
										?>
										<script>
											window.location = 'Placement-Overview<?php echo '?id='.$get_id; ?>';
										</script>
										<?php
										}
										
										?>
						
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