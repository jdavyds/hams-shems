<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/core/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/core/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/core/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/core/logo.png">
    <title>Growth Strategy & Digital Agency </title>
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/themifyIcons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./lib/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./lib/OwlCarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="./src/main.css">
</head>

<body>
    <header>
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./assets/core/logo.png" alt="KyLeads Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./assets/icons/menu.svg">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link   <?php if ($first_part == "home") {echo "active";} else {echo "noactive";}?>" href="index.html">
                                Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($first_part == "logo_brand_design") {echo "active";} else {echo "noactive";}?>" href="logo_brand_design">
                                Brand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($first_part == "pitch_and_business") {echo "active";} else {echo "noactive";}?>" href="pitch_and_business">
                                Biz Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($first_part == "ads") {echo "active";} else {echo "noactive";}?>" href="ads">
                                Advertising
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link   <?php if ($first_part == "growth_marketing") {echo "active";} else {echo "noactive";}?>" href="growth_marketing">
                                Growth
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?php if ($first_part == "corperate_structure") {echo "active";} else {echo "noactive";}?>" href="corperate_structure">
                                Structure</a>
                        </li>
          
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link btn k_btn text-white" href="https://has.com.ng/quote.html">
                                START A PROJECT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>