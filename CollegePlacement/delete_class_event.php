<?php
include('nehadmin/dbcon.php');
if (isset($_POST['delete_event'])){
$get_id = $_POST['get_id'];
$id = $_POST['id'];
mysql_query("delete from event where event_id = '$id'")or die(mysql_error());
?>
<script>
window.location = 'Placement-Calendar<?php echo '?id='.$get_id; ?>';
</script>
<?php
}
?>