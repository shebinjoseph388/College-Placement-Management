<?php include('APR/header.php'); ?>
<?php include('APR/navbar.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
					<img src="APR/img/dr.png">
					

<hr>
				</div>
				<div class="span12">
								

<div class="signup_container">		
<?php 
session_start();
include('APR/signup_form.php'); ?>	
</div>
		
		</div>
			
			
			</div>
		</div>
    </div>
       <!-- Modal student login -->
    <div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header "><div class="alert alert-info">Please Enter Required Details Below.</div></div>
		<div class="modal-body">
			<form class="form-horizontal" method="post">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Username</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="username" placeholder="Username" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Password" required>
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="login" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	   								<?php
								include('APR/dbcon.php');
								if (isset($_POST['login'])){
								
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM members WHERE username='$username' AND password='$password' and status = 'Activated' ";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$que = "SELECT * FROM members WHERE username='$username' AND password='$password' and status != 'Activated' ";
								$res = mysql_query($que)or die(mysql_error());
								$num_row1 = mysql_num_rows($res);
									
									if( $num_row > 0 ) {
										session_start();
										$_SESSION['id']=$row['member_id'];
										$_SESSION['member'] ="member";
										header('location:../member_dashboard.php');
								
									}
									else if($num_row1 > 0){
										?>
		<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Your Account is not activated...Please Wait..</div>
	<?php	}
									else { ?>
		<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Please check your Username and Password</div>
	<?php	
	}	
								//	else{ 
								//header('location:access_denied.php');
								//}
								}
								?>  	
<?php include('APR/footer.php') ?>