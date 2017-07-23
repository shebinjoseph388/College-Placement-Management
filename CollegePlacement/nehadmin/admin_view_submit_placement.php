<?php include('header.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
adminconfirm_logged_in(); ?>
<?php  $get_id = $_GET['id']; 
 $year = $_GET['year']; ?>
<?php 
	  $post_id = $_GET['post_id'];
	  if($post_id == ''){
	  ?>
		<script>
		window.location = "Admin-Announced-Placements<?php echo '?id='.$post_id; ?>";
		</script>
	  <?php
	  }
	
 ?>
 

    <body id="studentTableDiv" style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_uploaded_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
					   <!-- breadcrumb -->
				
										<?php $class_query = mysql_query("select * from class
										where class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
<!--<li><a href="#"><?php //echo $class_row['placement_code']; ?></a> <span class="divider">/</span></li>-->
							<li><a href="#"><b>Registered Students</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
						
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
                                 <a onClick="window.open('Admin-Filter-Students<?php echo '?id='.$get_id ?>&<?php echo 'year='.$year ?>&<?php echo 'post_id='.$post_id ?>')"  class="btn btn-success"><i class="icon-list"></i>Filter</a>
                                 <a onClick="window.open('Admin-Print-Registered-Record<?php echo '?id='.$post_id?>')"  class="btn btn-success"><i class="icon-download icon-large"></i>PDF</a>
                                 <a onClick="window.open('Admin-Registered-Student-Excel<?php echo '?id='.$post_id?>')"  class="btn btn-success"><i class="icon-download icon-large"></i>Excel</a>
                                <a href="Admin-Announced-Placements<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">
									
                                    
                                    
                                    
                                    
                                    
                                    
                                                                  <?php //include('dbcon.php');
							  //include('dbConnector.php');
							

							   ?>

     <form action="delete_member.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">

		
        
         <?php
		 
		
 
	

						
						 	
		
		?>				
        
        <thead>
		<tr>
					<th>Date Upload</th>
					<th>CollegeID</th>
					<th>Name</th>
					<th>Email</th>
                   
					<th class="empty"></th>
					
		</tr>
		</thead>
        <?php
		
							
        ?>
		
    <tbody>    
		<?php
										$query = mysql_query("select * FROM student_placementReg join placementform on student_placementReg.RegNo=placementform.student_id
										LEFT JOIN student on student.student_id  = student_placementReg.student_id
										where placementReg_id = '$post_id'  order by placementReg_fdatein DESC")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['student_placementReg_id'];
										$regnum =$row['RegNo'];
										
										//$studid  = $row['student_id'];
									?>                              
										<tr>
										 <td width="190"><?php echo $row['placementReg_fdatein']; ?></td>
                                         <td width="100"><?php  echo $row['RegNo']; ?></td>
                                         <td width="190"><?php echo $row['s_name']; ?></td>        
                                          <td width="220"><?php echo $row['email']; ?></td> 
		                            
                                   <td class="empty" width="80">
		<!--<a data-placement="left" title="Click to Edit" id="edit<?php //echo $id; ?>" href="edit_member.php<?php //echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php //echo $id; ?>').tooltip('show');
				$('#edit<?php //echo $id; ?>').tooltip('hide');
			});
			</script>-->
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="Admin-View-Filter-Student-PlacementForm<?php echo '?regno='.$regnum?>&<?php echo 'post_id='.$post_id ?>&<?php echo 'id='.$get_id ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
            <?php
            if ($floc == ""){
										}else{
										?>
										 <a data-placement="bottom" title="Download Resume" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
                                                                 
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
										<?php } ?>
		</td>
                                                                                                    
                                </tr>
                         
						 <?php } ?>
					
                              
	
		</tbody>
	</table>
	</form>                                
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
								
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