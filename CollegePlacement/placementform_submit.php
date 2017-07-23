<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>KristuJayantiCollege</title>
        <link href="img/collegelogo.jpg" rel="icon">
		<meta name="criteria" content="Centre for Placement and Corporate Relations(CPCR)">
		<meta name="keywords" content="KJC,KRISTU,JAYANTI,JYOTHI,COLLEGE">
		<meta name="author" content="shebin joseph">
		<meta charset="UTF-8">
        <!-- Bootstrap -->
		<link href="nehadmin/images/favicon.ico" rel="icon" type="image">
        <link href="nehadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="nehadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="nehadmin/bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
        <link href="nehadmin/bootstrap/css/my_style.css" rel="stylesheet" media="screen">
        <link href="nehadmin/bootstrap/css/print.css" rel="stylesheet" media="print">
        <link href="nehadmin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="nehadmin/assets/styles.css" rel="stylesheet" media="screen">
		<!-- calendar css -->
		<link href="nehadmin/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
		<!-- index css -->
        <!-- <link href="nehadmin/bootstrap/css/index.css" rel="stylesheet" media="screen"> -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<script src="nehadmin/vendors/jquery-1.9.1.min.js"></script>
        <script src="nehadmin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<!-- data table -->
		<link href="nehadmin/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!-- notification  
		<link href="nehadmin/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		- wysiwug  -->
		<link rel="stylesheet" type="text/css" href="nehadmin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
		<link href="nehadmin/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>

		<script src="nehadmin/vendors/jGrowl/jquery.jgrowl.js"></script>

        
        <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 46 || charCode > 57 || charCode == 47))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   	<SCRIPT TYPE="text/javascript"> 
<!-- 
//Disable right click script 
//visit http://www.rainbow.arch.scriptmania.com/scripts/ h
var message="Sorry, right-click has been disabled"; 
/////////////////////////////////// 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
// --> 
</SCRIPT> 

        <style type ="text/css">
input[type="text"]{
	width:220px; height:28px;
}
.ss-required-asterisk{color:#c43b1d}
textarea{border:1px solid #ddd;font-size:1em;background-color:#fff;color:#444;margin:0;font-family:Arial,Verdana,sans-serif;}
</style>


<script type="text/javascript" language="javascript" >
var i = 1;
var j=1;

var totalValpg;
function addField(){
	
	
	
	if(i<6){
		++i;
	var div = document.createElement('div');
	
	
	div.innerHTML = '<input type="text"  name="child_'+i+'" id="child'+i+'" style="width:250px; margin-left:7px; margin-right:7px;"  onKeyPress="return isNumberKey(event)"   placeholder="sem'+i+'%"><input type="button" id="add_field()" onClick="addField()" value="+"><input type="button" onClick="removeField(this)" value="-">';
	document.getElementById('deg').appendChild(div);
	
	
	}
	
}
function addFieldpg(){
	
	
	if(j<6){
		++j;
	var div = document.createElement('div');
	div.innerHTML = "<input type='text' name='childpg_"+j+"' id ='childpg_"+j+"' style='width:250px; margin-left:7px; margin-right:7px;'  onKeyPress='return isNumberKey(event)'   placeholder='sem"+j+"%'><input type='button' id='add_field()' onClick='addFieldpg()' value='+'><input type='button' onClick='removeFieldpg(this)' value='-'>";
	document.getElementById('pg').appendChild(div);
	        
	
	}
	
}


function removeField(div){
	document.getElementById('deg').removeChild(div.parentNode);
	i--;
}
function removeFieldpg(div){
	document.getElementById('pg').removeChild(div.parentNode);
	j--;
}


					function checkNumber(textBox){
					while (textBox.value.length > 0 && isNaN(textBox.value)) {
					  textBox.value = textBox.value.substring(0, textBox.value.length - 1)
					}
					textBox.value = trim(textBox.value);
				  }
</script>
<script type="text/javascript" language="javascript" >
function checkEmail(str)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("checkEmail").innerHTML=xmlhttp.responseText;
		}
  	}
xmlhttp.open("POST",str,true);
xmlhttp.send();
}
function checkName(str)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("checkName").innerHTML=xmlhttp.responseText;
		}
  	}
