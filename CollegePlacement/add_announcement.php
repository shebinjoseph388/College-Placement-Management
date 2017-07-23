<?php include('header_dashboard.php'); ?>
<?php include('session.php');
								error_reporting('E_ALL^E_NOTICE');
 ?>
    <body id="class_div" style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_add_announcement_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$year_query = mysql_query("select * from teacher join class ON teacher.department_id = class.class_id where teacher_id = '$session_id'")or die(mysql_error());
								$year_query_row = mysql_fetch_array($year_query);
								$school_year = $year_query_row['class_name'];
																?>
								<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
								<li><a href="#">Department: <?php echo $year_query_row['class_name']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="count_class" class="muted pull-right">

								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span8">
										<form class="" id="add_downloadble" method="post"  >
                        <div class="control-group">
                     
                            <div class="controls">
				
									
							<textarea name="content" id="ckeditor_full"></textarea>
                            </div>
                        </div>

                
					
											<script>
			jQuery(document).ready(function($){
				$("#add_downloadble").submit(function(e){
					e.preventDefault();
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "add_announcement_save.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							window.location = 'add_announcement.php';
						}

					});
				});
			});
			</script>	
	
	
									</div>
									<div class="span4">
											
			<div class="alert alert-info">Check The Class you want to put this file.</div>
					
									<div class="pull-left">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
											<table cellpadding="0" cellspacing="0" border="0" class="table" id="">

										<thead>
										        <tr>
												<th></th>
												<th>Department Name</th>
												<th>Batch</th>
												</tr>
												
										</thead>
										<tbody>
											
                              	<?php
								 $query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										
										where teacher_id = '$session_id'  ")or die(mysql_error());
									//$query = mysql_query("select * from department");
										$count = mysql_num_rows($query);
										
									
										while($row = mysql_fetch_array($query)){
									$id = $row['teacher_class_id'];
										//$id = $row['department_id'];
				
										?>                             
										<tr id="del<?php echo $id; ?>">
											<td width="30">
												<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php 
											echo $row['class_name']; ?></td>
											<td><?php 
											echo $row['school_year']; ?></td>  
                                                                                                               
										</tr>
                         
						<?php } ?>
							
						   
                              
										</tbody>
									</table>
						
									
                                </div>
								<div class="span10">
								<hr>
									<center>
									<div class="control-group">
												<div class="controls">
													<button name="Upload" type="submit" value="Upload" class="btn btn-success" /><i class="icon-check"></i>&nbsp;Post</button>
												</div>
									</div>
									</center>
             
						       </form>		
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			

                </div>
							<?php/*  include('teacher_right_sidebar.php')  */?>
	
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>