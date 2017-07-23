<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link_student.php'); ?>
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
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Uploaded</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
						
						
                        <!-- block -->
                        <!--<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
								<?php //$query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by fdatein DESC")or die(mysql_error()); 
									  //$count  = mysql_num_rows($query);
								?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
									//$query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by fdatein DESC")or die(mysql_error());
									//$count = mysql_num_rows($query);
									//if ($count == '0'){?>
									<div class="alert alert-info">Nothing Currently Uploaded</div>
									<?php
									//}else{
								?>
  											<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>criteria</th>
												<th></th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										//$query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by fdatein DESC")or die(mysql_error());
										//while($row = mysql_fetch_array($query)){
										//$id  = $row['placementReg_id'];
										//$floc = $row['floc'];
									?>                              
										<tr>
										 <td><?php //echo $row['fdatein']; ?></td>
                                         <td><?php  //echo $row['company']; ?></td>
                                         <td><?php //echo $row['fdesc']; ?></td>                                      
                                         <td width="220">
										 <form id="assign" method="post" action="submit_placement.php<?php //echo '?id='.$get_id ?>&<?php //echo 'post_id='.$id ?>">
										 <input type="hidden" name="id" value="<?php //echo $id; ?>">
										 <?php
											//if ($floc == ""){
											//}else{
										 ?>
										  <a data-placement="bottom" title="Download" id="<?php //echo $id; ?>download"  class="btn btn-info" href="<?php //echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
									<?php //} ?>
										 <button  data-placement="bottom" title="Submit placementReg" id="<?php //echo $id; ?>submit" class="btn btn-success" name="btn_assign"><i class="icon-upload icon-large"></i> Submit</button>
										 </form>
										 </td>                                      
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php //echo $id; ?>submit').tooltip('show');
															$('#<?php //echo $id; ?>submit').tooltip('hide');
														});
														</script>
                             							<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php //echo $id; ?>download').tooltip('show');
															$('#<?php //echo $id; ?>download').tooltip('hide');
														});
														</script>

                               
                                </tr>
                         
						 <?php //} ?>
						   
                              
										</tbody>
									</table>
						 <?php //} ?>
                                </div>
                            </div>
                        </div>   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Register</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="class_id" class="" required>
                                             	<option></option>
											<?php
											$cys_query = mysql_query("select * from class order by class_name");
											while($cys_row = mysql_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                   
                                          <div class="controls">
                                        <label>YearOfStydying:</label>
											<select name="year" required>
                                            <?php
											$query = mysql_query("select * from year");
											while($row = mysql_fetch_array($query))
											{
											
											?>
												
												<option><?php  echo $row['year'];?></option>
												<!--<option>Married</option>
												<option>Widowed</option>
												<option>Separated</option>
												<option>Divorced</option>-->
                                                <?php
											}
												?>
											</select>
                                            </div>
                                            </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                        <label>Sex:</label>
												<select name="sex" class="span5" required>
													<option></option>
													<option>Male</option>
													<option>Female</option>
												</select>
								<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" name="username" placeholder="Username" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" name="password" placeholder="Password" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                             <label>Status:</label>
												<select name="status" class="span5" required>
													<option>--Select--</option>
													
													<option>Unregistered</option>
												</select>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_student.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		

                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>