xmlhttp.open("POST",str,true);
xmlhttp.send();
}
function checkAge(str)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("checkAge").innerHTML=xmlhttp.responseText;
		}
  	}
xmlhttp.open("POST",str,true);
xmlhttp.send();
}
function checkFile(str)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("checkFile").innerHTML=xmlhttp.responseText;
		}
  	}
xmlhttp.open("POST",str,true);
xmlhttp.send();
}

</script>
<?php include('script.php'); ?>
<?php include("includes/functions.php");?>






<?php include('session.php'); 
studconfirm_logged_in();
uniquestudconfirm_logged_in();?>


<?php include('dbcon.php'); 
error_reporting('E_ALL^E_NOTICE'); 
?>
<script src="js1/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<script src="js1/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">


$(function() {
	$("input.file_1").filestyle({ 
	image: "img/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>
<?php
if(isset($_POST['submit']) && $_POST['submit']=='Submit')
{
	//var_dump($_POST);
		$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
			
			$sy = $_POST['sy'];
		      $dept=$_POST['dept'];
				$sslc = $_POST['sslc'];
			$plustwo = $_POST['plustwo'];
			$file=$_FILES['uploaded_file']['name'];
				$count1=$count2=0;
			$sem1 = $sem2=$sem3=$sem4=$sem5=$sem6=$pgsem1=$pgsem2=$pgsem3=$pgsem4=$pgsem5=$pgsem6=0;
			if(isset($_POST['child_1'])&& !empty($_POST['child_1'])){
		$sem1 = $_POST['child_1'];
		
		$count1++;
			}
			

		if( isset($_POST['child_2'])){
			

		$sem2 = $_POST['child_2'];
		
		$count1++;
		}
		if(isset($_POST['child_3'])&& !empty($_POST['child_3'])){
			$sem3 = $_POST['child_3'];
			$count1++;
			}
			if(isset($_POST['child_4'])&& !empty($_POST['child_4'])){
				$count1++;
		$sem4 = $_POST['child_4'];}
		if(isset($_POST['child_5'])&& !empty($_POST['child_5'])){
			$count1++;
			$sem5 = $_POST['child_5'];}
			if(isset($_POST['child_6'])&& !empty($_POST['child_6'])){
				$count1++;
			$sem6 = $_POST['child_6'];}
			if(isset($_POST['childpg_1'])&& !empty($_POST['childpg_1'])){
				$count2++;
			$pgsem1 = $_POST['childpg_1'];}
			if(isset($_POST['childpg_2'])&& !empty($_POST['childpg_2'])){
				$count2++;
		$pgsem2 = $_POST['childpg_2'];}
		if(isset($_POST['childpg_3'])&& !empty($_POST['childpg_3'])){
			$count2++;
			$pgsem3 = $_POST['childpg_3'];}
			if(isset($_POST['childpg_4'])&& !empty($_POST['childpg_4'])){
				$count2++;
		$pgsem4 = $_POST['childpg_4'];}
		if(isset( $_POST['childpg_5'])&& !empty($_POST['childpg_5'])){
			$count2++;
			$pgsem5 = $_POST['childpg_5'];}
			if(isset($_POST['childpg_6'])){
				$count2++;
			$pgsem6 = $_POST['childpg_6']; } 
			$degreetot = $sem1+$sem2+ $sem3+ $sem4+$sem5+ $sem6 ;
			$pgtot = $pgsem1+$pgsem2+ $pgsem3+ $pgsem4+$pgsem5+ $pgsem6 ;
			if($count1 == 0){
			$count1 =1;	
			}
			if($count2 == 0){
			$count2 =1;	
			}
			$degreeavg = $degreetot/$count1; 
	        $pgavg = $pgtot/$count2;
		
$s_address=$_POST['s_address'];
$s_age=trim($_POST['s_age']);
$email = trim($_POST['email']);
$s_contact=trim($_POST['s_contact']);
$gender=@$_POST['sex'];
$classtype =@$_POST['classtype'];
$backlogug=@$_POST['backlogug'];
if($classtype == 'ug'){
$backlogpg='no';}
if($classtype == 'pg'){
$backlogpg=@$_POST['backlogpg'];}
$error=array("backlogug"=>"","backlogpg"=>"","file"=>"","classtype"=>"","s_address"=>"","s_contact"=>"","email"=>"","gender"=>"");
if($classtype=="")
	{
		$error['classtype']="Select UG/PG.";
		$valid_classtype="";	
	}
	else
	{
		$valid_classtype=$classtype;
	}	
	if($backlogug=="")
	{
		$error["backlogug"]="Select backlogug.";
		$valid_backlogug ="";	
	}
	else
	{
		$valid_backlogug=$backlogug;
	}	
	if($classtype =="pg"&&$backlogpg=="")
	{
		$error["backlogpg"]="Select backlogpg.";	
		$valid_backlogpg="";
	}
	else if($classtype =="ug" || $classtype=="")
	{
		$valid_backlogpg="no";
	}	
	else
	{
		$valid_backlogpg=$backlogpg;
	}
	//********************resume*********************
	//$h = $_FILES['uploaded_file']['type'];

	if($file=="")
	{
		$error['file']="Resume Is Required.";	
	}
	
	else
	{ 
	if ($_FILES['uploaded_file']['size'] < 1048576 * 5) {
			$valid_file=$file;
		}
		else
		{
    $error['file']= 'file selected exceeds 5MB size limit';
		}
	}	
	//********************gender*********************
	if($gender=="")
	{
		$error['gender']="Select Gender.";	
		$valid_gender="";
	}
	else
	{
		$valid_gender=$gender;
	}	
	
	//********************address*********************
	if(empty($s_address))
	{
		$error['s_address']="Address Is Required.";	
		$valid_address="";
	}
	else
	{
		$valid_address=$s_address;
	}
	
	if(empty($s_contact))
	{
		$error['s_contact']="Address Is Required.";
		$valid_contact="";	
	}
	else
	{
		$valid_contact=$s_contact;
	}
	//********************email*********************
	if($email=="")
	{
		$error['email']="Email Is Required.";
		$valid_email="";	
	}
	else
	{
		if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))																												        {
			$valid_email=$email;
		}
		else 
		{
			$error['email']="Invalid Email \.";
			$valid_email="";
		}
	}
	
	$querycheck = "Select * from placementform where student_id = '$idno' ";
					$result1 = @mysql_query($querycheck);
					//confirm_query($result1);
					$numrows1 = @mysql_num_rows($result1);
					
					if ($numrows1 > 0){
						
					?>
					<script type="text/javascript">
					alert('You already submitted your form');
						 
					//$.jGrowl(" You already submitted your form", { header: 'Trying for Resubmition' });

					window.location = "PlacementForm-View";
					</script>
					<?php
					//header("location: PlacementForm-View");
					}
	      else{

	$rd2 = mt_rand(1000, 9999) . "_File";
//Check that we have a file
if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is word and it's size is less than 350Kb

    $filename = basename($_FILES['uploaded_file']['name']);

    $ext = substr($filename, strrpos($filename, '.') + 1);

    if ($ext != "exe") {

        //Determine the path to which we want to save this file      
        //$newname = dirname(__FILE__).'/upload/'.$filename;
        $newname = "nehadmin/uploads/" . $rd2 . "_" . $filename;

        //Check if the file with the same name is already exists on the server
        if (!file_exists($newname)) {

            //Attempt to move the uploaded file to it's new place
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                //successful upload
                // echo "It's done! The file has been saved as: ".$newname;		   

	
	
			
	if( (strlen($valid_classtype)>0) && (strlen($valid_contact)>0) &&   (strlen($valid_email)>0) && (strlen($valid_address)>0) && (strlen($valid_backlogug)>0) && (strlen($valid_file)>0) &&  (strlen($valid_backlogpg)>0) && (strlen($valid_gender)>0))
	{
		//echo "Hello";

	
$query = "INSERT INTO placementform
								(student_id,s_name, s_address,sex,s_contact,department_id,yr,email,sslc,plustwo,degree,sem1,sem2,sem3,sem4,sem5,sem6,pg,pgsem1,pgsem2,pgsem3,pgsem4,pgsem5,pgsem6,backlogug,backlogpg,floc)
							VALUES (:a,:b,:c,:g,:i,:l,:m,:z,:gg,:hh,:zz,:ll,:mm,:nn,:yu,:uu,:vv,:zzz,:oo,:pp,:qq,:rr,:ss,:tt,:bku,:bkp,:fl)";	
							$q = $db->prepare($query);
							$q->execute(array(':a'=>$idno,':b'=>$fname,':c'=>$s_address,':g'=>$gender,':i'=>$s_contact,':l'=>$dept,':m'=>$sy,':z'=>$email,':gg'=>$sslc,':hh'=>$plustwo,':zz'=>$degreeavg,':ll'=>$sem1,':mm'=>$sem2,':nn'=>$sem3,':yu'=>$sem4,':uu'=>$sem5,':vv'=>$sem6,':zzz'=>$pgavg,':oo'=>$pgsem1,':pp'=>$pgsem2,':qq'=>$pgsem3,':rr'=>$pgsem4,':ss'=>$pgsem5,':tt'=>$pgsem6,':bku'=>$valid_backlogug,':bkp'=>$valid_backlogpg,':fl'=>$newname));
					
?> 

						 <script type="text/javascript">
						// $('#dialog').attr('title','Saved').text('Successfully done').dialog();
							alert("Successfully done.");
						   window.location = "PlacementForm-View";
						 </script>
						<?php

					}
					else{
					echo "<script>alert('Fill all the fields and try again');
			</script>";	
					}
					
				}
				else{
					echo "<script>alert('Uploading failed..Please try again');
			</script>";	
				}
}
else{
					echo "<script>alert('Please provide another filename for your resume');
			</script>";	
				}
}
else{
					echo "<script>alert('Please provide Resume as Word Document');
			</script>";	
				}
}	
else{
					echo "<script>alert('Please provide another filename for your resume');
			</script>";	
				}	
		  }
					
			
}

