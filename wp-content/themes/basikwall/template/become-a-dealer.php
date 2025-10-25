<?php
/**
 * Template Name: Become a Dealer 
 */
global $post;
$dealer_page_id = $post->ID;
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header"
    style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('dealer_description', $dealer_page_id); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="installation-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <?php echo the_field('shortcode_for_dealer_form', $dealer_page_id); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>