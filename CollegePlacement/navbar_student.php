<div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">Welcome to: CENTRE FOR PLACEMENTS AND CORPORATE RELATIONS(CPCR)</a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<?php 
							
							//$query= mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
								$query= mysql_query("select * from student where RegisterNo = '$regno'")or die(mysql_error());
									$row = mysql_fetch_array($query);
																	
							?>
							<li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="Profile-Change"><i class="icon-circle"></i> Change Profile</a></li>
										<li><a tabindex="-1" href="#myModal_student" data-toggle="modal"><i class="icon-picture"></i> Change Photo</a></li>
										<li class="divider"></li>
										<li>
											<a id="logout" data-toggle="modal" href="#myModal" ><i class="icon-signout"></i>&nbsp;Logout</a>
										</li>
									</ul>
							</li>
						</ul>
					</div>
            </div>
        </div>
</div>
<?php include('avatar_modal_student.php'); ?>	

		
        
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Logout</h3>
</div>
<div class="modal-body">
<p>Are you sure you want to logout?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
<a href="Placement-LogOut" class="btn btn-primary">Yes</a>
</div>
</div>