	<?php include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="Admin-Student-Lists">All</a>
				</li>
				<li class="">
					<a href="Admin-UnRegister-Students">Unregistered</a>
				</li>
				<li class="">
				<a href="Admin-Register-Students">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>ID Number</th>
			
					<th>Course Yr & Section</th>
                    <th></th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysql_query("select * from student LEFT JOIN class ON student.class_id = class.class_id ORDER BY student.student_id DESC") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		$id = $row['student_id'];
		$count=$row['count'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['RegisterNo']; ?></td> 
	
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="30"><a href="Admin-Edit-Student-Lists<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
    <?php if ($count <3 ){ ?>
									<td width="120"><a href="deactivate_student.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivate</a></td>
									<?php }else{ ?>
									<td width="120"><a href="activate_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activate</a></td>				
									<?php } ?>

    
    
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>