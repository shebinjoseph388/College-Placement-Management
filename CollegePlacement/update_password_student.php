 <?php
 error_reporting('E_ALL^E_NOTICE');

 include('dbcon.php');
 include('session.php');
 
 $new_password  = sha1($_POST['new_password']);
 $new_username  = $_POST['new_username'];

 $query2 = mysql_query("select * from student where username = '$username' ")or die(mysql_error());
								$count2 = mysql_num_rows($query2);
								$query3 = mysql_query("select * from teacher where username = '$username' ")or die(mysql_error());
								$count3 = mysql_num_rows($query3);
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
								else{
								mysql_query("update student set password = '$new_password' , username = '$new_username' where student_id = '$session_id'")or die(mysql_error());
								}
 ?>