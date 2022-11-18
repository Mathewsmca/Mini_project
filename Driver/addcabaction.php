<?php
include("dbconn.php");
if(isset($_POST["submit"]))
{
$cab=$_POST['txt_cab'];
$description=$_POST['txt_Description'];
$c_id=$_POST['txt_si_no'];
$type_id=$_POST['txt_type'];
$rate=$_POST['rate'];
$image=$_FILES['txt_image'];
$sql=mysqli_query($conn,"SELECT * FROM tbl_cab WHERE cab_name='$cab'");
  		$display=mysqli_fetch_array($sql);
  		if($display>0)
		{
		echo "<script>alert('Already exist with same Cab name!!');window.location='#'</script>";	
		}
		else
		{
$loc= "../img/";
$s=$_FILES['txt_image'] ['name'];
move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$s);
$sql=mysqli_query($conn,"INSERT INTO `tbl_cab`(`cab_name`,`si_no`,`type_id`,`image`,`price`,`cab_description`) VALUES ('$cab','$c_id','$type_id','$s','$rate','$description')");
echo"<script>alert('Cab Details Registered Successfully!!');window.location='#'</script>";
		}
}
?>