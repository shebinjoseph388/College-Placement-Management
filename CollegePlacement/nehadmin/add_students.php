   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="class_id" class="" required>
                                             	<option></option>
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
                                        <label>YearOfStudying:</label>
											<select name="year" required>
                                            <?php
											$query = mysql_query("select * from year");
											while($row = mysql_fetch_array($query))
											{
											
											?>
												
												<option><?php  echo $row['year'];?></option>
												<!--<option>Married</option>
												<option>Widowed</option>
												<option>Separated</option>
												<option>Divorced</option>-->
                                                <?php
											}
												?>
											</select>
                                            </div>
                                            </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                        <label>Sex:</label>
												<select name="sex" class="span5" required>
													<option></option>
													<option>Male</option>
													<option>Female</option>
												</select>
                                              <!--  <div class="control-group">
                                          <div class="controls">
                                           <label>Image
                                            <input type="file" name="file" class="input focused" id="focusedInput" value="upload" placeholder = "Image" required/></label>
                                          </div>
                                        </div>-->
										
                                                
                                                
								
                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="password" class="input focused" id="focusedInput" type="text" name="password" placeholder="Password" required>
                                          </div>
                                        </div>
                                       
										
											<div class="control-group">
                                          <div class="controls">
												<!--<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
                                                -->
                                                <button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_student.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		
