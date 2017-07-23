	<?php include('dbcon.php'); 
	error_reporting('E_ALL^E_NOTICE'); 

	$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
	?>
	<form action="delete_placementform.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		<div class="pull-right">
<!--	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	<a href="add_member.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Member</a>
    Check All <input type="checkbox"  name="selectAll" id="checkAll" />-->
												<script>
												$("#checkAll").click(function () {
													$('input:checkbox').not(this).prop('checked', this.checked);
												});
												</script>	
	</div>
	<a data-toggle="modal" href="#form_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th>CollegeID</th>
					<th>Name</th>
					<th>Email</th>
                    <th>Department </th>
                     <th>Batch </th>
					
					<th class="empty"></th>
					<th class="empty">Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
	
		$query = $conn->query("select * from placementform where student_id = '$regno'");
		while ($row = $query->fetch()) {
		$id = $row['student_id'];
		$i = encrypt_text($id);
		$floc  = $row['floc'];
		?>
		<tr>
		<td><?php echo $row['student_id']; ?></td> 
		<td><?php echo $row['s_name']; ?></td> 
        <td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['department_id']; ?></td> 
        <td><?php echo $row['yr']; ?></td> 
		
		
		<td class="empty" width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
		<td class="empty" width="200">
		<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="PlacementForm-Edit" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="Complete-View-PlacementForm" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
            <?php 
										if ($floc == ""){
										}else{
										?>
										 <a data-placement="bottom" title="Download" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
                                                                 
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
										<?php } ?>
		</td>
        	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>