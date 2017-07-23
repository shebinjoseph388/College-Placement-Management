<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); 
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');?>
<?php $get_id = $_GET['id']; ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit  Member</div>
                                <div class="muted pull-right"><a href="members.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = $conn->query("select * from student where RegisterNo = '$get_id'")or die(mysql_error());
						$row = $query->fetch();
						?>
						<form id="update_member" class="form-signin" action="update_member.php"  method="post">
						<!-- span 4 -->
										<div class="span4">
											<input type="hidden" value="<?php echo $row['RegisterNo']; ?>" class="input-block-level"  name="RegisterNo" placeholder="RegisterNo" required>
											<input type="text" value="<?php echo $row['firstname']; ?>" class="input-block-level"  name="firstname" placeholder="FirstName" required>
										
											<input type="text" value="<?php echo $row['lastname']; ?>" class="input-block-level"  name="lastname"  placeholder="LastName"  required>
											
                                            <input type="text" value="<?php echo $row['password']; ?>" class="input-block-level"  name="password"  placeholder="Password"  required>
											<label>Sex:</label>
												<select name="sex" class="span5" required>
													<option><?php echo $row['sex']; ?></option>
													<option>Male</option>
													<option>Female</option>
												</select>
											
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">
											<label>department:</label>
											<select name="department" required>
												<option><?php echo $row['department']; ?></option>
                                                 <?php
											$query = mysql_query("select * from class");
											while($row1 = mysql_fetch_array($query))
											{
											
											?>
												
												<option><?php  echo $row1['class_name'];?></option>
												<!--<option>Married</option>
												<option>Widowed</option>
												<option>Separated</option>
												<option>Divorced</option>-->
                                                <?php
											}
												?>
											</select>
										

											<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Update</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
																						
						</div>
						<!--end span 4 -->
						
						
						
									
							
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_member").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_member.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Member Updated' });
													window.location = 'members.php';
												}
											});
										});
									});
								</script>
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