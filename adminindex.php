<?php
session_start();
if(isset($_SESSION['islogged'])){
    $islogged=$_SESSION['islogged'];
    //user data retrive
    include 'dbconn.php';
    $user_details= $_SESSION['user'];
    $userquery="SELECT * FROM `tbl_registration` WHERE name='$user_details'";
    $runquery=mysqli_query($conn,$userquery);
    if($runquery){
       $userdata=mysqli_fetch_array($runquery);
    }
}
else{
    $islogged=false;
    $userdata['name']='login now';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Taxibooking</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand">GO CABS</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="active"><a href="adminindex.php">Home</a></li>
                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANAGE CAB?<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="Admin/view_model.php">Manage Model</a></li>
                            <li><a href="Admin/view_type.php">Manage Type</a></li>
                        
                        </ul>
                    </li>
                    

                    <li class="active"><a href="index.php">Logout</a></li>
                 
    </section>

    <!-- HOME -->
    <section id="home">
        <div class="row">
            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Need a ride? Dont worry, we are here for you</h1>
                                <h3>Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                                </h3>
                                <a href="#" class="section-btn btn btn-default">Cabs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Need a ride? Dont worry, we are here for you</h1>
                                <h3>Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                                </h3>
                                <a href="#" class="section-btn btn btn-default">Cabs</a>
                            </div>
                        </div>
                    </div>
                </div>

                

        <!-- FOOTER -->
        <footer id="footer">
            
                            <div class="footer_menu">
                                <h2>Quick Links</h2>
                                <ul>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>