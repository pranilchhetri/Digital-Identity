<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  require 'connect.php';
  createInsert();
}
function createInsert()
{
  global $connect;
  $rollNo = $_POST["rollNo"];
  $firstname= $_POST["f_name"];
  $lastname=$_POST["l_name"];
  $address = $_POST["address"];
  $dob=$_POST["dob"];
  $ctzNum = $_POST["ctz_Num"];
  $department=$_POST["depart"];
  $expiryDate = $_POST["expiryDate"];
  $password=$_POST["password"];
  $photo=$_POST["image"];


  $query = "INSERT INTO `user` (`rollNo`, `firstname`, `lastname`, `address`, `dob`, `ctzNum`, `department`, `expiryDate`, `password`, `blockchain`) VALUES ('$rollNo', '$firstname', '$lastname', '$address', '$dob', '$ctzNum', '$department', '$expiryDate', '$password', '0');";
  mysqli_query($connect,$query) or die (mysqli_error($connect));
  mysqli_close($connect);
}
?>
