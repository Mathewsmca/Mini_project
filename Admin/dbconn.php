<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "gocab";

$conn = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()){
    die("fail to connect with mysql: ". mysqli_connect_error());
}
?>