<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_room'])){
		$room_type = $_POST['room_type'];
		$price = $_POST['price'];
		// $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		// $photo_name = addslashes($_FILES['photo']['name']);
		// $photo_size = getimagesize($_FILES['photo']['tmp_name']);
		// move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `rooms` SET `rtype` = '$room_type', `price` = '$price' WHERE `roomid` = '$_REQUEST[roomid]'") or die(mysqli_error());
		header("location:room.php");
	}
?>