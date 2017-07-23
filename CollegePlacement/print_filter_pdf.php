<?php
error_reporting('E_ALL^E_NOTICE');

require('fpdf.php');
$d=date('d_m_Y');
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

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(255,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(25,50,30,20,20,20);
	
	
	//Header
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	
	$this->SetFont('Arial','',10);
	foreach ($data as $eachResult) 
	{ //width
		$this->Cell(10);
		$this->Cell(25,6,$eachResult["RegNo"],1);
		$this->Cell(50,6,$eachResult["s_name"],1);
		$this->Cell(30,6,$eachResult["department_id"],1);
		$this->Cell(20,6,$eachResult["sex"],1);
		$this->Cell(20,6,$eachResult["degree"],1);
		$this->Cell(20,6,$eachResult["pg"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('RegisterNo','Name','Department','Gender','Degree%','PG%');
//Data loading
//*** Load MySQL Data ***//
$objConnect = @mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("placement");



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

$objQuery = mysql_query($strSQL);
///$count = mysql_num_rows($strSQL);
$resultData = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) {
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//


//*** Table 1 ***//
$pdf->AddPage();

	$pdf->SetFont('Helvetica','',14);
	$pdf->Cell(68);
	$pdf->Write(5, 'Filter Records');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(8);
	$pdf->Cell(57);
	$result=mysql_query("select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysql_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	//count total numbers of visitors
	$result=mysql_query($strSQL) or die ("Database query failed: $query" . mysql_error());
	
	$count = mysql_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, '             Total Students: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>