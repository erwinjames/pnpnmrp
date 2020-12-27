<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PNPMRP</title>
    <link rel="shortcut icon" href="PNP.ico">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="css/csslogin.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="PNPMRP.ico">
                                <a href="index.html">
                                    <center><img src="img/PNP2.png" alt="" style="width: 50%; height: 50%; display: block;"></center>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="#">About</a>
                                            <ul class="submenu">
                                                    <li><a href="history.php">History</a></li>
                                                    <li><a href="mission.php">The Mission</a></li>
                                                    <li><a href="vision.php">The Vision</a></li>
                                                    <li><a href="objectives.php">The Objectives</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.php">Events</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
            <table>
                <tr>
                <td>
                    <span style="color: white; font-size: 12px; font-family: arial;">Email or Phone</span> <br>
                    <input type="text" name="">
                </td>
                <td>
                    <span style="color: white; font-size: 12px; font-family: arial">Password</span><br>
                    <input type="Password" name="">
                    <input class="sub" type="submit" value="Log In" name="">
                </td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <a href="Facebook.com" style="font-size: 12px; font-family: arial">Forgotten account?</a>
                </td>
                </tr>
            </table>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<!-- slider_area_start -->
<!-- <div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-8">
                    <div class="slider_text">
                        <span></span>
                        <h3>Not a member yet? Be part of our Team now!</h3>
                        <br>
                        <br>
                        <span></span><br><br>
                        <a href="registration.html" class="boxed-btn3">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="contact-section">
            <div class="container">
                        <div class="row">

<?php
    $connection = mysqli_connect("localhost","root","","adminpanel");

    

        $query = "SELECT * FROM event ";
        $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    { $dateL = date('d',strtotime($row['Dates']));
        ?>

            <div class="[ col-xs-12 col-sm-offset-2 col-sm-12 ]">
                <ul class="event-list">
                    <li>
                        <time datetime="<?php echo $row['Dates'];?>">
                            <span class="day"><?php echo $dateL;?></span>
                        </time>
                        <img alt="Independence Day" src="admin/upload/<?php echo $row['Photo'];?>" />
                        <div class="info">
                            <h2 class="title"><?php echo $row['Title']; ?></h2>
                            <p style="font-size: 14px;" class="desc"><?php echo $row['Speaker']; ?></p>
                            <p class="desc"><?php echo $row['ShortDesc']; ?></p>
                        </div>
                    </li>

                </ul>
            </div>
        <?php } ?>
        </div>
            </div>
        </section>

    <!-- slider_area_end -->

      <!-- Column -->
      <!-- Column -->
    <!-- footer_start  -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <p style="text-align: justify;">A movement which aims to mobilize all Filipinos for nation building through the practical exercise of human values in our daily lives as citizens and to awaken us all to the power of this values in achieving our individuals and national goals.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Contact Info
                            </h3>
                            <p>Address: Rufina Arcade, Highway Mambaling, Cebu City, 6000.</p>
                            <ul>
                                <li><a href="#">Phone: +63 995 458 4300 </a></li>
                                <li><a href="#">Phone: +63 930 928 1966 </a></li>
                                <li><a href="#">Email: pnpmrpci@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="copy_right">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

</body>

</html>