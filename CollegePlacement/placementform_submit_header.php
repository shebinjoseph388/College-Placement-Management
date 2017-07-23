<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>KristuJayantiCollege</title>
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
       <!-- 
        <script src="js1/jquery.js" type="text/javascript"></script>
<script src="js1/bootstrap.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8" language="javascript" src="js1/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js1/DT_bootstrap.js"></script>-->

        
        
        <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   	<SCRIPT TYPE="text/javascript"> 
<!-- 
//Disable right click script 
//visit http://www.rainbow.arch.scriptmania.com/scripts/ 
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
	
	++i;
	if(i<7){
		
	var div = document.createElement('div');
	div.innerHTML = "<input type='text'  name='child_"+i+"' style='width:250px; margin-left:7px; margin-right:7px;'   placeholder='sem"+i+"%'><input type='button' id='add_field()' onClick='addField()' value='+'><input type='button' onClick='removeField(this)' value='-'>";
	document.getElementById('deg').appendChild(div);
	
	//calculate(i);
	
	}
}
function addFieldpg(){
	
	++j;
	if(j<7){
	var div = document.createElement('div');
	div.innerHTML = "<input type='text' name='childpg_"+j+"' id ='childpg_"+j+"' style='width:250px; margin-left:7px; margin-right:7px;'  placeholder='sem"+j+"%'><input type='button' id='add_field()' onClick='addFieldpg()' value='+'><input type='button' onClick='removeFieldpg(this)' value='-'>";
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
<style type="text/css">
.err {
	color:red;
}
#container{
	width:300px;
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
	display:none;
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
   
<?php include('nehadmin/dbcon.php'); 

?>