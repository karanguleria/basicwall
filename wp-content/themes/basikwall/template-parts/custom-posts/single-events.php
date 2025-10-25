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
<div class="single-events">
    <?php
    $loop = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 3));
        while ($loop->have_posts()) : $loop->the_post();
            ?> 
            <div class="service_box text-center">
                <div class="img_box">
                    <a href="<?php echo get_post_permalink();?>">
                    <img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>" > </a>
                </div>
                <div class="text_box">
                    <a href="<?php echo get_post_permalink();?>">
                    <h2><?php the_title(); ?></h2></a>
                    <p><?php the_field("events_description"); ?></p>
                </div>
                <div class="read-more">
                    <a class="button-three" href="<?php the_field("read_more_url"); ?>"> <?php the_field('read_more_text'); ?></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
</div>