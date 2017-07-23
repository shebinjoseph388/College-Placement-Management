   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Batches</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                           <label>Course</label>
                                           <select name="d" id="d">
                    <?php
				$query = mysql_query("select * from course order by course_id DESC ")or die(mysql_error());?>
				 <option>-SELECT-</option>
			<?php	while($row = mysql_fetch_array($query)){
				?>
               
				<option value="<?php  echo $row['course_name']; ?>"><?php echo $row['course_name']; ?></option>
				<?php
				}
				?>
</select>
                                           <!-- <input class="input focused" id="focusedInput" name="d" type="text" >-->
                                          </div>
                                        </div>
										
										
																		  <div class="control-group">
                                          <div class="controls">
                                         <label>Year</label>
					<select name="sem" id="sem">
                    <?php
				$query = mysql_query("select * from year order by y_id DESC ")or die(mysql_error());?>
				 <option>-SELECT-</option>
			<?php	while($row = mysql_fetch_array($query)){
				?>
               
				<option value="<?php  echo $row['y_id']; ?>"><?php echo $row['year']; ?></option>
				<?php
				}
				?>
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
					
					<?php
if (isset($_POST['save'])){
//$pi = $_POST['pi'];
$d = $_POST['d'];
$sem =$_POST['sem'];

$query = mysql_query("select * from class where class_name = '$d' and collegeyear = '$sem' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
	
mysql_query("insert into class (class_name,collegeyear) values('$d','$sem')")or die(mysql_error());
?>
<script>
window.location = "College-Batches";
</script>
<?php
}
}
?>