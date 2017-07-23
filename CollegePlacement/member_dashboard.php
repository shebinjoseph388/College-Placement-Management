<?php include('member_header.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('member_session.php'); 
memberconfirm_logged_in();?>
    <body id="class_div" style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('member_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('member_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					    
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block" >
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

							<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>

  					<form id="domainTable" action="read_teacher.php" method="post">
						<?php  if($not_read == '0'){
								}else{  ?>
									<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
						
								<?php  }  ?>
				
					<?php $query = mysql_query("select * from member_notification
					date_of_notification DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
					while($row = mysql_fetch_array($query)){
					$placementReg_id = $row['placementReg_id'];
					$get_id = $row['teacher_class_id'];
					$id = $row['teacher_notification_id'];

					$query_yes_read = mysql_query("select * from notification_read_member where member_notification_id = '$id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
					$yes = $read_row['student_read']; 
				
					?>
									<div class="post"  id="del<?php echo $id; ?>">
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
											
									
											
											</div>
					<?php
					}
					?>

					
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
			url: "remove_member_notification.php",
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