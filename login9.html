
<?php
$server="localhost";
$username="root";
$password="root";
$database="homeseeker";


$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
die("CONNECTION FAILED". $conn->connect_error);
}
else{

}
session_start();
if(isset($_POST['login']))

{
	//require 'connect.php';
	 
	$email=$_POST['email'];
	
	$pass=$_POST['pass'];
	
	
	if($email=='')
	{
		echo "<script>alert('Enter ur email')</script>";
	}
	if($pass=='')
	{
		echo "<script>alert('Enter ur pass')</script>";
	}
	
	else{
		 
		$query= "select * from signup where email='$email' AND Password='$pass'";
		$run=(mysqli_query($conn,$query))or die(mysqli_error());
		$result=mysqli_num_rows($run);
		
	
		if(mysqli_num_rows($run)>0)
		{
			$query= "INSERT INTO login (email,password) VALUES('$email','$pass')";
			mysqli_query($conn,$query);
			$_SESSION['email']=$email;
			echo "<script>window.open('area.php','_self')</script>";
		}
		else {
			echo "<script>alert('Your Password OR Username is Wrong....!!')</script>";
			 echo"<script>window.open('login9.php','_self')</script>";
		}
		}
		
	
}
//not used
if(isset($_GET['logout']))
{
	session_unregister('email');
}



?>



<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title> Login Form </title>

  <link rel="stylesheet" href="css768/reset768.css">

    <link rel="stylesheet" href="css768/style768.css" media="screen" type="text/css" />

</head>

<body style="background-color:#3366FF;">

 <form method="post" >
  <div class="wrap">
		<div class="avatar">
		</div>
		<input type="text" placeholder="username" name="email" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" name="pass" required>
		 <div class="input-group input-group-lg">
        <button type="submit" name="login" class="float">Login</button>
		 </div>
	</div>
	 </form>

  <script src="js768/index.js"></script>

</body>

</html>



