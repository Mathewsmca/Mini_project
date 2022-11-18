<?php
include("dbconn.php");
if(isset($_POST["submit"]))
{
$model=$_POST['txt_model'];
$modeldescription=$_POST['txt_Description'];
$sql=mysqli_query($conn,"SELECT count(*) as count FROM tbl_model WHERE model='$model'");
$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{
			
		echo "<script>alert('Already exist');window.location='view_model.php'</script>";	
		}
		else 
		{
		$sql=mysqli_query($conn,"INSERT INTO tbl_model(model,description)VALUES('$model','$modeldescription')");
		echo "<script>alert('Model Registered Successfully!!');window.location='view_model.php'</script>";
}
}
?>