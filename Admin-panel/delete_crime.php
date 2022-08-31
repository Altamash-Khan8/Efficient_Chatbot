<?php
include('dbconn.php');
$id=$_GET["id"];

$DELETE="DELETE FROM report WHERE id='".$id."'";
mysqli_query($db_connection,$DELETE);
header("Location:../all_crime.php");



?>