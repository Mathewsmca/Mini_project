
<?php
 session_start();
 include 'dbconn.php';
 
 if(isset($_POST['submit']))
 {
     if(!empty($_POST['email']) && !empty($_POST['password']))
     {
        $email=$_POST['email'];
        $password= $_POST['password'];
        $enpass= md5($password);
         $sql = "SELECT * from tbl_login where email ='$email' AND password='$enpass'";
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)==1){
                $details_res= mysqli_query($conn,"SELECT * from tbl_registration where email='$email'");
                if($details_res){
                    $user_row= mysqli_fetch_array($details_res);
                    $_SESSION['sid'] = $email;
                    $_SESSION['islogged']=true;
                    $_SESSION['user']= $user_row['name'];
                    echo "<script>alert('Login Successfull !!');</script>";
                    
                    header("location:index.php");
                }
                else{
                    echo "<script>alert('Login failed !! Please try again !!');</script>";
                }
                
            }
            else{
                echo "<script>alert('Login failed !!');</script>";
                
            }
       
     }
 }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #080710;
        }
        
        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }
        
        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        
        .shape:first-child {
            background: linear-gradient( #1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }
        
        .shape:last-child {
            background: linear-gradient( to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }
        
        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }
        
        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        
        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }
        
        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        
        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        
         ::placeholder {
            color: #e5e5e5;
        }
        
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        .social {
            margin-top: 30px;
            display: flex;
        }
        
        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }
        
        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }
        
        .social .fb {
            margin-left: 25px;
        }
        
        .social i {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
        </div>
        <form action="login.php" method="POST">
        <h3>Login Now</h3>


        <label for="username">Username</label>
        <input type="text" name="email" placeholder="Email " id="username" autocomplete ="off">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" autocomplete ="off">

        <input type="submit" name="submit" value="login">

        <div>
            <br>
            <p> If not registered ? <a href="register.php"> click me </a></p>
            <br>
            <p> Forgot password ? <a href="reset_psw.php"> click me </a></p>
        </div>


    </form>
</body>

</html>