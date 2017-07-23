<?php  include('header.php'); ?>
<?php  include('session.php');
adminconfirm_logged_in(); ?>

<body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
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
mysql_query("update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysql_error());

session_destroy();

@session_unregister('is');
		@session_unset();
  
  
 echo '<meta http-equiv="refresh" content="2;url=../Home">';
 echo'<span class="itext"><font size="5" color="#337033">Logging out please wait...............</font></span>';
 echo '<br />';
 echo '<img src="images/ajax-loader4.gif">';


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






