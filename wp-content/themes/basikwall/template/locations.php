<?php
/**
 * Template Name: Locations  
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
                        <div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4"><?php the_field("title"); ?> </h3>
                                <div class="row">
                                    <?php
                                if( have_rows('locations') ):

                                    while( have_rows('locations') ) : the_row();

                                        $image = get_sub_field('image');
                                        $address = get_sub_field('address');
                                        ?>
                                            <div class="col-md-6">
                                        <img width="354" height="236" src="<?php echo $image ; ?>" >
                                        <hr style="margin-top:10px">
                                        <b><?php echo $address ; ?></b>
                                    </div>
                                        <?php 
                                        // Do something, but make sure you escape the value if outputting directly...

                                    // End loop.
                                    endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif;
                                ?>
                                    
                                  
                                </div>
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