<?php
include('dbconn.php');
if(isset($_POST['update_stud_image']))
{
$uId=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["addresss"];
$city=$_POST["city"];
$crime=$_POST["crime"];
$crime_area=$_POST["crime_area"];
$crime_street=$_POST["crime_street"];
$zip=$_POST["zip"];
$new_image = $_FILES["photo"]['name'];
$old_image=$_POST["photo_old"];

if($new_image != '')
{
    $update_filename = $_FILES["photo"]['name'];
}
else{
    $update_filename = $old_image;

 }


$SQL="UPDATE report SET fname='".$fname."',lname='".$lname."',email='".$email."',mobile='".$mobile."',addresss='".$address."',city='".$city."',crime='"."crime"."',crime_area='".$crime_area."',crime_street='".$crime_street."',zip='".$zip."',upload='".$update_filename."' WHERE id='".$uId."'";
mysqli_query($db_connection,$SQL);
header("Location:../all_crime.php");

if( $_FILES["photo"]['name'] !='')
{
    move_uploaded_file( $_FILES["photo"]['name'],  "../uploadd".$_FILES["photo"]['name']);
    unlink("../uploadd/.$old_image");
}

}

?>