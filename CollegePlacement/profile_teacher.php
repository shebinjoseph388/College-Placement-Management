<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); 
executiveconfirm_logged_in();?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						
						?>
							<li><a href="#">Executive</a><span class="divider">/</span></li>
							<li><a href="#"><b>Profile</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<!--<div class="alert alert-info"><i class="icon-info-sign"></i> About Me</div>-->
								<?php $query= mysql_query("select * from teacher join class on teacher.department_id = class.class_id where teacher_id = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
						?><div class="alert alert-info">Full Name : <?php echo $row['firstname'].' '.$row['lastname']; ?></div>
  									
						<div class="alert alert-info"><!--<i class="icon-info-sign"></i>--> Username :  <?php echo $row['username']; ?></div>
                       <div class="alert alert-info">Department : <?php echo $row['class_name']; ?></div>
                       <div class="alert alert-info">Status : <?php echo $row['teacher_stat']; ?></div>
  							
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				<?php include('teacher_right_sidebar.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>