<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); 
studconfirm_logged_in();
uniquestudconfirm_logged_in();
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');?>

    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('myplacementform_sidebar.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Placementform</div>
                                <div class="muted pull-right"><a href="PlacementForm-View"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = $conn->query("select * from placementform where student_id = '$regno'")or die(mysql_error());
						$row = $query->fetch();
						$department = $row['department_id'];

						?>
                         <?php
                    $program = "Select * from course where course_name ='$department' ";
						$resultprogram = mysql_query($program) or die (mysql_error());
						$rowprogram = mysql_fetch_array($resultprogram) ;
						$type = $rowprogram['type'];
						
						?>
						<form id="update_member" class="form-signin"   method="post">
						<!-- span 4 -->
										<div class="span4">
											<input type="hidden" value="<?php echo $row['student_id']; ?>" class="input-block-level"  name="RegisterNo" placeholder="RegisterNo" required>
                                            <label>FullName</label> 
											<input type="text" value="<?php echo $row['s_name']; ?>" class="input-block-level"  name="firstname" placeholder="Candidate Name" required><label>Address</label> 
										
											<input type="text" value="<?php echo $row['s_address']; ?>" class="input-block-level"  name="address"  placeholder="Address"  required>
							<label>Contact</label> 
                                             <input type="text" value="<?php echo $row['s_contact']; ?>" class="input-block-level"  name="contact"  placeholder="ContactNumber"  required>				<label>Email</label> 
                                             <input type="text" value="<?php echo $row['email']; ?>" class="input-block-level"  name="email"  placeholder="Email"  required>
                                             
                                             <label>Sex:</label>
												<select name="sex" class="span5" required>
													<option><?php echo $row['sex']; ?></option>
													<option>Male</option>
													<option>Female</option>
												</select>
											
									
						<!-- span 4 -->				
						<!-- span 4 -->				
						
											<label>department:</label>
											<select name="department" required>
												<option><?php echo $row['department_id']; ?></option>
                                                 <?php
											$query = mysql_query("select * from class");
											while($row1 = mysql_fetch_array($query))
											{
											
											?>
												
												<option><?php  echo $row1['class_name'];?></option>
												
                                                <?php
											}
												?>
											</select>
										
                                             
                                             
                                             
                                            <!-- <input type="text" value="<?php //echo $row['s_country']; ?>" class="input-block-level"  name="country"  placeholder="Country"  required>
                                                                                          <input type="text" value="<?php //echo $row['s_caste']; ?>" class="input-block-level"  name="caste"  placeholder="Caste"  required>
                                                                                                                                       <input type="text" value="<?php //echo $row['s_religion']; ?>" class="input-block-level"  name="religion"  placeholder="Religion"  required>-->
                                                                                                                                       </div>
                                                                                                                                       
                                                      <div class="span4">
                                                      <label>SSLC%</label>                                                                                    
                                                <input type="text" value="<?php echo $row['sslc']; ?>" class="input-block-level"  name="sslc"  placeholder="SSLC%"  required>
						<label>HSE(PUC)%</label>
                                                                                             <input type="text" value="<?php echo $row['plustwo']; ?>" class="input-block-level"  name="plustwo"  placeholder="PlusTwo%"  required>
                                                                          <label>DegreeScores(%)</label>                                                                <input type="text" value="<?php echo $row['sem1']; ?>" class="input-block-level"  name="sem1"  placeholder="DegreeSem1%"  required>
                                                   <input type="text" value="<?php echo $row['sem2']; ?>" class="input-block-level"  name="sem2"  placeholder="DegreeSem2%"  required>
                                                                                                <input type="text" value="<?php echo $row['sem3']; ?>" class="input-block-level"  name="sem3"  placeholder="DegreeSem3"  required>
                                                                                                                                             <input type="text" value="<?php echo $row['sem4']; ?>" class="input-block-level"  name="sem4"  placeholder="DegreeSem4%"  required>
                                                                                                                                                                                          <input type="text" value="<?php echo $row['sem5']; ?>" class="input-block-level"  name="sem5"  placeholder="DegreeSem5"  required>                                             <input type="text" value="<?php echo $row['sem6']; ?>" class="input-block-level"  name="sem6"  placeholder="DegreeSem6"  required>
                                                                                                                                                                                          </div>
                                                                                                                                                                                          <div class="span4">
						<?php if($type == 'PG'){ ?>
                                                             <label>PGScores(%)</label>                                                                                                                                                                          <input type="text" value="<?php echo $row['pgsem1']; ?>" class="input-block-level"  name="pgsem1"  placeholder="PGSem1%"  required>                                             <input type="text" value="<?php echo $row['pgsem2']; ?>" class="input-block-level"  name="pgsem2"  placeholder="PGSem2%"  required>

                                             <input type="text" value="<?php echo $row['pgsem3']; ?>" class="input-block-level"  name="pgsem3"  placeholder="PGSem3%"  required>                                             <input type="text" value="<?php echo $row['pgsem4']; ?>" class="input-block-level"  name="pgsem4"  placeholder="PGSem4%"  required>
                                                                                          <input type="text" value="<?php echo $row['pgsem5']; ?>" class="input-block-level"  name="pgsem5"  placeholder="PGSem5%"  required>
                                                                                                                                       <input type="text" value="<?php echo $row['pgsem6']; ?>" class="input-block-level"  name="pgsem6"  placeholder="PGSem6"  required>
                                                                                                                                       <?php } ?>
                                                                                                                   
<label>Backlog in UG:</label>
												<select name="backlogug" class="span5" required>
													<option><?php echo $row['backlogug']; ?></option>
													<option value ="no">No</option>
													<option value ="yes">Yes</option>
												</select>
                                                <?php if($type == 'PG'){ ?>
											<label>Backlog in PG:</label>
												<select name="backlogpg" class="span5" required>
													<option><?php echo $row['backlogpg']; ?></option>
													<option value ="no">No</option>
													<option value ="yes">Yes</option>
												</select>
<?php } ?>
						</div>
                        
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
																					<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Update</button>
												
						</div>
						<!--end span 4 -->
						
						
						
									
							
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_member").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_placementform.php",
												data: formData,
												success: function(html){
													$.jGrowl("Form Successfully  Updated", { header: 'Form Updated' });
													window.location = 'PlacementForm-View';
												}
											});
										});
									});
								</script>
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