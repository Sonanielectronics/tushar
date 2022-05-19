<?php
session_start();
    $conn=mysqli_connect("localhost","root","","");
	mysqli_select_db($conn,"dbms");
	error_reporting(0);
	$emailuser = $_SESSION['email'];
	if($emailuser==true)
	{
		}
		else
		{
			header('location:log.php');
			}
    $query = "select * from student where email='$emailuser'";
	$data = mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($data);
	echo "welcome  ".$result['name'];
	
	?>
	<html>
    <head>
		<title>successfully.....</title>
    </head>
    <body>
   <p> 
	<img src = "png.png"
      alt = "Learn HTML5" height = "250" width = "270" />
		</p>
         <a href="logout.php">Logout</a>
  </body>
   </html>
   