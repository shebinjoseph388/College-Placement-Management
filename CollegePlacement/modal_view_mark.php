<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
        <div class="alert alert-info"><strong>View Marks</strong></div>
                            <div class="span12">	
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                                        <th>Name</th>                                 
                                        <th>RegisterNo</th>  
                                        <th>Mark</th>                                 
                               
                                    </tr>
                                </thead>
                                <tbody>
										<?php

											$q = mysql_query("select * from  student_class_quiz join student on student_class_quiz.student_id= student.student_id join class_quiz on student_class_quiz.class_quiz_id = class_quiz.class_quiz_id  where class_quiz.class_quiz_id  = '$id' ")or die(mysql_error());
					while($r=mysql_fetch_array($q)){
									
									?>
									<tr>
								         <td><?php echo $r['RegisterNo']; ?></td>
                                    <td><?php echo $r['firstname']." ".$r['lastname']; ?></td>
                                                                        <td><?php echo $r['grade']; ?></td>

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
	