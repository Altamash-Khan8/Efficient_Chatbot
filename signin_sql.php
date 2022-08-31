<?php
include('dbconn.php');
$email=$_POST["email"];
$password=$_POST["psw"];

$SQL="SELECT * FROM signup";
$result=mysqli_query($db_connection,$SQL);
while($db=mysqli_fetch_assoc($result))
{
	if(($email==$db["email"]) AND ($password==$db["password"]))
	{
		session_start();
		$_SESSION['u']=$email;
		echo"<script>alert('Register successfully');</script>";
		header("Location:successful.php");
	}
	else{
		echo"<script>alert('Check user name and password');</script>";
		//header("Location:signup.php");
	}
	
}
		echo("Please check User Name and Password");
?>	