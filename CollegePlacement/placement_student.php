<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
studconfirm_logged_in();
uniquestudconfirm_logged_in(); ?>
<?php $get_idd =  $_GET['id']; 
//$get_id =  $_GET['id']; 
 $get_id = decrypt_text($get_idd);


?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
					   <!-- breadcrumb -->
				
										<?php 
										$sql2 = "Select * from student  where RegisterNo ='$regno' ";
						$result2 = mysql_query($sql2) or die (mysql_error());
						$row2 = mysql_fetch_array($result2) ;
						$count = $row2['count'];
						$today = strtotime(date("m/d/Y"));
									
										
										$sql1 = "Select * from placementform  where student_id ='$regno' ";
						$result1 = mysql_query($sql1) or die (mysql_error());
						$row1 = mysql_fetch_array($result1) ;
						$reg = $row1['student_id'];
						
						
						

										$sql = "Select * from student join class ON student.class_id = class.class_id where student_id ='$session_id' ";
						$result = mysql_query($sql) or die (mysql_error());
						$row = mysql_fetch_array($result) ;
										?>
									
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">Batch: <?php echo $row['year_of_studying']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Registered Placements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
						
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
								<?php $query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by fdatein DESC")or die(mysql_error()); 
									  $count  = mysql_num_rows($query);
								?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">
								<?php
									$query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by fdatein DESC")or die(mysql_error());
									$count = mysql_num_rows($query);
									
									//$count = mysql_num_rows($query);
									if ($count == '0'){?>
									<div class="alert alert-info">Currently No new Placement</div>
									<?php
									}else if($reg == ""){ ?>
									<div class="alert alert-warning">Upload Your PlacementForm..<a href="Submit-PlacementForm">Click Here to Upload</a></div>
								<?php	}else{
								?>
  											<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>
												<th>Date Register</th>
                                                <th>Registered by</th>
											     <th>Company</th>
                                                  <th>Criteria</th>
                                                <th> End of submition</th>
												<th></th>
                                                <th></th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM placementReg where class_id = '$get_id'  order by placementReg_id ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
											
										$id  = $row['placementReg_id'];
										//$i = encrypt_text($id);
										$query1 = mysql_query("select * FROM placementReg join teacher ON placementReg.teacher_id=teacher.teacher_id where placementReg_id = '$id'  order by placementReg_id ")or die(mysql_error());
										$row1 = mysql_fetch_array($query1);
										$floc = $row['floc'];
									?>                              
										<tr>
										 <td><?php echo $row['fdatein']; ?></td>
                                          <td><?php echo $row1['firstname']; ?></td>
                                         <td><?php  echo $row['company']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>
                                         <td><?php echo $row['enddate']; ?></td>
                                         <td></td>                                      
                                         <td width="220">
                                        
										 <form id="assign" method="post" action="Placement-Register-Student<?php echo '?id='.$get_idd ?>&<?php echo 'post_id='.$id ?>">
										 <input type="hidden" name="id" value="<?php echo $id; ?>">
										 <?php

											if (($floc == "")){

											}else{
										 ?>
										  <a data-placement="bottom" title="Download" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
										<?php } ?>
                                        <?php
										$enddate =strtotime($row['enddate']); 
											$diff = $enddate - $today;
										
																//checking whether student already submitted or not
																//	$que = mysql_query("select * FROM student_placementReg
										//where (placementReg_id = '$id') && (student_id = '$session_id')")or die(mysql_error());
										//$c = mysql_num_rows($que);
										
										//$id  = $row['student_placementReg_id'];
										//$student_id = $row['student_id'];
										
										
										if($diff < 0){ ?>

										<?php	}
										else{
										?>
										 <button  data-placement="bottom" title="Register for Placement" id="<?php echo $id; ?>submit" class="btn btn-success" name="btn_assign"><i class="icon-upload icon-large"></i> Register</button><?php } ?>
										 </form>
										 </td>                                      
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>submit').tooltip('show');
															$('#<?php echo $id; ?>submit').tooltip('hide');
														});
														</script>
                             							<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
                                                       

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
						 <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
       

    </body>
</html>