<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Professional Design – Website Development</title>
    <meta name="keywords" content="Website builder, cms, online shop development, create online shop, eshop, website development, cheap website, website design, online shop, eshop design, site design, responsive web design, logo, Create website, own website, website builder, website, quality website     ">
   <meta name="description" content="A digital agency focused on creating custom websites & digital design to grow brands online.   High-quality Website & online shop development, online shop design, website design, responsive web design, logo design">


<!--    A digital agency focused on creating custom websites & digital design to grow brands online.-->
<!--    Want high-quality website? Easy as pie! Awesome designs & features for personal and commercial use. Start NOW!-->
<!--    Experts in website development for global clients. We can help your website represent your services & professionalism to your audience.-->
<!--    Europe based web design and development firm that specializes in result-driven custom websites that deliver ROI.-->
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


<!--    High-quality  Website Design & development Company -->
<!--    Custom Design Company – Website Development-->

    <?php
        // logo text
        define("LOGO_TEXT",     "Microsony.eu");
        // menu
        define("HOME",     "Home");
        define("WORKS",    "Works");
        define("SERVICES", "Services");
        define("CONTACT",     "Contacts");
        // contacs
        define("EMAIL",    "info@matomi.lt");
        define("PHONE_SHOW", "+ 370 630 52960");
        define("PHONE_NO_SPACES", "+37063052960");
        // button
        define("QUESTIONS",     "Contact us");




    //    include_once("fb-pixel.php") ;

    ?>
</head>


<body>

<?php
    //include_once("analyticstracking.php");
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
                            <a class="text-center" id="pl-432" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="text-center" href="works.php">Works</a>
                        </li>
                        <li>
                            <a class="text-center" href="paslaugos.php">Services</a>
                        </li>
                        <li>
                            <a class="text-center"  href="kontaktai.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigation box END -->

