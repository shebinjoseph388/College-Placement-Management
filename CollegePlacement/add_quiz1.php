<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_sidebar_teacher.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
									<ul class="breadcrumb">
										<?php
										
										?>
											<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
										
										<li><a href="#"><b>Exam</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="pull-right">
									<a href="Aptitude-Exam" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
									</div>
								
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Exam Title</label>
											<div class="controls">
											<input type="text" name="quiz_title" id="inputEmail" placeholder="Exam Title">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Exam Description</label>
											<div class="controls">
											<input type="text" class="span8" name="description" id="inputPassword" placeholder="Exam Description" required>
											</div>
										</div>										
										<div class="control-group">
										<div class="controls">										
										<button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>									
										<?php
										if (isset($_POST['save'])){
										$quiz_title = $_POST['quiz_title'];
										$description = $_POST['description'];
										mysql_query("insert into quiz (quiz_title,quiz_description,date_added,teacher_id) values('$quiz_title','$description',NOW(),'$session_id')")or die(mysql_error());
										?>
										<script>
										window.location = 'Aptitude-Exam';
										</script>
										<?php
										}
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