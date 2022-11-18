
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>type Document</title>
</head>

<body>
<?php
include("dbconn.php");
?>
<form action="typeaddition.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div class="container" style="background-image:url(images/about-2-720x720.jpg);background-repeat: no-repeat;background-size: cover;">
        <h2 style="text-align: center;margin-top: 6%;">TYPE REGISTRATION</h2>

    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:left">
        <label>Type  </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_Type" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter type " autocomplete="off">
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:left">
        <label>Description</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_Description" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter Description" autocomplete="off">
      </div>
    </div>
    <br>
     <div class="row">
      <input type="submit" name="submit" value="Save" class="btn btn-primary" style="margin-left:63%">
    </div>
    <br>
     </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>