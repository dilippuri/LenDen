<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<?php include("pb_header.php"); ?>
			
				<div class="container">
					<div class="col-lg-8" style="margin-top:80px;">
						<h2>Edit Group</h2>
						<input class="form-control" type="text" placeholder="Group Name">
          </div>
        </div>
      </div>

  <div class="col-sm-5" style="margin-left:80px;margin-top:80px">
    <div class="panel panel-default" style="margin-left=100px;margin-top=80px">
    <div class="panel-heading">Group Member</div>
      <div class="panel-body ">
  
        <table class="table table-condensed table-summary table-borderless ">
            <tbody>
            <tr>
                <th>Participants Names</th>
                
                <th>Remarks</th>
                            </tr>
            <tr>
                <td>Dilip</td>
              
              <td class="dropdown"><a class="btn btn-primary actionButton"
          data-toggle="dropdown" href="#"> Delete </a></td>
            </tr>
          </tbody>
        </table>
        
        </div>
  </div>
</div>

        
<div class="col-sm-5" style="margin-left:80px;margin-top:80px">
  <div class="panel panel-default">
      <div class="panel-heading">Add Members</div>
      <div class="panel-body ">
        <table class="table table-condensed table-summary table-borderless ">
            <tbody>
            <tr>
              <th>Participants Names</th>
                
                <th>Remarks</th>  
            </tr>
            <tr>
                <td>Govind</td>
                
                <td class="dropdown"><a class="btn btn-primary actionButton"
          data-toggle="dropdown" href="#"> ADD</a></td>
            </tr>
           </tbody>
        </table>
    </div>
  </div>

</div>

<div class="clearfix">

</div>
<center><a type="button" name="update"  href="main.php" class="btn btn-primary" style="margin-top:80px;margin-left:80px;">update</a></center>
</body>
</html>
