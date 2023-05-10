<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AlnPro-Reinigung</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/magnific.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="css/venobox.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="preloader"></div>
    <?php
    include "php_vendor/navbar.php";
    ?>
    <!-- header end -->
    <!-- Start Bottom Header -->
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="section-headline white-headline text-center">
                            <h3>AlnPro-Reinigung</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Heim</li>
                            <li>Kontakt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start contact Area -->
    <div class="contact-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-head">
                        <h3>Fordere eine <span class="color">Kontaktaufnahme an</span></h3>
                        <p>Unser Ziel ist es, dass Sie als Kunde immer rundum zufrieden sind, nachdem wir bei Ihnen waren. Als Teil davon haben wir eine Kundenzufriedenheitsgarantie für abgeschlossene Aufträge. Das heißt, wenn Sie mit dem, was wir für Sie getan haben, nicht zufrieden sind, teilen Sie uns dies spätestens 1 Tag nach Abschluss der Arbeit mit. Wir kommen kostenlos zu Ihnen und beseitigen die Mängel.</p>
                        <div class="project-share">
                            <h5>Unser sozialer Link:</h5>
                            <ul class="project-social">
                                <li>
                                    <a href="https://www.instagram.com/alnpro_reinigung/">
                                    <img src="img/icons/iconfinder_25_social_2609558.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/aln.pro.9">
                                    <img src="img/icons/iconfinder_facebook_386622.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/?lang=sr">
                                    <img src="img/icons/iconfinder_1_Twitter3_colored_svg_5296516.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@alnpro.ch">
                                    <img src="img/icons/output-onlinepngtools(1).png" style="height: 40px">
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name und Nachname" required data-error="Bitte geben Sie Ihren Vor- und Nachnamen ein.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" placeholder="E-mail Address " required data-error="Bitte geben Sie Ihre E-Mail-Adresse ein.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Thema" required data-error="Bitte geben Sie den Betreff Ihrer Nachricht ein.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Nachricht" class="form-control" required data-error="Bitte geben Sie Ihre Nachricht ein."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="contact-btn">Einreichen</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </div>
    <!-- Start contact Area -->
    <!-- End Contact Area -->
    <!-- Start Footer bottom Area -->

    <?php
    include "php_vendor/footer.php";
    ?>


    <!-- all js here -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
    <script src="js/mapcode.js"></script>
    <!-- waypoint js -->
    <script src="js/waypoints.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- magnific js -->
    <script src="js/magnific.min.js"></script>
    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- Form validator js -->
    <script src="js/form-validator.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>