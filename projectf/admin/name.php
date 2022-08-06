<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['name'];
?>