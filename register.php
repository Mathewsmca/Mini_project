<?php
session_start();
if(isset($_SESSION['islogged'])){
    $islogged=$_SESSION['islogged'];
    if($islogged==true){
        header('Location: index.php');
    }
}

    include('dbconn.php');

    if(isset($_POST['signup']))
    {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $email = $_POST['email'];
        $firstname = $_POST['fname'];
        $lastname= $_POST['lname'];
        // $city=$_POST['city'];
        $name= $firstname." ".$lastname;
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $pass=md5($password);
        $passcheck=$_POST['cpassword'];
        $status=1;
            //password confirm check
        $reg= "INSERT INTO `tbl_registration`(`name`, `email`, `password`, `phone`, `gender`, `status`)  VALUES ( '$name', '$email', '$pass', '$phone','$gender', '$status')";
        $regquery=mysqli_query($conn, $reg);
        $fkey=mysqli_insert_id($conn);
        if($regquery){
           
            $login = "INSERT INTO tbl_login VALUES ('$fkey','$email','$pass')";
            if(mysqli_query($conn, $login)){
              echo"<script> alert('registration successful');</script>";
                $_SESSION['islogged']=true;
                $_SESSION['user']= $name;
                header('location: index.php');
                
            } else{
                echo "ERROR: Could not able to execute $login. " . mysqli_error($conn);
            }
        }
        else{
            echo "ERROR: Could not able to execute $reg. " . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient( 105deg, #4a7295, #dee1e6);
        }
        
        .wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .registration_form {
            background: white;
            padding: 25px;
            border-radius: 5px;
            width: 400px;
        }
        
        .registration_form .title {
            text-align: center;
            font-size: 25px;
            text-transform: uppercase;
            color: white;
            background: rgb(19, 25, 33);
            letter-spacing: 2px;
            font-weight: 700;
            margin-top: -25px;
            margin-left: -25px;
            margin-right: -25px;
        }
        
        .form_wrap {
            margin-top: 35px;
        }
        
        .form_wrap .input_wrap {
            margin-bottom: 15px;
        }
        
        .form_wrap .input_wrap:last-child {
            margin-bottom: 0;
        }
        
        .form_wrap .input_wrap label {
            display: block;
            margin-bottom: 3px;
            color: #1a1a1f;
        }
        
        .form_wrap .input_grp {
            display: flex;
            justify-content: space-between;
        }
        
        .form_wrap .input_grp input[type="text"] {
            width: 165px;
        }
        
        .form_wrap input[type="text"] {
            width: 100%;
            border-radius: 3px;
            border: 1.3px solid #9597a6;
            padding: 10px;
            outline: none;
        }
        
        .form_wrap input[type="password"] {
            width: 100%;
            border-radius: 3px;
            border: 1.3px solid #9597a6;
            padding: 10px;
            outline: none;
        }
        
        .form_wrap input[type="text"]:focus {
            border-color: #8493b8;
        }
        
        .form_wrap ul {
            border: 1px solid rgb(18, 19, 20);
            width: 70%;
            background: rgb(206, 238, 242);
            margin-left: 15%;
            padding: 8px 10px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
        }
        
        .form_wrap ul li:first-child {
            margin-right: 15px;
        }
        
        .form_wrap ul .radio_wrap {
            position: relative;
            margin-bottom: 0;
        }
        
        .form_wrap ul .radio_wrap .input_radio {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
        }
        
        .form_wrap ul .radio_wrap span {
            display: inline-block;
            font-size: 17px;
            padding: 3px 15px;
            border-radius: 15px;
            color: #101749;
        }
        
        .form_wrap .input_radio:checked~span {
            background: #0a0a0a;
            color: white;
        }
        
        .form_wrap .submit_btn {
            width: 100%;
            background: #0d6ad7;
            padding: 10px;
            border: 0;
            color: white;
            font-size: 17px;
            border-radius: 3px;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
        }
        
        .form_wrap .submit_btn:hover {
            background: #051c94;
        }
        span{
            color:red;
        }
        #Phonenumber{
            width: 347px;
            height: 42px;
        }
    </style>

<script>

function validate()
         {
             var fname,lname,email,phone;
             
             fname=document.getElementById('fname').value;
             lname=document.getElementById('lname').value;
             email=document.getElementById('email').value;
             phone=document.getElementById('Phonenumber').value;
             
              if(fname=="")
             {
                 document.getElementById('fname_error').innerHTML="**Enter your first name**";
                 document.getElementById('fname_error').style.display="block";
                 return false;
             }
             else
             {
                document.getElementById('fname_error').style.display="none";
             }
             if(/^[a-zA-Z]+$/.test(fname) == false)
             {  
                 document.getElementById('fname_error').innerHTML="**Please enter a valid first name**";
                 document.getElementById('fname_error').style.display="block";
                 return false;
             }
             else
             {
                document.getElementById('fname_error').style.display="none";
             }


             if(lname=="")
             {
                 document.getElementById('lname_error').innerHTML="**Enter your last name**";
                 document.getElementById('lname_error').style.display="block";
                 return false;
             }
             else
             {
                document.getElementById('lname_error').style.display="none";
             }
             if(/^[a-zA-Z]+$/.test(fname) == false)
             {  
                 document.getElementById('lname_error').innerHTML="**Please enter a valid last name**";
                 document.getElementById('lname_error').style.display="block";
                 return false;
             }
             else
             {
                document.getElementById('lname_error').style.display="none";
             }


             

             if(phone=="")
             {
                 document.getElementById('phone_error').innerHTML="**Enter your phone number**";
                 document.getElementById('phone_error').style.display="block";
                 return false;
             }
             else
            {
                document.getElementById('phone_error').style.display="none";
            }
             if(/^[6-9]\d{9}$/.test(phone)==false) 
             {
                 document.getElementById('phone_error').innerHTML="**Enter a valid phone number**";
                 document.getElementById('phone_error').style.display="block";
                 return false;
             }
             else
            {
                document.getElementById('phone_error').style.display="none";
            }
            
             if(email=="")
             {
                 document.getElementById('email_error').innerHTML="**Enter an email id**";
                 document.getElementById('email_error').style.display="block";
                 return false;
             }
             else
             {
                document.getElementById('email_error').style.display="none";
             }
             if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
             {
                 document.getElementById('email_error').innerHTML="**Enter a valid email id**";
                 document.getElementById('email_error').style.display="block";
                   return false;
             }
             else
             {
                document.getElementById('email_error').style.display="none";
             }
            }
             
      
     </script>







    <script type="text/javascript">
        function checkPass()
        {
            var password = document.getElementById('password2');
            var confirm  = document.getElementById('confirm2');
            var message = document.getElementById('confirm-message2');
            if(password.value!=""){
            if(password.value == confirm.value){
                message.innerHTML = 'Passwords Match!';
            }else{
                message.innerHTML = 'Passwords Do Not Match!';
            }
        }
        }  
    </script>
</head>

<body>
    <div class="wrapper">


        <div style="box-shadow: 2px 2px 10px #0a0a0a; border-radius: 4px; top: 14px:">
            <div class="registration_form">
                <div class="title">
                    Register Account
                </div>

                <form action="register.php" method="post" onsubmit="return validate()">
                    <div class="form_wrap">
                        <div class="input_grp">
                            <div class="input_wrap">
                                <label for="fname">First Name</label>
                                <input type="text" id='fname' name="fname"    autocomplete ="off" onkeyup="return validate()" onblur="return validate()">
                                <span id="fname_error" class="confirm-message"></span>
                            </div>
                            <div class="input_wrap">
                                <label for="lname">Last Name</label>
                                <input type="text" id='lname' name="lname"    autocomplete ="off" onkeyup="return validate()" onblur="return validate()">
                                <span id="lname_error" class="confirm-message"></span>
                            </div>
    </div>

                        <!-- <div class="input_wrap">
                            <label for="city">City</label>
                            <input type="text" name="city" required="" pattern="^[A-Za_z][A-Za-z -]+$" id="city" autocomplete ="off">
                        </div> -->
                        <div class="input_wrap">
                            <label for="country">Phone number</label>
                            <input type="number"  name="phone"   id="Phonenumber" maxlength="10" autocomplete ="off" onkeyup="return validate()" onblur="return validate()">
                            <span id="phone_error" class="confirm-message"></span>
                        </div>




                        <div class="input_wrap">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email"     autocomplete ="off" onkeyup="return validate()" onblur="return validate()">
                            <span id="email_error" class="confirm-message"></span>
                        </div>



                        <div class="input_wrap">
                            <label for="country">Password</label>
                            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password2" onkeyup="checkPass();">
                        </div>
                        <div class="input_wrap">
                            <label for="country">Confirm Password</label>
                            <input type="password"  name="cpassword" id="confirm2" onkeyup="checkPass();">
                            <span id="confirm-message2" class="confirm-message"></span>
                        </div>
                        <div class="input_wrap">
                            <label>Gender</label>
                            <ul>
                                <li>
                                    <label class="radio_wrap">
                                <input type="radio" name="gender" value="male" class="input_radio" checked>
                                <span>Male</span>
                            </label>
                                </li>
                                <li>
                                    <label class="radio_wrap">
                                <input type="radio" name="gender" value="female" class="input_radio">
                                <span>Female</span>
                            </label>
                                </li>
                            </ul>
                        </div>



                        <div class="input_wrap">
                            <input type="submit" id="signup" name="signup" value="Register Now" class="submit_btn" onclick="return validate()">
                        </div>



                    </div>
                </form>
            </div>
        </div>
        

    </div>
    
</body>

</html>