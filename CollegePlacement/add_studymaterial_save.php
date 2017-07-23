<?php
error_reporting('E_ALL^E_NOTICE');

include('session.php');
//Include database connection details
require("opener_db.php");
$errmsg_arr = array();
//Validation error flag
$errflag = false;

$uploaded_by_query = mysql_query("select * from teacher where teacher_id = '$session_id'")or die(mysql_error());
$uploaded_by_query_row = mysql_fetch_array($uploaded_by_query);
$uploaded_by = $uploaded_by_query_row['firstname']."".$uploaded_by_query_row['lastname'];

/* $id_class=$_POST['id_class']; */
$name=$_POST['name'];


											


//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

function sendemail($collegeid,$name_notification){
		$to = ''.$collegeid.'@kristujayanti.com';
		//$to = 'shebinjoseph388@gmail.com';		
		$from = 'placement@kristujayanti.com';
		$subject = 'Placement Notification';
		//calling the function buildBody() that returns a string value..
		$message = buildBodysendemail($collegeid,$name_notification,$from);
		$header = 'From: '.$from.'
		to: '.$to.'
		Subject: '.$subject.'
		Content-type: '."text/html".'
		charset: '."utf-8".'';
		if(mail($to,$subject,$message,$header)){
			?>
			<script type="text/javascript" language="javascript">
				//alert("Mail Had Been Sent Successfully");
				//window.open("Home","_self");//opening the register.php page again.
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript" src="javascript/EmptyValidation.js"></script>
   			<script type="text/javascript" language="javascript">
				$(document).ready(function(e) {
               	
						
            	   //alert("Mail Could Not Be Sent ... Please Try Again");
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
function buildBodysendemail($collegeid,$name_notification,$from){
	
	$body="
	CollegeID: ".$collegeId." 
	Notification: ".$name_notification."
	From: ".$from."";
	return $body; 
}


//Sanitize the POST values
$filedesc = clean($_POST['desc']);
//$placement= clean($_POST['upname']);

if ($filedesc == '') {
    $errmsg_arr[] = ' file discription is missing';
    $errflag = true;
}

if ($_FILES['uploaded_file']['size'] >= 1048576 * 5) {
    $errmsg_arr[] = 'file selected exceeds 5MB size limit';
    $errflag = true;
}


//If there are input validations, redirect back to the registration form
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
	?>

   <script>
   window.location = 'Downloadable-Materials<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php exit();
}
//upload random name/number
$rd2 = mt_rand(1000, 9999) . "_File";

//Check that we have a file
if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb
    $filename = basename($_FILES['uploaded_file']['name']);

    $ext = substr($filename, strrpos($filename, '.') + 1);

    if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload")) {
        //Determine the path to which we want to save this file      
        //$newname = dirname(__FILE__).'/upload/'.$filename;
        $newname = "nehadmin/uploads/" . $rd2 . "_" . $filename;
		$name_notification  = 'Add Downloadable Materials file name'." ".'<b>'.$name.'</b>';
        //Check if the file with the same name is already exists on the server
        if (!file_exists($newname)) {
            //Attempt to move the uploaded file to it's new place
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                //successful upload
                // echo "It's done! The file has been saved as: ".$newname;		   
					
							$id=$_POST['selector'];
											$N = count($id);
											for($i=0; $i < $N; $i++)
											{			
										
               /*  $qry2 = "INSERT INTO files (fdesc,floc,fdatein,teacher_id,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$session_id','$id[$i]','$name','$uploaded_by')"; */
				mysql_query("INSERT INTO files (fdesc,floc,fdatein,teacher_id,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$session_id','$id[$i]','$name','$uploaded_by')");
				$sendmail =mysql_query("select * from teacher_class_student join student on teacher_class_student.student_id = student.student_id where teacher_class_id='$id[$i]'")or die(mysql_error());
				
								while($rowmail=mysql_fetch_array($sendmail)){
									$collegeid = $rowmail['RegisterNo'];
				//sendemail($collegeid,$name_notification);
								}
				//$res =mysql_query("select * from files where teacher_id='$session_id' AND fdatein=NOW() AND uploaded_by='$uploaded_by' AND class_id = '$id_class' AND fname = '$name' AND fdesc='$filedesc'")or die(mysql_error());
				$res =mysql_query("select * from files where teacher_id='$session_id' AND fdatein=NOW() AND uploaded_by='$uploaded_by' AND class_id = '$id[$i]' AND fname = '$name' AND fdesc='$filedesc'")or die(mysql_error());
				
								$row1=mysql_fetch_array($res);
								$material_id=$row1['file_id'];

				
				
				
				
				
				mysql_query("insert into notification (teacher_class_id,notification,date_of_notification,link,file_id) value('$id[$i]','$name_notification',NOW(),'Student-Downloadable-Materials','$material_id')")or die(mysql_error());
			   
			  }
			   
}
}
}
}

/* mysql_close(); */
?>


