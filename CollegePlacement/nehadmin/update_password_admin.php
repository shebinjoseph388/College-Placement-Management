 <?php
 include('dbcon.php');
 include('session.php');
 
 $new_password  = sha1($_POST['new_password']);
 $new_username  = $_POST['new_username'];

 $query2 = mysql_query("select * from users where username = '$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '$username' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
								$query4 = mysql_query("select * from student where RegisterNo = '$username' ")or die(mysql_error());
								$count4 = mysql_num_rows($query4);
								if($count2>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else if($count3>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else if($count4>0){?>
									<script>
								alert('Username Already Exist');
								</script>
                                <?php
								}
								else{
								mysql_query("update users set password = '$new_password' , username = '$new_username' where user_id = '$session_id'")or die(mysql_error());
								}
 ?>