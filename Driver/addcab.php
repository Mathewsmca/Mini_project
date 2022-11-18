
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#808080">
<?php
include("dbconn.php");
?>
<form action="addcabaction.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;background-color:#909090;"style="margin-left:93px; margin-bottom:10%;padding-left:130px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; padding-top: 3%;">
        <h2 style="text-align: center;margin-top: 6%;">CAB REGISTRATION</h2>

    <br>
    <div >
     <div  style="text-align:left">
        <label>Category</label>
      </div>
      <div >
       <?php
	   include("dbconn.php");
  $sql=mysqli_query($conn,"select * from tbl_model");?>
  <select name="txt_si_no"  class="form-control" style="width:500px;" required>
    <option value="">---Select---</option>
    <?php
while($row=mysqli_fetch_array($sql))
{
?>
    <option value="<?php echo $row['model_id'] ?>"> <?php echo $row['model'];?> </option>
    <?php
}
?>
  </select>
     </div>
    </div>
    <br>

     <div >
     <div style="text-align:left">
        <label>Cab name  </label>
      </div>
      <div >
        <input type="text"  name="txt_cab" style="width:500px;" placeholder="Enter Cab name " autocomplete="off">
      </div>
    </div>
    <br>


     <div >
     <div  style="text-align:left">
        <label>Type </label>
      </div>
      <div class="col-md-3">
       <?php
	    $sql=mysqli_query($conn,"select * from tbl_type");?>
  <select name="txt_type"   style="width:500px;" required>
    <option value="">---Select---</option>
    <?php
while($row=mysqli_fetch_array($sql))
{
?>
    <option value="<?php echo $row['type_id'] ?>"> <?php echo $row['type'];?> </option>
    <?php
}
?>
     </select>
    </div>
    </div>
    
    <br>
    <div >
     <div  style="text-align:left">
        <label>Image </label>
      </div>
      <div >
        <input type="file" class="form-control" name="txt_image" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter type " autocomplete="off">
      </div>
    </div>
    <br>


    
    <div >
     <div  style="text-align:left">
        <label>Rate </label>
      </div>
      <div >
        <input type="text" class="form-control" name="rate" style="width:500px;" placeholder="Enter the Price " autocomplete="off">
      </div>
    </div>
     
     
        <label>Cab Description</label>
      </div>
      <div >
        <input type="text" class="form-control" name="txt_Description" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter product Description" autocomplete="off">
      </div>
    </div>
    <br>
     <div >
      <input type="submit" name="submit" value="Save" class="btn btn-primary" style="margin-left:63%;border-radius: 12px;">
    </div>
    <br>
     </div>
</form>
</body>
</html>
