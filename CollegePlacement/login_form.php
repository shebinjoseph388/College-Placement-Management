<?php 
				include('terms_condition.php'); ?>
		<div id="formContainer">
			<form id="login_form1" class="form-signin" method="post" style="position:relative;">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign in</h3>
						<input type="text" class="input-block-level" id="username" name="username" placeholder="RegisterNo Or Username" maxlength="40" required>
						<input type="password" class="input-block-level" id="password" name="password" maxlength="40" placeholder="Password"   required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Login</button>
                        <div class="pull-right">
                        <!--<button data-placement="top" title="Sign In as Student" id="signin_student" onclick="window.location='Student-SignUp-Form'" id="btn_student" name="login" class="btn btn-info" type="submit"><i class="icon-edit"></i>Student SignUp</button>-->
                        <button href="#" id="flipToRecover" data-placement="top" title="Sign Up as Student"  class="flipLink btn btn-info"  name="login"  type="submit"><i class="icon-edit"></i>Student SignUp</button></div>
                        
                       </form>
                        <form id="signin_student_form" class="form-signin" method="post"  name="signin_student" style="position:relative;">
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
            
			<input type="password" class="input-block-level" id="cpassword1" name="password" maxlength="40" placeholder="Password" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" maxlength="40" placeholder="Re-type Password" required>
           <span style="width: 17px;">&nbsp;</span> 
           <input type="checkbox" name="condition" value="checkbox" style="width: 13px;" /> I agree and accept the 
          <!-- <a rel="facebox" href="terms_condition.php">terms and condition</a>-->
          <a href="#termsandcondition" data-toggle="modal" data-placement="top" >terms and condition</a>
				
        <!--  <a rel="facebox" href="terms_condition.php">terms and condition</a> rel="tooltip"  href="#student" data-toggle="modal" data-placement="top"-->
            of CPCR<span>&nbsp;</span></br></br></br>
			<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
            <a href="#"  class="flipToLogin"   id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>
			</form>
			
                        </div>
				
														<script type="text/javascript">
														$(document).ready(function(){
														
															$('#signin_student_form').hide();
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
															$('#flipToRecover').tooltip('show');
															$('#flipToRecover').tooltip('hide');
															$('#signin_college').tooltip('show');
															$('#signin_college').tooltip('hide');
															$('#signin_teacher').tooltip('show');
															$('#signin_teacher').tooltip('hide');
														});
														$(document).ready(function(){
															//$('#flipToRecover').click(function(e){
															//$('#login_form1').hide();
															//	$('#button_form').hide();
																
															
															//});
														});
														$(document).ready(function(){
															//$('.flipToLogin').click(function(e){
															//$('#signin_student_form').hide();
																//$('#button_form').hide();
															
															//});
														});
														</script>		
			
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
										
									if(html=='true')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to Centre for Placements and Corporate Relations(CPCR)", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Executive-Dashboard'  }, delay); 
										//setTimeout(function(){ window.location = 'nehadmin/login.php'  }, delay);  
									 
									}else if (html == 'true_student'){
										$.jGrowl("Welcome to Centre for Placements and Corporate Relations(CPCR)", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Notification-Student'  }, delay);  
									}else if (html == 'true_admin'){
										$.jGrowl("Welcome to Centre for Placements and Corporate Relations(CPCR)", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Admin/Admin-Statistics'  }, delay);  
									}
									else
									{
										//var delay = 1000;
										//setTimeout(function(){ window.location = 'nehadmin/index.php'  }, delay);  
									
									//header("location:nehadmin/login.php");
								
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									//$.jGrowl("Please Check your username and Password", { header: 'location:nehadmin/login.php' });
									
									}
									}
								});
								return false;
							});
						});
						</script>
                        <script>
			jQuery(document).ready(function(){
			jQuery("#signin_student_form").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#cpassword1').val();
						var cpassword = jQuery('#cpassword').val();
						
						
					 if  (password != cpassword){
						$.jGrowl("Retyped Password does not match with your new password  ", { header: 'Change Password Failed' });
						}
						else if (document.signin_student.condition.checked == false)
					{
				
				$.jGrowl("Please agree the terms and conditions of the Centre for Placements and Corporate Relations(CPCR)  ", { header: 'Signup Failed' });
				return false;
				}
					
					else if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
							alert(html);
						if(html=='true')
						{
						$.jGrowl("You can proceed for login", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'Home'  }, delay);  
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

			<div id="button_form" class="form-signin"  >
			New to KristuJayantiCollege
			<hr>
				<h3 class="form-signin-heading"><i class="icon-edit"></i> Register with us</h3>
				<button data-placement="top" title="Register Your College With Us" id="signin_college" onclick="window.location='New/SignUp-College'" id="btn_college" name="collegeregister" class="btn btn-info" type="submit"><i class="icon-edit"></i> College</button>
				<div class="pull-right">
					<button  rel="tooltip"  href="#student" data-toggle="modal" data-placement="top" title="Register Your Company With Us" id="signin_teacher"  name="login" class="btn btn-info" type="submit"><i class="icon-edit"></i> Company</button>
                    
				</div>
			</div>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
														});
														</script>	
														<script type="text/javascript">
														$(document).ready(function(){
															//$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
														});
														</script>	
                                                         <!-- Modal student login -->
	
    
    <div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header alert alert-info"><div class="alert alert-info"><h2>Company Registration Form</h2>Please Enter Required Details Below.</div></div>
		<div class="modal-body">
			<form id="register-company" class="form-horizontal" method="post" >
				<div class="control-group">
					<label class="control-label" for="inputEmail">Company</label>
					<div class="controls">
					<input type="text"  name="companyname" id="inputEmail" placeholder="CompanyName" required/>
   <span class="err" id="checkCollege"></span>
					</div>
				</div>
				 <div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
    <textarea  name="address" id="inputEmail" placeholder="Address to Contact"  style=" height: 85px;width: 230px;" required ></textarea>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <input type="text"  name="c_number" id="inputEmail" placeholder="Contact Number" onKeyPress="return isNumberKey(event)" required maxlength="10">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email Adress</label>
    <div class="controls">
    <input type="text"  name="email" id="inputEmail" placeholder="Email Address" required>
    </div>
    </div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="register" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Register</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	     	<script>
			jQuery(document).ready(function(){
			jQuery("#register-company").submit(function(e){
					e.preventDefault();
						
					var formData = jQuery(this).serialize();
					
					$.ajax({
						type: "POST",
						url: "Register-New-Company",
						data: formData,
						success: function(html){
							
						if($.trim(html) =='true')
						{
							
						$.jGrowl("Thanks for Joined with us", { header: 'Joined' });
						var delay = 5000;
							setTimeout(function(){ window.location = 'Home'  }, delay);  
						}else {
							
							$.jGrowl("Please Provide Valid Details Or You already Joined", { header: 'Registration Failed' });
							var delay = 5000;
							setTimeout(function(){ window.location = 'Home'  }, delay); 
						}
						
						}
					});
			return false;
					
				});
			});
			</script>