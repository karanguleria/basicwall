<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
 get_header();
global $post;
$post_id = $post->ID;
?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field("main_description"); ?></p>
            </div>
        </div>
  	</div>
</section>
<section class="single-gallery-post">
  <div class="container">
    <div class="row">
	    <?php 
            $images = get_field('gallery_images_pg');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <div class="gallery-container">
                    <?php foreach( $images as $k => $image ):  ?>
                        <div class="gallery-item" data-index="1">
                            <a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php the_title(); ?>">
                                <img class="example-image" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </div>
	
</div>
</section>


<?php get_footer(); ?>