<?php
if (empty($_SESSION['user'])) {
	echo "<script>alert('Please Log In');window.location.href='../index.php'</script>";
}
?>