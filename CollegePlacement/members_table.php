	<?php include('dbcon.php'); 
	$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
	error_reporting('E_ALL^E_NOTICE');
								
	?>
	<form action="delete_form.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
         <a onClick="window.open('Placementform-Complete-Excel<?php echo '?id='.$class?>')"  class="btn btn-success"><i class="icon-download icon-large"></i></i> Download All In Excel</a>
<!--	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	<a href="add_member.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Member</a>-->
   Check All <input type="checkbox"  name="selectAll" id="checkAll" />
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
                     <th>Year </th>
					
					
					<th class="empty"></th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query = $conn->query("select * from placementform where department_id ='$class'");
		while ($row = $query->fetch()) {
		$id = $row['student_id'];
		$floc = $row['floc'];
		?>
		<tr>
		<td><?php echo $row['student_id']; ?></td> 
		<td><?php echo $row['s_name']; ?></td> 
        <td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['department_id']; ?></td> 
        <td><?php echo $row['yr']; ?></td> 
														<td><input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>

		
		<td class="empty" width="160">
		<!--<a data-placement="left" title="Click to Edit" id="edit<?php //echo $id; ?>" href="edit_member.php<?php //echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php //echo $id; ?>').tooltip('show');
				$('#edit<?php //echo $id; ?>').tooltip('hide');
			});
			</script>-->
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="View-PlacementForm-Exe<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
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
										 <a data-placement="bottom" title="Download Resume" id="<?php echo $id; ?>download"  class="btn btn-info" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
                                                                 
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