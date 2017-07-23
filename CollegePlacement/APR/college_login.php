								<?php
								include('dbcon.php');
								if (isset($_POST['login'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM members WHERE username='$username' AND password='$password' and status = 'Active' ";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:dasboard_college.php');
								$_SESSION['id']=$row['member_id'];
									}
									else{ 
								header('location:access_denied.php');
								}}
								?>