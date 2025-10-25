<?php
/**
 * Template Name: Find a Dealer 
 */
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('main_description'); ?></p>
            </div>
        </div>
  	</div>
</section>
<section class="dealer-section">
    <div class="container">
	    <div class="row">
            <?php echo the_field('shortcode_find_a_dealer'); ?>
        </div>
    </div>
</section>
<section class="address-section">
    <div class="container">
	    <div class="row">
            <div class="center_description text-center">
            <h3><?php the_field("address_text"); ?></h3>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>