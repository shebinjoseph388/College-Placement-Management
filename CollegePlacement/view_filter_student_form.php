<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); 
	$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
	?>
<?php $get_id = $_GET['id']; 
  $post_id = $_GET['post_id']; 
 $regno = $_GET['regno']; ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
                                
	 <a href="#" onClick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
     
    <a onClick="window.open('Placementform_Excel<?php echo '?regno='.$regno?>')"  class="btn btn-success"><i class="icon-list"></i> Download Excel</a>
     <a onClick="window.open('Print-Placementform-PDF<?php echo '?regno='.$regno?>')"  class="btn btn-success"><i class="icon-list"></i> Print To PDF</a>
										<a href="Placement-Registered-Students<?php echo '?id='.$get_id?>&<?php echo 'post_id='.$post_id ?>"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = $conn->query("select * from placementform where student_id = '$regno'")or die(mysql_error());
						$row = $query->fetch();
						$department = $row['department_id'];
						?>
                        <?php
                    $program = "Select * from course where course_name ='$department' ";
						$resultprogram = mysql_query($program) or die (mysql_error());
						$rowprogram = mysql_fetch_array($resultprogram) ;
						$type = $rowprogram['type'];
						if($type == 'PG'){
						?>
                        						<div class="alert alert-success">Name <strong><?php echo $row['s_name']; ?></strong></div>

                        <div class="span6">
						StudentID <div class="alert alert-success"><strong><?php echo $row['student_id']; ?></strong></div><hr>
						Gender<div class="alert alert-success"><strong><?php echo $row['sex']; ?></strong></div><hr>
                        Permanent Address<div class="alert alert-success"> <strong><?php echo $row['s_address']; ?></strong></div><hr>

						Tel/Mobile Number<div class="alert alert-success"> <strong><?php echo $row['s_contact']; ?></strong></div><hr>
						email<div class="alert alert-success"> <strong><?php echo $row['email']; ?></strong></div><hr>
						Department<div class="alert alert-success"><strong><?php echo $row['department_id']; ?></strong></div><hr>
						<!--Country: <strong><?php //echo $row['s_country']; ?></strong><hr>-->
						Year of studying<div class="alert alert-success"><strong><?php echo $row['yr']; ?></strong></div><hr>
						<!--Semester: <strong><?php //echo $row['semester']; ?></strong><hr>-->
						10th(%)<div class="alert alert-success"><strong><?php echo $row['sslc']; ?></strong></div><hr>
						
						PUC(HSE) %<div class="alert alert-success"> <strong><?php echo $row['plustwo']; ?></strong></div><hr>
                        DegreeAggregate%<div class="alert alert-success"> <strong><?php echo $row['degree']; ?></strong></div><hr>
						PGAggregate%<div class="alert alert-success"><strong><?php echo $row['pg']; ?></strong></div><hr>
                         Having Backlog in UG<div class="alert alert-success"><strong><?php echo $row['backlogug']; ?></strong></div><hr>
                         Having Backlog in PG<div class="alert alert-success"><strong><?php echo $row['backlogpg']; ?></strong></div><hr>
                         </div>
												<div class="span5">
						DegreeSemester1<div class="alert alert-success"><strong><?php echo $row['sem1']; ?></strong></div><hr>
						DegreeSemester2<div class="alert alert-success"> <strong><?php echo $row['sem2']; ?></strong></div><hr>
						DegreeSemester3<div class="alert alert-success"><strong><?php echo $row['sem3']; ?></strong></div><hr>
						DegreeSemester4<div class="alert alert-success"><strong><?php echo $row['sem4']; ?></strong></div><hr>
                        DegreeSemester5<div class="alert alert-success"><strong><?php echo $row['sem5']; ?></strong></div><hr>
					     DegreeSemester6<div class="alert alert-success"> <strong><?php echo $row['sem6']; ?></strong></div><hr>
					PGsemester1<div class="alert alert-success"> <strong><?php echo $row['pgsem1']; ?></strong></div><hr>
						PGsemester2<div class="alert alert-success"><strong><?php echo $row['pgsem2']; ?></strong></div><hr>
						PGsemester3<div class="alert alert-success"><strong><?php echo $row['pgsem3']; ?></strong></div><hr>
						PGsemester4<div class="alert alert-success"><strong><?php echo $row['pgsem4']; ?></strong></div><hr>
                       PGsemester5<div class="alert alert-success"> <strong><?php echo $row['pgsem5']; ?></strong></div><hr>
					    PGsemester6<div class="alert alert-success"><strong><?php echo $row['pgsem6']; ?></strong></div><hr>
                       
						</div>
                        
                        <?php }
						else { ?>
                        
                        
                        
                        
                        
                        
						<div class="alert alert-success">Name <strong><?php echo $row['s_name']; ?></strong></div>
						<div class="span6">
						StudentID <div class="alert alert-success"><strong><?php echo $row['student_id']; ?></strong></div><hr>
						Gender<div class="alert alert-success"><strong><?php echo $row['sex']; ?></strong></div><hr>
                        Permanent Address<div class="alert alert-success"> <strong><?php echo $row['s_address']; ?></strong></div><hr>

						Tel/Mobile Number<div class="alert alert-success"> <strong><?php echo $row['s_contact']; ?></strong></div><hr>
						email<div class="alert alert-success"> <strong><?php echo $row['email']; ?></strong></div><hr>
						Department<div class="alert alert-success"><strong><?php echo $row['department_id']; ?></strong></div><hr>
						<!--Country: <strong><?php //echo $row['s_country']; ?></strong><hr>-->
						Year of studying<div class="alert alert-success"><strong><?php echo $row['yr']; ?></strong></div><hr>
						<!--Semester: <strong><?php //echo $row['semester']; ?></strong><hr>-->
						10th(%)<div class="alert alert-success"><strong><?php echo $row['sslc']; ?></strong></div><hr>
						
						PUC(HSE) %<div class="alert alert-success"> <strong><?php echo $row['plustwo']; ?></strong></div><hr>
                       
                         
                         </div>
												<div class="span5">
						DegreeSemester1<div class="alert alert-success"><strong><?php echo $row['sem1']; ?></strong></div><hr>
						DegreeSemester2<div class="alert alert-success"> <strong><?php echo $row['sem2']; ?></strong></div><hr>
						DegreeSemester3<div class="alert alert-success"><strong><?php echo $row['sem3']; ?></strong></div><hr>
						DegreeSemester4<div class="alert alert-success"><strong><?php echo $row['sem4']; ?></strong></div><hr>
                        DegreeSemester5<div class="alert alert-success"><strong><?php echo $row['sem5']; ?></strong></div><hr>
					     DegreeSemester6<div class="alert alert-success"> <strong><?php echo $row['sem6']; ?></strong></div><hr>
                          DegreeAggregate%<div class="alert alert-success"> <strong><?php echo $row['degree']; ?></strong></div><hr>
						
                        Having Backlog in UG<div class="alert alert-success"><strong><?php echo $row['backlogug']; ?></strong></div><hr>
                          
						</div>
                        <?php } ?>
<div class="span12">
	<hr>
						
	
		</tbody>
	</table>

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