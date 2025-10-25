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
?>
<main class="page-body">
    <?php do_shortcode("[csbwfs_buttons buttons='fb,tw,li,pi,yt,re,st,ml,sk']"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <div class="crumb-custom">
                        <div class="container p-0">
                            <a href="https://basikwall.com" class="black">HOME</a> <?php
                                                                                    $categories = get_the_category();
                                                                                    if (!empty($categories)) {
                                                                                    ?>
                                <a href="https://basikwall.com/blogs/"
                                    class="black"><?php echo html_entity_decode(strtoupper($categories[0]->cat_name)); ?></a>
                            <?php
                                                                                    }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="black"><?php the_title() ?></a>
                        </div>
                    </div>
                    <div class="post-lft-sec">
                        <div class="left-discription row">
                            <div class="blog-wrap blog-wrap-detail col-md-12 col-lg-8 single events-left">
                                <a href="javascript:void(0);">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                    ?>
                                        <div class="category-second category-custom-<?php echo esc_html($categories[0]->slug); ?>">
                                            <span></span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </a>
                                <div class="blog-header-text">
                                    <div class="blog-wrap-img">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </div>
                                    <h1 class="main-head"><?php the_title(); ?></h1>
                                    <p><?php echo get_the_date('F jS, Y'); ?></p>
                                </div>
                                <div class="blog-wrap-text blog-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="keyword-sidebar blog-categories sticky-top">
                                    <h2 class="categorie-head">Categories</h2>
                                    <div class="accordion" id="categoryAccordion">
                                        <?php
                                        // Define your category slugs
                                        $categories = array('knowledge-tips', 'news-events', 'product-services');

                                        // Get the current post's category slug
                                        $current_categories = get_the_category();
                                        $current_category_slug = !empty($current_categories) ? $current_categories[0]->slug : '';

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

                                                    // Check if this category matches the current post's category
                                                    $is_current_category = ($current_category_slug === $slug);
                                        ?>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="<?php echo esc_attr($headingId); ?>">
                                                            <button class="accordion-button <?php echo (!$is_current_category) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapseId); ?>" aria-expanded="<?php echo ($is_current_category) ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr($collapseId); ?>">
                                                                <?php echo esc_html($category->name); ?>
                                                            </button>
                                                        </h2>
                                                        <div id="<?php echo esc_attr($collapseId); ?>" class="accordion-collapse collapse <?php echo ($is_current_category) ? 'show' : ''; ?>" aria-labelledby="<?php echo esc_attr($headingId); ?>" data-bs-parent="#categoryAccordion">
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
                        </div>
                        <section class="more-case-study d-md-none">
                            <div class="container">
                                <h2 class="main-head">Related Blogs</h2>
                                <div class="more-case-study-main">
                                    <div class="row">
                                        <?php
                                        $prev_post = get_adjacent_post(false, '', true);
                                        if (!empty($prev_post)) {
                                        ?>
                                            <div class="col-md-6 case-wrap">
                                                <div class="row">
                                                    <div class="col-6 img-wrap">
                                                        <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                                            <img src="<?php echo the_post_thumbnail_url($prev_post->ID) ?>">
                                                        </a>
                                                    </div>
                                                    <div class="col-6 col-lg-6 text-wrap">
                                                        <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                                            <h2><?php echo $prev_post->post_title ?></h2>
                                                            <p><?php echo get_the_date('F jS, Y'); ?></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        $next_post = get_adjacent_post(false, '', false);
                                        if (!empty($next_post)) {
                                        ?>
                                            <div class="col-md-6 case-wrap">
                                                <div class="row">
                                                    <div class="col-6 img-wrap">
                                                        <a href="<?php echo get_permalink($next_post->ID) ?>">
                                                            <img src="<?php echo the_post_thumbnail_url($next_post->ID) ?>">
                                                        </a>
                                                    </div>
                                                    <div class="col-6 col-lg-6 text-wrap">
                                                        <a href="<?php echo get_permalink($next_post->ID) ?>">
                                                            <h2><?php echo $next_post->post_title ?></h2>
                                                            <p><?php echo get_the_date('F jS, Y'); ?></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <section class="more-case-study d-none d-md-block">
        <div class="container">
            <h5 class="main-head">Related Blogs</h5>
            <div class="more-case-study-main">
                <div class="row">
                    <?php
                    $prev_post = get_adjacent_post(false, '', true);
                    if (!empty($prev_post)) {
                    ?>
                        <div class="col-6 case-wrap">
                            <div class="row">
                                <div class="col-6 img-wrap">
                                    <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                        <img
                                            src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)) ?>">
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6 text-wrap">
                                    <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                        <h2><?php echo $prev_post->post_title ?></h2>
                                        <p><?php echo get_the_date('F jS, Y'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    $next_post = get_adjacent_post(false, '', false);
                    if (!empty($next_post)) {
                    ?>
                        <div class="col-6 case-wrap">
                            <div class="row">
                                <div class="col-6 img-wrap">
                                    <a href="<?php echo get_permalink($next_post->ID) ?>"><?php ?>
                                        <img
                                            src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)) ?>">
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6 text-wrap">
                                    <a href="<?php echo get_permalink($next_post->ID) ?>">
                                        <h2><?php echo $next_post->post_title ?></h2>
                                        <p><?php echo get_the_date('F jS, Y'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
