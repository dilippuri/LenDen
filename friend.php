
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Friends</title>
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
            <h2>My Friends</h2>
         </div>
        </div>
      </div>

  <div class="col-sm-5" style="margin-left:80px;margin-top:80px">
    <div class="panel panel-default" style="margin-left=100px;margin-top=80px">
    <div class="panel-heading">Existing Friends</div>
      <div class="panel-body ">
  
        <table class="table table-condensed table-summary table-borderless ">
       
 <thead>
                              <tr>
                                    <th class="col-md-1">No.</th>

                            <th class="col-md-3">Name</th>
                                   
                                </tr>
                                </thead>



<tbody>
  <tr id="w1-filters" class="filters">
    <td>1 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;" value="remove" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>2 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="remove" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>3 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;" value="remove" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>4 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="remove" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>5 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;" value="remove" readable ></td>
</tr>

<!--    save input here  -->

</tbody>
 </table>
        
        </div>
  </div>
</div>
       

        
<div class="col-sm-5" style="margin-left:80px;margin-top:80px">
  <div class="panel panel-default">
      <div class="panel-heading">Add Friends</div>
      <div class="panel-body ">
        <table class="table table-condensed table-summary table-borderless ">
           <thead>
             <tr>
                                    <th class="col-md-1">No.</th>
                            <th class="col-md-3">Name</th>
                                   
                                </tr>
                                </thead>

          
       
<tbody>
  <tr id="w1-filters" class="filters">
    <td>1 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="Add" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>2 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="Add" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>3 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="Add" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>4 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="Add" readable ></td>
   </tr>
   <tr id="w1-filters" class="filters">
    <td>5 </td> <td></td> <td></td><td><input class="btn btn-success" type="submit" style="margin-left:200px;"value="Add" readable ></td>
</tr>

<!--    save input here  -->

</tbody>
 </table>
    </div>
  </div>

</div>

<div class="clearfix">

</div>
<center><a href="main.php" class="btn btn-info" role="button">Update</a></center>
</body>
</html>








