<?php
	require_once 'connect.php';
	$tem=$_GET['room_id'];
	mysqli_query($conn,"DELETE FROM `rooms` WHERE `roomid` = '$tem'") or die(mysqli_error());
	header("location:room.php");
?>
