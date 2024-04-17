<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                <?php echo get_theme_mod('header_email', 'info@icode.guru'); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <a href="https://www.facebook.com/iCodeGuru" target="_blank">
                                <li class="ulright-li">
                                    <i class="fab fa-facebook-square"></i>
                                </li>
                            </a>
                            <a href="https://www.youtube.com/iCodeGuru0" target="_blank">
                                <li class="ulright-li">
                                    <i class="fab fa-youtube"></i>
                                </li>
                            </a>
                            <a href="https://www.linkedin.com/company/iCode-Guru" target="_blank" rel="noopener noreferrer">
                                <li class="ulright-li">
                                    <i class="fab fa-linkedin"></i>
                                </li>
                            </a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-8 logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <h2 class="mt-3"> <span class="fw-bold">iCode</span> Guru</h2>
                        </a>

                    </div>
                    <div class="col-lg-6 col-md-12 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => 'ul',
                                    'container_class' => 'navbar-nav',
                                    'menu_class' => 'navbar-nav',
                                )); ?>


                                <!-- <a class="nav-btn m-1" href="<?php /*echo esc_url(home_url('/apply-for-funding'));*/ ?>">
                                    <button class="btn btn-success">Apply For Funding</button>
                                </a> -->
                                <a class="nav-btn donate-btn " href="<?php echo esc_url(home_url('/')); ?>">
                                    <button class="btn btn-success">Donate Now</button>
                                </a>
                            </div>
                        </nav>
                    </div>


                </div>
            </div>
        </div>
    </header>