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
				<?php include('filter_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
							<a href="Add-Students-to-Class<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i> Add Student</a>
                            <!--<a href="uploadstudinfo.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i> Upload Student</a>-->
							<a onClick="window.open('Student-List-Print<?php echo '?id='.$get_id; ?>')"  class="btn btn-success"><i class="icon-list"></i> Student List</a>
						</div>
                       
						<?php include('my_students_breadcrums.php'); ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
								<?php 
								$my_student = mysql_query("SELECT * FROM teacher_class_student
														LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
														INNER JOIN class ON class.class_id = student.class_id  where teacher_class_id = '$get_id' order by lastname ")or die(mysql_error());
								$count_my_student = mysql_num_rows($my_student);?>
								Number of Students: <span class="badge badge-info"><?php echo $count_my_student; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul	 id="da-thumbs" class="da-thumbs">
										    <?php
														$my_student = mysql_query("SELECT * FROM teacher_class_student
														LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
														INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by firstname ")or die(mysql_error());
														while($row = mysql_fetch_array($my_student)){
														$id = $row['teacher_class_student_id'];
														$regisno =$row['RegisterNo'];
														?>
											<li id="del<?php echo $id; ?>">
													<a href="View-PlacementForm-Student-Exe<?php echo '?id='.$regisno?>&<?php echo 'get_id='.$get_id ?>;">
                                                    <?php 
					if($row['location']==''){ ?>
                    					<img id="student_avatar_class" class="img-polaroid" width="124" height="140" class="img-polaroid" src="nehadmin/uploads/propic.jpg">

					<?php }else { ?>
					<img id="student_avatar_class" width="124" height="140" class="img-polaroid" class="img-polaroid" src="nehadmin/<?php echo $row['location']; ?>"> <?php } ?>
															
														<div>
														<span><p><?php echo $row['firstname'].'('.$row['school_year'].')'; ?></p></span>
														</div>
													</a>
													<p class="class"><?php echo $row['firstname'];?></p>
													<p class="placement"><?php echo $row['lastname']; ?></p>
													<a  href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											</li>
											<?php include("remove_student_modal.php"); ?>
											<?php } ?>
									</ul>
												<script type="text/javascript">
													$(document).ready( function() {
														$('.remove').click( function() {
														var id = $(this).attr("id");
														
															$.ajax({
															type: "POST",
															url: "remove_student.php",
															data: ({id: id}),
															cache: false,
															success: function(html){
																$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
																$('#'+id).modal('hide');
																$.jGrowl("Your Student is Successfully Removed", { header: 'Student Remove' });
															}
															}); 	
															return false;
														});				
													});
												</script>
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