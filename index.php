<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
   

    <link rel="stylesheet" href="/css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WBC Cares </title>
    <?php wp_head();?>
</head>

<body>
    <header class="header-cares">
        <div class="navbar-fixed">
            <nav class=" z-depth-0">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left"><img class="header-cares--logo" src="/imgs/Logo-OUT.svg"  alt="Logo WBC Cares" onmouseover="this.src='imgs/Logo-OVER.svg';" onmouseout="this.src='imgs/Logo-OUT.svg';" /></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="links" href="about.php">About us</a></li>
                        <li><a class="links" href="stories.php">Stories</a></li>
                        <li><a class="links" href="ambassadors.php">Ambassadors</a></li>
                        <li><a class="links" href="affiliated.php">Affiliated</a></li>
                        <li><a class="links" href="gallery.php">Gallery</a></li>
                        <li><a class="links" href="contact.php">Join</a></li>
                        <li><a class="waves-effect waves-light btn" href="https://www.paypal.me/wbccares" target="_blank">Donate</a></li>
                    </ul>
                    <a href="#" data-target="slide-out" class="right sidenav-trigger show-on-medium-and-down"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="contain-menu">
                    <img src="/imgs/logo-out.png" width="90" />
                    <a class="sidenav-close" href="#!">Close</a>
                </div>
            </li>
            <li><a class="waves-effect" href="about.php">About</a></li>
            <li><a class="waves-effect" href="stories.php">Stories</a></li>
            <li><a class="waves-effect" href="contact.php">Contact</a></li>
            <li><a class="waves-effect" href="https://www.paypal.me/wbccares">Donate</a></li>
        </ul>
    </header>
<section class="section hero valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="hero-title center-align flow-text">
          A non profit organization of the World Boxing Council made up of compassionate volunteers to inspire by example.
        </h5>
      </div>
      <div class="col s12 m12 l12 center-align">
        <a class="waves-effect waves-light btn-large btn-involved" href="contact.php">GET INVOLVED!</a>
      </div>
    </div>
  </div>
</section>
<!-- seccion de video -->
<section class="section-image ">
  <div class="" id="video">
    <div class="c-video">
      <video class="background-video fade-out fade-in" autoplay loop playsinline muted style="z-index: 2;">
        <source src="video/wbc-cares-loop-web.mp4" type="video/mp4" />
      </video>
      <video class="video" playsinline>
        <source src="video/complete-video-web.mp4" type="video/mp4" />
      </video>

      <div id="video-controls" class="video-text-play" data-state="hidden">
        <h1 id="heading" class="">Big champions supporting<br> little champions.</h1>
        <div id="playpause" class="play-button-container">
          <div class="play-border">
            <div class="play-border-inner" style="
                    visibility: inherit;
                    opacity: 1;
                    transform-origin: center center 0px;
                    transform: matrix(1, 0, 0, 1, 0, 0);
                  "></div>
          </div>
          <button class="play-button" type="button" data-state="play" style="z-index: 3;"></button>
        </div>
      </div>

      <!-- Controls -->
      <div id="video-controls" class="controls" data-state="hidden">
        <div class="video-controls-container">
          <div class="orange-bar">
            <div class="orange-juice"></div>
          </div>
          <div id="playpausecontrols"></div>
          <script src="js/video.js"></script>
        </div>
      </div>
    </div>

    <!-- /.intro__video -->
</section>
<!-- seccion goal -->
<section class=" section-goal valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 l8 xl8">
        <h5 class="section-goal--title flow-text">
          It is our goal to inspire people to never surrender their dreams
          but instead, to approach life as champions!
        </h5>
        <p class="section-goal--subtitle flow-text">
          We do not limit our appetite for good <br />
          to just the poor and sick, but to anyone<br />
          who we feel we can help.
        </p>
      </div>
      <div class="col s12 m4 l4 xl4 section-goal-image">
        <img class="responsive-img" src="imgs/Ilustracion-WBC-Cares-1.png" alt="" />
      </div>
    </div>
  </div>
</section>
<section class="section section-believes valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12 xl12">
        <h4 class="section-believes--title center-align flow-text">
          Not only visiting, but caring about the health and well-being of
          others.
        </h4>
      </div>
    </div>
  </div>
</section>
<section class="section section-champion valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 l8 xl8">
        <h5 class="section-champion--title flow-text">
          WBC Cares believes you to don’t have to be a champion to live like
          one.
        </h5>
        <p class="section-champion--subtitle flow-text">
          Although the young are our primary focus,<br /> we support and partner
          with like-minded<br /> organization in the various countries it
          represents.
        </p>
      </div>
      <div class="col s12 m4 l4 xl4">
        <img class="responsive-img" src="imgs/Ilustracion-WBC-Cares-2.png" alt="" />
      </div>
    </div>
  </div>
</section>

<!-- <footer class="footer-cares"></footer> -->
<footer class="page-footer footer-cares">
    <div class="container">
        <div class="row">
            <div class="col l6 s12 contenido-footer">
                <h5 class="white-text">WBC CARES</h5>
                <p class="grey-text text-lighten-4">A non profit organization of the World Boxing Council made up of compassionate volunteers to inspire by example.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <nav>
                    <div class="nav-wrapper sociales contenido-footer">

                        <ul class="left ">
                            <li><a href="https://www.facebook.com/wbccares"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/@wbccares"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/wbccares/"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/jill-diamond-chastain-5701844/"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--.col l4-->
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © <?php echo date('Y'); ?> World Boxing Council
            <a class="grey-text text-lighten-4 right" href="https://wbcboxing.com/">WBC</a>
        </div>
    </div>
</footer>
<!-- Compiled and minified JavaScript -->

<script src="https://kit.fontawesome.com/97f6e04dbb.js" crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
<?php wp_footer();?
</body>

</html>