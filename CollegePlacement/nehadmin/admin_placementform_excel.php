<?php
error_reporting('E_ALL^E_NOTICE');
function HeaderingExcel($filename) {
	 
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
$get_id = $_GET['regno'];


  require_once('OLEwriter.php');

  require_once('BIFFwriter.php');

  require_once('Worksheet.php');

  require_once('Workbook.php');

  require_once('dbcon.php');
  

 

	  // HTTP headers
HeaderingExcel('placementform.xls');// Creating a workbook

$workbook = new excel("-");

// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('placementform');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);
  $worksheet1->set_column(1, 8, 20);
  $worksheet1->set_column(1, 9, 20);
  $worksheet1->set_column(1, 10, 20);
   $worksheet1->set_column(1, 11, 20);
  $worksheet1->set_column(1, 12, 20);
  $worksheet1->set_column(1, 13, 20);
  $worksheet1->set_column(1, 14, 20);
  $worksheet1->set_column(1, 15, 20);
  $worksheet1->set_column(1, 16, 20);
    $worksheet1->set_column(1, 17, 20);
  $worksheet1->set_column(1, 18, 20);
  $worksheet1->set_column(1, 19, 20);
  $worksheet1->set_column(1, 20, 20);
  $worksheet1->set_column(1, 21, 20);
  $worksheet1->set_column(1, 22, 20);
  $worksheet1->set_column(1, 23, 20);







$query=mysql_query("select * from placementform where student_id = '$get_id' ")or die(mysql_error());
$row=mysql_fetch_array($query);
$name=$row['s_name'];
$sy=$row['yr'];
$student_id=$row['student_id'];
$sex =$row['sex'];
$address = $row['s_address'];
$contact = $row['s_contact'];
$department = $row['department_id'];
$sslc =$row['sslc'];
$email =$row['email'];
$puc =$row['plustwo'];
$degree=$row['degree']; 
$pg=$row['pg'];
$backlogug=$row['backlogug'];
$backlogug=$row['backlogpg'];
$sem1 =$row['sem1'];
$sem2 =$row['sem2'];
$sem3 =$row['sem3'];
$sem4 =$row['sem4'];
$sem5 =$row['sem5'];
$sem6 =$row['sem6'];
$pgsem1 =$row['pgsem1'];
$pgsem2 =$row['pgsem2'];
$pgsem3 =$row['pgsem3'];
$pgsem4 =$row['pgsem4'];
$pgsem5 =$row['pgsem5'];
$pgsem6 =$row['pgsem6'];

   $worksheet1->write_string(0,0,"RegisterNo");
    $worksheet1->write_string(0,1,"StudentName");
	 $worksheet1->write_string(0,2,"Address");
	  $worksheet1->write_string(0,3,"Contact");
	   $worksheet1->write_string(0,4,"Email");
	    $worksheet1->write_string(0,5,"Gender");
		 $worksheet1->write_string(0,6,"Department");
		  $worksheet1->write_string(0,7,"YearOfStudying");
		   $worksheet1->write_string(0,8,"SSLC");

		   $worksheet1->write_string(0,9,"PUC");

		   $worksheet1->write_string(0,10,"DegreeSemester1");

		   $worksheet1->write_string(0,11,"DegreeSemester2");

		   $worksheet1->write_string(0,12,"DegreeSemester3");

		   $worksheet1->write_string(0,13,"DegreeSemester4");

		   $worksheet1->write_string(0,14,"DegreeSemester5");

		   $worksheet1->write_string(0,15,"DegreeSemester6");
					   $worksheet1->write_string(0,16,"UGAggregate%");

		   $worksheet1->write_string(0,17,"PGSemester1");

		   $worksheet1->write_string(0,18,"PGSemester2");
		   $worksheet1->write_string(0,19,"PGSemester3");
		   $worksheet1->write_string(0,20,"PGSemester4");
		   $worksheet1->write_string(0,21,"PGSemester5");
		   $worksheet1->write_string(0,22,"PGSemester6");
		   $worksheet1->write_string(0,23,"PGAggregate%");

   $worksheet1->write_string(2,0,"$student_id");
   $worksheet1->write_string(2,1,"$name");
   $worksheet1->write_string(2,2,"$address");
   $worksheet1->write_string(2,3,"$contact");
      $worksheet1->write_string(2,4,"$email");
      $worksheet1->write_string(2,5,"$sex");

   $worksheet1->write_string(2,6,"$department");
   $worksheet1->write_string(2,7,"$sy");
   $worksheet1->write_string(2,8,"$sslc");
   $worksheet1->write_string(2,9,"$puc");
	   $worksheet1->write_string(2,10,"$sem1");
	   $worksheet1->write_string(2,11,"$sem2");
	   $worksheet1->write_string(2,12,"$sem3");
	   $worksheet1->write_string(2,13,"$sem4");
	   $worksheet1->write_string(2,14,"$sem5");
	   $worksheet1->write_string(2,15,"$sem6");
	   	   $worksheet1->write_string(2,16,"$degree");

	   $worksheet1->write_string(2,17,"$pgsem1");
	   $worksheet1->write_string(2,18,"$pgsem2");
	   $worksheet1->write_string(2,19,"$pgsem3");
	   $worksheet1->write_string(2,20,"$pgsem4");
	   $worksheet1->write_string(2,21,"$pgsem5");
	   $worksheet1->write_string(2,22,"$pgsem6");
	   $worksheet1->write_string(2,23,"$pg");





/////////////////
	

			 
	
	
	
	
/////////////////
  
  
  
$workbook->close();
?>