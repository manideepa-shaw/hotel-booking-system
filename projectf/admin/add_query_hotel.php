<?php
	if(ISSET($_POST['add_hotel'])){
		$hname=$_POST['hname'];
		$details=$_POST['hdetails'];
		$city = $_POST['city'];
		$stars = $_POST['stars'];
        $address = $_POST['address'];
        $child=$_POST['child'];
        $pets=$_POST['pets'];
		$conn->query("INSERT INTO `hotels` (hname,details, city,haddress,stars,children,pets) VALUES('$hname','$details', '$city','$address','$stars','$child','$pets')") or die(mysqli_error());
		header("location:hotel.php");
	}
?>