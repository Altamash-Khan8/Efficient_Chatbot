<?php
include('dbconn.php');
$email=$_POST["email"];
$password=$_POST["pass"];

$SQL="SELECT * FROM admin_reg";
$result=mysqli_query($db_connection,$SQL);
while($db=mysqli_fetch_assoc($result))
{
	if(($email==$db["email"]) AND ($password==$db["password"]))
	{
		session_start();
		$_SESSION['u']=$email;
		echo"<script>alert('login successfully');</script>";
		header("Location:../all_crime.php");
	}
	else{
		echo"<script>alert('Check user name and password');</script>";
		
	}
	
}
		echo("Please check User Name and Password");
?>	