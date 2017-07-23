<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '') || ($_SESSION['userid'] == '') || !isset($_SESSION['userid'])) {
    header("location: Home");
    exit();
}

$session_id=$_SESSION['id'];
$regno=$_SESSION['userid'];


//create a new function to check if the session variable member_id is on set
	function logged_in() {
		return isset($_SESSION['id']);
        
	}
	//this function if session member is not set then it will be redirected to login.php
	function confirm_logged_in() {
		if (!logged_in()) {?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}
	function adminlogged_in() {
		return isset($_SESSION['id']);
        
	}
	function executivelogged_in() {
		return isset($_SESSION['type']);
        
	}
		function executiveconfirm_logged_in() {
		if (!executivelogged_in()) {?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}
	//this function if session member is not set then it will be redirected to login.php
	function adminconfirm_logged_in() {
		if (!logged_in()) {?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}
	function studlogged_in() {
		return isset($_SESSION['id']);
        
	}
	function studconfirm_logged_in() {
		if (!studlogged_in()) {?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}
function uniquestudlogged_in() {
		return isset($_SESSION['student']);
        
	}
	function uniquestudconfirm_logged_in() {
		
		if (!uniquestudlogged_in()) {
			
			?>
			<script type="text/javascript">
				window.location = "Home";
			</script>

		<?php
		}
	}

function encrypt_text($value)
{
   if(!$value) return false;
 
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $value, MCRYPT_MODE_ECB, 'SECURE_STRING_2');
   return trim(base64_encode($crypttext));
}
 
function decrypt_text($value)
{
   if(!$value) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $crypttext, MCRYPT_MODE_ECB, 'SECURE_STRING_2');
   return trim($decrypttext);
}	
	
		




?>