<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Book Yours</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel="icon" href="logo.jpg">
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Book Yours</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href="hotel.php">Hotels</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<div class = "panel-body">
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Reservation ID</th>
							<th>Hotel ID</th>
							<th>Room ID</th>
							<th>User ID</th>
							<th>Check-in Date</th>
							<th>Check-out Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `reservation`") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['rsvid']?></td>
							<td><?php echo $fetch['hid']?></td>
							<td><?php echo $fetch['roomid']?></td>
							<td><?php echo $fetch['uid']?></td>
							<td><?php echo $fetch['checkin']?></td>
							<td><?php echo $fetch['checkout']?></td>
							<td><center>
								<!-- <a class = "btn btn-success" href = "confirm_reserve.php?rsvid=<?php echo $fetch['rsvid']?>"><i class = "glyphicon glyphicon-check"></i> Details</a>  -->
								<a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_pending.php?rsvid=<?php echo $fetch['rsvid']?>"><i class = "glyphicon glyphicon-trash"></i> Discard</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; BOOK YOURS 2022 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>