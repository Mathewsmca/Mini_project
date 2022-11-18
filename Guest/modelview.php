<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cab Model</title>
</head>
<body >
<body bgcolor="#DEFCFD">
<?php

include("dbconn.php");
?>
<form action="viewcab.php" style="    padding-top: 7%;background-image:url(images/about-img.jpg) ;background-repeat: no-repeat;background-size: cover;">
    <h1 style="text-align: center;margin-left: 1%;margin-bottom: -4;margin-top: -2%;color: white;">..SELECT YOUR MODEL..</h1>
    <br>
    <div  style="min-height: 50%;">
      <?php
      $result=mysqli_query($conn,"SELECT * FROM tbl_model");
     while($row=mysqli_fetch_array($result))
							{
								?>
      <div  style="box-shadow: 3px 3px 10px #000; border-radius: 10px; top: -34px;width: 260px;height: 120px;background-color: #bcdffa;color: #ecf0f3;margin-left:40%;;margin-top:8%;margin-bottom:15%;margin-right:6px%;">
        <div style="text-align: center;margin-top:43px;"><b> </b></div>
        <div style="text-align: center"> <b> <?php echo "<a style='color:#090' href='viewcab.php?model_id=".$row['model_id']."'>";?>
          <?php  echo $row['model']?>
          <?php "</a>"; ?>
          </b> </div>
      </div>
      <?php
							}
                              ?>
    </div>
  </div>
  </div>
</form>
</body>
</html>

</body>
</html>