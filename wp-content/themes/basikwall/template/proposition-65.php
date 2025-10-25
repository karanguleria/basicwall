<?php
/**
 * Template Name: Proposition 65  
 */
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
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

<section class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row">
                        <div class="sec-border">
                            <div class="">
                                <h2><img src="https://basikwall.com/wp-content/uploads/2024/06/warning.png" style="width: 55px;height: 55px" alt="WARNING">WARNING</h2>
                            </div>
                            <div class="">
                                <p>This product can expose you to chemicals including Thorium Dioxide, which is known to the State of California to cause cancer and Ethylene Glycol which is known to the State of California to cause birth defects or other reproductive harm. For more information, go to <a href="http://www.P65Warnings.ca.gov" target="_blank" rel="noopener">www.P65Warnings.ca.gov</a>.</p>						
                            </div>
                        </div>
                        <div class="sec-border">
                            <div class="">
                                <h2><img src="https://basikwall.com/wp-content/uploads/2024/06/warning.png" style="width: 55px;height: 55px" alt="WARNING">WARNING</h2>
                            </div>
                            <div class="">
                                <p>Drilling, sawing, sanding or machining wood products can expose you to wood dust, a substance known to the State of California to cause cancer. Avoid inhaling wood dust or use a dust mask or other safeguards for personal protection. For more information, go to. <a href="https://www.p65warnings.ca.gov/products/wood-dust" target="_blank" rel="noopener">www.p65warnings.ca.gov/products/wood-dust</a>.</p>						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>