   <div class="row-fluid">
    <a href="College-Batches" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Batches</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Batches</div>
                            </div>
							<?php 
							$query = mysql_query("select * from class join year on class.collegeyear = year.y_id where class_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['class_name']; ?>" id="focusedInput" name="d" type="text" placeholder = "Deparment">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['Person_in_charge']; ?>" id="focusedInput" name="dn" type="text" placeholder = "Person Incharge">
                                          </div>
                                        </div>
								  <div class="control-group">
                                          <div class="controls">
                                         
                                         <label>Batch</label>
					<select name="sem" id="sem">
                    <?php
                   $query = mysql_query("select * from year");
											while($row = mysql_fetch_array($query))
											{
											
											echo ' <option value="' . $row['y_id'] .'" > ';
								echo $row['year'] . ' </option> ';
											}
												?>
											</select>
			</select>
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
 if (isset($_POST['update'])){
 

 $dn = $_POST['dn'];
 $d = $_POST['d'];
 $sem = $_POST['sem'];
 $query = mysql_query("select * from class where class_name = '$d' and collegeyear = '$sem' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
 mysql_query("update class set class_name = '$d' , Person_in_charge  = '$dn',collegeyear = '$sem' where class_id = '$get_id' ")or die(mysql_error());
 }
 ?>
 <script>
 window.location='College-Batches'; 
 </script>
 <?php 
 }
 ?>
 