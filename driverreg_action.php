<?php
include("dbconn.php");
if(isset($_POST["btnSave"]))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$gender=$_POST["gender"];
	$dob=$_POST["dob"];
	$state=$_POST["state"];
	$district=$_POST["district"];
	$address1=$_POST["address1"]; 
	$address2=$_POST["address2"];
	$address3=$_POST["address3"];  
	$pin=$_POST["pin"]; 
	$phone=$_POST["phone"];
	$email=$_POST["email"]; 
	$password=mysqli_real_escape_string($conn,md5($_POST["password"]));
	
	
$save=mysqli_query($conn,"INSERT INTO `tbl_driver`(`fname`, `lname`, `gender`, `dob`, `state`, `district`, `address1`, `address2`, `address3`, `pin`, `phone`, `email`, `password`) VALUES ('$fname','$lname','$gender','$dob','$state','$district','$address1','$address2','$address3','$pin','$phone','$email','$password')");



if($save)
{
echo "<script> alert ('Thank you for registration !!! '); window.location='driverindex.php'</script>";

}


}


?>
<a href=""
