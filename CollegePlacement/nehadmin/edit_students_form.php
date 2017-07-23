   <div class="row-fluid">
       <a href="Admin-Student-Lists" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysql_query("select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
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
                                          <label>RegisterNo</label>
                                            <input name="un" value="<?php echo $row['RegisterNo']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>FirstName</label>
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                          <label>Lastname</label>
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                       
                                        <div class="control-group">
                                          <div class="controls">
                                          <label>Password</label>
                                            <input  name="password"  value="<?php echo $row['password']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                          <label>Gender</label>
                                            <input  name="sx"  value="<?php echo $row['sex']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Sex" required>
                                          </div>
                                        </div>
								
                                <div class="control-group">
                                          <div class="controls">
                                            <input  name="yr"  value="<?php echo $row['year_of_studying']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Year" required>
                                          </div>
                                        </div>
										 
                                        <div class="control-group">
                                          <div class="controls">
                                          <label>Status</label>
                                            <input  name="status"  value="<?php echo $row['status']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Status" required>
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
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
							$pass = sha1($_POST['password']);
								$sx = $_POST['sx'];
								$yr = $_POST['yr'];
								$st = $_POST['status'];
                                $cys = $_POST['cys'];
                     // $sem = $_POST['sem'];
                                $query2 = mysql_query("select * from student where RegisterNo = '$un' and student_id != '$get_id'")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '$un' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
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
								else{
									$que= mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
														$roww = mysql_fetch_array($que);
														$teacher = $roww['firstname']." ".$roww['lastname'];
														$queryy = mysql_query("select * from student where student_id = '$get_id'");
	 $rowww = mysql_fetch_array($queryy);
	 $student = $rowww['RegisterNo'];
								mysql_query("update student set RegisterNo = '$un' , firstname ='$fn' , lastname = '$ln' ,password='$pass',sex = '$sx',year_of_studying='$yr',status='$st',class_id = '$cys' where student_id = '$get_id' ")or die(mysql_error());
								mysql_query("insert into activity_log (username,date,action) values('$teacher',NOW(),'Edited $student')");
								}
								?>
 
								<script>
								window.location = "Admin-Student-Lists"; 
								</script>

                       <?php     }  ?>
	