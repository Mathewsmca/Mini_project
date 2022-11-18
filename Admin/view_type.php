
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cab type</title>
</head>
<body style="background-image:url(images/about-2-720x720.jpg) ;background-repeat: no-repeat;background-size: cover;">
<form action="reg_type.php" method="post">

  <div  style="width:90%;margin-left:50px;margin-bottom: 10%;padding-top:7%;" >
  
  <div >
  <div  style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="AddNew"  style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;">TYPE DETAILS</h2>
  <div  style="margin-left:0px;">
  <table  style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
  
    <th> #</th>
    
    <th>Type </th>
    <th>Description</th>
    <th style="type">Edit</th>
    <th style="type">Delete</th>
    <?php
include("dbconn.php");
$s=1;
$sql=mysqli_query($conn,"SELECT * FROM tbl_type");
   while($display=mysqli_fetch_array($sql))
   {
	echo "<tr>";
	echo "<td>".$s++."</td>";
	echo "<td>".$display["type"]."</td>";
	echo "<td>".$display["Description"]."</td>";
	echo "<td><a style='color:#090' href='edit_type.php?type_id=".$display['type_id']."'>Edit</a> </td>";
	echo "<td><a style='color:#090' href='delete_type.php?type_id=".$display['type_id']."'>Delete</a> </td>";
	echo "</tr>";
	
  }
echo "</table>";

?>
  </div>
  </div>
  <div> </div>
  </div>
  </div>  </div>
</form>
</body>
</html>
<?php
// include("footer.php");
?>