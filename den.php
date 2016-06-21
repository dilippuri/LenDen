<?php
session_start();
?>	
	<div class="panel-body">
							<center><ul class="list-group">
    <!--<li class="list-group-item"><span class="badge" id"credit"></span> New</li>
     <li class="list-group-item"><span class="badge" id"credit"></span> New</li>
   -->
   <table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Name</th><th>Amount</th></tr>
</thead>

<tbody>

<?php
$currentid=$_SESSION["username"];
  $conn=mysql_connect("localhost","root","password");
  $db=mysql_select_db("lenden",$conn);

  $url="";
?> 

<!-- SQL query goes here -->
<?php 
$strSQL = "SELECT name,denn from transection join user on transection.id2=user.uid
 where id1 = '".$currentid."' AND denn>0";
  $rs = mysql_query($strSQL);
 $counter=1; 
 while($row = mysql_fetch_array($rs)) {
  $update = $row['name'];
  $upcnt= $row['denn'];
  
  ?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $counter++;   ?></td>
    <td><?php  echo $update   ?></td>
    <td><?php  echo $upcnt  ?></td>
  
</tr>
<?php }
?>

<!--    save input here  -->

</tbody>
</table>  
      </ul></center>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrapcdn.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
