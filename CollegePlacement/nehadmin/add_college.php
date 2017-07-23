   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add College</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
									
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="collegename" id="focusedInput" type="text" placeholder = "Collegename">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="pic" id="focusedInput" type="text" placeholder = "PersonInCharge">
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
                                            <input class="input focused" name="address" id="focusedInput" type="text" placeholder = "Address">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="contact" id="focusedInput" type="text" placeholder = "Contact">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email">
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
                           
                                $collegename = $_POST['collegename'];
                                $pic = $_POST['pic'];
								$username = $_POST['username'];
									$password = sha1($_POST['password']);
                                $address = $_POST['address'];
								 $contact = $_POST['contact'];
								  $email = $_POST['email'];
								$query = mysql_query("select * from members where collegename = '$collegename' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								$query1 = mysql_query("select * from members where email ='$email' ")or die(mysql_error());
								$count1 = mysql_num_rows($query1);
								$query2 = mysql_query("select * from teacher where username ='$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from student where RegisterNo ='$username' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								$query4 = mysql_query("select * from members where username ='$username' ")or die(mysql_error());
								$count4 = mysql_num_rows($query4);
								$query5 = mysql_query("select * from members where username ='$username' ")or die(mysql_error());
								$count5 = mysql_num_rows($query5);
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}
								else if($count1 > 0){?>
								<script>
								alert('Email already exist');
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
								else if($count4 > 0){?>
								<script>
								alert('Username Exist');
								</script>
								<?php
								}
								else if($count5 > 0){?>
								<script>
								alert('Username Exist');
								</script>
								<?php
								}
								else{

                                mysql_query("insert into members (collegename,pic,username,password,email,address,contact,status)
								values ('$collegename','$pic','$username','$password','email','$address','contact','Deactivated')         
								") or die(mysql_error()); ?>
								<script>
							 	window.location = "Admin-College-Member"; 
								</script>
								<?php   }} ?>
						 
						 