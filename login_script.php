<?php
session_start();
?>


<?php
$link=mysql_connect("localhost","root","password") or die("Database is not connected.");
                   mysql_select_db("lenden",$link) or die("SF");
session_start();

	$username1= $_POST['username'];
	
	$pwd=$_POST['password'];

	$query="SELECT * FROM user WHERE uid = '".$username1."'";

	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	

	if($num == 0)
	{
	                 	header('Location: index.php');
        }
	else
	{
		$row=mysql_fetch_array($result);
		
		if ($pwd == $row['password']) 
		{
				header('Location: main.php');
				
				$_SESSION["username"] = $username1;
				$_SESSION["name"] = $row['name'];
				$_SESSION["password"] = $pwd;
		}
		else
		{
				header('Location: index.php');			
		}
	}

     
         	

?>
