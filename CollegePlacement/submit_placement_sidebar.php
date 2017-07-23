<div class="span3" id="">
	<div class="row-fluid">
				      <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Register for Placements</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
						<form id="add_placement"   method="post" enctype="multipart/form-data">
                       <!-- <div class="control-group">
                            <label class="control-label" for="inputEmail">File</label>
                            <div class="controls">-->
				
									<?php
									

									$query2 = mysql_query("select * FROM placementReg where placementReg_id = '$post_id'")or die(mysql_error());
										$row2 = mysql_fetch_array($query2);
										
										
										//checking whether student already submitted or not
										$que = mysql_query("select * FROM student_placementReg
										where (placementReg_id = '$post_id') && (student_id = '$session_id')")or die(mysql_error());
										$cnt = mysql_num_rows($que);
										
										$id  = $row['student_placementReg_id'];
										$student_id = $row['student_id'];
									
									
								$query1 = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
								$row1 = mysql_fetch_array($query1);
								$c = $row1['count'];
								$count1 = mysql_num_rows($query1);
								
								?>
							<!--	<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>-->
                        <input type="hidden" id="count" name="count" value="<?php echo $c; ?>"  placeholder="Count">
                        <input type="hidden" id="countreg" name="countreg" value="<?php echo $cnt; ?>"  placeholder="CountReg">
                               <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />-->
                               
                                <input type="hidden" name="id" id="id" value="<?php echo $post_id; ?>"/>
                                <input type="hidden" name="get_id" id="get_id" value="<?php echo $get_id; ?>"/>
                           <!-- </div>
                        </div>-->
                        <div class="control-group">
                      
                            <div class="controls">
                            <input type="text" name="name" size="30" id="name"  readonly  value=<?php echo $row1['RegisterNo'];  ?>>
                               <!-- <input type="text" name="name" Placeholder="Candidate Name"  class="input" required>-->
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                                <input type="text" name="desc"  readonly value=<?php echo $row2['company'];  ?> class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button name="Upload" type="submit" value="Upload" class="btn btn-success" /><i class="icon-upload-alt"></i>&nbsp;Register</button>
                            </div>
                        </div>
                    </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
							<script>
			jQuery(document).ready(function($){
				$("#add_placement").submit(function(e){
					e.preventDefault();
					var id = jQuery('#id').val();
					var get_id = jQuery('#get_id').val();
					var count = jQuery('#count').val();
					var countreg = jQuery('#countreg').val();
					var _this = $(e.target);
					
					if (count == 3)
						{
						$.jGrowl("Your attemt is over  ", { header: 'Contact the Placement Coordinator' });
						}else if(countreg>0){
						$.jGrowl("You already submitted  ", { header: 'Trying for Resubmition' });	
						}
						
						else if (count<3 && countreg == 0){
					var formData = new FormData($(this)[0]);
					$.ajax({
						type: "POST",
						url: "upload_placement.php",
						data: formData,
						success: function(html){
							$.jGrowl(" Successfully  Registered", { header: 'Student Registered' });
							window.location = 'Placement-Register-Student<?php echo '?id='.$get_iddd.'&'.'post_id='.$post_id; ?>';
						},
						cache: false,
						contentType: false,
						processData: false
					});
						}
				});
			});
			</script>	
		
						

	</div>
</div>