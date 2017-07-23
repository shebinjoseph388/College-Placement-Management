	<?php include('header_dashboard.php');
	error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
studconfirm_logged_in();
uniquestudconfirm_logged_in(); ?>
<?php

$post_id = $_GET['post_id'];
	  $post_iddd = encrypt_text($post_id);  
$get_id = decrypt_text($_GET['id']); 
$get_iddd = encrypt_text($get_id); 

?>
<?php 
 //$post_id = $_GET['post_id'];
	 
	  if($post_id == ''){
	  ?>
		<script>
		window.location = "Apply-For-Placement<?php echo '?id='.$get_iddd; ?>";
		</script>
	  <?php
	  }
	


 ?>
    <body id="studentTableDiv" style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link_student.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					   <!-- breadcrumb -->
				
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Registered Placements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
						
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<?php
										$query1 = mysql_query("select * FROM placementReg where placementReg_id = '$post_id'")or die(mysql_error());
										$row1 = mysql_fetch_array($query1);
									
									?>
									<div class="alert alert-info">Register for : <?php echo $row1['company']; ?></div>
									
									<div id="">
  											
												
				<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
												<th>RegisterNo</th>
												<th>Company</th>
												<th>Registered by:</th>
												<th>Status</th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM student_placementReg 
										LEFT JOIN student on student.student_id  = student_placementReg.student_id
										where placementReg_id = '$post_id'  order by placementReg_fdatein DESC")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['student_placementReg_id'];
										$student_id = $row['student_id'];
									?>                              
										<tr>
                                         <?php if ($session_id == $student_id){ ?>
										 <td><?php echo $row['placementReg_fdatein']; ?></td>
                                         <td><?php  echo $row['company']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                                                        
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>   
										
                                         <td>
										 <span class="badge badge-success"><?php echo $row['grade']; ?></span>
										 </td>
                                         <td>
										 <a class="btn btn-link"  href="#<?php echo $id; ?>" data-toggle="modal" ><i class="icon-remove"></i> </a>
										 </td>
										 <?php }else{ ?>
										 <td></td>
										 <?php } ?>										 
                                </tr>
                         <?php include("remove_student_placement_modal.php"); ?>
						 <?php } ?>
						   
                              
										</tbody>
									</table>
                                    
									</div>
								
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
		
			$.ajax({
			type: "POST",
			url: "remove_placement.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your submition has been Removed", { header: 'Data Delete' });
		window.location = 'Placement-Register-Student<?php echo '?id='.$get_iddd.'&'.'post_id='.$post_id; ?>';
			}
			}); 
			
			return false;
		});				
	});

</script>
					

                </div>
					<?php include('submit_placement_sidebar.php') ?>
				
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>