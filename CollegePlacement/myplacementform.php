<?php include('session.php'); 
error_reporting('E_ALL^E_NOTICE');

studconfirm_logged_in();
uniquestudconfirm_logged_in(); ?>
	<?php include('header_dashboard.php'); ?>
<?php
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
?>

<body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('myplacementform_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
                        <!-- block -->
                       <div  id="block_bg" class="block">
						<?php
						 	$query = $conn->query("select * from student where student_id = '$session_id' ") or die(mysql_error());
							$count = $query->rowcount();
							$sql1 = "Select * from placementform  where student_id ='$regno' ";
						$result1 = mysql_query($sql1) or die (mysql_error());
						$row1 = mysql_fetch_array($result1) ;
						$reg = $row1['student_id'];
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> My Placemet Form Data</div>
                                <div class="muted pull-right">
									
								</div>
                            </div>
                            
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv" >
                                <?php 
                                 if($reg == ""){ ?>
									<div class="alert alert-warning">Upload Your PlacementForm..<a href="Submit-PlacementForm">Click Here to Upload</a></div>
								<?php	}else{
								?>
								<h2 id="noch"> <div class="alert alert-info">Placement Form</div></h2>
									<?php include('placementform_view.php'); }?>
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