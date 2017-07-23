                              <?php //include('dbcon.php');
							  //include('dbConnector.php');
							

							   ?>
	
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">

		
        
         <?php
		 
		
 
	

	if($backlogug =='yes' && $backlogpg =='no'){
	

	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='no' && $backlogpg =='yes'){
	
	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='yes' && $backlogpg =='yes'){

	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else{
						
						 	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')") or die(mysql_error());
							
}

	
		 
						$count = $query->rowcount();
						
		
		?>				
        
        <thead>
		<tr>
					<th>CollegeID</th>
					<th>Name</th>
					 <th>Round1</th>
					<th>Round2</th>
					<th>Round3</th>
					<th></th>
					
		</tr>
		</thead>
        <?php
		//$result = mysql_query($query);
			while($row = $query->fetch()){
			//while($row = mysql_fetch_array($query)){
							
        ?>
		<?php 
			$id  = $row['student_placementReg_id'];

		$regno =$row['RegNo'];
		$floc = $row['floc'];
        //$_SESSION['id'] = $id;	
?>
    <tbody>    
		<tr>
		<td><?php echo $row['RegNo']; ?></td> 
		<td><?php echo $row['s_name']; ?></td> 
        										 <form method="post" action="save_grade.php">
										 <input type="hidden" class="span4" name="id" value="<?php echo $id; ?>">
                                          <input type="hidden" class="span4" name="regnum" value="<?php echo $regno; ?>">
                                         <!-- <input type="hidden" class="span4" name="studid" value="<?php //echo $studid; ?>">-->
										 <input type="hidden" class="span4" name="post_id" value="<?php echo $post_id; ?>">
										 <input type="hidden" class="span4" name="get_id" value="<?php echo $get_id; ?>">
										<td width="150"> <input type="text" class="span4" name="grade1" value="<?php echo $row['grade']; ?>"></td>
                                       <td width="150">   <input type="text" class="span4" name="grade2" value="<?php echo $row['grade2']; ?>"></td>
                                         <td width="150">  <input type="text" class="span4" name="grade3" value="<?php echo $row['grade3']; ?>">
										 <button name="save" class="btn btn-success" id="btn_s"><i class="icon-save"></i> Save</button>
										 </form>
										 </td>                                                                        
		
        
		  <td class="empty" width="150">
		<!--<a data-placement="left" title="Click to Edit" id="edit<?php //echo $id; ?>" href="edit_member.php<?php //echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php //echo $id; ?>').tooltip('show');
				$('#edit<?php //echo $id; ?>').tooltip('hide');
			});
			</script>-->
             <a title="Click to View all Details"  onClick="window.open('View-Filter-Student-PlacementForm<?php echo '?regno='.$regno?>&<?php echo 'post_id='.$post_id ?>&<?php echo 'id='.$get_id ?>')"  class="btn btn-success"><i class="icon-search icon-large"></i>View</a>
		
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
	<?php 
	} ?>    
	
		</tbody>
	</table>
	