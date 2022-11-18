
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cab model</title>

</head>
<body bgcolor="#808080">
  
<form action="reg_model.php" method="post"style="background-color: #808080;">


  <div  style="width:90%;margin left:20%; margin-bottom: 14%;padding-top:8%;" >
  
  <div >
  
  <div  style="margin-left: -153%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="AddNew"  style="margin-left:63%;border-radius:10px;background-color: #808080;">
    </div>
  <h2 style="text-align: center;margin-top: 10%;">MODEL DETAILS</h2>
  <div  style="margin-left:0px;">
  <table  style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
  
    <th> #</th>
    
    <th>Category </th>
    <th>Description</th>
    <th style="type">Edit</th>
    <th style="type">Delete</th>
    <?php
include("dbconn.php");
$s=1;
$sql=mysqli_query($conn,"SELECT * FROM tbl_model");
   while($display=mysqli_fetch_array($sql))
   {
	echo "<tr>";
	echo "<td>".$s++."</td>";
	echo "<td>".$display["model"]."</td>";
	echo "<td>".$display["Description"]."</td>";
	echo "<td><a style='color:#090' href='edit_model.php?c_id=".$display['model_id']."'>Edit</a> </td>";
	echo "<td><a style='color:#090' href='delete_model.php?c_id=".$display['model_id']."'>Delete</a> </td>";
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