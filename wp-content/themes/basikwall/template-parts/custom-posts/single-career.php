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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="accordion" id="accordionExample">
                <?php
                $i = 1;
                $loop = new WP_Query(array('post_type' => 'career', 'posts_per_page' => 20));
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                            <button class="accordion-button <?php
                            if ($i != 1) {
                                echo 'collapsed';
                            }
                            ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php
                                    if ($i == 1) {
                                        echo 'true';
                                    } else {
                                        echo 'false';
                                    }
                                    ?>" aria-controls="collapse<?php echo $i; ?>">
                                        <?php the_title(); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php
                        if ($i == 1) {
                            echo 'show';
                        }
                        ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                endwhile;
                ?>

            </div>



            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
