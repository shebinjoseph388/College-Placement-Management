   <div class="row-fluid">
       <a href="Admin-TeacherLists" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Executive</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Executive</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
									<?php
									$query = mysql_query("select * from teacher where teacher_id = '$get_id' ")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
										
										  <div class="control-group">
											<label>Batches:</label>
                                          <div class="controls">
                                            <select name="department"  class="chzn-select"required>
											<?php
											$query_teacher = mysql_query("select * from teacher join  class")or die(mysql_error());
											$row_teacher = mysql_fetch_array($query_teacher);
											
											?>
											
                                             	<option value="<?php echo $row_teacher['class_id']; ?>">
												<?php echo $row_teacher['class_name']; ?>
												</option>
											<?php
											$department = mysql_query("select * from class order by class_name");
											while($department_row = mysql_fetch_array($department)){
											
											?>
											<option value="<?php echo $department_row['class_id']; ?>"><?php echo $department_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>FirstName</label>
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>LastName</label>
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>Username</label>
                                            <input class="input focused" value="<?php echo $row['username']; ?>" name="username" id="focusedInput" type="text" placeholder = "Username">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                          <label>Password</label>
                                            <input class="input focused" value="<?php echo $row['password']; ?>" name="password" id="focusedInput" type="text" placeholder = "Password">
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
                       
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $department_id = $_POST['department'];
								 $username = $_POST['username'];
								$password = sha1($_POST['password']);
								 $query2 = mysql_query("select * from users where username = '$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '$username' and teacher_id != '$get_id'")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								$query4 = mysql_query("select * from student where username = '$username' ")or die(mysql_error());
								$count4 = mysql_num_rows($query4);
								if($count2>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else if($count3>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else if($count4>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else{
								
								mysql_query("update teacher set firstname = '$firstname' , username = '$username',password = '$password',lastname = '$lastname' , department_id = '$department_id' where teacher_id = '$get_id' ")or die(mysql_error());	
								
								?>
								<script>
							 	window.location = "Admin-TeacherLists"; 
								</script>
								<?php   }} ?>
						 
						 