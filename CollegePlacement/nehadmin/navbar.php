  <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">Placement ADMIN Panel</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
						<?php $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="change_profile.php"><i class="icon-circle"></i>Change Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a id="logout" data-toggle="modal" href="#logoutModal"><i class="icon-signout"></i>&nbsp;Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="modal hide fade" id="logoutModal">
   <div class="modal-body">
	<button type="button" class="close" data-dismiss="modal">X</button>
	   
	  </div>
    <div class="modal-body">
  <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
        
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">No</a>
        <a href="Admin-LogOut" class="btn btn-primary">Yes</a>
    </div>
		</div>
		