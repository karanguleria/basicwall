<?php
/**
 * Template Name: Career 
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
<section class="career-basikwall">
        <?php get_template_part('template-parts/custom-posts/single-career'); ?>
</section>
<section class="end-note-section">
	<div class="container">
	    <div class="row">
		    <div class="col-md-12">
                    <p><?php the_field("end_note_text"); ?></p>
            </div>
		</div>
	 </div>
</section>
<section id="career-section">
    <div class="container">
    <div class="row">
		<div class="request-a-literature text-center">
                <a href="<?php the_field('apply_now_pdf_url'); ?>" target="_blank">
				<?php the_field('apply_now_pdf_text'); ?> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
        </div>
	</div>
</div>
</section>
<?php get_footer(); ?>