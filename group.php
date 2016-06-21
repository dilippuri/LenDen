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
			<div class="row" style="margin-top:80px;">
			<div class="row">
				<div class="container">
					<div  class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title"><h1 style="color:233445">Group<h1></div>
						</div></div>
<div class="col-lg-4" style="margin-bottom:10px;"></div>
			
			<div class="col-lg-4" style="margin-bottom:10px;">
			<p>			
                        <div class="btn-group btn-group-justified">
 <center> <a href="create_group.php" class="btn btn-primary">New</a></center>
 
</div>
<br><br> 
 <div class="btn-group btn-group-justified">
 <center> <a href="#" class="btn btn-primary" onClick="$('#loginbox'); $('#signupbox').show()">
                                           Edit
                                        </a></center>
 
</div></p>

 <div id="signupbox" style="display:none;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">select Group</div>
                            <div style="float:right;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">new</a></div>
                           </div>
                             <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                           
                                  
                                <div class="form-group">
                                      <div class="col-md-6">
                                       <select>
 												 <option value="volvo">Volvo</option>
												  <option value="saab">Saab</option>
  													<option value="mercedes">Mercedes</option>
 													 <option value="audi">Audi</option>
										</select>  </div>
                                                                  
                                    <!-- Button -->                                        
                                    <div class=" col-md-6">
                                        <input type="button"><a class="btn btn-primary" type="submit"  href="edit_group.php"> Go </a></input>
                                        
                                    </div>
                                </div>
                                
</div>

</div>

                        </div> 



 
                        
         <div class="col-lg-4" style="margin-bottom:10px;"></div>
 			
            			
	
                      
	</div>

				
				</div>
			</div>
		</div>
		
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
</html>
