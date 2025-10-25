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
<section class="photo-gallery">
  <div class="container">
  <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array('posts_per_page' => '-1',
                'paged' => $paged, 'post_type' => 'photogallery');
            $postslist = new WP_Query($args);

            if ($postslist->have_posts()) :
                while ($postslist->have_posts()) : $postslist->the_post(); 
                    ?>
    <div class="row">
	<?php 
$images = get_field('gallery_images_pg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    </div>
	<?php
                endwhile;
                //previous_posts_link('Next Entries &raquo;');
                //next_posts_link('Older Entries', $postslist->max_num_pages);

                wp_reset_postdata();
            endif;
            ?>
 </div>
</section>

<?php get_footer(); ?>