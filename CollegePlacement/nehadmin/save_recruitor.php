<?php
include('dbcon.php');
      

              
		$recruitor_name = $_POST['recruitor_name'];
		
		$address = $_POST['address'];
		
		$department = $_POST['recruitor_genre'];
		$contact=$_POST['contact'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$department_array = explode(',', $department);
	  foreach($department_array as $dept){
 	 $query2 = mysql_query("select * from recruitor where recruitor_name = '$recruitor_name' and department='$dept' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
	 
								$query3 = mysql_query("select * from recruitor where email = '$email' and department='$dept'")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								 }
								if($count2>0){
									echo 'false';
								}
								else if($count3>0){
									echo 'false';
								}
								
								else{
 
 $department_array = explode(',', $department);
	  foreach($department_array as $dept){
	
               mysql_query("INSERT INTO recruitor(recruitor_name,Company_Contact,Company_Address,job_category,email,department,status)VALUES ('$recruitor_name','$contact','$address','$type','$email','$dept','Registered')")or die(mysql_error());
               
          }
		  echo 'true';
								}
                   ?>