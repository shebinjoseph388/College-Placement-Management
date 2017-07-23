<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
        <div class="alert alert-info"><strong>Placed Candidates</strong></div>
                            <div class="span12">	
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                                        <th>Name</th>                                 
                                        <th>RegisterNo</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
										<?php
											$q = mysql_query("select * from  student_placementreg join student on student_placementreg.student_id= student.student_id where placementreg_id  = '$id' and grade3 != '' ")or die(mysql_error());
					while($r=mysql_fetch_array($q)){
									
									?>
									<tr>
								         <td><?php echo $r['RegisterNo']; ?></td>
                                    <td><?php echo $r['firstname']." ".$r['lastname']; ?></td>
										 </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
</div>
										
</div>
		<div class="modal-footer">
			
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	