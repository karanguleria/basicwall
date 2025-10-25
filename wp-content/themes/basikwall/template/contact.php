<?php
/**
 * Template Name: Contact 
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

<section class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4"><?php the_field('shortcode_title'); ?></h3>
                                <!-- <div id="form-message-warning" class="mb-4"></div> -->
                                <?php echo the_field('shortcode_for_contact_form'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-md-5 p-4">
                                <h3><?php the_field('sub_title'); ?></h3>
                                <p class="mb-4"><?php the_field('sub_description'); ?></p>
								<h5 class="mb-2">WEST COAST</h5>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> <a href="<?php the_field('address_cta_link'); ?>"><?php the_field('address_cta_text'); ?></a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel:<?php the_field('phone_cta_text'); ?>"><?php the_field('phone_cta_text'); ?></a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <?php the_field('email_cta_text'); ?></a></p>
                                     </div>
                                </div>
								
								<h5 class="mt-4 mb-2">EAST COAST</h5>
								
								<div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> <a href="<?php the_field('east_address_cta_link'); ?>"><?php the_field('east_address_cta_text'); ?></a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel:<?php the_field('east_phone_cta_text'); ?>"><?php the_field('east_phone_cta_text'); ?></a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                         <p><span>Email:</span> <?php the_field('dc_email_cta_text'); ?></a></p>
                                    </div>
                                </div>
								
								<hr class="my-4">					
								
								
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><?php the_field('opening_hour_text'); ?></p>
                                    </div>
                                </div>
								<p class="mb-4"><?php the_field('appointment'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
    realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
    if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
    } else {
        customTxt.innerHTML = "No file chosen, yet.";
    }
    });
</script>
<?php get_footer(); ?>