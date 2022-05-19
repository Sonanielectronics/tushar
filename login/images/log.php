<?php
session_start();
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"dbms");
		if(isset($_POST['s1'])){
			
			$email=$_POST['email'];
			$pass=$_POST['password'];
	      	$query = "select * from student where email='$email' && password='$pass'"	;
         	$data = mysqli_query($conn, $query);
	        $total = mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['email']=$email;
			header('location:logindip.php');
			
			}
			else
			{
				echo "login failed";
				}
		}
	?>

<html>
<head>
<title>LOGIN</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="" method="post">
	<div class="box">
  <h1>Login</h1>
  <input type="text" name="email" placeholder="Email_Id" required>
  <input type="password" name="password" placeholder="Password"required>
  <!-- <input type="submit" name="s1" value="Login"> -->
  <a href="login.php"><input type="submit" name="s1" value="login"></a>
   <a href="reg.php"><input type="Sign up" name="" value="Sign up"></a>
</div>
</form>


</body>
</html>


