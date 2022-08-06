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
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href="hotel.php">Hotels</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Hotel / Add Hotel</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class="form-group">
							<label>Hotel Name</label>
							<input type = "text"class = "form-control" name = "hname" required />
						</div>
						<div class = "form-group">
							<label>Stars</label>
							<select class = "form-control" required name = "stars">
								<option value = "">Choose an option</option>
								<option value = "2">2</option>
								<option value = "3">3</option>
								<option value = "4">4</option>
								<option value = "5">5</option>
							</select>
						</div>
						<div class="form-group">
							<label>Details</label>
							<textarea name="hdetails" cols="30" rows="10" class="form-control" required></textarea>
						</div>
						<div class = "form-group">
							<label>City </label>
							<input type = "text"class = "form-control" name = "city" required />
						</div>
                        <div class = "form-group">
							<label>Address </label>
							<input type = "text"class = "form-control" name = "address" required />
						</div>
                        <div class = "form-group">
							<label>Children</label>
							<input type = "text"class = "form-control" name = "child" required />
						</div>
                        <div class = "form-group">
							<label>Pets </label>
							<input type = "text"class = "form-control" name = "pets" required />
						</div>
						<!-- <div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" /> 
						</div>-->
						<br />
						<div class = "form-group">
							<button name = "add_hotel" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-plus"></i> Add</button>
						</div>
					</form>
					<?php require_once 'add_query_hotel.php'?>
				</div>
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
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>