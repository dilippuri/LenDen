<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<div class="container-fluid">
			<?php include("pb_header.php"); ?>
			<div class="row" style="margin-top:80px;margin-left:100px;">
			<div class="row">
				<div class="container">
					<div class="col-lg-8">
						<h2>New Event</h2>
						<div class="modal-body">
                <form id="fabForm" method="post" class="form-horizontal bv-form" novalidate="novalidate">

                    <div class="form-group">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-hover">
                                <thead>
                                <tr><input class="form-control" type="text" placeholder="Enter Your Event Name & Description">
                                    <br><br>
                                    <input class="form-control" type="text" placeholder="Enter Total Amout You paid">
                                <br><br>
                                	<br>
                                    <th class="col-md-1">Sr.No.</th>
                  					<th class="col-md-2">Participants</th>
                  					<th class="col-md-3"></th>
                                </tr>
                                </thead>
                                <tbody>
                <tr>
                  <td class="col-md-1">1</td>
                  <td class="col-md-2">Hemant</td>
                  <td class="dropdown"><a class="btn btn-primary actionButton" style="margin-left:50px;"data-toggle="dropdown" href="#"> Add </a></td>
      
                </tr>
                <tr>
<td class="col-md-1">2</td>
                  <td class="col-md-2">Abhijeet</td>
                  <td class="dropdown"><a class="btn btn-primary actionButton" style="margin-left:50px;"data-toggle="dropdown" href="#"> Add </a></td>
      
                </tr>
                <tr>
<td class="col-md-1">3</td>
                  <td class="col-md-2">Murtuza</td>
                  <td class="dropdown"><a class="btn btn-primary actionButton" style="margin-left:50px;"data-toggle="dropdown" href="#"> Add </a></td>
      
                </tr>
            </tbody>
        </table>
                </div>
                    </div>
                    <div  style="margin-left:600px;margin-right:0px;">
                        <center><a type="button" class="btn btn-primary" data-dismiss="modal" href="main1.php">Post</a></center>
                    </div>

                </form>
            </div>
            		
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
</html>
