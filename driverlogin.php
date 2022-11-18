<html>
<head>
<meta charset="utf-8">
<title> Document</title>
<style>
  
  </style>
</head>
<body bgcolor="#808080">
<?php
include("dbconn.php");
?>
<form action="driverlogin_action.php" method="post" >
  <div class="container" style="width:100%;margin-left:10%;margin-bottom: 14%;padding-top:8%;background-image:url(images/about-2-720x720.jpg) ;background-repeat: no-repeat;background-size: cover;" >
    <div class="row">
        <h2 style="text-align: center;margin-top: 6%;"><u>DRIVER LOGIN</u></h2>
        <br />
        <div class="row">
          <div class="col-md-3" style="text-align:left">
            <label>Email</label>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" name="txt_name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" style="width:500px;" autocomplete="off">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:left">
            <label>Password</label>
          </div>
          <div class="col-md-6">
            <input type="password" class="form-control" name="txt_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" style="width:500px;"  required  >
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" name="submit" value="Login" class="btn btn-primary" style="margin-left:55%">
        </div>
        <p> If Not Registered ? <a href="driverreg.php">Click Here</a></p>
        <br>
        
        <p> Forgot Password ? <a href="forgot.php">Click Here</a></p>
        <br>
        <br>
      </div>
    </div>
  </div>
  </div>
  </div>
</form>
</body>
</html>