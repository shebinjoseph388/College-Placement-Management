<?php 
error_reporting('E_ALL^E_NOTICE');
include('session.php'); 
$get_id = $session_id; 

include('dbcon.php');

 studconfirm_logged_in();
uniquestudconfirm_logged_in();
   
?>
<?php include('header_dashboard.php'); ?>


    <body style = "background-image:url(nehadmin/images/index.jpg);">
    

<?php 
		 include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						//echo $session_id;
						$college_year_query = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
						$college_year_query_row = mysql_fetch_array($college_year_query);
						$college_year = $college_year_query_row['year_of_studying'];
						?>
                        							<li><a href="#">Batch: <?php echo $college_year_query_row['year_of_studying']; ?></a><span class="divider">/</span></li>

							<li><a href="#"><b>My Class</b></a></li>
                           
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
									<?php 
														$query = mysql_query("select * from student where student_id = '$session_id' and year_of_studying = '$college_year' ")or die(mysql_error());
														$count = mysql_num_rows($query);
														$query1 = mysql_query("select * from class join student ON class.class_id =student.class_id where student_id ='$session_id'  ")or die(mysql_error());
														$row1 = mysql_fetch_array($query1);
														$que = mysql_query("select * from teacher_class_student
														LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
														LEFT JOIN class ON class.class_id = teacher_class.class_id 
														
														LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
														where student_id = '$session_id' and teacher_class_student.school_year = '$college_year'
														")or die(mysql_error());
														$cnt = mysql_num_rows($que);
														if ($cnt != '0'){
														while($r = mysql_fetch_array($que)){
														$i= $r['teacher_class_id'];
														$id =encrypt_text($i);
														}}
									?>
												<span class="badge badge-info"><?php   ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  										<ul	 id="da-thumbs" class="da-thumbs">
													<?php
														if ($count != '0'){
														while($row = mysql_fetch_array($query)){
														//$i= $row['RegisterNo'];	
														//$id =base64_encode($i);
														
													?>
											<li>
												<a href="Placement-Progress<?php echo '?id='.$id; ?>">
														<img src ="nehadmin/uploads/thumbnails.jpg<?php //echo $row['thumbnails'] ?>" width="164" height="180" class="img-polaroid">
													<div>
													<span>
													<p>Welcome <?php echo $row['firstname']." ".$row['lastname']; ?><br/><?php echo $row1['class_name'].'('.$row['year_of_studying'].')'; ?></p>
													
													</span>
													</div>
												</a>
												
											</li>
								
			
									<?php }}else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> You are currently not attended</div>
									<?php } ?>	
									</ul>
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php');
		 ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>