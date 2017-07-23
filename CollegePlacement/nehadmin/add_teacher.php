   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Executive</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
									 <!--	<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>-->
									
										
										  <div class="control-group">
											<label>Department:</label>
                                          <div class="controls">
                                            <select name="department"  class="chzn-select" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from class order by class_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="password" id="focusedInput" type="text" placeholder = "Password">
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
					
					
					    <?php
                            if (isset($_POST['save'])) {
                           
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
								$username = $_POST['username'];
									$password = sha1($_POST['password']);
                                $department_id = $_POST['department'];
								$query = mysql_query("select * from teacher where firstname = '$firstname' and lastname = '$lastname' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								$query1 = mysql_query("select * from teacher where department_id ='$department_id' ")or die(mysql_error());
								$count1 = mysql_num_rows($query1);
								$query2 = mysql_query("select * from teacher where username ='$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from student where RegisterNo ='$username' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}
								else if($count1 > 0){?>
								<script>
								alert('Already class is assigned');
								</script>
								<?php
								}
								else if($count2 > 0){?>
								<script>
								alert('Username Exist');
								</script>
								<?php
								}
								else if($count3 > 0){?>
								<script>
								alert('Username Exist');
								</script>
								<?php
								}
								else{

                                mysql_query("insert into teacher (firstname,lastname,username,password,location,department_id,teacher_stat)
								values ('$firstname','$lastname','$username','$password','uploads/NO-IMAGE-AVAILABLE.jpg','$department_id','Deactivated')         
								") or die(mysql_error()); ?>
								<script>
							 	window.location = "Admin-TeacherLists"; 
								</script>
								<?php   }} ?>
						 
						 