<?php
	require_once 'connect.php';
    $tem=$_GET['rsvid'];
    // echo $_REQUEST[rsvid];
	mysqli_query($conn,"DELETE FROM reservation WHERE `rsvid` = '$tem'") or die(mysqli_error());
	header("location:reserve.php");
?>
