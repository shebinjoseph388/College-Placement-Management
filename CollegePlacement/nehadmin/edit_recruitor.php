<?php include('header.php'); ?>
<?php include('session.php');
adminconfirm_logged_in(); ?>
<?php $get_id = $_GET['id']; ?>
    <body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('recruitor_sidebar.php'); ?>
				<div class="span3" id="adduser">

				<?php include('edit_recruitor_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Recruitors List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('recruitor_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
            </script>		
<SCRIPT language="javascript" type="text/javascript">
<!--

function addCombo() {
	
	var textb = document.getElementById("txtCombo");
	var recruitor_genre = document.getElementById("recruitor_genre");
	recruitor_genre.value=recruitor_genre.value +textb.value + ",";
		textb.value = "";
}
//-->
</SCRIPT>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>