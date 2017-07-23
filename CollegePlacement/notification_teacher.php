<?php include('header_dashboard.php'); 
error_reporting('E_ALL^E_NOTICE');
?>
<?php include('session.php'); 
executiveconfirm_logged_in();?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_notification_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
					     <ul class="breadcrumb">
						<?php
						
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							
							<li><a href="#"><b>Notification</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block" >
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">

							<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
                            
                            
                            
                            
                            
                            

  					<form id="domainTable" action="read_teacher.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">

		
        
         <?php
		 
		
 
	

						
						 	
		
		?>				
        
        <thead>
		<tr>
					<th></th>
												
											
					
		</tr>
		</thead>
        <?php
		
							
        ?>
		
    <tbody>    
		
      <?php  if($not_read == '0'){
								}else{  ?>
									<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
						
								<?php  }  ?>
				
					<?php $query = mysql_query("select * from teacher_notification
					LEFT JOIN teacher_class on teacher_class.teacher_class_id = teacher_notification.teacher_class_id
					LEFT JOIN student on student.student_id = teacher_notification.student_id
					LEFT JOIN placementReg on placementReg.placementReg_id = teacher_notification.placementReg_id 
					LEFT JOIN class on teacher_class.class_id = class.class_id
					where teacher_class.teacher_id = '$session_id'  order by  teacher_notification.date_of_notification DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
					while($row = mysql_fetch_array($query)){
					$placementReg_id = $row['placementReg_id'];
					$get_id = $row['teacher_class_id'];
					$id = $row['teacher_notification_id'];

					$query_yes_read = mysql_query("select * from notification_read_teacher where notification_id = '$id' and teacher_id = '$session_id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
					$yes = $read_row['student_read']; 
				
					?>
								<tr><td>	<div class="post"  id="del<?php echo $id; ?>">
										<?php  if ($yes == 'yes'){
										}else{ 
										?>
										  

										<input id=""  name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php  } ?>	
											<strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?> In <b><?php echo $row['class_name']." "; ?></b>for
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>&<?php echo 'post_id='.$placementReg_id; ?>">
											<?php echo $row['company']; ?> 
											<?php //echo $row['semester_code']; ?> 
									 
											</a>
                                            <div class="pull-right">
											<a class="btn btn-link"  href="#<?php echo $id; ?>" data-toggle="modal" ><i class="icon-remove"></i> </a>
											</div>
<?php include("remove_notification_teacher_model.php"); ?>
										<hr>
                                        
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
											
									
											
											</div></td></tr>
					<?php
					}
					?>

					
					
			</tbody>			  
        
        
        
        
        
	</table>
	</form>       
						
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
			url: "remove_teacher_notification.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Notification is Successfully Deleted", { header: 'Data Delete' });
		
			}
			}); 
			
			return false;
		});				
	});

</script>
                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>