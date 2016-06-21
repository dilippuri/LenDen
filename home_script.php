





<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Personal Balance Sheet</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<meta<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("pb_header.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Notification</div>
						</div>
						<div class="panel-body">
							 <iframe src="notifications.php " width="100" height="400" style="border:none" ></iframe> 
							
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Lenn</div>
						</div>
						<div class="panel-body">
							<center> <iframe src="len.php" width="300" height="200"  style="border:none"></iframe></center> 
						</div>
				<div class="col-sm">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Denn</div>
						</div>
						<div class="panel-body">
					<center> <iframe src="den.php" width="300" height="200"  style="border:none"></iframe> </center>
						</div>
					</div>
				</div>
							
						</div>
 

							
					</div>
				
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title"></div>
						</div>
						<div class="panel-body">
							<center><ul class="list-group">
    <li class="list-group-item"><span class="badge"></span><a href="create_group.php">Create Group</a></li>
     <li class="list-group-item"><span class="badge"></span><a href="edit_gorup.php">edit_Group</a></li>
  
    <li class="list-group-item"><span class="badge"></span><a href= "event.php">Add Event </li>  
      
  </ul></center>
</div>
				</div>
			</div>
						
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-123-000000</div>
					</div>
				</div>
			</div>


		</div>
	</body>
</html>