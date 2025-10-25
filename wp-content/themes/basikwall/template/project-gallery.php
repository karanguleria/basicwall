<?php
/**
 * Template Name: Project Gallery 
 */
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
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
<section class="project-gallery">

    <div class="container">
        <div class="row">
            <?php
            $images = get_field('project_gallery_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($images):
                ?>
                <ul>
                    <?php foreach ($images as $image): ?>
                        <li>
                            <a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php the_title(); ?>">
                                <img class="example-image" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php get_footer(); ?>