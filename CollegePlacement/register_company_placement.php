								<?php
								
								$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
								error_reporting('E_ALL^E_NOTICE');
								
								
								$company_name = $_POST['companyname'];
								$company_address = $_POST['address'];
								$c_contact = trim($_POST['c_number']);
								$email = $_POST['email'];
							
							if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",mysql_real_escape_string($email)))
		{
			
			echo 'false';
			//header('location:Denied-Access');
			
		}
		
		
else
{
	
	$query = $conn->query("SELECT * FROM recruitor WHERE email='".mysql_real_escape_string($email)."' and status='Registered'")or die(mysql_error());
	
	$count=$query->rowcount();
	$query1 = $conn->query("SELECT * FROM recruitor WHERE recruitor_name='".mysql_real_escape_string($company_name)."' and status='Registered'")or die(mysql_error());
	$count1=$query1->rowcount();
		
	 if($count!=0 || $count1!=0)
	{
		echo 'false';
		//echo "Same Data Already Exist.";
		//header('location:Home');
		//die();
	}
	
	else{
		$conn->query("insert into recruitor (recruitor_name,reg_date,Company_Address,Company_Contact,email,status) values('".mysql_real_escape_string($company_name)."',NOW(),'".mysql_real_escape_string($company_address)."','".mysql_real_escape_string($c_contact)."','".mysql_real_escape_string($email)."','Registered')")or die (mysql_error());
		echo 'true';
	}
	}

								?>