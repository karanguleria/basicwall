<?php
/**
 * Template Name: FAQ
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
<section class="faq-basikwall">
        <?php get_template_part('template-parts/custom-posts/single-faq'); ?>
</section>
<?php get_footer(); ?>


