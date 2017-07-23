			<form id="signin_student" class="form-signin" method="post" onSubmit="return validateForm()" name="signin_student">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Student</h3>
			<input type="text" class="input-block-level" id="collegeid" name="collegeid" placeholder="CollegeID" maxlength="8"  required>
			<input type="text" class="input-block-level" id="firstname" name="firstname" maxlength="40" placeholder="Firstname" required>
			<input type="text" class="input-block-level" id="lastname" name="lastname" maxlength="40" placeholder="Lastname" required>
            
			<label>Department</label>
			<select name="class_id" class="input-block-level span5">
				<option></option>
				<?php
				$query = mysql_query("select * from class order by class_name ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
            <input type="text" class="input-block-level" id="username" name="username" maxlength="40" placeholder="Username" required>
			<input type="password" class="input-block-level" id="password" name="password" maxlength="40" placeholder="Password" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" maxlength="40" placeholder="Re-type Password" required>
           <span style="width: 17px;">&nbsp;</span> 
           <input type="checkbox" name="condition" value="checkbox" style="width: 13px;" /> I agree and accept the 
          <!-- <a rel="facebox" href="terms_condition.php">terms and condition</a>-->
          <a href="#termsandcondition" data-toggle="modal">terms and condition</a>
				<?php 
				include('terms_condition.php'); ?>
        <!--  <a rel="facebox" href="terms_condition.php">terms and condition</a>-->
            of Centre for Placements and Corporate Relations(CPCR)<span>&nbsp;</span></br></br></br>
			<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
			</form>
			
		
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					 if  (password != cpassword){
						$.jGrowl("Retyped Password does not match with your new password  ", { header: 'Change Password Failed' });
						}
					
					else if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to KJC Placement Management System", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'Student-Dashboard'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("student does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Section You Belong. ", { header: 'Sign Up Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("student does not found in the database or check the input fields", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>

			
		
			<a onclick="window.location='Home'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>
			
			
			
				
		
					