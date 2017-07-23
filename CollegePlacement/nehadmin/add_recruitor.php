   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Recruitor</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_recruitor" method="post">
								
                                <div class="control-group">
                                          <div class="controls">
                                           <label>Company For:</label>
                                            <input name="recruitor_genre" class="input focused" id="recruitor_genre" type="text" placeholder = "Department" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                   
                                          <div class="controls">
                                        
                                         <select name="txtCombo" id="txtCombo">
                                     <?php
						$sql = 'Select class_id,class_name from `class`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['class_name'] .'" > ';
								echo $row['class_name'] . ' </option> ';
																
						}
					 
					 ?>
                        <!-- <option value="Other">Other</option>-->
                                </select>
                                  </div>
                                        </div>
 											<div class="control-group">
                                   
                                          <div class="controls">
                           <input name="button" type="button" style="cursor:pointer;" onClick="addCombo()" value="Add" id="button1" />
 									 </div>
                                        </div>                                        
                                      
										<div class="control-group">
                                          <div class="controls">
                                           <label>Company Name:</label>
                                            <input name="recruitor_name" class="input focused" id="focusedInput" type="text" placeholder = "Recruitor Name" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                           <label>Address:</label>
                                            <textarea  name = "address" class="input focused" id="focusedInput" placeholder = "Address" required></textarea>
                                          </div>
                                        </div>
										
                                        <div class="control-group">
                                          <div class="controls">
                                           <label>Contact:</label>
                                            <input  name = "contact" class="input focused" id="focusedInput" type="text" placeholder = "Contact Number" required>
                                          </div>
                                        </div>
                                        
										<div class="control-group">
                                          <div class="controls">
                                           <label>Email:</label>
                                            <input  name="email" class="input focused" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                        <label>Type Of Company:</label>
                                         <input  name="type" class="input focused" id="focusedInput" type="text" placeholder = "Type Of Recruitor" required>
												
                                             
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
				$("#add_recruitor").submit(function(e){
					e.preventDefault();
					
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_recruitor.php",
						data: formData,
						success: function(html)
						{
							alert(html);
							if($.trim(html) =='true')
						{
							
							$('#studentTableDiv').load('recruitor_table.php', function(response){
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
							$.jGrowl("Recruitor Successfully  Added", { header: 'Company Added' });
							var delay = 3000;
							setTimeout(function(){ window.location = 'Admin-Recruitors'  }, delay); 
						}
						else {
							
							$.jGrowl("Please Provide Valid Details Or Recruitor already exist", { header: 'Registration Failed' });
							var delay = 3000;
							setTimeout(function(){ window.location = 'Admin-Recruitors'  }, delay); 
						}
						}
					});
				});
			});
			</script>		
<SCRIPT language="javascript" type="text/javascript">
<!--

function addCombo() {
	
	var textb = document.getElementById("txtCombo");
	var recruitor_genre = document.getElementById("recruitor_genre");
	recruitor_genre.value=recruitor_genre.value +textb.value + ",";
		textb.value = "";
}
//-->
</SCRIPT>