<div class="span3" id="">
	<div class="row-fluid">
				      <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add new Placement</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form class="" action="assign_save.php<?php echo '?id='.$get_id; ?>" method="post" enctype="multipart/form-data" name="upload" >
                       
                        <div class="control-group">
                          
                            <div class="controls">
                             <label class="control-label" for="inputEmail">Placement Code</label>
                            <input type="text" name="pcode" Placeholder="Placement code" required> 
                               
                            </div>
                        </div>
                        
                        <div class="control-group">
                      
                            <div class="controls">
                                <label class="control-label" for="inputEmail">Company</label>
                              <!--  <input type="text" name="name" Placeholder="Company"  class="input">-->
                              <select name="name">
					 <?php
					$class_query = mysql_query("select * from teacher_class where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
											$class = $class_row['class_name'];
											
						 $sql = "Select * from `recruitor` where department ='$class'";
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['recruitor_name'] .'" > ';
								echo $row['recruitor_name'] . ' </option> ';
																
						}?>
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="inputEmail">File</label>
                            <div class="controls">
				
									
								<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" >
                         
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                                <input type="hidden" name="id_class" value="<?php echo $get_id; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                             <label class="control-label" for="inputEmail">End Date:</label>
							<!--<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" placeholder="End Of Submission date" name="enddate" id="ed" value=""  readonly  required/><br>-->
                            <input type="text" name="enddate" Placeholder="End Of Submission date"  class="tcal" readonly required> 
                               
                            </div>
                        </div>
                        
                        
                        <div class="control-group">
                          
                            <div class="controls">
							<textarea id="assigntextare" placeholder="criteria" name="desc" required></textarea>
                             <!--   <input type="text" name="desc" Placeholder="criteria"  class="input" required> -->
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button name="Upload" type="submit" value="Upload" class="btn btn-success" /><i class="icon-upload-alt"></i>&nbsp;Submit</button>
                            </div>
                        </div>
                    </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
						

	</div>
</div>