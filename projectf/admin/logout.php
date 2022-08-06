<?php
	session_start();
	$_SESSION['create_account_logged_in']=$id;
	header("location:index.php");
?>