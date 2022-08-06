<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id=$_GET['admin_id'];
		mysqli_query($conn,"UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `id` = '$id'") or die(mysqli_error());
		header("location:account.php");
	}	