<?php
session_start();
$conn=mysqli_connect('localhost','root','','dbms');
if(isset($_POST['formsumit']))
		{
$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['userpass'];
$profile = $_FILES['userpic']['name'];
$temp_profile =$_FILES['userpic']['tmp_name'];
// move_uploaded_file($temp_profile,"images/$profile");

move_uploaded_file($temp_profile,"png.png");

 $qry="INSERT INTO `student`(`name`,`email`,`password`,`profilepic`) VALUES ('$uname','$email','$pass','$profile')";
 $res=mysqli_query($conn,$qry);
   if($res==1){
			 
				echo "successfully login";
				header("location:log.php");
			

				}
				else
				{
					echo "Record not inserted";
			       }
		
		}
     ?>
   <html>
   <head>	
   <title>Registration</title>
    <link rel="stylesheet" href="css/style1.css">
   </head>
   <body>
  <form method="post" class="box1" action="#" enctype="multipart/form-data">
       <h1>Registration</h1>
      <input type="text" name="username" placeholder="Enter_Name"required>
      
      <input type="text" name="email" placeholder="Enter_Email_Id"required>
       
      <input type="password" name="userpass" placeholder="Enter_Password"required>
       
      <input type="file" name="userpic" required>

       <input type="submit" name="formsumit" value="Registration">
  </form> 
        </body>
   		</html>
	
