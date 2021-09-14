<?php 
/**
 * Template Name: Image Gallery
 */
get_header(); ?>

<section class="section">
    <div class="container">
        <h1>Gallery</h1>
        <div class="row">
           
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <?php $imagenes = get_post_meta(get_the_ID(), 'cares_gallery_images',true); ?>

                      <?php foreach($imagenes as $id => $imagen): ?>
                        <?php $imagen = wp_get_attachment_image_url( $id, 'full'); ?>
                            <div class="col s12 m4 l4">
                               <img class="materialboxed responsive-img"  src="<?php echo $imagen;?>">
                            </div>
                      <?php endforeach; ?>
                <?php endwhile;
                endif; ?>

            
        </div>
        
    </div>
</section>
<?php get_footer(); ?>