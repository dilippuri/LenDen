<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LenDen</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("pb_header.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-3">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Notification  </div>
						</div>
						<div class="panel-body">
							<center>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
<tr>
        <td>1</td>
        <td>You are now friend with A </td></tr>
       <tr><td>2</td> <td> An event entered by you C</td>
        </tr>
        <tr><td>3</td><td>Reminder for payment to B</td>
      </tr>

      </tbody>
      </table>
   </center>   
							
						</div>
					</div>
				</div>
				<div class="col-lg-5" style="left:20px">
					<div class="panel panel-default"  >
						<div class="panel-heading">
							<div class="panel-title">Lenn </div>
						</div>
						<div class="panel-body">
<center>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Amount</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Govind</td>
        <td>50</td>
     <td><input class="btn btn-success" type="submit" style="margin-left:20px;"value="Reminder" readable ></td>

        </tr>
        <tr>
         <td>2</td>
        <td>Murtuza</td>
        <td>60</td>
        <td><input class="btn btn-success" type="submit" style="margin-left:20px;"value="Reminder" readable ></td>

       
      </tr>
       <tr>
         <td>3</td>
        <td>Abhijeet</td>
        <td>10</td>
        <td><input class="btn btn-success" type="submit" style="margin-left:20px;"value="Reminder" readable ></td>

       
      </tr>
       <tr>
         <td>4</td>
        <td>Hemant</td>
        <td>10</td>
        <td><input class="btn btn-success" type="submit" style="margin-left:20px;"value="Reminder" readable ></td>

       
      </tr>
      </tbody>
      </table>
   </center> 
</div>
		</div>
				<div class="col-sm">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Denn</div>
						</div>
						<div class="panel-body">
						<center> <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dilip</td>
        <td>80</td>
      </tr>
      </tbody>
      </table>
   </center>
						
						</div>
					</div>
				</div>
							
						</div>
 

					
					
				
				<div class="col-lg-3" style="margin-left:40px">
					<div class="panel panel-default" >
						<div class="panel-heading" >
							<div class="panel-title">Action</div>
						</div>
						<div class="panel-body">
							<center>
							<table><tr>
    <td ctype="button"><a class="btn btn-primary actionButton" style="padding: 10px 70px;font-size:20px;border-radius:8px;" href="friend.php"> Friend </a></td></tr>
    <tr><td type="button"><a class="btn btn-primary actionButton" style="padding: 10px 70px;font-size:20px;border-radius:8px;" href="group.php"> Group </a></td></tr><tr>
    <td type="button"><a class="btn btn-primary" type="submit" style="padding: 10px 72px;font-size:20px;border-radius:8px;" href="event.php"> Event </a></td></tr>
    </table>
     
  </ul></center>
</div>
				</div>
			</div>
						
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>The Rajasthani Boys</h3></div>
					</div>
					<div class="col-lg-2" style="margin-left:550px">
						<div class="btn btn-success" style="padding: 5px 50px;font-size:10px;border-radius:8px;"><h3><a href="about_us.php">About Us</a></h3></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
