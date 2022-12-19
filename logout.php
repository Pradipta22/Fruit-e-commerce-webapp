<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
	alert('You are successfully logout');
	window.location.href = 'login';
</script>