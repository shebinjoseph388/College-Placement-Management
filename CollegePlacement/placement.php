<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; 
executiveconfirm_logged_in();?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					   <!-- breadcrumb -->
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										$class = $class_row['class_name'];
										?>
					     <ul class="breadcrumb">
								<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Announced Placements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<thead>
										        <tr>
												<th>Date Announced</th>
                                                <th>PlacementCode</th>
												<th>Company	</th>
												<th></th>
												</tr>
										</thead>
										<tbody>
											
                              		<?php
								
										$query = mysql_query("select * FROM placementReg where class_id = '$get_id' and teacher_id = '$session_id' order by fdatein DESC ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['placementReg_id'];
										$floc  = $row['floc'];
									?>                              
								<tr>
										 <td><?php echo $row['fdatein']; ?></td>
                                          <td><?php echo $row['pcode']; ?></td> 
                                         <td><?php  echo $row['company']; ?></td>
                                         <td width="170">
										 <!-- <form method="post" action="view_submit_placement.php<?php //echo '?id='.$get_id ?>&<?php //echo 'post_id='.$id ?>">-->
                                         
										 <a data-placement="top" title="Click to View all Registered students" id="view<?php echo $id; ?>" href="Placement-Registered-Students<?php echo '?id='.$get_id ?>&<?php echo 'post_id='.$id ?>"" class="btn btn-warning"><i class="icon-search "></i></a>
										
										<?php 
										if ($floc == ""){
										}else{
										?>
										 <a data-placement="bottom" title="Download" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $row['floc']; ?>"><i class="icon-download "></i></a>
										<?php } ?>
                                      
                              <a href="#edit_placement<?php echo $id; ?>" data-toggle="modal"   rel="tooltip"  title="Edit Placement" id="e<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil "></i></a>
										<?php include('edit_placement.php'); ?>         
										 <a data-placement="bottom" title="Remove" id="<?php echo $id; ?>remove"  class="btn btn-danger"  href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-remove "></i></a>
										 <?php include('delete_assigment_modal.php'); ?>									
									</td>                                      
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
                                                        <script type="text/javascript">
														$(document).ready(function(){
															$('#view<?php echo $id; ?>').tooltip('show');
															$('#view<?php echo $id; ?>').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>remove').tooltip('show');
															$('#<?php echo $id; ?>remove').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>view').tooltip('show');
															$('#<?php echo $id; ?>view').tooltip('hide');
														});
														</script>
                                                        <script type="text/javascript">
    $(document).ready(function(){
        $('#e<?php echo $id; ?>').tooltip('show')
        $('#e<?php echo $id; ?>').tooltip('hide')
    });
</script>
                                </tr>
						 <?php } ?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
				<?php include('placement_sidebar.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
        
    </body>
</html>