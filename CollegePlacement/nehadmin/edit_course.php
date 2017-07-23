<?php include('header.php'); ?>
<?php include('session.php');
adminconfirm_logged_in(); ?>
<?php
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
?>
<?php $get_id = $_GET['id']; ?>
    <body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('course_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_courseform.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                            <?php 
							$user_query = $conn->query("select * from course")or die(mysql_error());
							$count = $user_query->rowcount();
							?>
                                <div class="muted pull-left">College Batch List</div>
                                <div class="muted pull-right">
									Number of Registered years: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_course.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#course_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i>Delete</a>
                                    <script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script>
                                    
                                    
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Courses</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from course")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['course_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['course_name']; ?> </td>
													<td><?php echo $row['type']; ?> </td>

												<td width="40">
												<a href="Admin-Course-Edit<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
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