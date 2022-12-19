<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM fruits WHERE id='$id' ");
if ($query == true) {
?>
	<script type="text/javascript">
		alert('fruit Successfully Deleted');
		window.location.href = 'dashboard';
	</script>
<?php
} else {
?>
	<script type="text/javascript">
		alert('fruit Deletion Failed');
		window.location.href = 'dashboard';
	</script>
<?php
}
?>