	<div id="edit_placement<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Edit Placement</div>
			<form class="form-horizontal" action="edit_placement_process.php" method="post">
			
			<input type="hidden" name="placementreg_id" value="<?php echo $id; ?>" /> 
            
					
			<div class="control-group">
				<?php
		$placement_query = mysql_query("select * from placementreg where placementReg_id = '$id' ");
		$placement_row = mysql_fetch_array($placement_query);
		
	?>	
				<div class="control-group">
				<label class="control-label" for="inputEmail">Placement Code</label>
				<div class="controls">
                				<input type="text" name="pcode" value="<?php echo $placement_row['pcode'];  ?>">

				
				</div>
			</div>
				<label class="control-label" for="inputEmail">Last Date for Register</label>
				<div class="controls">
			
				
				<input type="text" name="enddate" value="<?php echo $placement_row['enddate'];  ?>">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="get_id" value="<?php echo $get_id; ?>">
				
				</div>
			</div>
				
			
			
					<div class="control-group">
				<label class="control-label" for="inputEmail">Company</label>
				<div class="controls">
                				<input type="text" name="company" value="<?php echo $placement_row['company'];  ?>">

				
				</div>
			</div>
					<div class="control-group">
				<label class="control-label" for="inputEmail">Criteria</label>
				<div class="controls">
                				<textarea name="fdesc" > <?php 
         echo $placement_row['fdesc'];?></textarea>

								</div>
			</div>
			
			
				
					
	
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	