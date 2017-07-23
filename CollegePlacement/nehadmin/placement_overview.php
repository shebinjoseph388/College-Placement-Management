<?php include('header.php'); ?>
<?php include('session.php');
adminconfirm_logged_in(); ?>
    <body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_uploaded_sidebar.php'); ?>
                  
										 
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Placement File Uploaded List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>
												<th>Code</th>
												<th>Company</th>
												
												<th>Date</th>
												<th>Upload By</th>
												<th>Class</th>
                                   				<th></th>
												</tr>
												
										</thead>
										<tbody>
                                        
											
                              		<?php
										$query = mysql_query("select * FROM placementReg LEFT JOIN teacher ON teacher.teacher_id = placementReg.teacher_id 
																				  LEFT JOIN teacher_class ON teacher_class.teacher_class_id = placementReg.class_id 
																				  INNER JOIN class ON class.class_id = teacher_class.class_id  order by placementReg_id DESC")or die(mysql_error());
																				 
										while($row = mysql_fetch_array($query)){
											
											$id  = $row['placementReg_id'];
											$flo  = $row['floc'];
											$floc = str_replace('nehadmin/','',$flo);
											$get_id = $row['class_id'];
											$year = $row['school_year'];
											
									?>
										<tr>
											 <td><?php  echo $row['pcode']; ?></td>
                                         <td><?php  echo $row['company']; ?></td>
                                       
                                         <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                         <td><?php echo $row['class_name']; ?></td>
									 <td width="150">
										 	 

										<a   data-placement="bottom" title="Click to View Placed students" id="view<?php echo $id; ?>" href="#<?php echo $id; ?>" data-toggle="modal"    class="btn btn-success"><i class="icon-check icon-large"></i></a> <?php include('modal_view.php'); ?>
                                         <a data-placement="top" title="Click to View all Registered students" id="view_<?php echo $id; ?>" href="Admin-Placement-Registered-Students<?php echo '?id='.$get_id ?>&<?php echo 'year='.$year ?>&<?php echo 'post_id='.$id ?>" class="btn btn-warning"><i class="icon-search "></i></a>
										
										<?php 
										if ($floc == ""){
										}else{
										?>
										 <a data-placement="bottom" title="Download" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $floc; ?>"><i class="icon-download "></i></a>
										<?php } ?>
                                        </td> 
									
														<script type="text/javascript">
														$(document).ready(function(){
															$('#view<?php echo $id; ?>').tooltip('show');
															$('#view<?php echo $id; ?>').tooltip('hide');
														});
														</script>
                                                        <script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
                                                        <script type="text/javascript">
														$(document).ready(function(){
															$('#view_<?php echo $id; ?>').tooltip('show');
															$('#view_<?php echo $id; ?>').tooltip('hide');
														});
														</script>
                                    </tr>
									
                                        <?php  }  ?>      
						   			</tbody>
                                    
									</table>
									
                                    
										
                                    
										
                                </div>
                            </div>
                        </div>
                       
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
        <!-- model-->
      

		<?php include('script.php'); ?>
    </body>

</html>