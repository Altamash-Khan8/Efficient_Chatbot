<?php
include('dbconn.php');
$fname=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["pass"];

$SQL="INSERT INTO admin_reg(fullname,email,mobile,password)
VALUES('".$fname."','".$email."','".$mobile."','".$password."')";
mysqli_query($db_connection,$SQL);
echo"<script>alert('Register successfully');</script>";
header("Location:admin_login.php");

?>