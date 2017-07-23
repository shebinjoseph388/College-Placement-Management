<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id'];
executiveconfirm_logged_in(); ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   <!-- breadcrumb -->
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<!--<li><a href="#"><?php //echo $class_row['semester_code']; ?></a> <span class="divider">/</span></li>-->
							<li><a href="#">Batch: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Exam Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								<form action="delete_class_quiz.php<?php echo '?id='.$get_id; ?>" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									<a data-toggle="modal" href="#backup_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete_class_quiz.php'); ?>
										<thead>
										        <tr>
												<th></th>
												<th>Title</th>
												<th>criteria</th>
												<th>TIME (IN MINUTES)</th>
												<th>Date Added</th>
												</tr>
										</thead>
										<tbody>
                              		<?php
										$query = mysql_query("select * FROM class_quiz 
										LEFT JOIN quiz ON quiz.quiz_id  = class_quiz.quiz_id
										where teacher_class_id = '$get_id' 
										order by date_added DESC ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['class_quiz_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
										<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
										 <td><?php echo $row['quiz_title']; ?></td>
                                         <td><?php  echo $row['quiz_description']; ?></td>
                                         <td><?php  echo $row['quiz_time'] / 60; ?></td>
                                         <td><?php echo $row['date_added']; ?></td>                                      
                                       <td width="150">
										 	 

										<a data-placement="bottom" title="Click to View Marks" id="view<?php echo $id; ?>" href="#<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-check icon-large"></i>Result</a> 
                                        <a onClick="window.open('Print-Result-Record<?php echo '?id='.$id?>')"  class="btn btn-success"><i class="icon-list"></i>PDF</a>
										<?php include('modal_view_mark.php'); ?>
                                        </td> 
                                           <script type="text/javascript">
														$(document).ready(function(){
															$('#view<?php echo $id; ?>').tooltip('show');
															$('#view<?php echo $id; ?>').tooltip('hide');
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