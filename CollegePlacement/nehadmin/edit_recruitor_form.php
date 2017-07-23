   <div class="row-fluid">
       <a href="Admin-Student-Lists" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Edit Recruitor</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Recruitor</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysql_query("select * from recruitor where recruitor_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								       <div class="control-group">
                                          <div class="controls">
                                           <label>Company For:</label>
                                            <input name="recruitor_genre" class="input focused" id="recruitor_genre" type="text" placeholder = "Department" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                   
                                          <div class="controls">
                                        
                                         <select name="txtCombo" id="txtCombo">
                                     <?php
						$sql = 'Select class_id,class_name from `class`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row1 = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row1['class_name'] .'" > ';
								echo $row1['class_name'] . ' </option> ';
																
						}
					 
					 ?>
                        <!-- <option value="Other">Other</option>-->
                                </select>
                                  </div>
                                        </div>
 											<div class="control-group">
                                   
                                          <div class="controls">
                           <input name="button" type="button" style="cursor:pointer;" onClick="addCombo()" value="Add" id="button1" />
 									 </div>
                                        </div> 
								
										<div class="control-group">
                                          <div class="controls">
                                           <label>Company Name</label>
                                            <input name="recruitor_name" value="<?php echo $row['recruitor_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "recruitor name" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                           <label>Company Contact</label>
                                            <input name="Company_Contact"  value="<?php echo $row['Company_Contact']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Company Contact" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                           <label>Company Address</label>
                                            <input  name="Company_Address"  value="<?php echo $row['Company_Address']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Company Address" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                           <label>No Of Students Placed</label>
                                            <input  name="selected_no"  value="<?php echo $row['selected_no']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "No Of Placed Students" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                           <label>Type Of Company</label>
                                            <input  name="job_category"  value="<?php echo $row['job_category']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "job category" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                           <label>Company Email</label>
                                            <input  name="email"  value="<?php echo $row['email']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "email" required>
                                          </div>
                                        </div>
								
                               
                                        
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['recruitor_name'];
                                $fn = $_POST['Company_Contact'];
                                $ln = $_POST['Company_Address'];
							$user = $_POST['selected_no'];
							$pass = $_POST['job_category'];
								$sx = $_POST['department'];
								$yr = $_POST['email'];
								
                               
									$que= mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
														$roww = mysql_fetch_array($que);
														$teacher = $roww['firstname']." ".$roww['lastname'];
														$queryy = mysql_query("select * from recruitor where recruitor_id = '$get_id'");
	 $rowww = mysql_fetch_array($queryy);
	 $company = $rowww['recruitor_name'];
								mysql_query("update recruitor set recruitor_name = '$un' , Company_Contact ='$fn' , Company_Address = '$ln' , selected_no ='$user',job_category='$pass',department = '$sx',email='$yr' where recruitor_id = '$get_id' ")or die(mysql_error());
								mysql_query("insert into activity_log (username,date,action) values('$teacher',NOW(),'Edited $company')");
								
								?>
 
								<script>
								window.location = "Admin-Recruitors"; 
								</script>

                       <?php     }  ?>
	