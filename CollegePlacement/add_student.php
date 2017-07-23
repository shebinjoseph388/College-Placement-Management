<?php include('header_dashboard1.php');
error_reporting('E_ALL^E_NOTICE');
 ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id'];
executiveconfirm_logged_in(); ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('class_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					     <!-- breadcrumb -->
				<div class="pull-right">
							<a href="MyStudents<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
						</div>
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">My Students</a><span class="divider">/</span></li>
							<li><a href="#"><b>Add Student</b></a></li>
						</ul>
						
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" >
                           
                                <div id="" class="muted pull-left" ></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
			
							<?php include('dbcon.php'); ?>
	<form action="" method="post">
    <button name="submit" type="submit" class="btn btn-info"><i class="icon-save"></i>&nbsp;Add Student</button>
												<br>
												<br>
                           
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example1">
	
	<div class="pull-right">
			
	</div>
	<?php //include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>Register Number</th>
			
					<th>Course Yr & Section</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
		$a = 0 ;
	$query = mysql_query("select * from student LEFT JOIN class on class.class_id = student.class_id
												
										") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		 $id = $row['student_id'];
										$a++;
		?>
	
		<tr>
        <input type="hidden" name="test" value="<?php echo $a; ?>">
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['RegisterNo']; ?></td> 
	
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="80">
										<select name="add_student<?php echo $a; ?>" class="span12">
										<option></option>
										<option>Add</option>
										</select>
										
										<input type="hidden" name="student_id<?php echo $a; ?>" value="<?php echo $id; ?>">
										<input type="hidden" name="class_id<?php echo $a; ?>" value="<?php echo $get_id; ?>">
										<input type="hidden" name="teacher_id<?php echo $a; ?>" value="<?php echo $session_id; ?>">
										
										</td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>
                        
                        
                        
                        
                        
                        
                        
                        
  										
	<?php

if (isset($_POST['submit'])){

	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	

		
		
	$test1 = "student_id".$b;
	$test2 = "class_id".$b;
	$test3 = "teacher_id".$b;
	$test4 = "add_student".$b;
	
	$id = $_POST[$test1];
	$class_id = $_POST[$test2];
	$teacher_id = $_POST[$test3];
	$Add = $_POST[$test4];
	
 	$query = mysql_query("select * from teacher_class_student where student_id = '$id' and teacher_class_id = '$class_id' ")or die(mysql_error());
	$count = mysql_num_rows($query); 
	
 	if ($count > 0){ ?>
	<script>
	 alert('Student Already in the class'); 
	</script>
	<script>
	window.location = "Add-Students-to-Class<?php echo '?id='.$get_id; ?>"; 
	</script>
	
	<?php
	}else  
	if($Add == 'Add'){
	
	
	mysql_query("insert into teacher_class_student (student_id,teacher_class_id,teacher_id) values('$id','$class_id','$teacher_id') ")or die(mysql_error());
	
	
	}else{
	
	
	
	}
	

	
?>
<script>
 window.location = "MyStudents<?php echo '?id='.$get_id; ?>"; 
</script>
	
	<?php
	}
	
	
	
	}
	 
	
	?>
	
					
                      
								
                         
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