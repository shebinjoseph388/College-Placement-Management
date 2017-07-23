   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add New Course</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                          <label>Course:</label>
                                            <input class="input focused" name="course" id="focusedInput" type="text" placeholder = " Course" required>
                                          </div>
                                        </div>
										<label>UG/PG Programme:</label>
												<select name="type" class="span5" required>
													<option></option>
													<option>UG</option>
													<option>PG</option>
												</select>
										
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
if (isset($_POST['save'])){
$course = $_POST['course'];
$type = $_POST['type'];



$query = mysql_query("select * from course where course_name = '$course'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into course (course_name,type) values('$course','$type')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add School course $course')")or die(mysql_error());
?>
<script>
window.location = "College-Courses";
</script>
<?php
}
}
?>