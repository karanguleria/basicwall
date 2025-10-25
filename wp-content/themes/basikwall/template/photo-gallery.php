<?php
/**
 * Template Name: Photo Gallery 
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
<section class="photo-gallery">
  <div class="container">
    <div class="row">
	<?php
    $loop = new WP_Query(array('post_type' => 'photogallery', 'posts_per_page' => 6));
    while ($loop->have_posts()) : $loop->the_post();
     ?>
      <div class="gallery-item1 col-sm-6">
	  <a class="vimeo-popup" href="<?php the_permalink();?>">
        <img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_field('photos_title_1'); ?>">
        <div class="gallery-item-caption">
          <div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>
          </a>
        </div>
      </div>
	  <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
    </div>
 </div>
</section>
<?php get_footer(); ?>
