<?php
error_reporting('E_ALL^E_NOTICE');

		//include('dbcon.php');
		$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
		include('session.php');

		$query1 = $conn->query("select * from placementform where student_id = '$regno'")or die(mysql_error());
						$row1 = $query1->fetch();
						$count1 = $count2 =6;
						if($_POST['firstname']==''){
							$firstname =$row1['s_name'];}
							else{$firstname = $_POST['firstname'];}
							if($_POST['address']==''){
							$address =$row1['s_address'];}
							else{$address = $_POST['address'];}
							if($_POST['contact']==''){
							$contact =$row1['s_contact'];}
							else{$contact = $_POST['contact'];}
								if($_POST['sex']==''){
							$sex =$row1['sex'];}
							else{$sex = $_POST['sex'];}
							if($_POST['email']==''){
							$email =$row1['email'];}
							else{$email = $_POST['email'];}
						
							if($_POST['department']==''){
							$department =$row1['department_id'];}
							else{$department = $_POST['department'];}
							if($_POST['sslc']==''){
							$sslc =$row1['sslc'];}
							else{$sslc = $_POST['sslc'];}
						if($_POST['plustwo']==''){
							$plustwo =$row1['plustwo'];}
							else{$plustwo = $_POST['plustwo'];}
							if($_POST['sem1']==''){
							$sem1 =$row1['sem1'];}
							else{$sem1 = $_POST['sem1'];}
							if($_POST['sem2']==''){
							$sem2 =$row1['sem2'];}
							else{$sem2 = $_POST['sem2'];}
							if($_POST['sem3']==''){
							$sem3 =$row1['sem3'];}
							else{$sem3 = $_POST['sem3'];}
							if($_POST['sem4']==''){
							$sem4 =$row1['sem4'];}
							else{$sem4 = $_POST['sem4'];}
							if($_POST['sem5']==''){
							$sem5 =$row1['sem5'];}
							else{$sem5 = $_POST['sem5'];}
							if($_POST['sem6']==''){
							$sem6 =$row1['sem6'];}
							else{	$sem6 = $_POST['sem6'];}
							if($_POST['pgsem1']==''){
							$pgsem1 =$row1['pgsem1'];}
							else{$pgsem1 = $_POST['pgsem1'];}
							if($_POST['pgsem2']==''){
							$pgsem2 =$row1['pgsem2'];}
							else{$pgsem2 = $_POST['pgsem2'];}
							if($_POST['pgsem3']==''){
							$pgsem3=$row1['pgsem3'];}
							else{$pgsem3 = $_POST['pgsem3'];}
							if($_POST['pgsem4']==''){
							$pgsem4=$row1['pgsem4'];}
							else{$pgsem4 = $_POST['pgsem4'];}
						if($_POST['pgsem5']==''){
							$pgsem5=$row1['pgsem5'];}
							else{$pgsem5 = $_POST['pgsem5'];}
						if($_POST['pgsem6']==''){
							$pgsem6=$row1['pgsem6'];}
						else{$pgsem6 = $_POST['pgsem6'];}
						if($_POST['backlogug']==''){
							$backlogug=$row1['backlogug'];}
						else{$backlogug = $_POST['backlogug'];}
						if($_POST['backlogpg']==''){
							$backlogpg=$row1['backlogpg'];}
						else{$backlogpg = $_POST['backlogpg'];}
						

						
		$RegisterNo = $_POST['RegisterNo'];
		if($sem1==0){$count1--;}
		if($sem2==0){$count1--;}
		if($sem3==0){$count1--;}
		if($sem4==0){$count1--;}
		if($sem5==0){$count1--;}
		if($sem6==0){$count1--;}
		if($pgsem1==0){$count2--;}
		if($pgsem2==0){$count2--;}
		if($pgsem3==0){$count2--;}
		if($pgsem4==0){$count2--;}
		if($pgsem5==0){$count2--;}
		if($pgsem6==0){$count2--;}
		if($count1==0){$count1=1;}
		if($count2==0){$count2=1;}
		$degreetot = $sem1+$sem2+ $sem3+ $sem4+$sem5+ $sem6 ;
			$pgtot = $pgsem1+$pgsem2+ $pgsem3+ $pgsem4+$pgsem5+ $pgsem6 ;
			$degreeavg = $degreetot/$count1; 
	        $pgavg = $pgtot/$count2;
		
		$conn->query("update placementform set 
		
		s_name  ='$firstname ',
		s_address ='$address',
				sex ='$sex',
		s_contact ='$contact',
		email ='$email',
		department_id ='$department',
		sslc ='$sslc',
		plustwo ='$plustwo',
		backlogug = '$backlogug',
		backlogpg = '$backlogpg',
		sem1 ='$sem1',
		sem2 ='$sem2',
		sem3 ='$sem3',
		sem4 ='$sem4',
		sem5 ='$sem5',
		sem6 ='$sem6',
		pgsem1 ='$pgsem1',
		pgsem2 ='$pgsem2',
		pgsem3 ='$pgsem3',
		pgsem4 ='$pgsem4',
		pgsem5 ='$pgsem5',
		pgsem6 ='$pgsem6',
		degree = '$degreeavg',
		pg = '$pgavg'
		where student_id = '$regno'
		")or die(mysql_error());
		//$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Update Member $firstname $lastname')")or die (mysql_error());
		$conn->query("insert into activity_log (username,date,action) values('$firstname',NOW(),'Edited PlacementForm')")or die (mysql_error());
		?>
