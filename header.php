<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Custom Design – Website Development</title>
    <meta name="description" content="Europe based web design and development firm that specializes on creating result-driven custom websites to grow brands online that deliver ROI.
      High-quality Website & online store development, website design, online stores, responsive web design, logo">


    <link rel="shortcut icon" type="image/png" href="img/servises_icons/favicon114.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./css/animate.min.css" />
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/interactive_bg-master/jquery.interactive_bg.min.js"></script>
    <script src="js/box.min.js"></script>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/><link rel='stylesheet' href='./css/ionicons.min.css'/>



    <?php
        // logo text
        define("LOGO_TEXT",     "Upsony");
        // menu
        define("HOME",     "Home");
        define("WORKS",    "Work");
        define("SERVICES", "Services");
        define("CONTACT",     "Contacts");
        // contacs
        define("EMAIL",    "info@upsony.com");
        define("PHONE_SHOW", "+ 370 630 52960");
        define("PHONE_NO_SPACES", "+37063052960");
        define("PHONE_SHOW_UK", "+44 7711 781778");
        define("PHONE_NO_SPACES_UK", "+447711781778");
        define("PHONE_NO_SPACES_UK_HOME", "+441163184143");
        // button
        define("QUESTIONS",     "Contact us");

    define("TRACKINGID", "UA-80316999-1");
    define("TRACKINGFACEBOOK", "858388497599496");



        include_once("fb-pixel.php") ;

    ?>
</head>


<body>

<?php
    include_once("analyticstracking.php");
?>

<!-- Main container -->
<div class="page-container">

    <!-- Navigation box -->
    <div class="box bgc-anti-flash-white l-box b-divider" id="nav-box">
        <div class="container box-md">
            <nav class="navbar row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo" alt="logo" height="35" src="img/logo7.png" >
                        <?php echo LOGO_TEXT; ?>
                    </a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation nav navbar-nav">
                        <li>
                            <a class="text-center" id="pl-432" href="index.php"><?php echo HOME; ?></a>
                        </li>
                        <li>
                            <a class="text-center" href="works.php"><?php echo WORKS; ?></a>
                        </li>
                        <li>
                            <a class="text-center" href="paslaugos.php"><?php echo SERVICES; ?></a>
                        </li>
                        <li>
                            <a class="text-center"  href="kontaktai.php"><?php echo CONTACT; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigation box END -->

