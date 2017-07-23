	<?php include('dbcon.php'); ?>
	<form action="recruitor_delete.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#recruitor_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li >
					<a href="Admin-Recruitors">Joined</a>
				</li>
				
				<li class="active">
				<a href="Admin-Register-Recruitor">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
					<th>RegisteredDate</th>
					<th>Company</th>
					<th>Contact</th>
			
					
                    <th></th>
					
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysql_query("select * from recruitor where status='Registered' ORDER BY recruitor_id ") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		$id = $row['recruitor_id'];
		
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td width="100"><?php echo $row['reg_date']; ?></td> 
		<td><?php echo $row['recruitor_name'] ; ?></td> 
		<td><?php echo $row['Company_Contact']; ?></td> 
	
		
	
		<td width="30"><a href="Admin-Edit-Recruitor<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
  
<td width="120"><a href="visited_company.php<?php echo '?id='.$id; ?>" class="btn btn-danger"> Join</a></td>
    
    
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>