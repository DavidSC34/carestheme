<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col s12 m8 l8 xl8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h4><?php the_title(); ?></h4>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnails', array('class' => 'responsive-img'));
                    }
                    ?>
                    <p>Date: <?php the_time('F j, Y'); ?></p>
                    <p>Author: <?php the_author(); ?></p>
                    <p>
                        Category: <?php the_category(' / '); ?>
                        Tags: <?php the_tags('', ' / ', ''); ?>

                    </p>
                    <p><?php the_content(); ?></p>
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>