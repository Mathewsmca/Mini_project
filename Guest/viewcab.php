<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<body bgcolor="#DEFCFD">
<?php

include("dbconn.php");
?>
<form action="cabviewmore.php" style="padding-top: 7%;">
  <div  style="margin-left:124px; margin-bottom:5%;padding-left:-25px; box-shadow: 2px 2px 10px #000000; border-radius: 4px; top: 14px;padding-top:5%;">
    <h2 style="text-align: center;margin-left: 1%;margin-bottom: -8%;margin-top: -5%;font-family: fantasy;">...Available Taxi...</h2>
    <br>
    <div style="min-height: 80%;">
      <?php
	  $c_id=$_GET["model_id"];
      $result=mysqli_query($conn,"SELECT * FROM `tbl_cab`   where si_no	='$c_id'");
  
     while($row=mysqli_fetch_array($result))
							{
								?>
      <div  style="box-shadow: 3px 3px 10px #000; border-radius: 10px; top: 34px;width: 260px;height:439px;background-color: white;color: white;margin-left:7%;;margin-top:8%;margin-bottom:15%;margin-right:6px%;"> 
      <?php echo "<a style='color:#090' href='cabviewmore.php?p_id=".$row['cab_id']."'>";?>
        <div style="text-align: center;margin-top:43px;"><b> </b></div>
        <div style="text-align: center"> <b> <img src="../img/<?php echo $row['image'] ?>" width="250px" height="200px"/>
          <p style="color:black">Cab Name:</p>
          <p style="color:green">
            <?php  echo $row['cab_name']
            
            ?>
           
          <p style="color:black">Rate in kilometer:</p>
          <p style="color:green">
            <?php  echo $row['price']?>
            <br />
            <input type="button" name="booknow" value="Book Your Cab"  />
          </b> </div>
      </div>
      <?php "</a>"; ?>
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