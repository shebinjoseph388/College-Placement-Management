<?php include('header.php'); ?>
<?php include('session.php');
adminconfirm_logged_in(); ?>
    <body style = "background-image:url(images/index.jpg);">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('user_log_sidebar.php'); ?>

                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Users Log List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form method="post" action="delete_userlog.php" >
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
                                           <th>   Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>	</th>
												<th>Date Login</th>
												<th>Date logout</th>
												<th>Username</th>
												<!-- <th>Delete</th>-->
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from user_log order by user_log_id ")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['user_log_id'];
													?>
									
												<tr>
											<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
												<td><?php echo $row['login_date']; ?></td>
												<td><?php echo $row['logout_date']; ?></td>
												<td><?php echo $row['username']; ?></td>
                                                <!-- <td width="40"><a  class="btn btn-danger" href="delete_userlog.php<?php //echo '?id='.$id; ?>"><i class="icon-remove icon-large"></i></a></td>-->
												</tr>
												<?php } ?>
										</tbody>
									</table>
                                    <input type="submit" class="btn btn-danger" value="Delete" name="delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>