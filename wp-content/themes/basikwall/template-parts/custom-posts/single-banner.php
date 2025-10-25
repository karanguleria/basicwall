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
<div class="slider">
    <?php
    $loop = new WP_Query(array('post_type' => 'banner', 'posts_per_page' => 5));
    while ($loop->have_posts()) : $loop->the_post();
        /* the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); */
        ?>
            <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
            <div class="item" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
                <div class="heading_caption container">
                    <div class="row">
                        <div class="col-md-12">
						  <h2><?php the_title(); ?></h2>
                            <p><?php the_field("main_description"); ?></p>
                            <a class="button-three" href="<?php the_field("button_link"); ?>"> <?php the_field('button_text'); ?></a>
						 </div>
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
</div>