<?php
	include("admin/dbcon.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vp1_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vp2_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ss_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[tr_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[aud_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[itp_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pro_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ledr_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[eng_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[beed_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 