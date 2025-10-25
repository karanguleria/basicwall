<?php
/**
 * Template Name: Partners 
 */
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
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
<section id="inspiration-section">
    <div class="container">
        <div class="row">
            <div class="heading_wrap text-center">
                <h2><?php the_field('partners_main_title'); ?></h2>
                <h6><?php the_field("partners_sub_title"); ?></h6>				
            </div>
        </div>
	</div>
</section>	
<section class="partners-section">
    <div class="container">
        <div class="row">
            <?php 
                $rows = get_field('partner_repeater');
                if($rows){
                  
                    foreach($rows as $row){	
            ?>
                <div class="col-md-3 col-sm-6 partner-col"><div class="partner-logo"><img src="<?php echo $row['partner_images'] ?>" alt="partners"></div></div>
            <?php
                    }
                   
            }		  
            ?>
        </div>
    </div>
</section>
  
<?php get_footer(); ?>