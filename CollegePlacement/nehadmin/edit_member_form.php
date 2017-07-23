   <div class="row-fluid">
       <a href="Admin-TeacherLists" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Edit Member</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Member</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
									<?php
									$query = mysql_query("select * from members where member_id = '$get_id' ")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
										
										  
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>CollegeName</label>
                                            <input class="input focused" value="<?php echo $row['collegename']; ?>" name="collegename" id="focusedInput" type="text" placeholder = "Collegename">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>PersonInCharge</label>
                                            <input class="input focused" value="<?php echo $row['person_in_charge']; ?>"  name="pic" id="focusedInput" type="text" placeholder = "PersonInCharge">
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
                                          <label>Address</label>
                                            <input class="input focused" value="<?php echo $row['address']; ?>" name="address" id="focusedInput" type="text" placeholder = "Address">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                          <label>ContactNo</label>
                                            <input class="input focused" value="<?php echo $row['contact']; ?>" name="contact" id="focusedInput" type="text" placeholder = "Contact">
                                          </div>
                                        </div>
									<div class="control-group">
                                          <div class="controls">
                                          <label>Email</label>
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="email" placeholder = "Email">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                          <label>Status</label>
                                            <input class="input focused" value="<?php echo $row['status']; ?>" name="status" id="focusedInput" type="text" placeholder = "status">
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
                       
                                $collegename = $_POST['collegename'];
                                $pic = $_POST['pic'];
                                $address = $_POST['address'];
								$contact = $_POST['contact'];
								$email = $_POST['email'];
								 $username = $_POST['username'];
								$password = sha1($_POST['password']);
									$status =$_POST['status'];
								 $query2 = mysql_query("select * from users where username = '$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '$username' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								$query4 = mysql_query("select * from student where RegisterNo = '$username' ")or die(mysql_error());
								$count4 = mysql_num_rows($query4);
								$query5 = mysql_query("select * from members where username = '$username' and member_id !='$get_id' ")or die(mysql_error());
								$count5 = mysql_num_rows($query5);
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
								else if($count5>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else{
								
								mysql_query("update members set collegename = '$collegename' , username = '$username',password = '$password',person_in_charge = '$pic' , address = '$address',email = '$email',contact ='$contact',status ='$status' where member_id = '$get_id' ")or die(mysql_error());	
								
								?>
								<script>
							 	window.location = "Admin-College-Member"; 
								</script>
								<?php   }} ?>
						 
						 