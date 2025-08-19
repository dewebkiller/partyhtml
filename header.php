<!DOCTYPE html>
<html>
<head>
    <title>Party Depot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Party Depot">
    <meta name="keywords" content="Party Depot, Starter template, Animate on scroll library, Hover CSS, Fontawesome implementation, Owl Carousel">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/shopify.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>

<body class="<?php basename($_SERVER['PHP_SELF'], '.php') ?>">
    <header>
        
        <section class="btm-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo"><img src="images/logo.jpg" alt="Party Depot"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="#">Navigation</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav">
                                        <?php
                                        $url_pages = $_SERVER['REQUEST_URI'];
                                        $ex_pages = explode("/", $url_pages);
                                        $curr_page = $ex_pages[count($ex_pages) - 1];
                                        ?>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'index.php') || $curr_page == "") {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="./">Home </a>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'about.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="about.php">About Us </a>

                                        </li>
                                        <li class="nav-item dropdown <?php
                                                                        if (($curr_page == 'gallery.php')) {
                                                                            echo "active";
                                                                        }
                                                                        ?> ">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="#">Action</a></li>
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="#">Another action</a></li>
                                                <a class="dropdown-item hvr-sweep-to-right" href="#">Something else here</a>
                                            </ul>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'gallery.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="gallery.php">Gallery </a>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'contact.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>

                                    </ul>

                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>