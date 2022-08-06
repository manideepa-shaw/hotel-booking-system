<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `admin` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
	 header("location: account.php");
