<?php
	if(ISSET($_POST['add_room'])){
		$hid=$_POST['hid'];
		$details=$_POST['rdetails'];
		$room_type = $_POST['room_type'];
		$price = $_POST['price'];
		$conn->query("INSERT INTO `rooms` (rtype,rdetails, price,hid) VALUES('$room_type','$details', '$price','$hid')") or die(mysqli_error());
		header("location:room.php");
	}
?>