?>


<style type="text/css">
.err {
	color:red;
}
#container{
	width:330px;
	border:1px solid #ccc;
	padding:5px;
	margin-left:auto;
	margin-right:auto;
}
#containerpg{
	width:300px;
	border:1px solid #ccc;
	padding:5px;
	margin-left:auto;
	margin-right:auto;
	
}
.personal{
	border:1px solid #ccc;
	padding:10px;
}
.spouse{
	border:1px solid #ccc;
	padding:10px;
}
#children{
	border:1px solid #ccc;
	padding:10px;
}
#fname, #lname, #mname, #s_fname, #s_mname, #s_lname{
	width:190px;
	margin-left:7px;
}
table 
	{
		line-height:40px;
		width:80%;
		line-height:50px;
		height:auto;
		
		border-collapse:collapse 
	}
td
{
	padding-left:20px;
	font-weight:bold;
}

</style>
		 </head>
 </head>
<body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('backpack_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
									<ul class="breadcrumb">
										<?php
										$year_query = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
										$year_query_row = mysql_fetch_array($year_query);
										$school_year = $year_query_row['year_of_studying'];
										?>
											<li><a href="#"><b>Placement</b></a><span class="divider">/</span></li>
										<li><a href="#">Batch: <?php echo $school_year; ?></a><span class="divider">/</span></li>
										<li><a href="#"><b>Placement Form</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
	


</script>
<div id="dialog"></div>	
		<div id="content">  
<form  id="signin_student" class="form-signin" method="post" enctype="multipart/form-data"  >
		 
<div id="module-name">

<?php 
$querycheck = "Select * from placementform where student_id = '$regno' ";
					$result1 = @mysql_query($querycheck);
					//confirm_query($result1);
					$numrows1 = @mysql_num_rows($result1);
					
					if ($numrows1 > 0){
					?>
                    <div class="alert alert-warning">You already submitted your PlacementForm..<a href="PlacementForm-View">Click Here to View</a></div>
                    <?php
					}
	      else{
 ?>
<table class="app_table">

  <tr  > <th align="left" colspan="2"><h1 style="padding-left:20px" ><div class="alert alert-info">Placement Form</div></h1></th>
    </tr><br/>
</div>


	
				



  
	<tr>
		<th> <div class="_title"></div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="50%">
				<tr>
				  <td class="_label">CollegeId</td>
				  <td><label for="idno">
                  <?php $query= mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									
							?>
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" required  readonly placeholder=
								  "Collegeid" value=<?php echo $row['RegisterNo'];  ?>>
				  </label></td></tr>
                  
					<tr>
				  <td class="_label" width="117">Name   </td>
				  <td width="413"><input type="text" name="s_fullname" size="30" id="s_fullname" class="app_txtbox" readonly value="<?php echo $row['firstname']." ". $row['lastname']; ?> "/><span class="err" id="checkName"></span>
				  </td>
				</tr>
                
	<tr>
                 <td class="_label">Year Of Studying</td>
				  <td><label for="sy">
                  <?php $query= mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
							?>
					<input type="text" name="sy" size="30" id="sy" class="app_txtbox" required readonly  value=<?php echo $row['year_of_studying'];  ?>>
				  </label></td></tr>
				
            	
				<tr>
				   <td class="_label">Department</td>
				
					 <?php
						$sql = "Select * from student join class ON student.class_id = class.class_id where student_id ='$session_id' ";
						$result = mysql_query($sql) or die (mysql_error());
						$row = mysql_fetch_array($result) ;
						$cl =  $row['class_name']; 

						//$dept = $row['class_name'];?>
									<td>	<input type="text" name="dept" size="30" id="dept" class="app_txtbox" required maxlength="8" readonly  value=<?php echo $row['class_name'];  ?>>
							</td>
				</tr> 
				<tr>
				  <td class="_label">PermanentAddress<span class="ss-required-asterisk" aria-hidden="true">*</span></td>
				  <td><textarea rows="2" cols="20" style=" height: 100px;width: 230px;"  name="s_address" > <?php if(isset($valid_address)){
         echo $valid_address; }?></textarea><span class="err"><?php echo $error["s_address"];?></span></td>
				</tr>
                <tr>
				  <td class="_label">ContactNumber<span class="ss-required-asterisk" aria-hidden="true">*</span></td>
				  <td><label for="s_contact"></label>
				  <input name="s_contact" type="text" id="s_contact" size="30" onKeyPress="return isNumberKey(event)" required maxlength="11" value="<?php if(isset($valid_contact)){ echo $valid_contact;}?>"> <span class="err"><?php echo $error["s_contact"];?></span></td>
				</tr>
				
             
				 
				
                <tr>
				  <td class="_label">Email<span class="ss-required-asterisk" aria-hidden="true">*</span></td>
				  <td><label for="email"></label>
				 <input type="text" name="email" onBlur="checkEmail('checkEmail.php?email='+this.value)" value="<?php if(isset(   $valid_email)){  echo $valid_email;}?>"/>
        <span class="err" id="checkEmail" ><?php  echo $error["email"];?></span></td>
				</tr>
              
            <tr>
      <td>Gender<span class="ss-required-asterisk" aria-hidden="true">*</span></td>
      <td><input type="radio" name="sex" value="Male" <?php if($valid_gender=='Male') echo "checked='checked'";?> />
        Male
        <input type="radio" name="sex" value="Female" <?php if($valid_gender=='Female') echo "checked='checked'";?>/>
        Female <span class="err"><?php echo $error["gender"];?></span></td>
    </tr>
            
				</tr>
				
                 <tr>		 <td>Upload Resume<span class="ss-required-asterisk" aria-hidden="true">*</span></td>	
								<td><input name="uploaded_file"  class="resume"  type="file" style="margin-left:150px;border: 1px solid #acacac;" required><span class="err"><?php echo $error["file"];?></span><input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                
                           
               </td>
    </tr>
                
                
               
                <tr><td>MarkList</td></tr>
                 <tr><td> <div id="container">
        <div id="sslc">10th/SSLC(%)
        	<span class="ss-required-asterisk" aria-hidden="true">*</span><input type ="text" size ="30" name="sslc" required   onKeyPress="return isNumberKey(event)" placeholder="10th%" style="width:250px; margin-left:7px; margin-right:4px;" value="<?php if(isset($_POST['sslc'])){ echo $_POST['sslc'];}?>">
            
        </div></div>
        	
  

                </td>
				</tr>
                
             
                <tr><td> <div id="container">
        <div id="plustwo">PUC/HSE(%)
        <span class="ss-required-asterisk" aria-hidden="true">*</span>
        	<input type ="text" size ="30" name="plustwo" required   onKeyPress="return isNumberKey(event)" placeholder="+2/PUC%" style="width:250px; margin-left:7px; margin-right:4px;" value="<?php if(isset($_POST['plustwo'])){ echo $_POST['plustwo'];}?>">
            
        </div></div>
        	
  

                </td>
				</tr>
               
    
                <tr><td>
                <div id="container" style = "width:330px;">
    	Degree ScoreSheet(Percentage)
        <span class="ss-required-asterisk" aria-hidden="true">*</span>
       <div id="deg">
        	<input type="text" name="child_1" id ="child_1" placeholder="Sem1%"  onKeyPress="return isNumberKey(event)" style="width:250px; margin-left:7px; margin-right:4px;"  >
            <input type="button" id="add_field()" onClick="addField()" value="+">
        </div>
        <br/>&nbsp;&nbsp;&nbsp;Any Backlog in UG:<span class="ss-required-asterisk" aria-hidden="true">*</span>
      <input type="radio" name="backlogug" value="yes" <?php if($backlogug=='yes') echo "checked='checked'";?> />
       Yes
        <input type="radio" name="backlogug" value="no" <?php if($backlogug=='no') echo "checked='checked'";?>/>
        No <span class="err"><?php echo $error["backlogug"];?></span>
         </td>
       <!-- <tr><td><input type ="text" name="degree" id ='finalave'  readonly /></td></tr></div></td></tr>-->
        <?php
						$program = "Select * from course where course_name ='$cl' ";
						$resultprogram = mysql_query($program) or die (mysql_error());
						$rowprogram = mysql_fetch_array($resultprogram) ;
						$type = $rowprogram['type'];
						if($type == 'PG'){ ?>
											  <input type="hidden" name="classtype"  value="pg" />

					<?php	}
					else { ?>
                    											  <input type="hidden" name="classtype"  value="ug" />

                    <?php }
						if($type == 'PG'){
						?>
        <td> <div id="containerpg" style = "width:330px;">
        PG ScoreSheet(Percentage)
        <span class="ss-required-asterisk" aria-hidden="true">*</span>
        <div id="pg">
        <input type="text" name="childpg_1" id="childpg_1" placeholder="Sem1%"  onKeyPress="return isNumberKey(event)" style="width:250px; margin-left:7px; margin-right:4px;"  >
            <input type="button" id="add_field()" onClick="addFieldpg()" value="+"></div>
         <br/>Any Backlog in PG:<span class="ss-required-asterisk" aria-hidden="true">*</span>
      <input type="radio" name="backlogpg" value="yes" <?php if($backlogpg=='yes') echo "checked='checked'";?> />
       Yes
        <input type="radio" name="backlogpg" value="no" <?php if($backlogpg=='no') echo "checked='checked'";?> />
        No  <span class="err"><?php echo $error["backlogpg"];?></span><br/>
       
       </div>
        </div>
        	
  

                </td>
                <?php } ?>
				</tr>
              	<tr>
            		  <td height="41">
                  <input type="submit" name="submit"  value="Submit"  style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:160px;"/>
				  </td>
				
                   <!-- <td> <button type="submit" name="submit" class="btn btn-success" value="Submit"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
                  <input type="submit" name="submit" value="Submit">-->
                  <?php } ?>
				  </td><td width="1"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
<?php
// include("includes/footer.php");?>






    
    
    </div>
    
    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php //include('footer.php'); ?>
        </div>
       
		<link type="text/css" href="nehadmin/vendors/datepicker.css" rel ="stylesheet">
        <script src="js1/jquery.js" type="text/javascript"></script>
      <script src="nehadmin/vendors/bootstrap-datepicker.js" type="text/javascript"></script>
     
        <script type="text/javascript">
        /*$(document).ready(function(){
			if(document.getElementById('pgclass').checked == true){
			$('#containerpg').slideDown(1000);	
			}
		$('#pgclass').click(function(){
		$('#containerpg').slideDown(1000);
		});	
		
		$('#ugclass').click(function(){
		$('#containerpg').slideUp(1000);
		});
		$('#date01').datepicker({minDate:0});
		});*/
        </script>
        <script src="nehadmin/vendors/jGrowl/jquery.jgrowl.js"></script>
        <script src="js1/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">


 $(document).ready(function(){
	$("input.resume").filestyle({ 
	image: "img/upload_file.gif",
	imageheight : 50,
	imagewidth : 78,
	width : 300
	});
});
</script>
    </body>
</html>