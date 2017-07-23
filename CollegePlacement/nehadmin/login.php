<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$query = mysql_query("SELECT * FROM users WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."'")or die(mysql_error());
		$count = mysql_num_rows($query);
		$row = mysql_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		$_SESSION['admin']="admin";
		echo 'true';
		
		mysql_query("insert into user_log (username,login_date,user_id)values('".mysql_real_escape_string($username)."',NOW(),".$row['user_id'].")")or die(mysql_error());
		 }else{ 
		echo 'false';
		}	
				
		?>