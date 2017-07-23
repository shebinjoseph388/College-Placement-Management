<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php //$get_id = $_GET['id']; ?>

    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_quiz_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
                         <ul class="breadcrumb">
										<?php $college_year_query = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
						$college_year_query_row = mysql_fetch_array($college_year_query);
						$college_year = $college_year_query_row['year_of_studying'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#">Batch: <?php echo $college_year_query_row['year_of_studying']; ?></a><span class="divider">/</span></li>
                        	<li><a href="#"><b>Exam-View</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 	
							$que = mysql_query("select * from teacher_class_student
														LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
														LEFT JOIN class ON class.class_id = teacher_class.class_id 
														
														LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
														where student_id = '$session_id' and teacher_class_student.school_year = '$college_year'
														")or die(mysql_error());
														$cnt = mysql_num_rows($que);
														if ($cnt != '0'){
														while($r = mysql_fetch_array($que)){
														$get_id= $r['teacher_class_id'];

														//$id =base64_encode($i);
														}}
							
								$query = mysql_query("select * FROM class_quiz 
										LEFT JOIN quiz on class_quiz.quiz_id = quiz.quiz_id
										where teacher_class_id = '$get_id'  ")or die(mysql_error());
										$count = mysql_num_rows($query);
							?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="copy_file_student.php" method="post">
					
									<?php include('copy_to_backpack_modal.php'); ?>
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
										<thead>
										        <tr>
												<th> Title</th>
												<th>Exam</th>
												<th> Time </th>
												<th></th>
												</tr>
										</thead>
										<tbody>
                              		<?php
										$query = mysql_query("select * FROM class_quiz 
										LEFT JOIN quiz on class_quiz.quiz_id = quiz.quiz_id
										where teacher_class_id = '$get_id'  order by class_quiz_id DESC ")or die(mysql_error());

										while($row = mysql_fetch_array($query)){
										$id  = $row['class_quiz_id'];
										$quiz_id  = $row['quiz_id'];
										$quiz_time  = $row['quiz_time'];
									
										$query1 = mysql_query("select * from student_class_quiz where class_quiz_id = '$id' and student_id = '$session_id'")or die(mysql_error());
										$row1 = mysql_fetch_array($query1);
										$grade = $row1['grade'];

									?>                              
										<tr>                     
										 <td><?php echo $row['quiz_title']; ?></td>
                                         <td><?php  echo $row['quiz_description']; ?></td>                                     
                                         <td><?php  echo $row['quiz_time'] / 60; ?></td>                                     
                                         <td width="200">
										<?php if ($grade == ""){ ?>
											<a  data-placement="bottom" title="Take This Exam" id="<?php echo $id; ?>Download" href="Take-Exam<?php echo '?id='.$get_id ?>&<?php echo 'class_quiz_id='.$id; ?>&<?php echo 'test=ok' ?>&<?php echo 'quiz_id='.$quiz_id; ?>&<?php echo 'quiz_time='.$quiz_time;	 ?>"><i class="icon-check icon-large"></i> Take This Exam</a>
										<?php }else{ ?>
										<b>Already Taken Score <?php echo $grade; ?></b>
										<?php } ?>
										</td>            
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>Take This Exam').tooltip('show');
															$('#<?php echo $id; ?>Take This Exam').tooltip('hide');
														});
														</script>										 
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