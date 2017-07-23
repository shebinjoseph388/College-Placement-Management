<?php
error_reporting('E_ALL^E_NOTICE');

		include('dbcon.php');
		$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
		include('session.php');
		
		$RegisterNo = $_POST['RegisterNo'];
		$firstname = $_POST['firstname'];
		if((isset($_POST['middlename']))&&($POST['middlename']!=''))
		{
		$middlename = $_POST['middlename'];
		}
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$sex = $_POST['sex'];
		$password = $_POST['password'];
		$department = $_POST['department'];
		
		$conn->query("update student set 
		RegisterNo = '$RegisterNo',
		firstname  ='$firstname ',
		middlename ='$middlename',
		lastname ='$lastname',
		sex ='$sex',
		username ='$username',
		password ='$password',
		age ='$age',
		department ='$department',
		
		where RegisterNo = '$RegisterNo'
		")or die(mysql_error());
		$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Update Member $firstname $lastname')")or die (mysql_error());
		
		?>
		<script type="text/javascript">
							alert("Successfully added.");
						   window.location = "students.php";
						 </script>