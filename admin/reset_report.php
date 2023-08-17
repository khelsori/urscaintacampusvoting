<?php
	require_once 'dbcon.php';
	$conn->query("delete from votes") or die($conn->error);
	$conn->query("update voters set status = 'Unvoted'") or die($conn->error);
	header('location:canvassing.php');
?>