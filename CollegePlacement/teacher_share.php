<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php');
executiveconfirm_logged_in(); ?>
<?php
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
?>

<body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('share_sidebar_teacher.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
                        <!-- block -->
                       <div  id="block_bg" class="block">
						<?php
							$query1 = mysql_query("select * from teacher join class ON teacher.department_id = class.class_id where teacher_id = '$session_id'")or die(mysql_error());
								$query_row = mysql_fetch_array($query1);
								$class =$query_row['class_name'];
						 	$query = $conn->query("select * from placementform where department_id='$class'") or die(mysql_error());
							$count = $query->rowcount();
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i>  Placement Form Lists</div>
                                <div class="muted pull-right">
									Number of Students: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv" >
								<h2 id="noch">Placement Form Lists</h2>
									<?php include('members_table.php'); ?>
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