<?php
/**
 * Template Name: Homepage 
 */
?>
<?php get_header(); ?>
<section class="home-slider">
        <?php get_template_part('template-parts/custom-posts/single-banner'); ?>
</section>
<section id="page-section">
    <div class="container">
        <div class="sub_heading text-center">
            <h2><?php the_field("main_title_hp"); ?></h2>
        </div>
        <div class="center_description text-center">
            <p><?php the_field("main_description_hp"); ?></p>
        </div>
    </div>

    <div class="container">
        <div id="services_row" class="row">
            <?php
            if (have_rows('our_products_hp')):
                while (have_rows('our_products_hp')) : the_row();
                    ?>
                                <div class="service_box text-center col-lg-4">
                                    <div class="img_box">
                                  <a href="<?php the_sub_field('product_url'); ?>">
								  <img src="<?php the_sub_field('product_image_hp'); ?>" alt="<?php the_sub_field('product_title_hp'); ?>"></a>
                                    </div>
                                    <div class="text_box">
                                    <a href="<?php the_sub_field('product_url'); ?>">
									<h3 class="new-title"><?php the_sub_field('product_title_hp'); ?></h3></a>
                                        <p class="new-text"><?php the_sub_field('product_description_hp'); ?></p>
                                    </div>
                                </div>
                    <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
		<div class="row">
		<div class="request-a-literature text-center">
                <a href="<?php the_field('request_button_link'); ?>">
				<?php the_field('request_button_title'); ?> <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
        </div>
		</div>
    </div>
</section>	
<section id="about_section" class="black-bg">
	<div class="container">
	    <div class="row align-items-center">
		    <div class="img_box_pro col-md-6">
                     <img src="<?php the_field('why_basikwall_image'); ?>" alt="<?php the_field("why_basikwall_title"); ?>">
            </div>
            <div class="text_box_pro col-md-6">
                    <h2><?php the_field("why_basikwall_title"); ?></h2>
					<div class="description">
					<p><?php the_field("why_basikwall_description"); ?></p>
				 </div></div>
       </div>
      <!--  <div class="row">
                <div class="right_description col-sm-6">
                    <img src="<?php the_field('about_us_image'); ?>" alt="<?php the_field("about_us_title_hp"); ?>">
                </div>
                <div class="right_description col-sm-6">
                    
                <div class="description">
                    
                </div>
                </div>
        </div> -->
        <div class="exhibition-event-section">
            <div class="row">
                <div class="col-sm-12">
                    <h2><?php the_field("exhibition_&_events_title"); ?></h2>
                </div>
            </div>
            <div class="row events-section">
                <div class="col-md-12">
                    <?php get_template_part('template-parts/custom-posts/single-events'); ?>
                </div>
            </div>
        </div>
	 </div>
</section>
<section id="inspiration-section" >
    <div class="container">
        <div class="row">
            <div class="heading_wrap text-center">
                <h2><?php the_field('inspiration_main_title'); ?></h2>  
            </div>
        </div>
        <div class="row align-items-center flex-md-row flex-column-reverse">
            <div class="col-md-6">
                <div class="text_box">
                    <h3><?php the_field('photo_gallery_title'); ?></h3>
                    <p><?php the_field('photo_gallery_description'); ?></p>
                    <div class="icon-section text-center">
                        <a href="<?php the_field('learn_more_button_url_one'); ?>">
                        <?php the_field('learn_more_button'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="photo_gallery">
                    <div class="inspiration_slider_1">
                        <?php
                        $rows = get_field('inspiration_repeater_for_image');
                        if ($rows) {
                            foreach ($rows as $row) {
                                ?>  
                                <img src="<?php echo $row['inspiration_first_image'] ?>" alt="sponser image">
                        <?php
                            }
                        }
                        ?>
                    </div> 				
                </div>
            </div>
        </div>
        <div class="row flex-md-row-reverse flex-column-reverse align-items-center">
            <div class="col-md-6">
                <div class="text_box">
                    <h3><?php the_field('project_gallery'); ?></h3>
                    <p><?php the_field('project_gallery_description'); ?></p>
                    <div class="icon-section text-center">
                        <a href="<?php the_field('learn_more_button_url_two'); ?>">
                        <?php the_field('learn_more_button'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="project_gallery">
                    <div class="inspiration_slider_2">
                        <?php
                        $rows = get_field('inspiration_repeater_for_images');
                        if ($rows) {
                            foreach ($rows as $row) {
                                ?>  
                                <img  src="<?php echo $row['inspiration_second_image'] ?>" alt="sponser image">
                                <?php
                            }
                        }
                        ?>
                    </div>
			
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section id="professional-section">
    <div class="container">
        <div class="sub_heading text-center">
            <h2><?php the_field("professionals_title"); ?></h2>
        </div>
        <div class="center_description text-center">
            <p><?php the_field("professionals_description"); ?></p>
        </div>
    </div>
    <div class="container bg-beige">
        <div class="row align-items-center">
            <div class="img_box_pro col-sm-6">
                <img src="<?php the_field('professionals_image_one'); ?>" alt="<?php the_field('professionals_sub_title_one'); ?>">
            </div>
            <div class="text_box_pro col-sm-6">
                <h3><?php the_field('professionals_sub_title_one'); ?></h3>
                <p><?php the_field('professionals_sub_description_one'); ?></p>
            </div>
        </div>
    </div>
    <div class="container bg-beige">
        <div class="row flex-row-reverse align-items-center">
            <div class="img_box_pro col-sm-6">
                <img src="<?php the_field('professionals_image_two'); ?>" alt="<?php the_field('professionals_sub_title_two'); ?>">
            </div>
            <div class="text_box_pro col-sm-6">
                <h3><?php the_field('professionals_sub_title_two'); ?></h3>
                <p><?php the_field('professionals_sub_description_two'); ?></p>
            </div>
        </div>
    </div>
</section>	--->

<section id="find_a_dealer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="button-three" href="<?php the_field("find_a_dealer_link"); ?>"> 
                    <?php the_field('find_a_dealer_text'); ?> <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>	
<?php get_footer(); ?>