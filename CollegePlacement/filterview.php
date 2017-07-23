<?php include('header.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
$get_id = $_GET['get_id'];
$id =$_GET['id'];
 ?>
<?php include('dbcon.php'); 



//$s1=   $_SESSION['sslc'];
//s2=   $_SESSION['plustwo'];
//$s3=   $_SESSION['degree'];
//$s4=   $_SESSION['pg'];
//get_id = $_SESSION['id'];

//echo $s1;
//echo $s2;
//echo $s3;
//echo $s4;
//echo $get_id;
//echo $id;

?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('class_sidebar.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
                                
	 <a href="#" onClick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>
     
   <!--  <form id="form4" name="form4" method="post" action="studentfilterprocessing.php"> 
     <input type="hidden" name="sslc" value=<?php //echo '.$sslc.' ?> />
    
     <input type="hidden" name="plustwo" value=<?php //echo '.$plustwo.' ?> />
     <input type="hidden" name="degree" value=<?php //echo '.$degree.' ?> />
     <input type="hidden" name="pg" value=<?php //echo '.$pg.' ?> />
      <input type="submit" name="submit" id="seacrh" class="icon-arrow-left icon-large" value="Back1"/>
      </form>-->
    
									<!--	<a href="studentfilterprocessing.php ? sslc= <?php //echo $_SESSION['sslc']?> ? plustwo= <?php //echo $_SESSION['plustwo']?> ? degree= <?php //echo $_SESSION['degree']?> ? pg= <?php //echo $_SESSION['pg']?> "><i class="icon-arrow-left icon-large"></i> Back</a>-->
                                    <button style="margin-left:0px; margin-bottom:0px;" class="btn btn-info" onClick="goBack()"><i class="icon-arrow-left"></i> Back</button>
              
								</div>
                            </div>
                            <div class="block-content collapse in">


<?php
//$query = $conn->query("select * from placementform where student_id = '$get_id'")or die(mysql_error());
					//	$row = $query->fetch();
					//echo $get_id;
						 $query =mysql_query("select * from placementform where student_id = '$id'") or die(mysql_error());
						 $row = mysql_fetch_array($query)
?>
<div class="alert alert-success">Name: <strong><?php echo $row['s_name']; ?></strong></div>
						<div class="span6">
						StudentID: <strong><?php echo $row['student_id']; ?></strong><hr>
						Permanent Address: <strong><?php echo $row['s_address']; ?></strong><hr>
						Sex: <strong><?php echo $row['sex']; ?></strong><hr>
						Tel/Mobile Number: <strong><?php echo $row['s_contact']; ?></strong><hr>
						Age: <strong><?php echo $row['s_age']; ?></strong><hr>
						Date of Birth: <strong><?php echo $row['s_bday']; ?></strong><hr>
						email: <strong><?php echo $row['email']; ?></strong><hr>
						Department ID: <strong><?php echo $row['department_id']; ?></strong><hr>
						Country: <strong><?php echo $row['s_country']; ?></strong><hr>
						Year of studying: <strong><?php echo $row['yr']; ?></strong><hr>
						sslc %: <strong><?php echo $row['sslc']; ?></strong><hr>
						
						Plus Two %: <strong><?php echo $row['plustwo']; ?></strong><hr>
                        AverageDegree%: <strong><?php echo $row['degree']; ?></strong><hr>
						AveragePG%: <strong><?php echo $row['pg']; ?></strong><hr>
						If Married: Name of Spouse:<hr>
                         </div>
						
												<div class="span5">
						
                       
						sem1: <strong><?php echo $row['sem1']; ?></strong><hr>
						sem2: <strong><?php echo $row['sem2']; ?></strong><hr>
						sem3: <strong><?php echo $row['sem3']; ?></strong><hr>
						sem4: <strong><?php echo $row['sem4']; ?></strong><hr>
                        sem5: <strong><?php echo $row['sem5']; ?></strong><hr>
					     sem6: <strong><?php echo $row['sem6']; ?></strong><hr>
					PGsem1: <strong><?php echo $row['pgsem1']; ?></strong><hr>
						PGsem2: <strong><?php echo $row['pgsem2']; ?></strong><hr>
						PGsem3: <strong><?php echo $row['pgsem3']; ?></strong><hr>
						PGsem4: <strong><?php echo $row['pgsem4']; ?></strong><hr>
                       PGsem5: <strong><?php echo $row['pgsem5']; ?></strong><hr>
					    PGsem6: <strong><?php echo $row['pgsem6']; ?></strong><hr>
                        Having Backlog in UG:<strong><?php echo $row['backlogug']; ?></strong><hr>
                         Having Backlog in PG:<strong><?php echo $row['backlogpg']; ?></strong><hr>
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