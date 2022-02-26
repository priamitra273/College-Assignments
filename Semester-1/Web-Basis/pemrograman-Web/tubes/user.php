<?php 
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Metas -->
    <title>Life Care</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <!-- [if lt IE 9] -->
    </head>
    <body class="clinic_version">
        <header>
            <div class="header-top wow fadeIn">
                <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
                </div>
                </div>
            </div>
            <div class="header-bottom wow fadeIn">
                <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                    
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="index.html">Home</a></li>
                            <li><a data-scroll href="logout.php" style="margin-left:900px;">Logout</a></li>
                        </ul>
                    </div>
                </nav>
                </div>
            </div>
        </header>
            <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png'); padding-top:200px;">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                            <div class="row text-center">
                            <div class="col-md-4">
                                <div class="pricing-table">
                                    <div class="pricing-table-header">
                                        <h2>INFORMATION</h2>
                                        <h3>All INFORMATION</h3>
                                    </div>
                                    <div class="pricing-table-features">
                                        <p><i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                            </svg></i> News
                                        </p>
                                        <p><i class="fa fa-rocket"></i> Promotion</p>
                                    </div>
                                    <div class="pricing-table-sign-up">
                                        <a href="infouser.php" data-scroll="" class="btn btn-dark btn-radius btn-brd">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-table pricing-table-highlighted">
                                    <div class="pricing-table-header grd1">
                                        <h2> OUR DOCTORS</h2>
                                        <h3>Profile Doctors</h3>
                                    </div>
                                    <div class="pricing-table-space"></div>
                                    <div class="pricing-table-text">
                                        <p>Where to find the doctor you need</p>
                                    </div>
                                    <div class="pricing-table-features">
                                        <p><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg></i>Profile
                                        </p>
                                        <p><i class="fa fa-rocket"></i>Speciality</p>
                                    </div>
                                    <div class="pricing-table-sign-up">
                                        <a href="homeuser.php" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-table">
                                    <div class="pricing-table-header">
                                        <h2>Contact</h2>
                                        <h3>Contact Me</h3>
                                    </div>
                                    <div class="pricing-table-features">
                                        <p><i class="fa fa-envelope-o"></i> Businesses</p>
                                        <p><i class="fa fa-rocket"></i> Address</p>
                                    </div>
                                    <div class="pricing-table-sign-up">
                                        <a href="contactuser.php" data-scroll="" class="btn btn-dark btn-radius btn-brd">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end pane -->
        <!-- all js files -->
        <script src="js/all.js"></script>
        <!-- all plugins -->
        <script src="js/custom.js"></script>
        <!-- map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
    </body>
    </html>
