<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WBC Cares </title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header-cares">
        <div class="navbar-fixed">
            <nav class=" z-depth-0">
                <div class="nav-wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo left"><img class="header-cares--logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Logo-OUT.svg" alt="Logo WBC Cares" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/imgs/Logo-OVER.svg';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/imgs/Logo-OUT.svg';" /></a>
                    <!-- <ul class="right hide-on-med-and-down">
                        <li><a class="links" href="about.php">About us</a></li>
                        <li><a class="links" href="stories.php">Stories</a></li>
                        <li><a class="links" href="ambassadors.php">Ambassadors</a></li>
                        <li><a class="links" href="affiliated.php">Affiliated</a></li>
                        <li><a class="links" href="gallery.php">Gallery</a></li>
                        <li><a class="links" href="contact.php">Join</a></li>
                        <li><a class="waves-effect waves-light btn" href="https://www.paypal.me/wbccares" target="_blank">Donate</a></li>
                    </ul> -->
                    <?php

                    $args = array(
                        'menu_class' => 'right hide-on-med-and-down',
                        'container_id' => 'nav_principal',

                        'theme_location' => 'menu_principal'
                    );
                    wp_nav_menu($args);
                    ?>

                    <a href="#" data-target="slide-out" class="right sidenav-trigger show-on-medium-and-down"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="contain-menu">
                    <img src="imgs/logo-out.png" width="90" />
                    <a class="sidenav-close" href="#!">Close</a>
                </div>
            </li>
            <li><a class="waves-effect" href="about.php">About</a></li>
            <li><a class="waves-effect" href="stories.php">Stories</a></li>
            <li><a class="waves-effect" href="contact.php">Contact</a></li>
            <li><a class="waves-effect" href="https://www.paypal.me/wbccares">Donate</a></li>
        </ul>
    </header>