<?php 
error_reporting('E_ALL^E_NOTICE');

 include('header_dashboard.php');
require_once('includes/dbcon.php'); ?>
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
<?php include('session.php'); 
executiveconfirm_logged_in(); ?>

<?php //$get_id = $_GET['id']; 
function createRandomPassword() {
	/*$chars = "023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 3) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}*/
	$characters_on_image = 6;
	$possible_letters = '23456789bcdfghjkmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
	$code = '';


$i = 0;
while ($i < $characters_on_image) { 
$code .= substr($possible_letters, mt_rand(0, strlen($possible_letters)-1), 1);
$i++;
}

	return $code;
}
   ?>
   
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						
                       
						<?php //include('my_students_breadcrums.php'); ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
                               <!-- <a href="MyStudents<?php //echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>-->
                               <a href="Student-List" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
								<?php 
								
								/*$my_student = mysql_query("SELECT * FROM teacher_class_student
														LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
														INNER JOIN class ON class.class_id = student.class_id  INNER JOIN semester ON semester.semester_id =teacher_class_student.semester_id where teacher_class_id = '$get_id' order by lastname ")or die(mysql_error());
								$count_my_student = mysql_num_rows($my_student);   */?>
								 <span class="badge badge-info"><?php //echo $count_my_student; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									
                                    
                                    	<div id="table-content" >
			
				<form enctype="multipart/form-data" action="" method="post">
<div style="width:550px;
	margin: auto auto auto auto;
	margin-top:px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="img/xml.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;border: 1px solid #acacac;
	padding: 5px;"/><br>
</td>
</tr>
<tr>
<td>
<input type="submit"  value="Upload" name="l1"   style="width:150px;
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
</tr>
</table>

</div></div>

  </form>

				
		
		 
			
			</div>
                                    
                                    
                                    
										    <?php
														/*$my_student = mysql_query("SELECT * FROM teacher_class_student
														LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
														INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by firstname ")or die(mysql_error());
														while($row = mysql_fetch_array($my_student)){
														$id = $row['teacher_class_student_id'];*/
														
														?>
											
												
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>




<?php
if(isset($_POST['l1']))
{
	//$h=$_FILES['file']['type'];
	
//application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
if($_FILES['file']['type']=="text/xml")
{
 static $st=0;
 $con=@mysql_connect("localhost","root","");
	if($con)
	{
		@mysql_select_db("placement",$con);
	}
	else
	{
		echo "Connection is not Est"."<br>";
	}
function add_stud($RegisterNo,$firstname,$lastname,$sex,$year_of_studying,$class_id)

{
	 $username = createRandomPassword();
	
$status = 'Unregistered';




								 
  $qry="insert into student(RegisterNo,firstname,lastname,sex,year_of_studying,class_id,password,status) values('$RegisterNo','$firstname','$lastname','$sex','$year_of_studying','$class_id','$username','$status');";
  mysql_query("$qry");

  
}


//sendemail($RegisterNo,$username);
		
		function sendemail($RegisterNo,$username){
		$to = ''.$RegisterNo.'@kristujayanti.com';
		//$to = 'shebinjoseph388@gmail.com';		
		$from = 'placement@kristujayanti.com';
		$subject = 'Password for your Placement Login';
		//calling the function buildBody() that returns a string value..
		$message = buildBodysendemail($RegisterNo,$username,$from);
		$header = 'From: '.$from.'
		to: '.$to.'
		Subject: '.$subject.'
		Content-type: '."text/html".'
		charset: '."utf-8".'';
		mail($to,$subject,$message,$header);
			
		
		//using the absolute path to redirect to the register.php page..
		//$host = $_SERVER["HTTP_HOST"];
		//$path = rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
		//header("Location: http://".$host.$path."/register.php");
	}
?>
<?php
function buildBodysendemail($RegisterNo,$username,$from){
	
	$body="
	RegisterNo: ".$RegisterNo." 
	Password: ".$username."
	From: ".$from."";
	return $body; 
}


$data = array();

if ( $_FILES['file']['tmp_name'] )
{
 $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
 $rows = $dom->getElementsByTagName( 'Row' );
 $first_row = true;
 foreach ($rows as $row)
 {
   if (!$first_row)
   {
     $class = "";
     $firstname = "";
     $lastname= "";
    $RegisterNo ="";
      $sex = "";
    $year_of_studying = "";
    // $email_id= "";
     //$DOB= "";
     $index = 1;
     $cells = $row->getElementsByTagName( 'Cell' );
     foreach( $cells as $cell )
     {
      	$ind = $cell->getAttribute( 'Index' );
       	if ( $ind != null ) $index = $ind;

    	if ( $index == 1 ) $RegisterNo = $cell->nodeValue;
       	if ( $index == 2 ) $firstname = $cell->nodeValue;
       	if ( $index == 3 ) $lastname = $cell->nodeValue;
       	if ( $index == 4 ) $sex = $cell->nodeValue;
        if ( $index == 5 ) $year_of_studying = $cell->nodeValue;
	if ( $index == 6 ) $class = $cell->nodeValue;
	
       $index += 1;
     }
	 								
    $query = mysql_query("select class_id from class where class_name = '$class' ")or die(mysql_error());
	
							$row = mysql_fetch_array($query);
								$class_id = $row['class_id'];

	

     add_stud($RegisterNo,$firstname,$lastname,$sex,$year_of_studying,$class_id);
    
    }
   $first_row = false;
 }
}
if($st>=0)
{?>
<script language="javascript">
confirm("Your Excel File Successfully Insert into table");
</script>

<?php }
if($st==0)
{?>
<script language="javascript">
	var name="Some Error to Insert Excel File into table";
	//alert(name);
	</script>
	<?php
}
}
else
{
?>
	<script language="javascript">
	alert("You can upload only XML file");
	</script>
	<?php

}
}
?>