	<?php 
	error_reporting('E_ALL^E_NOTICE');
include('session.php'); 
studconfirm_logged_in(); 
uniquestudconfirm_logged_in();
?>
	<?php include('header_dashboard.php'); ?>

    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_notification_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
					     <ul class="breadcrumb">
						<?php
						$college_year_query = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
						$college_year_query_row = mysql_fetch_array($college_year_query);
						$college_year = $college_year_query_row['year_of_studying'];
										
						?>
							<li><a href="#">Batch: <?php echo $college_year; ?></a><span class="divider">/</span></li>
                            <li><a href="#"><b>Notification</b></a></li>

						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">
							
						
  					<form action="read.php" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
 <thead>
		<tr>
					<th></th>
												
											
					
		</tr>
		</thead>
         <tbody>  
						<?php if($not_read == '0'){
								}else{ ?>
							<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
													<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
	
    
    	 
    
								<?php } ?>
				
					<?php $query = mysql_query("select * from teacher_class_student
					LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
					LEFT JOIN class ON class.class_id = teacher_class.class_id 
					LEFT JOIN teacher ON teacher.teacher_id = teacher_class_student.teacher_id 
					JOIN notification ON notification.teacher_class_id = teacher_class.teacher_class_id 	
					where teacher_class_student.student_id = '$session_id' and teacher_class.school_year = '$college_year'  order by notification.date_of_notification DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
					if ($count  > 0){
					while($row = mysql_fetch_array($query)){
						
					$get_idd = $row['teacher_class_id'];
					//$get_id = $row['teacher_class_id'];
					$get_id = encrypt_text($get_idd);


					//$get_id = base64_encode($get_idd);
					$id = $row['notification_id'];
					
					
					$query_yes_read = mysql_query("select * from notification_read where notification_id = '$id' and student_id = '$session_id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
					$yes = $read_row['student_read'];
				
					?>
									<tr><td>	<div class="post"  id="del<?php echo $id; ?>">
										<?php if ($yes == 'yes'){
										}else{
										?>
										<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php } ?>	
											<strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?> In 
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
											<?php echo $row['class_name']; ?> 
											<?php //echo $row['name']; ?> 
									 
											</a>
										
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
											
									
											
											</div></td></tr>
					<?php
					} }else{
					?>
					<div class="alert alert-info"><strong><i class="icon-info-sign"></i> No Notifications Found</strong></div>
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


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
        <script type="text/javascript">
		
		</script>
    </body>
</html>