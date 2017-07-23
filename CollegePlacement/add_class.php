						   <div class="row-fluid">
       
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add class</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id ="add_class">
									  <div class="control-group">
											<label>Dept Name::</label>
                                          <div class="controls">
                                          <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="class_id"  class=""required>
											<?php
											$query = mysql_query("select * from class order by class_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											
                                             	<option value="<?php echo $row['class_id']; ?>">
												<?php echo $row['class_name']; ?>
												</option>
                                                <?php } ?>
											
                                            </select>
                                          </div>
                                        </div>
                                         <div class="control-group">
											<label>Batch:</label>
                                          <div class="controls">
                                          <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="year" required>
											 <?php
											$query = mysql_query("select * from year order by year DESC");
											while($row = mysql_fetch_array($query))
											{
											
											?>
											
                                             	<option><?php  echo $row['year'];?></option>
												
                                                <?php
											}
												?>
											
                                            </select>
                                          </div>
                                        </div>
                                       
                                       
                                       
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-success"><i class="icon-save"></i> Save</button>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                          <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					
					$.ajax({
						type: "POST",
						url: "add_class_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Class Already Exist", { header: 'Add Class Failed' });
						}else{
							$.jGrowl("Classs Successfully  Added", { header: 'Class Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'Executive-Dashboard'  }, delay);  
						}
						}
					});
				});
			});
			</script>		
                        <!-- /block -->
                    </div>
					
					

                        
                       
								
            <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					
					$.ajax({
						type: "POST",
						url: "add_class_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Class Already Exist", { header: 'Add Class Failed' });
						}else{
							$.jGrowl("Classs Successfully  Added", { header: 'Class Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'Executive-Dashboard'  }, delay);  
						}
						}
					});
				});
			});
			</script>		

								</div>
                            </div>
                        </div>
                        <!-- /block -->
						
