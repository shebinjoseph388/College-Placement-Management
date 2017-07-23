<?php
error_reporting('E_ALL^E_NOTICE');

require('fpdf.php');
$d=date('d_m_Y');
$get_id = $_GET['id'];
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
$w=array(30,45,50,20);
	
	
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
		$this->Cell(30,6,$eachResult["RegisterNo"],1);
		$this->Cell(45,6,$eachResult["firstname"],1);
		$this->Cell(50,6,$eachResult["lastname"],1);
		$this->Cell(20,6,$eachResult["grade"],1);
		//$this->Cell(20,6,$eachResult["username"],1);
		//$this->Cell(55,6,$eachResult["address"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('RegisterNumber','FirstName','LastName','Mark');
//Data loading
//*** Load MySQL Data ***//
$objConnect = @mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("placement");
$strSQL = "select * from  student_class_quiz join student on student_class_quiz.student_id= student.student_id join class_quiz on student_class_quiz.class_quiz_id = class_quiz.class_quiz_id  where class_quiz.class_quiz_id  = '$get_id' ";
$objQuery = mysql_query($strSQL);
	$count = mysql_num_rows($objQuery);

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
	$pdf->Write(5, 'Student Marks Record');
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
	
	$pdf->Cell(0);
	$pdf->Write(5, '             Total Students Attended: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>