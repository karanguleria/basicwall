<?php
/**
 * Template Name: Content Pages 
 */
?>
<?php get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover; background-position: center;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
             </div>
        </div>
  	</div>
</section>

<section class="content-page">
<div class="container">
    <div class="row">
        <div class="col-md-12">
		   <div class="content-description">
            <p><?php the_content(); ?></p>
		</div>
        </div>
    </div>
</div>	
</section>
<?php get_footer(); ?>