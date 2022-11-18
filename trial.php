<?php
    include('dbconn.php');

    if(isset($_POST['signup']))
    {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $email = $_POST['email'];
        $firstname = $_POST['fname'];
        $lastname= $_POST['lname'];
        $city=$_POST['city'];
        $name= $firstname." ".$lname;
        echo"$name";
    }
?>