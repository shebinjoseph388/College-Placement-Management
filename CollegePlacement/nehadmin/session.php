<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "../index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];
function adminlogged_in() {
		return isset($_SESSION['admin']);
        
	}
	
	//this function if session member is not set then it will be redirected to login.php
	function adminconfirm_logged_in() {
		if (!adminlogged_in()) {?>
			<script type="text/javascript">
				window.location = "../index.php";
			</script>

		<?php
		}
	}
$user_query = mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$user_username = $user_row['username'];
?>