<?php
error_reporting('E_ALL^E_NOTICE');

include('session.php');
//Include database connection details
require("opener_db.php");

//Validation error flag
//$errflag = false;
//$errmsg_arr = array();

$placementReg_id  = $_POST['id'];
$name  = $_POST['name'];
$get_id = $_POST['get_id'];
$get_idd = encrypt_text($get_id);
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

//Sanitize the POST values
$filedesc = clean($_POST['desc']);
//$placement= clean($_POST['upname']);

//if ($filedesc == '') {
   // $errmsg_arr[] = ' file discription is missing';
    //$errflag = true;
//}

//if ($_FILES['uploaded_file']['size'] >= 1048576 * 5) {
  //  $errmsg_arr[] = 'file selected exceeds 5MB size limit';
   // $errflag = true;
//}


//If there are input validations, redirect back to the registration form
//if ($errflag) {
  //  $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
  //  session_write_close();
	?>

  <!-- <script>
   window.location = 'downloadable.php<?php //echo '?id='.$get_id;  ?>';
   </script>-->
   <?php //exit();
//}
//upload random name/number
//$rd2 = mt_rand(1000, 9999) . "_File";

//Check that we have a file
//if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb
   // $filename = basename($_FILES['uploaded_file']['name']);

    //$ext = substr($filename, strrpos($filename, '.') + 1);

   // if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload")) {
        //Determine the path to which we want to save this file      
        //$newname = dirname(__FILE__).'/upload/'.$filename;
       // $newname = "nehadmin/uploads/" . $rd2 . "_" . $filename;
	$name_notification  = '<b>('.$name.')'." ".'</b>Register for Placement '; 
        //Check if the file with the same name is already exists on the server
       // if (!file_exists($newname)) {
            //Attempt to move the uploaded file to it's new place
          //  if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                //successful upload
                // echo "It's done! The file has been saved as: ".$newname;		
				
				$resul =mysql_query("select * from student where  student_id='$session_id' ")or die(mysql_error());
								$rowsl=mysql_fetch_array($resul);
								$regno=$rowsl['RegisterNo'];
								
								
				$resu =mysql_query("select * from student where  student_id='$session_id' ")or die(mysql_error());
								$rows=mysql_fetch_array($resu);
								$count=$rows['count'];
								if($count <3){
								
				    $qry2 = ("INSERT INTO student_placementReg (fdesc,placementReg_fdatein,company,placementReg_id,student_id,RegNo) VALUES ('$filedesc',NOW(),'$name','$placementReg_id','$session_id','$regno')")or die(mysql_error());
               // $qry2 = ("INSERT INTO student_placementReg (fdesc,floc,placementReg_fdatein,company,placementReg_id,student_id,RegNo) VALUES ('$filedesc','$newname',NOW(),'$name','$placementReg_id','$session_id','$regno')")or die(mysql_error());
				//mysql_query("insert into teacher_notification (teacher_class_id,notification,date_of_notification,link,student_id,placementReg_id) value('$get_id','$name_notification',NOW(),'view_submit_placement.php','$session_id','$placementReg_id')")or die(mysql_error());
			   //$result = @mysql_query($qry);
                $result2 = $connector->query($qry2);
				
		
				
								if($count == ''){
									$c = 1;
								}
								else{
								$c = $count+1;	
								}
				mysql_query("update student set count = '$c' where student_id = '$session_id'")or die(mysql_error());
							$res =mysql_query("select * from student_placementReg where placementReg_id='$placementReg_id' AND student_id='$session_id' AND company = '$name'  AND placementReg_fdatein = NOW()")or die(mysql_error());
						
				//$res =mysql_query("select * from student_placementReg where placementReg_id='$placementReg_id' AND student_id='$session_id' AND company = '$name' AND floc='$newname' AND placementReg_fdatein = NOW()")or die(mysql_error());
								$row1=mysql_fetch_array($res);
								$student_placementReg_id=$row1['student_placementReg_id'];
				mysql_query("insert into teacher_notification (teacher_class_id,notification,date_of_notification,link,student_id,placementReg_id,student_placementReg_id) value('$get_id','$name_notification',NOW(),'Placement-Registered-Students','$session_id','$placementReg_id','$student_placementReg_id')")or die(mysql_error());
								}
				
                if ($result2) {
                    $errmsg_arr[] = 'record was saved in the database and the file was uploaded';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        exit();
                    }
                } else {
                    $errmsg_arr[] = 'record was not saved in the database but file was uploaded';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close(); ?>
                           <script>
   window.location = 'Downloadable-Materials<?php echo '?id='.$get_idd;  ?>';
   </script>
   <?php
                        exit();
                    }
                }
            
