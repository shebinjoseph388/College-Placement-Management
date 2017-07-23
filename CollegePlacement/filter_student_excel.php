<?php
error_reporting('E_ALL^E_NOTICE');
function HeaderingExcel($filename) {
	 
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
$id	= $_GET['id'];
		  $class	= $_GET['class'];
		 $sslc	= $_GET['sslc'];
		 $plustwo	= $_GET['plustwo'];
	$post_id	= $_GET['post_id'];
 	 $degree	= $_GET['degree'];
		 $ug	= $_GET['degree'];
		 $pg	= $_GET['pg'];
		 $backlogug =$_GET['backlogug'];
		  $backlogpg =$_GET['backlogpg']; 


  require_once('OLEwriter.php');

  require_once('BIFFwriter.php');

  require_once('Worksheet.php');

  require_once('Workbook.php');

  require_once('dbcon.php');
  

 

	  // HTTP headers
HeaderingExcel('Filtered_Students_List.xls');// Creating a workbook

$workbook = new excel("-");

// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('Filtered Student List');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 20);
  $worksheet1->set_column(1, 1, 40);
  //$worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 40);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
   $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);
  $worksheet1->set_column(1, 8, 20);
  $worksheet1->set_column(1, 9, 15);
   $worksheet1->set_column(1, 10, 15);
  $worksheet1->set_column(1, 11, 15);
  $worksheet1->set_column(1, 12, 15);
  $worksheet1->set_column(1, 13, 15);
     $worksheet1->set_column(1, 14, 15);

  $worksheet1->set_column(1, 15, 15);
  $worksheet1->set_column(1, 16, 15);
    $worksheet1->set_column(1, 17, 15);
  $worksheet1->set_column(1, 18, 15);
  $worksheet1->set_column(1, 19, 15);
  $worksheet1->set_column(1, 20, 15);
  $worksheet1->set_column(1, 21, 15);
  $worksheet1->set_column(1, 22, 15);
  $worksheet1->set_column(1, 23, 15);
   $worksheet1->set_column(1, 24, 15);
  

   $worksheet1->write_string(0,0,"RegisterNo");
    $worksheet1->write_string(0,1,"StudentName");
	// $worksheet1->write_string(0,2,"Company");
	  $worksheet1->write_string(0,2,"Contact");
	   $worksheet1->write_string(0,3,"Email");
	   $worksheet1->write_string(0,4,"Round1");
	   $worksheet1->write_string(0,5,"Round2");
	    $worksheet1->write_string(0,6,"Round3");
		 $worksheet1->write_string(0,7,"Department");
		  $worksheet1->write_string(0,8,"YearOfStudying");
		   $worksheet1->write_string(0,9,"SSLC");

		   $worksheet1->write_string(0,10,"PUC");

		   $worksheet1->write_string(0,11,"DegreeSemester1");

		   $worksheet1->write_string(0,12,"DegreeSemester2");

		   $worksheet1->write_string(0,13,"DegreeSemester3");

		   $worksheet1->write_string(0,14,"DegreeSemester4");

		   $worksheet1->write_string(0,15,"DegreeSemester5");

		   $worksheet1->write_string(0,16,"DegreeSemester6");
					   $worksheet1->write_string(0,17,"UGAggregate%");

		   $worksheet1->write_string(0,18,"PGSemester1");

		   $worksheet1->write_string(0,19,"PGSemester2");
		   $worksheet1->write_string(0,20,"PGSemester3");
		   $worksheet1->write_string(0,21,"PGSemester4");
		   $worksheet1->write_string(0,22,"PGSemester5");
		   $worksheet1->write_string(0,23,"PGSemester6");
		   $worksheet1->write_string(0,24,"PGAggregate%");



/////////////////
	
if($backlogug =='yes' && $backlogpg =='no'){
	

	$strSQL = "SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')";
							//$count = $query->rowcount();
	}
else if($backlogug =='no' && $backlogpg =='yes'){
	
	$strSQL = "SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogpg ='no')";
							//$count = $query->rowcount();
	}
else if($backlogug =='yes' && $backlogpg =='yes'){

	$strSQL ="SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')&& (backlogpg ='no')";
							//$count = $query->rowcount();
	}
else{
						
						$strSQL = "SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')";
							
}

			 
$qryreport = mysql_query($strSQL) or die(mysql_error());
	
	$sqlrows=mysql_num_rows($qryreport);
	$j=0;
	
	while ($row=mysql_fetch_array($qryreport)) {
	$j=$j+1;
			$name=$row['s_name'];
$company=$row['company'];
$student_id=$row['RegNo'];
$grade =$row['grade'];
$grade2 = $row['grade2'];
$grade3 = $row['grade3'];
$yr = $row['yr'];
$contact =$row['s_contact'];
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
			
			
		 
		 
		 
		    $worksheet1->write_string($j,0,"$student_id");
   $worksheet1->write_string($j,1,"$name");
  // $worksheet1->write_string($j,2,"$company");

   $worksheet1->write_string($j,2,"$contact");
      $worksheet1->write_string($j,3,"$email");
      $worksheet1->write_string($j,4,"$grade");
 $worksheet1->write_string($j,5,"$grade2");
  $worksheet1->write_string($j,6,"$grade3");
   $worksheet1->write_string($j,7,"$department");
   $worksheet1->write_string($j,8,"$yr");
   $worksheet1->write_string($j,9,"$sslc");
   $worksheet1->write_string($j,10,"$puc");
	   $worksheet1->write_string($j,11,"$sem1");
	   $worksheet1->write_string($j,12,"$sem2");
	   $worksheet1->write_string($j,13,"$sem3");
	   $worksheet1->write_string($j,14,"$sem4");
	   $worksheet1->write_string($j,15,"$sem5");
	   $worksheet1->write_string($j,16,"$sem6");
	   	   $worksheet1->write_string($j,17,"$degree");

	   $worksheet1->write_string($j,18,"$pgsem1");
	   $worksheet1->write_string($j,19,"$pgsem2");
	   $worksheet1->write_string($j,20,"$pgsem3");
	   $worksheet1->write_string($j,21,"$pgsem4");
	   $worksheet1->write_string($j,22,"$pgsem5");
	   $worksheet1->write_string($j,23,"$pgsem6");
	   $worksheet1->write_string($j,24,"$pg");

			 
	}
		
	
	
	
/////////////////
  
  
  
$workbook->close();
?>