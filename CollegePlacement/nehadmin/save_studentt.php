<?php
	require_once('dbcon.php');
?>
<?php include("functions.php");?>
	
            
		<?php

	//$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
		//include('../../../../Users/shebin pc/Desktop/sample/dbConnector.php');
		include('session.php');

		$collegeid = $_POST['un'];
		$firstname = $_POST['fn'];
		//$middlename = $_GET['middlename'];
		$lastname = $_POST['ln'];
		$sex = $_POST['sex'];
		$department = $_POST['class_id'];
		$yr=$_POST['year'];
		//$username = $_POST['username'];
		$password = sha1($_POST['password']);
	//	$status = $_POST['status'];
		//$image = $_POST['file'];
		/*

		sendemail($collegeid,$username, $password, $email);
		$conn->query("insert into student
			   (RegisterNo,firstname,lastname,middlename,sex,department,year_of_studying,username,password,status) 
		values ('$collegeid','$firstname','$lastname','$middlename','$sex','$department','$yr',$username,$password,$status)")or die(mysql_error());
		
		//$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Member $firstname $lastname')")or die (mysql_error());
		//echo "<script>alert('Successfully Registered');
		//	window.location='index.php';
		function sendemail($collegeid,$username,$password,$email){
		$to = ''.$collegeid.'@kristujayanti.com';
		$from = '13cs4127@kristujayanti.com';
		$subject = 'Trail Mail';
		//calling the function buildBody() that returns a string value..
		$message = buildBodysendemail($collegeid,$username,$password,$from);
		$header = 'From: '.$from.'
		to: '.$to.'
		Subject: '.$subject.'
		Content-type: '."text/html".'
		charset: '."utf-8".'';
		if(mail($to,$subject,$message,$header)){
			?>
			<script type="text/javascript" language="javascript">
				alert("Mail Had Been Sent Successfully");
				window.open("index.php","_self");//opening the register.php page again.
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript" src="javascript/EmptyValidation.js"></script>
   			<script type="text/javascript" language="javascript">
				$(document).ready(function(e) {
               		$("span").hide();
					$("#AnchMe").focus();
					if($("#No_AC_sec_address").attr('checked')==true||$("#Ac_sec_address").attr('checked')==true)
						$('#date_visible').show();
            	   alert("Mail Could Not Be Sent ... Please Try Again");
				});
			</script>
			<?php
		}
		//using the absolute path to redirect to the register.php page..
		//$host = $_SERVER["HTTP_HOST"];
		//$path = rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
		//header("Location: http://".$host.$path."/register.php");
	}
?>
<?php
function buildBodysendemail($collegeid,$username,$password,$from){
	
	$body="
	CollegeID: ".$collegeId." 
	username: ".$username."
	password: ".$password."
	From: ".$from."";
	return $body; 
}


*/
			
			
			
			
			/*$query = "INSERT INTO student
								(RegisterNo,firstname,lastname,location,sex,class_id,year_of_studying,username,password,status)
							VALUES (:a,:b,:c,:d,:f,:g,:h,:i,:j,:l)";	
							$q = $db->prepare($query);
							$q->execute(array(':a'=>$collegeid,':b'=>$firstname,':c'=>$lastname,':d'=>$image,':f'=>$sex,':g'=>$department,':h'=>$yr,':i'=>$username,':j'=>$password,':l'=>$status));*/

$query = "INSERT INTO student
								(RegisterNo,firstname,lastname,sex,class_id,year_of_studying,password,status)
							VALUES (:a,:b,:c,:f,:g,:h,:i,:j,:l)";	
							$q = $db->prepare($query);
							$q->execute(array(':a'=>$collegeid,':b'=>$firstname,':c'=>$lastname,':f'=>$sex,':g'=>$department,':h'=>$yr,':j'=>$password,':l'=>$status));
							
						 
						
						?> 
						<!-- <script type="text/javascript">
							alert("Successfully added.");
						   window.location = "add_member.php";
						 </script>-->