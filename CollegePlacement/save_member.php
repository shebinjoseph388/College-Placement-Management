<?php
error_reporting('E_ALL^E_NOTICE');

	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
	
            
		<?php
		
	//$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
		//include('dbConnector.php');
		include('session.php');

		$collegeid = $_POST['un'];
		$firstname = $_POST['fn'];
		//$middlename = $_GET['middlename'];
		//$semester = $_POST['sem'];
		$lastname = $_POST['ln'];
		$sex = $_POST['sex'];
		$department = $_POST['class_id'];
		$yr=$_POST['year'];
		$username = sha1($_POST['username']);
		//$password = sha1($_POST['password']);
		$status = 'Unregistered';
		//$image = $_POST['file'];
		/**/

		//sendemail($collegeid,$username);
		/*$conn->query("insert into student
			   (RegisterNo,firstname,lastname,middlename,sex,department,year_of_studying,username,password,status) 
		values ('$collegeid','$firstname','$lastname','$middlename','$sex','$department','$yr',$username,$password,$status)")or die(mysql_error());
		
		//$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Member $firstname $lastname')")or die (mysql_error());
		//echo "<script>alert('Successfully Registered');
		//	window.location='index.php';*/
		function sendemail($collegeid,$username){
		$to = ''.$collegeid.'@kristujayanti.com';
		//$to = 'shebinjoseph388@gmail.com';		
		$from = 'placement@kristujayanti.com';
		$subject = 'Password for the Placement Signup';
		//calling the function buildBody() that returns a string value..
		$message = buildBodysendemail($collegeid,$username,$from);
		$header = 'From: '.$from.'
		to: '.$to.'
		Subject: '.$subject.'
		Content-type: '."text/html".'
		charset: '."utf-8".'';
		if(mail($to,$subject,$message,$header)){
			echo 'true';
			?>
			
			<?php
		}
		else{
			echo 'false';
			?>
			
			<?php
		}
		
	}
?>
<?php
function buildBodysendemail($collegeid,$username,$from){
	
	$body="
	CollegeID: ".$collegeId." 
	Password: ".$username."
	From: ".$from."";
	return $body; 
}



			
			
			
			
			/*$query = "INSERT INTO student
								(RegisterNo,firstname,lastname,location,sex,class_id,year_of_studying,username,password,status)
							VALUES (:a,:b,:c,:d,:f,:g,:h,:i,:j,:l)";	
							$q = $db->prepare($query);
							$q->execute(array(':a'=>$collegeid,':b'=>$firstname,':c'=>$lastname,':d'=>$image,':f'=>$sex,':g'=>$department,':h'=>$yr,':i'=>$username,':j'=>$password,':l'=>$status));*/
							
							
								$query = mysql_query("select * from student where RegisterNo = '$collegeid' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								$query3 = mysql_query("select * from teacher where username = '$collegeid' and password ='$username'   ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								
                                <?php
								}
								else if($count3>0){?>
									<script>
								alert('Same Credentials existing for a Teacher');
								</script>
                                <?php
								}
								
								
								else{
							

$query = "INSERT INTO student(RegisterNo,firstname,lastname,sex,class_id,year_of_studying,password,status)
							VALUES (:a,:b,:c,:f,:g,:h,:i,:l)";	
							$q = $db->prepare($query);
							$q->execute(array(':a'=>$collegeid,':b'=>$firstname,':c'=>$lastname,':f'=>$sex,':g'=>$department,':h'=>$yr,':i'=>$username,':l'=>$status));
									//sendemail($collegeid,$username);

							
						 echo 'true';
						
								}?> 
						