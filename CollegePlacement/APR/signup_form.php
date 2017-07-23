	<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$collegename=$_POST['collegename'];
		$pic=$_POST['pic'];
		
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact=$_POST['contact_no'];
		$username=$_POST['username'];
		$password=mysql_real_escape_string($_POST['password']);
		$cpassword=mysql_real_escape_string($_POST['cpassword']);
		$query = mysql_query("select * from users where username = '".mysql_real_escape_string($username)."' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								$query1 = mysql_query("select * from members where collegename = '".mysql_real_escape_string($collegename)."' ")or die(mysql_error());
								$count1 = mysql_num_rows($query1);
		$query2 = mysql_query("select * from student where username = '".mysql_real_escape_string($username)."' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '".mysql_real_escape_string($username)."' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								if (($count > 0)||($count2 > 0)||($count3 > 0)){ 
								$u ="Username Already Exist";
								}
								else{$u ="";}
								if ($count1 > 0){ 
								$c ="College Already Registered";
								}
								else{$c ="";}
								
								
								
		
		
		
			if($cpassword!=$password){
		$a="Password do not Match";
		}else{
		$a = "";
		}
	}
	?>
<form method="post">	
	<div class="span5">
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">College Name</label>
			<div class="controls">
			<input type="text" name="collegename" value="<?php if (isset($_POST['submit'])){echo $collegename;} ?>" placeholder="Collegename" required> <?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $c; ?></span><?php }?>
            
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputEmail">Person In Charge</label>
			<div class="controls">
			<input type="text" name="pic"  value="<?php if (isset($_POST['submit'])){echo $pic;} ?>" placeholder="Person In Charge" required> 
			</div>
            </div>
        
	<div class="control-group">
			<label class="control-label" for="inputPassword">Username</label>
			<div class="controls">
			<input type="text" name="username" value="<?php if (isset($_POST['submit'])){echo $username;} ?>" placeholder="Username" required><?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $u; ?></span><?php }?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
			<input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" placeholder="Password">
			</div>
		</div>
<div class="control-group">
			<label class="control-label" for="inputPassword">Confirm Password</label>
			<div class="controls">
			<input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" placeholder="Confirm Password" required>
					<?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $a; ?></span><?php }?>
			</div>

		</div>
		
    </div>
</div>
	
	
	<div class="span6">
	
	
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address</label>
			<div class="controls">
			<input type="text" name="address" value="<?php if (isset($_POST['submit'])){echo $address;} ?>" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact No</label>
			<div class="controls">
			<input type="text" name="contact_no" onKeyPress="return isNumberKey(event)" required maxlength="10" value="<?php if (isset($_POST['submit'])){echo $contact;} ?>"placeholder="Contact No" required>
			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Email Address</label>
			<div class="controls">
			<input name="email" type="email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" placeholder="Email Address" required> 
			</div>
		</div>
		
	<div class="control-group">
				<label class="control-label" for="inputEmail"></label>
				<div class="controls">
			<script type="text/javascript">
				jQuery(document).ready(function() {
					$('#refresh').tooltip('show');
					$('#refresh').tooltip('hide');
				})
			</script>
				<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > 
				<a href='javascript: refreshCaptcha();'><i data-placement="right" id="refresh"  title="Click to Refresh Code" class="icon-refresh icon-large icon-spin"></i></a> 
				<script language='JavaScript' type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
			</script>
				
				</div>
    </div>
	
		    <div class="control-group">
    <label class="control-label" for="inputPassword">Enter the Code Above</label>
    <div class="controls">
    <input id="code" name="code" type="text" placeholder="Enter the Code Above" required></td>
	
	<?php 

if(isset($_POST['submit']))
{
	$collegename=$_POST['collegename'];
	$pic=$_POST['pic'];
	
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact=$_POST['contact_no'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];	
	if(strcmp($_SESSION['code'], $_POST['code']) != 0)
	{
		$result ='false';
	?>
	<span class="label label-important">Code Does Not Match</span>
<?php
}else if((strcmp($_SESSION['code'], $_POST['code']) == 0 )&& ( $password == $cpassword)&&($u == "")&&($c == "")){ ?>
<?php
  $hashpswd = sha1($password);
	mysql_query("insert into members (collegename,person_in_charge,address,email,contact,username,password,date_register)
	values ('".mysql_real_escape_string($collegename)."','$pic','$address','$email','$contact','".mysql_real_escape_string($username)."','$hashpswd',NOW())
	")or die(mysql_error());
	$result = 'true';?>
    
    
<script type="text/javascript">
//window.location='Register-Success';
</script>
<?php
}else{
	$result ='false';
echo " ";
}}
?>
    </div>
    </div>
	
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
			</div>
		</div>	
    <?php    if(isset($_POST['submit']))
{
	?>

<?php if($result == 'true'){?>
		<div class="alert alert-danger"><strong>Signup Success!</strong>&nbsp;You can login after your account has been activated.</div>
        <?php }
		else {?>
		<div class="alert alert-danger"><strong>Signup Failed!</strong>&nbsp;Please Provide Valid Details.</div>
        <?php } } ?>
	</div>
		
		</div>	

	
</form>