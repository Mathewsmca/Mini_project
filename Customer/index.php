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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="Guest/modelview.php">Book now</a></li>
                    <li><a href="offers.html">Offers</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="blog-posts.html">Blog</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="driverreg.php">Register A Cab?</a></li>
                    <!-- <li><a href="offers.html" style= "margin-left: 252px;"></a></li> -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $userdata['name'];?><span class="caret"></span></a>

                        <ul class="dropdown-menu">
                        <?php
                    
                            if($islogged==false)
                            {
                                echo "<li><a href='login.php'>Login</a></li>";
                            }
                            else{
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }   
                        ?>
                            <!-- <li><a href="testimonials.html">Testimonials</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
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
                                <a href="Service.html" class="section-btn btn btn-default">Cabs</a>
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
                                <a href="Service.html" class="section-btn btn btn-default">Cabs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Book a cab now</h1>
                                <h3>Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                                </h3>
                                <a href="Service.html" class="section-btn btn btn-default">Cabs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <h2>About us</h2>

                            <br>

                            <p class="lead">Globally Connected by Large Networ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Offers <small>....</small></h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb">
                            <div class="team-image">
                                <img src="images/offer-1-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>FAMILY CARS</h3>

                                <p class="lead"><small>from</small> <strong>$120</strong> <small></small></p>

                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</span>
                            </div>
                            <div class="team-thumb-actions">
                                <a href="offers.html" class="section-btn btn btn-primary btn-block">View Offer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb">
                            <div class="team-image">
                                <img src="images/offer-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>LUXURY & PRESTIGE CARS</h3>

                                <p class="lead"><small>from</small> <strong>$99</strong> <small></small></p>

                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.</span>
                            </div>
                            <div class="team-thumb-actions">
                                <a href="offers.html" class="section-btn btn btn-primary btn-block">View Offer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb">
                            <div class="team-image">
                                <img src="images/offer-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>TOP SELLERS</h3>

                                <p class="lead"><small>from</small> <strong>$110</strong> <small></small></p>

                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</span>
                            </div>
                            <div class="team-thumb-actions">
                                <a href="offers.html" class="section-btn btn btn-primary btn-block">View Offer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start services Area -->
        <section class="services-area pb-120">
            <div class="container">
                <div class="row section-title">
                    <h1>What Services we offer to our clients</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 single-service">
                        <span class="lnr lnr-car"></span>
                        <a href="#">
                            <h4>Taxi Service</h4>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                    <div class="col-lg-4 single-service">
                        <span class="lnr lnr-briefcase"></span>
                        <a href="#">
                            <h4>Office Pick-ups</h4>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                    <div class="col-lg-4 single-service">
                        <span class="lnr lnr-bus"></span>
                        <a href="#">
                            <h4>Event Transportation</h4>
                        </a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End services Area -->
        

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="section-title">
                                <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                                <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <input type="submit" class="form-control" name="send message" value="Send Message">
                            </div>

                        </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="contact-image">
                            <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="footer">
            
                            <div class="footer_menu">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="terms.html">Terms & Conditions</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="adminlogin.php"><h4>ADMIN LOGIN<h4></a></li>
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