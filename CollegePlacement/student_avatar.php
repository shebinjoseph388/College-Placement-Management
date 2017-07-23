 <?php
 error_reporting('E_ALL^E_NOTICE');

 include('nehadmin/dbcon.php');
 include('session.php');
 
 								error_reporting('E_ALL^E_NOTICE');

                            if (isset($_POST['change'])) {
                             


                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
 
                                move_uploaded_file($_FILES["image"]["tmp_name"], "nehadmin/uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								mysql_query("update  student set location = '$location' where RegisterNo  = '$regno' ")or die(mysql_error());

								?>
 
								<script>

							window.location = "Student-Dashboard";  
								</script>

                       <?php     }  ?>