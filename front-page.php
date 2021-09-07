<?php get_header(); ?>
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
<section>
  <div class="container">
    <div class="row">
      <div class="col s12 m7">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="card horizontal">
              <div class="card-image">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('post-thumbnails', array('class' => 'responsive-img'));
                }
                ?>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><?php the_excerpt(); ?></p>
                </div>
                <div class="card-action">
                  <a href="<?php the_permalink(); ?>">Read more</a>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>

      </div>
    </div>
    <div class="row">
      <div class="col s12 m7">
        <?php get_template_part('template-parts/content', 'paginacion'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>