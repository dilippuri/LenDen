<?php

                 //     $link=mysql_connect("localhost","root","") or die("adff");
                   
                  // mysql_select_db("lenden",$link) or die("SFf");
                
               $conn=mysql_connect("localhost","root","password");
               $db=mysql_select_db("lenden",$conn);

        
                     //include_once 'connection-script.php';
                     session_start();   
                    $id=$_SESSION['username'];
                   //  $id=4;


                
                  $grp_name=$_GET['group_name'];

                     /*'".$_POST ['datepicker3']."'  query for entry into group table$result = mysql_query("SELECT *from Employee WHERE Payrollid='".$id."'");
           $row=mysql_fetch_array($result);*/

     $sql= ("INSERT INTO group1(name,adminid) values( '".$grp_name."','".$id."')");

mysql_query($sql,$conn);



/*query to show the delete list anad add list in a group=$grp_name*/

$result1=mysql_query("select gid from group1 where name='".$grp_name."' and adminid='".$id."'");
$row1=mysql_fetch_array($result1);
$g=$row1['gid'];

 $sql1= mysql_query("INSERT INTO groupnid(gid,id) values( '".$g."','".$id."')");



$result2=mysql_query("select id from groupnid where gid = '".$g."' ");


$result3=mysql_query("select distinct uid from user where uid not in (select distinct uid from user join groupnid where groupnid.gid = '".$g."' AND user.uid = groupnid.id)");


?>



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
       
     <?php while($row2=mysql_fetch_array($result2)){  ?>
       
            <tbody>
            <tr>
                <th>Participants Names</th>
                
                <th>Remarks</th>
                            </tr>
            <tr>
                <td> <?php echo $row2['id']; ?></td>
              
              <td class="dropdown"><a class="btn btn-primary actionButton"
          data-toggle="dropdown" href="#"> Delete </a></td>
            </tr>
          </tbody>
       <?php } ?>

        </table>
        
        </div>
  </div>
</div>

        
<div class="col-sm-5" style="margin-left:80px;margin-top:80px">
  <div class="panel panel-default">
      <div class="panel-heading">Add Members</div>
      <div class="panel-body ">
        <table class="table table-condensed table-summary table-borderless ">
           
             <?php while($row3=mysql_fetch_array($result3)){  ?>
       
            <tbody>
            <tr>
              <th>Participants Names</th>
                
                <th>Remarks</th>  
            </tr>
            <tr>
                <td> <?php echo $row3['uid']; ?> </td>
                
                <td class="dropdown"><a class="btn btn-primary actionButton"
          data-toggle="dropdown" href="create_group_script2.php?grp_id=".$g."; ?>  method="GET"> ADD</a></td>
            </tr>
           </tbody>
       <?php } ?>

        </table>
    </div>
  </div>

</div>

<div class="clearfix">

</div>
<button type="submit" name="submit" class="btn btn-primary"style="margin-top:80px;margin-left:80px;">Save</button>
</body>
</html>








