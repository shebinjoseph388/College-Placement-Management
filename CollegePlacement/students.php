<?php include('header.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('dbConnector.php'); 
$conn = new PDO('mysql:host=localhost;dbname=nochp', 'root', '');
?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
						 	$query = $conn->query("select * from student") or die(mysql_error());
							$count = $query->rowcount();
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i>  Member List</div>
                                <div class="muted pull-right">
									Number of Members: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv" style = "border:1px solid #0F0;">
								<h2 id="noch"> Member List</h2>
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