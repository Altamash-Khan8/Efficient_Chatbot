<?php
include('dbconn.php');

if(isset($_POST['submitt']))
{
$fname=$_POST["fname"];
$dcrime=$_POST["dcrime"];
$tcrime=$_POST["tcrime"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["addresss"];
$city=$_POST["city"];
$crime=$_POST["crime"];
$crime_area=$_POST["crime_area"];
$crime_street=$_POST["crime_street"];
$zip=$_POST["zip"];
$upload=$_FILES["photo"];

//print_r($upload);
$filename = $upload['name'];
$filepath = $upload['tmp_name'];
$fileerror = $upload['error'];

if($fileerror == 0){

   $destfile = 'uploadd/'.$filename;
   //echo "$destfile";
   move_uploaded_file($filepath,$destfile);

   $SQL="INSERT INTO report(fname,dcrime,tcrime,email,mobile,addresss,city,crime,crime_area,crime_street,zip,upload)
   VALUES('".$fname."','".$dcrime."','".$tcrime."','".$email."','".$mobile."','".$address."','".$city."','".$crime."','".$crime_area."','".$crime_street."','".$zip."','".$destfile."')";
   mysqli_query($db_connection,$SQL);
   echo "<script> alert('Thank you so much We will Immediately take action on it');</script>";
   header("Location:successful.php");

}

}
else{
    echo "no button has been clicked";
}




?>