<?php
error_reporting('E_ALL^E_NOTICE');

 include('header_dashboard.php');
 include('session.php'); 


?>

<body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('change_password_sidebar_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">







  <?php
 // session_start();

session_destroy();

@session_unregister('is');
		@session_unset();
  
  
 echo '<meta http-equiv="refresh" content="2;url=Home">';
 echo'<span class="itext"><font size="5" color="#337033">Logging out please wait...............</font></span>';
 echo '<br />';
 echo '<img src="ajax-loader4.gif">';


//header('location:index.php');
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