<?php get_header(); ?>
<section class="stories">
    <div class="container">
        <h1>
            <?php
            $id_blog = get_option('page_for_posts');
            echo get_post_meta($id_blog, 'cares_blog_blog_slogan', true);
            ?>
        </h1>
        <div class="row">
            <div class="col s12 m12 l12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2 class="header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="card horizontal">
                            <div class="card-image">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('mediano', array('class' => 'responsive-img'));
                                }
                                ?>
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p><strong>Date:</strong> <?php the_time(get_option('date_format')); ?></p>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="card-action">
                                    <a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <ul class="pagination">
                    <li class="waves-effect">
                        <?php
                        previous_posts_link('
                            Previous<i class="material-icons">chevron_left</i>
                           ');
                        ?>
                    </li>
                    <li class="waves-effect">
                        <?php
                        next_posts_link('
                             <i class="material-icons">chevron_right</i>Next
                           ');
                        ?>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>