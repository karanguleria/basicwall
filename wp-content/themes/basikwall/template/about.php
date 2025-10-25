<?php
/**
 * Template Name: About
 */
 
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
    <div class="text-center container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field("main_description"); ?></p>
            </div>
        </div>
  	</div>
</section>

<section id="about-us-section" class="bg-beige">
    <div class="container">
        <div class="row align-items-center">
            <div class="img_box_pro col-md-6">
                <img src="<?php the_field('about_sub_image'); ?>" alt="<?php the_field('about_sub_title'); ?>">
            </div>
            <div class="text_box_pro col-md-6">
                <h3><?php the_field('about_sub_title'); ?></h3>
                <p><?php the_field('about_sub_description'); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>