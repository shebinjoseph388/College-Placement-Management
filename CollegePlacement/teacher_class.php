			
						
						<ul	 id="da-thumbs" class="da-thumbs">
										<?php 
										$query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										where teacher_id = '$session_id' ")or die(mysql_error());
									
										$count = mysql_num_rows($query);
										
										if ($count > 0){ 
										while($row = mysql_fetch_array($query)){
										$id = $row['teacher_class_id'];
										
				 
										?>
											<li id="del<?php echo $id; ?>">
                                            
												<a href="MyStudents<?php echo '?id='.$id; ?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['class_name'].'('.$row['school_year'].')'; ?></p></span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="class"><?php echo $row['school_year']; ?></p>
												<a href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											
											</li>
										<?php include("delete_class_modal.php"); ?>
									<?php } }else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> No Class Currently Added</div>
									<?php  } ?>
									</ul>