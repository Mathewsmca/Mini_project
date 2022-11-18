<?php
session_start();
include("dbconn.php");

$username=$_POST["txt_name"];
$password=$_POST["txt_password"];
$sql=mysqli_query($conn,"SELECT * FROM tbl_admin where username='$username' and password='$password'");
echo "SELECT * FROM tbl_admin where username='$username' and password='$password'";
$display=mysqli_fetch_array($sql);
if($display>0)
{
    $_SESSION["admin_id"]=$display["adminId"];
    header("location:adminindex.php");

}
else
{
//echo "<script>alert('Invalid Username/Password!!');window.location='index.php'</script>";
}
?>  