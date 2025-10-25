<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

global $post;
$post_id = $post->ID ;

?>
<section class="single-events-page">
	<div class="container">
	    <div class="row">
            <div class="col-md-12 col-lg-8 single events-left">	
                <img src="<?php  the_post_thumbnail_url($post->ID); ?>">
                <h3><?php the_title(); ?></h3>
                <div class="content-description">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
			
			<div class="col-md-12 col-lg-12 col-xl-4">
				 <div class="keyword-sidebar  blog-categories sticky-top">
                            <h2 class="cat-custom" onclick="catchange(this)">Categories</h2>
					 
					 <?php
                        // the query
                        $the_query = new WP_Query(array(
                            'posts_per_page' => 13,
							'post_type' => 'events',
    						'post__not_in' => array(get_the_ID()),
                        ));
                    ?>
					 
					 <div class="recent-inner">
    <?php
    // Define your category slugs
    $categories = array('knowledge-tips', 'news-events', 'product-services');

    foreach ($categories as $slug) {
        // Get category object by slug
        $category = get_category_by_slug($slug);

        if ($category) {
            // Fetch posts from current category
            $query = new WP_Query(array(
                'posts_per_page' => 5, // limit to 5 per category
                'post_type' => 'post',
                'cat' => $category->term_id,
            ));
            ?>

            <?php if ($query->have_posts()) : ?>
                <h5 class="mb-2 uppercase"><?php echo esc_html($category->name); ?></h5>
                <ul>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="recent-title">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php
        }
    }
    ?>
</div>
					 
<!-- 					 <ul>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li><a href="<?php the_permalink() ?>" class="category-second">
                                        <?php the_title(); ?>
                                    </a></li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </ul> -->
					 
					  
                            <?php
                            $tags = get_tags();
                            if ($tags) {
                                ?>
                                <div class="tags">
                                    <h2 class="cat-custom" >Tags</h2>
                                    <ul>                                        <?php
                                        foreach ($tags as $tag) {
                                            echo '<li><a href="' . get_tag_link($tag->term_id) . '" title="' . sprintf(__("View all posts in %s"), $tag->name) . '" ' . '>' . $tag->name . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
<?php } ?>  
                        </div>
				
		 
			</div>
			
            
		</div>

        <div class="row next-events">
            <div class="blog-pagination">
		            <?php
                        $prev_post = get_previous_post();
                        if($prev_post) {
                           $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                           echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="prev-arrow"><strong><i class="fa fa-arrow-left" aria-hidden="true"></i>
                         Pervious Event</strong></a>' . "\n";
                        }
                    ?>

                    <?php
                        $next_post = get_next_post();
                        if($next_post) {
                        $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                            echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next-arrow"><strong>Next Event <i class="fa fa-arrow-right" aria-hidden="true"></i></strong></a>' . "\n";
                                    }
                    ?>
            </div>
        </div>
  	</div>
</section>

<?php

get_footer(); ?>