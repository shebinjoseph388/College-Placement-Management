<form action="delete_member.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#member_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Date</th>
                                    <th>College</th>
									 <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $teacher_query = mysql_query("select * from members") or die(mysql_error());
                                    while ($row = mysql_fetch_array($teacher_query)) {
                                    $id = $row['member_id'];
                                    $teacher_stat = $row['status'];
									 
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                    <td width="40"><img class="img-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $row['date_register'] ?></td> 
                                    <td><?php echo $row['collegename']; ?></td> 
                                
									<td width="50"><a href="Admin-Edit-Member-College<?php echo '?id='.$id; ?>" title="Edit" id="<?php echo $id; ?>edit" class="btn btn-success"><i class="icon-pencil"></i></a></td>
									<?php if ($teacher_stat == 'Activated' ){ ?>
									<td width="90"><a href="de_activate_member.php<?php echo '?id='.$id; ?>" title="Deactivate" id="<?php echo $id; ?>deacivate" class="btn btn-danger">Deactivate</a></td>
									<?php }else{ ?>
									<td width="100"><a href="activate_member.php<?php echo '?id='.$id; ?>" title="Acivate" id="<?php echo $id; ?>Acivate" class="btn btn-success">Activate</a></td>				
									<?php } ?>
                                    <td ><a href="#<?php echo '?id='.$id; ?>" class="btn btn-success" title="View" id="<?php echo $id; ?>view"><i class="icon-search icon-large"></i> </a></td>
                                    <script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>deacivate').tooltip('show');
															$('#<?php echo $id; ?>deacivate').tooltip('hide');
														});
														</script>
                                                        <script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>edit').tooltip('show');
															$('#<?php echo $id; ?>edit').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>activate').tooltip('show');
															$('#<?php echo $id; ?>activate').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>view').tooltip('show');
															$('#<?php echo $id; ?>view').tooltip('hide');
														});
														</script>
                                </tr>
                            <?php } ?>
                               
										</tbody>
									</table>
									</form>