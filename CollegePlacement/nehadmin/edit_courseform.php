   <div class="row-fluid">
   <a href="College-Batch-Year" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Edit Course</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Course</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from course where course_id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['course_name']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "College Batch" required>
                                          </div>
                                        </div>
											<label>UG/PG Programme:</label>
                                         
                                            <select name="type" required>
											
											<option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
											<option>UG</option>
											<option>PG</option>
                                            </select>
                                         
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" value = "Update"><i class="icon-save icon-large"></i>Update</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$type = $_POST['type'];

mysql_query("update course set course_name = '$firstname',type = '$type'  where course_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit course $firstname')")or die(mysql_error());
?>
<script>
  window.location = "College-Courses"; 
</script>
<?php
}
?>