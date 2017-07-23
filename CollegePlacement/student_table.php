	<?php
	error_reporting('E_ALL^E_NOTICE');
 include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a> Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>	
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="Student-List">All</a>
				</li>
				<li class="">
					<a href="UnRegistered-Students">Unregistered</a>
				</li>
				<li class="">
				<a href="Registered-Students">Registered</a>
				</li>
				</ul>
                
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>RegisterNo</th>
			
					<th>Course Yr & Section</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php

		$quer = mysql_query("select * from teacher join class ON teacher.department_id = class.class_id where teacher_id = '$session_id'")or die(mysql_error());
								$quer_row = mysql_fetch_array($quer);
								$class =$quer_row['class_id'];
	$query = mysql_query("select * from student LEFT JOIN class ON student.class_id = class.class_id where student.class_id='$class' ORDER BY student.student_id DESC") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['RegisterNo']; ?></td> 
	
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="30"><a href="Edit-Student-Details<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>