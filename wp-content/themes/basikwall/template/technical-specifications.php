<?php
/**
 * Template Name: Technical Specifications 
 */
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section id="technical-specifications-section">
    <div class="container">
        <div class="row">
            <?php
// Check rows exists.
            if (have_rows('pdf')):

                // Loop through rows.
                while (have_rows('pdf')) : the_row();

                    // Load sub field value.
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    ?>
                    <div class="request-a-literature text-center">
                        <a href="<?php echo $link; ?>" target="_blank">
                            <?php echo $title; ?> <i class='<?php echo $icon; ?>' aria-hidden="true"></i></a>
                    </div> 
                    <?php
                // End loop.
                endwhile;

// No value.
            else :
            // Do something...
            endif;
            ?>

            <div class="col-sm-12 text-center">
                <h2><?php the_field("more_to_come_text"); ?></h2>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>