<?php 
/**
 * Template Name: Exhibition & Events 
 */
?>
<?php get_header(); ?>
<!--Top_Section Starts-->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="hero_img" class="page_header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size:cover; background-position: center;">
    <div class="text-center container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
				<p><?php the_field("main_description"); ?></p>
             </div>
        </div>
  	</div>
</section>

<section id="exhibition_events">
	<div class="container">
	 	<div class="row exhibition-events">
            <div class="col-md-8 events-left">
		        <h2><?php the_field("sub_title"); ?></h2>
                <div class="d-flex flex-wrap events-list">
                    <?php
                        $loop = new WP_Query(array(
							'post_type' => 'post', // blog posts
							'posts_per_page' => 20,
							'category_name' => 'news-events' // category slug
						));
                        while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="events_box col-sm-6">
                        <a href="<?php echo get_post_permalink();?>">
                            <div class="events_img">
                                <img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>" >
                            </div>
                            <div class="events_text">
                                <h2><?php the_title()?></h2>
                                <h6><?php echo get_the_date( 'M d, Y' ); ?></h6>
                            </div>
                        </a>
                    </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php wp_reset_query(); ?>
                </div>
            </div>
			
			<div class="col-md-4">
  <div class="keyword-sidebar blog-categories sticky-top">
    <h2 class="categorie-head">Categories</h2>

    <div class="accordion" id="categoryAccordion">
      <?php
      // Define your category slugs
      $categories = array('knowledge-tips', 'news-events', 'product-services');
      $i = 0;

      foreach ($categories as $slug) {
          $category = get_category_by_slug($slug);

          if ($category) {
              $query = new WP_Query(array(
                  'posts_per_page' => 5,
                  'post_type' => 'post',
                  'cat' => $category->term_id,
              ));

              if ($query->have_posts()) {
                  $headingId = 'heading' . $i;
                  $collapseId = 'collapse' . $i;
                  ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="<?php echo esc_attr($headingId); ?>">
                      <button class="accordion-button <?php echo ($i !== 0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapseId); ?>" aria-expanded="<?php echo ($i === 0) ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr($collapseId); ?>">
                        <?php echo esc_html($category->name); ?>
                      </button>
                    </h2>
                    <div id="<?php echo esc_attr($collapseId); ?>" class="accordion-collapse collapse <?php echo ($i === 0) ? 'show' : ''; ?>" aria-labelledby="<?php echo esc_attr($headingId); ?>" data-bs-parent="#categoryAccordion">
                      <div class="accordion-body p-2">
                        <ul class="mb-0 ps-3">
                          <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li>
                              <a href="<?php the_permalink(); ?>" class="recent-title">
                                <?php the_title(); ?>
                              </a>
                            </li>
                          <?php endwhile; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <?php
                  wp_reset_postdata();
                  $i++;
              }
          }
      }
      ?>
    </div>
  </div>
</div>
			
<!--             <div class="col-md-4">
  <div class="keyword-sidebar  blog-categories sticky-top">

                <h2 class="categorie-head">Categories</h2> 
               <div class="recent-inner">
    <?php /*
     $categories = array('knowledge-tips', 'news-events', 'product-services');

    foreach ($categories as $slug) {
         $category = get_category_by_slug($slug);

        if ($category) {
             $query = new WP_Query(array(
                'posts_per_page' => 5,  
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
   */ ?>
</div>

            </div>
            </div> -->
        </div>
    </div>
</section>
<?php get_footer(); ?>