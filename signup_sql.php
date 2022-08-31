<?php
include('dbconn.php');
$fname=$_POST["fname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$password=$_POST["psw"];

$SQL="INSERT INTO signup(fname,email,mobile,address,password)
VALUES('".$fname."','".$email."','".$mobile."','".$address."','".$password."')";
mysqli_query($db_connection,$SQL);
echo"<script>alert('Register successfully');</script>";
header("Location:signin.php");



?>