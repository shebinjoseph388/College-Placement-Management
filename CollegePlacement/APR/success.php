<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); 

?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
					<img src="img/dr.png">
					

<hr>
				</div>
				<div class="span12">
			<div class="alert alert-success">You are Successfully registered.You can login in your Account after account has been Activated</div>					


		<div class="login">
				<div class="alert alert-info"><strong>Please Enter the Details Below..</strong></div>
	<form method="post" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Username</label>
			<div class="controls">
			<input type="text" name="username"  placeholder="Username" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
			<input type="password" name="password" placeholder="Password" required>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
			</div>
		</div>
		
	</form>
		
		<?php
if (isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM members WHERE username='$username' AND password='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			
	$_SESSION['id']=$row['member_id']; ?>
<script>
window.location="../member_dasboard.php";
</script>
	<?php

		}
		else{ ?>
	<div class="alert alert-danger"><strong>Please Check your username and password..</strong></div>
	<?php	
	}	
		}
?>

		
		</div>
		</div>
			
			
			</div>
		</div>
    </div>
<?php  /* include('footer.php'); */  ?>