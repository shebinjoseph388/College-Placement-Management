<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '') || ($_SESSION['member'] == '') || !isset($_SESSION['member'])) {
    header("location: Home");
    exit();
}

$session_id=$_SESSION['id'];
//$regno=$_SESSION['userid'];


//create a new function to check if the session variable member_id is on set
	
	
	function memberlogged_in() {
		return isset($_SESSION['member']);
        
	}
		function memberconfirm_logged_in() {
		if (!memberlogged_in()) {?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}
	//this function if session member is not set then it will be redirected to login.php
	
	


	
	
		




?>