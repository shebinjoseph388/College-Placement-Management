   <?php
   error_reporting('E_ALL^E_NOTICE');

   function createRandomPassword() {
	/*$chars = "023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 3) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}*/
	$characters_on_image = 7;
	$possible_letters = '23456789bcdfghjkmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
	$code = '';


$i = 0;
while ($i < $characters_on_image) { 
$code .= substr($possible_letters, mt_rand(0, strlen($possible_letters)-1), 1);
$i++;
}
	return $code;
}
   ?>
   
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
												
                                                <?php
											}
												?>
											</select>
                                            </div>
                                            </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" class="input focused" id="focusedInput" type="text" placeholder = "RegisterNo" maxlength="8" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" maxlength="40" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" maxlength="40" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                        <label>Sex:</label>
												<select name="sex" class="span5" required>
													<option></option>
													<option>Male</option>
													<option>Female</option>
												</select>
                                             
								<div class="control-group">
                                          <div class="controls">
                                          <?php
										  $tc = createRandomPassword();
										  
										  ?>
                                            <input class="input focused" id="focusedInput" type="text" name="username" value=<?php echo $tc; ?>   required>
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
						url: "save_member.php",
						data: formData,
						success: function(html){
						
							if($.trim(html) == 'true'){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							var delay = 1000;
							setTimeout(function(){ window.location = 'Student-List'  }, delay); 
							
						}
						else{
							$.jGrowl("UnSuccessfull attemt", { header: 'Error Occured' });
							var delay = 1000;
							setTimeout(function(){ window.location = 'Student-List'  }, delay); 
						}
						}
					});
				});
			});
			</script>		
