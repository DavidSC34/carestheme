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