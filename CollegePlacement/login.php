<?php
error_reporting('E_ALL^E_NOTICE');

		include('nehadmin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$st = 'Registered';
		
		/* student */
			//$query = "SELECT * FROM student WHERE username='$username' AND password='$password' AND status ='Registered'";
			//$result = mysql_query($query)or die(mysql_error());
			$result = mysql_query("SELECT * FROM student WHERE RegisterNo='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."' AND status ='Registered'")or die(mysql_error());
			//$result = mysql_query("SELECT * FROM student WHERE username='$username' AND password='$password'")or die(mysql_error());
			$row = mysql_fetch_array($result);
			//$regno = $row['RegisterNo'];
			$num_row = mysql_num_rows($result);
		/* teacher */
		$query_teacher = mysql_query("SELECT * FROM teacher WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."' AND teacher_stat ='Activated'  ")or die(mysql_error());
		//$query_teacher = mysql_query("SELECT * FROM teacher WHERE username='$username' AND password='$password'  ")or die(mysql_error());
		$num_row_teacher = mysql_num_rows($query_teacher);
		$row_teahcer = mysql_fetch_array($query_teacher);
		
		
		$query_admin = mysql_query("SELECT * FROM users WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."'")or die(mysql_error());
		$count_admin = mysql_num_rows($query_admin);
		$row_admin = mysql_fetch_array($query_admin);
		
		
		
		
		
		if( $num_row > 0 ) { 
		//$_SESSION['id']=$row['username'];
		$_SESSION['id']=$row['student_id'];
		$_SESSION['userid']=$row['RegisterNo'];
		$_SESSION['student'] ="student";
		
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
			$_SESSION['type'] ="executive";
		$_SESSION['id']=$row_teahcer['teacher_id'];
		$_SESSION['userid']=$row_teahcer['username'];
		echo 'true';
		}
		else if($count_admin > 0){
		
		$_SESSION['id']=$row_admin['user_id'];
		$_SESSION['admin']="admin";
		
		
		mysql_query("insert into user_log (username,login_date,user_id)values('".mysql_real_escape_string($username)."',NOW(),".$row_admin['user_id'].")")or die(mysql_error());
		 echo 'true_admin';
		
		 }else{ 
				echo 'false';
		}	
				
		?>