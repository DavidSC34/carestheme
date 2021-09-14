<?php get_header(); ?>
<div class="container ">
    <div class="row story-entry">
        <div class="col s12 m12 l12 xl12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="card-panel z-depth-4 story-content ">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'responsive-img'));
                        }
                        ?>
                        <h4><?php the_title(); ?></h4>
                        <!-- <p>Date: <?php the_time('F j, Y'); ?></p>
                        <p>Author: <?php the_author(); ?></p>
                        <p>
                            Category: <?php the_category(' / '); ?>
                            Tags: <?php the_tags('', ' / ', ''); ?>

                        </p> -->
                        <p class="left-align"><?php the_content(); ?></p>
                    </div>
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>