	<?php include('header_dashboard.php'); ?>
<?php include('session.php');
error_reporting('E_ALL^E_NOTICE');

executiveconfirm_logged_in(); ?>
<?php $get_id = $_GET['id']; 


?>
<?php //$getid = $_GET['id']; ?>
<?php 
	  $post_id = $_GET['post_id'];
	 
	  if($post_id == ''){
	  ?>
		<script>
		window.location = "Executive-Dashboard<?php echo '?id='.$get_id; ?>";
		</script>
	  <?php
	  }
	
 ?>
    <body id="class_div" style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('filter_link1.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$year_query = mysql_query("select * from teacher_class where teacher_class_id='$get_id' ")or die(mysql_error());
								$year_query_row = mysql_fetch_array($year_query);
								$school_year = $year_query_row['school_year'];
							
				$query=mysql_query("select  class_id from teacher_class where teacher_class_id = '$get_id'")or die(mysql_error());
				$row1=mysql_fetch_array($query);
				$id = $row1['class_id'];
				 $query1=mysql_query("select  class_name from class where class_id = '$id'")or die(mysql_error());
				$row2=mysql_fetch_array($query1);
				$name = $row2['class_name'];
			
								?>
								<li><a href="#"><b>My Class :</b></a><?php echo $name; ?><span class="divider">/</span></li>
								<li><a href="#">Batch: <?php echo $year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Students Filter</div>

                                <div id="count_class" class="muted pull-right">

								</div>
                            </div>
                            <div class="block-content collapse in">
                            <h2 id="noch"> <div class="alert alert-info">Student Filter</div></h2>
                                <div class="span4">
                                        <form id="form4" name="form4" method="post" action="Process-Filter-Student">
                      
                            <div class="controls">
                           

				
									<label class="control-label" for="inputEmail">Department:</label>
								<input type="text" name="class" size="30" class="app_txtbox" readonly placeholder=
								  "className" value=<?php echo $name;?>  >
                                  <input type="hidden" name="id" value="<?php 
								   echo $id ?>"/>
                                   <input type="hidden" name="tc_id" value="<?php 
								   echo $get_id ?>"/>
                                   <input type="hidden" name="post_id" value="<?php 
								   echo $post_id ?>"/>
                                
                               
                                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Company:</label>
                                            <?php
											
											$query = mysql_query("select * from placementReg where placementReg_id ='$post_id'");
											$row = mysql_fetch_array($query);?>
<input type="text" name="company" size="30" class="app_txtbox" readonly placeholder=
								  "className" value=<?php echo $row['company'];?>  >                      </div>
                      
                      
                                   <div class="control-group">
                      <label class="control-label" for="inputEmail">SSLC Percentage:</label>
                            <div class="controls">
                                <input type="text" name="sslc" Placeholder="mark %"  class="input" >
                            </div>
                             <div class="control-group">
                      <label class="control-label" for="inputEmail">Plustwo Percentage:</label>
                            <div class="controls">
                                <input type="text" name="plustwo" Placeholder="mark %"  class="input">
                            </div>
                             <div class="control-group">
                      <label class="control-label" for="inputEmail">Degree Percentage:</label>
                            <div class="controls">
                                <input type="text" name="degree" Placeholder="mark %"  class="input" >
                            </div>
                        </div>
                        <div class="control-group">
                      <label class="control-label" for="inputEmail">PG Percentage:</label>
                            <div class="controls">
                                <input type="text" name="pg" Placeholder="mark %"  class="input" >
                            </div>
                        </div>
                          
                         <div class="control-group">
                      <label class="control-label" for="inputEmail">CheckBacklog(No Backlog):</label><br/>
                            <div class="controls">
                               UG &nbsp;<input type="checkbox" name="nobacklog[]"   value ="ug" class="input" > &nbsp; &nbsp; &nbsp;
                               PG &nbsp;<input type="checkbox" name="nobacklog[]"  value ="pg" class="input" >
                            </div>
                        </div>
                      
                        <div class="control-group">
                          
                            <div class="controls">
                            <button name="search" class="btn btn-info"><i class="icon-search"></i> Search</button>
                           <!-- <input type="submit" name="submit" id="seacrh" value="Filter"/>
							<input type="reset" name="reset" id="reset" value="Reset"/>-->
					
                                
                            </div>
                        </div>
                
					  </div>
                        </div>
												
					
									
                        <!-- /block -->
                    </div>
			

                </div>
							<?php/*  include('teacher_right_sidebar.php')  */?>
	
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>