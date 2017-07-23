<?php
include('dbcon.php');
      

              $collegeid = $_POST['un'];
		$firstname = $_POST['fn'];
		//$middlename = $_GET['middlename'];
		$lastname = $_POST['ln'];
		$sex = $_POST['sex'];
		$department = $_POST['class_id'];
		$yr=$_POST['year'];
		//$username = $_POST['username'];
		$password = sha1($_POST['password']);
		//$status = $_POST['status'];
 
               mysql_query("insert into student (RegisterNo,firstname,lastname,sex,class_id,year_of_studying,password,location,status)
		values ('$collegeid','$firstname','$lastname','$sex','$department','$yr','$password','uploads/NO-IMAGE-AVAILABLE.jpg','Unregistered')                                    
		") or die(mysql_error()); ?>
<?php    ?>