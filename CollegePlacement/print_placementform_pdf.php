<?php
error_reporting('E_ALL^E_NOTICE');

require('fpdf.php');
$d=date('d_m_Y');
$get_id = $_GET['regno'];
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
$w=array(25,60,50,24,15,15);
	
	
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
		$this->Cell(25,6,$eachResult["student_id"],1);
		$this->Cell(60,6,$eachResult["s_name"],1);
		//$this->Cell(15,6,$eachResult["sex"],1);
		$this->Cell(50,6,$eachResult["email"],1);
		$this->Cell(24,6,$eachResult["s_contact"],1);
		$this->Cell(15,6,$eachResult["degree"],1);
		$this->Cell(15,6,$eachResult["pg"],1);

		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('RegisterNumber','FullName','Email','Contact','UG%','PG%');
//Data loading
//*** Load MySQL Data ***//
$objConnect = @mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("placement");
$strSQL = "select * from placementform where student_id = '$get_id' ";
$objQuery = mysql_query($strSQL);
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
	$pdf->Write(5, 'Student Placement Form Data');
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
	
	
	$count = mysql_num_rows($result);
	$pdf->Cell(0);
	//$pdf->Write(5, '             Total Students: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>