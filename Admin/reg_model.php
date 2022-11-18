<html>
<body bgcolor="#808080">
<?php
include("dbconn.php");
?>
<form action="modelreg_action.php" method="post" enctype="multipart/form-data" style=" padding-top: 8%;">
<div  >
        <h2 style="text-align: center;margin-top: 6%;">MODEL REGISTRATION</h2>

    <br>
    <div >
     <div  style="text-align:left">
        <label>Model  </label>
      </div>
      <div >
    <input type="text"  name="txt_model" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter model " autocomplete="off">   
      </div>
    </div>
    <br>
    <div >
     <div  style="text-align:left">
        <label>Description</label>
      </div>
      <div >
        <input type="text" class="form-control" name="txt_Description" pattern="^[A-Za_z][A-Za-z -]+$" style="width:500px;" placeholder="Enter Description" autocomplete="off">
      </div>
    </div>
    <br>
     <div >
      <input type="submit" name="submit" value="Save"  style="margin-left:63%">
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
