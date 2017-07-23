<?php
error_reporting('E_ALL^E_NOTICE');

include('session.php');
//Include database connection details
require("opener_db.php");
/* $errmsg_arr = array();
//Validation error flag
$errflag = false; */

$id_class=$_POST['id_class'];
$name=$_POST['name'];
$filedesc=$_POST['desc'];
$get_id  = $_GET['id'];
$enddate = $_POST['enddate'];
$pcode = $_POST['pcode'];


$input_name = basename($_FILES['uploaded_file']['name']);
//echo $input_name ;
 
//Function to sanitize values received from the form. Prevents SQL injection
/* function clean($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

 */
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


if ($input_name == ""){

			$name_notification  = 'Add Placement file for the company '." ".'<b>'.$name.'</b>';
	  
                mysql_query("INSERT INTO placementReg (pcode,fdesc,fdatein,teacher_id,class_id,company,enddate) VALUES ('$pcode','$filedesc',NOW(),'$session_id','$id_class','$name','$enddate')")or die(mysql_error());
				$res =mysql_query("select * from placementReg where pcode='$pcode' AND teacher_id='$session_id' AND fdatein=NOW() AND class_id = '$id_class' AND company = '$name' AND fdesc='$filedesc'")or die(mysql_error());
								$row1=mysql_fetch_array($res);
								$placementReg_id=$row1['placementReg_id'];
				 mysql_query("insert into notification (teacher_class_id,notification,date_of_notification,link,placementReg_id) value('$get_id','$name_notification',NOW(),'Apply-For-Placement','placementReg_id')")or die(mysql_error());               
?>            
			<script>
				window.location = 'Placement-Panel<?php echo '?id='.$get_id;  ?>';
			</script>
<?php
}else{

//upload random name/number
	$rd2 = mt_rand(1000, 9999) . "_File";
    $filename = basename($_FILES['uploaded_file']['name']);
    $ext = substr($filename, strrpos($filename, '.') + 1);
   
/*  	if ($filename == ""){
	  $newname = "";
	  $rd2 = ""
   } */ 
   $newname = "nehadmin/uploads/" . $rd2 . "_" . $filename;
   
		$name_notification  = 'Add Placement for the company '." ".'<b>'.$name.'</b>';
        //Check if the file with the same name is already exists on the server

            //Attempt to move the uploaded file to it's new place
            (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname));
                //successful upload
                // echo "It's done! The file has been saved as: ".$newname;		   
                $qry2 = "INSERT INTO placementReg (pcode,fdesc,floc,fdatein,teacher_id,class_id,company,enddate) VALUES ('$pcode','$filedesc','$newname',NOW(),'$session_id','$id_class','$name','$enddate')";
				//$query = mysql_query("insert into notification (teacher_class_id,notification,date_of_notification,link) value('$get_id','$name_notification',NOW(),'placement_student.php')")or die(mysql_error());               
			   //$result = @mysql_query($qry);
                $result2 = $connector->query($qry2);
				$res =mysql_query("select * from placementReg where pcode='$pcode' AND teacher_id='$session_id' AND fdatein=NOW() AND class_id = '$id_class' AND company = '$name' AND fdesc='$filedesc'")or die(mysql_error());
								$row1=mysql_fetch_array($res);
								$placementReg_id=$row1['placementReg_id'];
								$query = mysql_query("insert into notification (teacher_class_id,notification,date_of_notification,link,placementReg_id) value('$get_id','$name_notification',NOW(),'Apply-For-Placement','$placementReg_id')")or die(mysql_error()); 
								$sendmail =mysql_query("select * from teacher_class_student join student on teacher_class_student.student_id = student.student_id where teacher_class_id='$get_id'")or die(mysql_error());
				
								while($rowmail=mysql_fetch_array($sendmail)){
									$collegeid = $rowmail['RegisterNo'];
				//sendemail($collegeid,$name_notification);
								} 
                if ($result2) {
                    $errmsg_arr[] = 'record was saved in the database and the file was uploaded';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        ?>

                     <script>
window.location = 'Placement-Panel<?php echo '?id='.$get_id;  ?>';
					</script>
                        <?php

                        exit();
                    }
                }
}
				?>