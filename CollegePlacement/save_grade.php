<?php
error_reporting('E_ALL^E_NOTICE');

include('nehadmin/dbcon.php');

$id = $_POST['id'];
//$studid = $_POST['studid'];
$post_id = $_POST['post_id'];
$get_id = $_POST['get_id'];
$grade = $_POST['grade1'];
$grade2 = $_POST['grade2'];
$grade3 = $_POST['grade3'];
$regnum = $_POST['regnum'];
$status ='cleared';
//sendemail($regnum,$status);
mysql_query("update student_placementReg set grade = '$grade', grade2 = '$grade2', grade3 = '$grade3' where student_placementReg_id = '$id'")or die(mysql_error());
//mysql_query("update student set count = '$grade' where student_id = '$studid'")or die(mysql_error());

function sendemail($regnum,$status){
		$to = ''.$regnum.'@kristujayanti.com';
		//$to = 'shebinjoseph388@gmail.com';		
		$from = 'placement@kristujayanti.com';
		$subject = 'Updated Placement Result';
		//calling the function buildBody() that returns a string value..
		$message = buildBodysendemail($regnum,$status,$from);
		$header = 'From: '.$from.'
		to: '.$to.'
		Subject: '.$subject.'
		Content-type: '."text/html".'
		charset: '."utf-8".'';
		mail($to,$subject,$message,$header);
			
		
		//using the absolute path to redirect to the register.php page..
		//$host = $_SERVER["HTTP_HOST"];
		//$path = rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
		//header("Location: http://".$host.$path."/register.php");
	}
?>
<?php
function buildBodysendemail($regnum,$status,$from){
	
	$body="
	RegisterNo: ".$regnum." 
	status: ".$status."
	From: ".$from."";
	return $body; 
}


?>
<script>
 window.location = 'Placement-Registered-Students<?php echo '?id='.$get_id.'&'.'post_id='.$post_id; ?>'; 
</script>