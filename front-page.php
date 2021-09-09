<?php get_header(); ?>
<?php while (have_posts()) : the_post();  ?>
  <section class="section hero valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="hero-title center-align flow-text">
            <?php echo get_post_meta(get_the_ID(), 'cares_homepage_main_sec_text_1', true); ?>
          </h5>
        </div>
        <div class="col s12 m12 l12 center-align">
          <?php $join = get_page_by_title('Join');?>
          <a class="waves-effect waves-light btn-large btn-involved" href="<?php echo get_permalink($join->ID);?>"> <?php echo get_post_meta(get_the_ID(), 'cares_homepage_main_sec_btn_1', true); ?></a>
        </div>
      </div>
    </div>
  </section>
  <!-- seccion de video -->
  <section class="section-image ">
    <div class="" id="video">
      <div class="c-video">
        <video class="background-video fade-out fade-in" autoplay loop playsinline muted style="z-index: 2;">
          <source src="<?php echo get_post_meta(get_the_ID(), 'cares_homepage_video_intro', true); ?>" type="video/mp4" />
        </video>
        <video class="video" playsinline>
          <source src="<?php echo get_post_meta(get_the_ID(), 'cares_homepage_video_full', true); ?>" type="video/mp4" />
        </video>

        <div id="video-controls" class="video-text-play" data-state="hidden">
          <h1 id="heading"><?php echo get_post_meta(get_the_ID(), 'cares_homepage_video_title', true); ?></h1>
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
            <script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
          </div>
        </div>
      </div>

      <!-- /.intro__video -->
  </section>
  <!-- seccion goal -->
  <section class="section-goal valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 l8 xl8">
        <?php echo get_post_meta(get_the_ID(), 'cares_homepage_goal_section', true); ?>
          <!-- <h5 class="section-goal--title flow-text">
            It is our goal to inspire people to never surrender their dreams
            but instead, to approach life as champions!
          </h5>
          <p class="section-goal--subtitle flow-text">
            We do not limit our appetite for good <br />
            to just the poor and sick, but to anyone<br />
            who we feel we can help.
          </p> -->
        </div>
        <div class="col s12 m4 l4 xl4 section-goal-image">
          <img class="responsive-img" src="<?php echo get_post_meta(get_the_ID(), 'cares_homepage_goal_image', true); ?>" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- section-believes -->
  <section class="section section-believes valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12 xl12">
          <h4 class="section-believes--title center-align flow-text">
          <?php echo get_post_meta(get_the_ID(), 'cares_homepage_believe_title', true); ?>
          </h4>
        </div>
      </div>
    </div>
  </section>
    <!-- section-champion -->
  <section class="section section-champion valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 l8 xl8">
        <?php echo get_post_meta(get_the_ID(), 'cares_homepage_champion_section', true); ?>
          <!-- <h5 class="section-champion--title flow-text">
            WBC Cares believes you to don’t have to be a champion to live like
            one.
          </h5>
          <p class="section-champion--subtitle flow-text">
            Although the young are our primary focus,<br /> we support and partner
            with like-minded<br /> organization in the various countries it
            represents.
          </p> -->
        </div>
        <div class="col s12 m4 l4 xl4">
          <img class="responsive-img" src="<?php echo get_post_meta(get_the_ID(), 'cares_homepage_champion_image', true); ?>" alt="" />
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
<?php get_footer(); ?>