<?php
get_header();
?>
<style>
    /*....responsive.................*/
    @media (max-width: 1199px) {
        #order-wrap-custom .h3.black {
            font-size: 16px;
        }

        .blog-categories {
            order: 1;
        }

        .latest-news {
            order: 2;
        }

    }

    @media (max-width: 991px) and (min-width: 801px) {
        .main-nav .nav-link {
            margin: 0 0px 0 0px;
            font-size: 12px;
        }

        .main-nav .nav-link {
            margin: 0 0px 0 0px;
            font-size: 12px;
        }

        h3,
        .h3 {
            font-size: 20px;
        }

        h2,
        .h2 {
            font-size: 25px;
        }
    }

    @media (max-width: 800px) and (min-width: 768px) {
        .main-nav .nav-link {
            margin: 0 0px 0 0px;
            font-size: 12px;
        }

        h2,
        .h2 {
            font-size: 22px;
        }
    }

    @media (min-width: 768px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .navbar-expand-md {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-md .navbar-toggler {
            display: none;
        }

        .navbar-expand-md .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-md .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem;
        }
    }

    @media (max-width: 991px) {
        .bg-wrap .featured-title .main-head a {
            font-size: 18px;
        }

        #order-wrap-custom .h3.black {
            padding: 0;
            text-align: center;
        }

        .blog-categories .keyword-sidebar h2 {
            cursor: pointer;
        }

        #recent-order-wrap h2.cat-custom::before {
            position: absolute;
            content: ">";
            font-size: 20px;
            top: 0;
            right: 0;
            color: #0b2f49;
        }

        #recent-order-wrap .keyword-sidebar.new-side h2.cat-custom::before {
            position: absolute;
            content: ">";
            font-size: 20px;
            top: 0;
            right: 0;
            color: #0b2f49;
            transform: rotate(90deg);
        }

        .new-side-element:before {
            position: absolute;
            content: ">";
            font-size: 20px;
            top: 0;
            right: 10px;
            color: #0b2f49;
            transform: rotate(90deg);
            width: 24px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            font-weight: 600;
        }

        .new-side-element.new-side {
            display: none;
        }

        #recent-order-wrap .blog-categories {
            padding: 0;
        }

        #recent-order-wrap .blog-categories {
            padding: 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 30px;
        }

    }

    .error-404.not-found {
        height: 100vh;
        padding: 0 15px;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .search-form .screen-reader-text {
        display: none;
    }

    .search-form .search-field {
        border: 2px solid #f5f5f5;
        height: 50px;
        min-width: 500px;
        padding: 0 15px;
    }

    .search-form .search-submit {
        border: none;
        height: 49px;
        border-radius: 0;
        background: #0b2f49;
        margin-left: -4px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 800;
        min-width: 130px;
    }

    @media (max-width: 767px) {
        .error-blog-sec .container {
            max-width: 100%;
        }

        .error-blog-sec .img-wrap img {
            border-radius: 0;
        }

        .error-blog-sec .bg-wrap {
            border-radius: 0;
            border: 2px solid #fff;
            border-left: 0;
            border-right: 0;
        }

        .error-blog-sec .img-wrap::before {
            border-radius: 0;
            z-index: 0;
        }

        .single .csbwfs-social-widget {
            left: 0 !important;
            bottom: 0 !important;
            top: auto !important;
        }

        .error-404.not-found .page-title {
            font-size: 22px;
        }

        .search-form .search-field {
            min-width: 300px;
        }

        .single .csbwfs-social-widget {
            width: 100%;
            display: block;
            position: fixed;
            list-style: none;
            z-index: 9;
            background: #fff;
            padding: 0;
            border-radius: 0 5px 5px 0;
            left: 0;
            bottom: 0;
        }

        .navbar-brand {
            margin: 0 auto;
        }

        .navbar-toggler {
            position: relative;
            z-index: 100000;
            left: 0px;
            transition: all 0.3s ease-in-out;
            top: 0px;
            padding: 0;
        }

        .navbar-toggler .navbar-toggler-icon {
            width: 24px;
            height: 22px;
        }

        .icon-three {
            width: 25px;
            height: 25px;
            cursor: pointer;
            display: block;
        }

        .hamburger {
            top: 50%;
            left: 0%;
            width: 30px;
            height: 4px;
            background: #000;
            position: absolute;
            transition: 0.5s;
        }

        .hamburger-three:before,
        .hamburger-three:after {
            content: '';
            left: 0;
            position: absolute;
            width: 30px;
            height: 4px;
            background: #000;
            transition: 0.5s;
        }

        .hamburger:before {
            top: -10px;
        }

        .hamburger:after {
            top: 10px;
        }

        .icon-three.active-three .hamburger-three::before {
            top: 0;
            transform: rotate(135deg);
        }

        .icon-three.active-three .hamburger-three::after {
            top: 0;
            transform: rotate(225deg);
        }

        .hamburger-three::before,
        .hamburger-three::after {
            content: '';
            left: 0;
            position: absolute;
            width: 30px;
            height: 4px;
            background: #000;
            transition: 0.5s;
        }

        .icon-three.active-three .hamburger-three {
            background: rgba(0, 0, 0, 0);
        }

        .top-dark {
            display: none;
        }

        #collapsibleNavbar {
            box-shadow: 0 0 8px 1px #000;
            position: fixed;
            transition: all 0.3s ease-in-out;
            top: 0;
            left: -250px;
            background: #fff !important;
            display: inline-block !important;
            z-index: 9999;
            height: 100%;
            padding: 100px 20px 0 10px;
        }

        .main-nav a.nav-link {
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        #collapsibleNavbar.show {
            top: 0;
            left: 0px;
            transition: all 0.3s ease-in-out;
            width: 80%;
        }

        #recent-order-wrap h2 {
            font-size: 20px;
            cursor: pointer;
        }

        body {
            margin-top: 70px;
        }

        .bg-wrap .featured-title {
            bottom: 20px;
        }

        .bg-wrap .right-wrap {
            margin-bottom: 2px;
        }

        .bg-wrap:first-child {
            padding-bottom: 2px;
        }

        .col-md-4.bg-wrap:nth-child(2) {
            padding-left: 0;
        }

        .bg-wrap:nth-child(2) {
            padding-left: 0;
            padding-bottom: 0;
        }

        .bg-wrap {
            padding-bottom: 15px;
        }

        .blog-page #order-wrap-custom {
            margin: -13px auto 15px;
            padding: 0;
        }

        #recent-order-wrap h2 {
            font-size: 20px;
            cursor: pointer;
        }

        #recent-order-wrap .latest-blog-item {
            padding: 0 15px;
        }

        .blog-sec.blog-wrap {
            margin-bottom: 10px;
        }

        #recent-order-wrap .row {
            margin-bottom: 30px;
        }

        .social-icons {
            display: inline-flex;
            margin: 0;
        }

        .social-icons li {
            margin-right: 20px;
        }

        #order-wrap-custom .h3.black {
            margin: 11px 0;
            text-align: center;
        }


        .social-blog-custom .share {
            display: none;
        }

        .csbwfs-social-widget {
            width: 100%;
            left: 0 !important;
            right: 0;
            bottom: 0px !important;
            top: auto !important;
            padding: 0;
        }

        .csbwfs-social-widget .csbwfs-sbutton {
            float: none;
            display: inline-block;
            width: 25%;
        }

        .csbwfs-sbutton a {
            width: 100% !important;
            border-radius: 0;
        }

        .csbwfs-social-widget .csbwfs-sbutton:nth-child(2),
        .csbwfs-social-widget .csbwfs-sbutton:nth-child(4) {
            left: 0;
        }
    }

    .error-page.text-center p {
        margin: 0;
    }

    .error-page.text-center {
        margin: 50px 0;
        padding: 40px 0;
    }

    .error-blog-sec .img-wrap img {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        object-fit: cover;
        object-position: top;
    }

    .error-blog-sec .img-wrap::before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        background: url(https://basikwall.com/wp-content/uploads/2024/02/sdw.png);
        top: 0px;
        left: 0;
        border-radius: 4px;
        transition: all 0.5s ease-in-out;
        z-index: 1;
        background-position: center bottom;
        background-repeat: repeat-x;
    }

    .error-blog-sec .img-wrap:hover::before {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .error-blog-sec .bg-wrap {
        position: relative;
        border: 1px solid #fff;
        height: 350px;
        border-radius: 4px;
    }

    .error-blog-sec .img-wrap img {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        object-fit: cover;
    }

    .error-blog-sec .bg-wrap .featured-title {
        position: absolute;
        bottom: 0;
    }

    .error-blog-sec .bg-wrap .featured-title {
        padding: 20px 20px;
        z-index: 2;
    }

    .error-blog-sec .bg-wrap .featured-title .main-head a {
        color: #fff;
        color: #fff !important;
        text-transform: uppercase;
        font-size: 26px;
        line-height: 26px;
        display: inline-block;
        font-family: 'Fira Sans Extra Condensed', sans-serif;
        font-weight: 700;
    }

    .error-blog-sec .bg-wrap .featured-title a {
        color: #fff !important;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 25px;
        display: inline-block;
        font-weight: 800;
    }

    .error-page a {
        display: inline-block;
        /*    background: #a7a9ad;
            padding: 10px 20px;
            border-radius: 30px; 
            color: #fff;
            margin: 30px auto; 
            border: 5px solid #f4f4f4; 
            text-transform: uppercase; 
            font-size: 16px;
            font-weight: 900; */
        color: #0b2f49;
    }

    .error-page a:hover {
        background: #0b2f49;
        color: #fff;
    }

    .error-blog-sec {
        margin-bottom: 70px;
    }

    .error-page.text-center h1 {
        text-transform: uppercase;
        font-size: 26px;
        line-height: 26px;
        margin-bottom: 15px;
        display: inline-block;
        font-family: 'Fira Sans Extra Condensed', sans-serif;
        font-weight: 700;
    }

    .error-blog-sec .bg-wrap .featured-title .main-head a.btn {
        display: inline-block;
        background: #a7a9ad;
        padding: 4px 20px;
        border-radius: 30px;
        color: #fff;
        margin: 0 auto;
        border: 5px solid #f4f4f4;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 900;
        float: right;
    }

    .error-blog-sec .bg-wrap .featured-title .main-head a.btn:hover {
        background: #a87c00;
    }

    @media (max-width: 575px) {

        .error-page.text-center h1 {
            font-size: 24px;
        }

        .error-page.text-center {
            margin: 50px 0 0;
        }


        .search-form .search-field {
            height: 40px;
            min-width: 200px;
            padding: 0 15px;
        }

        .search-form .search-submit {
            height: 40px;
            min-width: 90px;
        }

        .new-side-element:before {
            right: 10px;
        }

        .cart-link img {
            width: 25px;
            height: auto;
        }

        .cart .cart-link span {
            height: 15px;
            width: 15px;
            line-height: 15px;
        }

        #recent-order-wrap .blog-categories {
            padding: 0 15px;
        }

        #recent-order-wrap .blog-wrap-text h2 a {
            font-size: 16px;
        }

        #order-wrap-custom {
            margin-top: 15px;
        }




    }

    @media (max-width: 480px) {
        body {
            margin-top: 60px;
        }

        .main-nav .navbar-brand img {
            width: 120px;
        }

        .hamburger-three::before,
        .hamburger-three::after {
            width: 25px;
            height: 4px;
            border-radius: 50px;
        }

        .hamburger::after {
            top: 8px;
        }

        .hamburger::before {
            top: -8px;
        }

        .hamburger {
            width: 25px;
            height: 4px;
            border-radius: 50px;
        }


        .category-second span {
            margin-right: 10px;
        }
    }

    @media (max-width: 375px) {
        #order-wrap-custom .h3.black {
            font-size: 14px;
        }

        .lower-content {
            padding: 25px;
        }

    }

    .csbwfs-sbutton a i {
        background: none;
    }

    .csbwfs_facebook::before {
        content: "\f09a";
        font: 22px FontAwesome;
        color: #fff;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
    }

    .csbwfs_twitter::before {
        content: "\f099";
        font: 22px FontAwesome;
        color: #fff;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
    }

    .csbwfs_linkedin::before {
        content: "\f0e1";
        font: 22px FontAwesome;
        color: #fff;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
    }

    .csbwfs_pinterest::before {
        content: "\f231";
        font: 22px FontAwesome;
        color: #fff;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
    }

    .nav-header-new.header-custom .navbar-brand img {
        width: 120px;
        transition: 0.2s all ease-in-out;
    }

    #recent-order-wrap .blog-wrap-text h2 a span::before {
        line-height: 38px;
        font-size: 20px;
    }

    .page-template-blog #csbwfs-delaydiv {
        display: none;
    }
</style>
<main class="page-body">
    <div class="blog-page">
        <div class="latest-blogs">
            <div class="container">
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    ?>
                </header>
                <div class="row">
                    <?php
                    $i = 1;
                    while (have_posts()) {
                        the_post();
                        //                        while ($post_query->have_posts()) {
                        //                            $post_query->the_post();
                        if ($i < 4) {
                            if ($i === 1) {
                    ?>
                                <div class="col-md-8 bg-wrap">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="img-wrap">
                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                    </a>
                                    <div class="featured-title"><a href="<?php the_permalink(); ?>">
                                        </a>
                                        <h2 class="main-head"><a href="<?php the_permalink(); ?>">
                                            </a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                if ($i === 2) {
                                ?>
                                    <div class="col-md-4 bg-wrap">
                                    <?php } ?>
                                    <a href="<?php the_permalink(); ?>">
                                    </a>
                                    <div class="right-wrap"><a href="<?php the_permalink(); ?>">
                                        </a><a href="<?php the_permalink(); ?>">
                                            <div class="img-wrap">
                                                <img src="<?php the_post_thumbnail_url(); ?>">
                                            </div>
                                        </a>
                                        <div class="featured-title">
                                            <h2 class="main-head">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    echo esc_html($categories[0]->name);
                                                }
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php if ($i === 3) { ?>
                                    </div>
                                <?php } ?>
                    <?php
                            }
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <section id="recent-order-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-8 latest-news">
                        <?php
                        while (have_posts()) {
                            the_post();
                            $categories = get_the_category();
                            if ($j > 3) {
                        ?>
                                <div class="row gallery_section">
                                    <div class="col-md-4 latest-blog-item">
                                        <div class="blog-sec blog-wrap">
                                            <div class="blog-wrap-img">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog-wrap-text">
                                            <h2 class="main-head">
                                                <a class="category-second  <?php if (!empty($categories)) {
                                                                                echo "category-custom-" . esc_html($categories[0]->slug);
                                                                            } ?>" href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?><!-- Recipes --></a>
                                            </h2>
                                            <ul>
                                                <li style="display:none;"></li>
                                            </ul>
                                            <div class="our-story-txt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                            $j++;
                        }
                        ?>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-4 blog-categories sticky-top">



                        <div class="keyword-sidebar">
                            <h2 class="cat-custom" onclick="catchange(this)">Blog Categories</h2>
                            <ul class="new-side-element new-side">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                ));
                                foreach ($categories as $category) {
                                    $category_link = sprintf(
                                        '<a class="category-second category-custom-' . $category->slug . '" href="%1$s" alt="%2$s">  %3$s</a>',
                                        'https://basikwall.com/category/' . $category->slug,
                                        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                                        esc_html($category->name)
                                    );
                                    echo '<li>' . sprintf(esc_html__('%s', 'textdomain'), $category_link) . '</li> ';
                                }
                                ?>
                            </ul>
                            <?php
                            $tags = get_tags();
                            if ($tags) {
                            ?>
                                <div class="tags">
                                    <h2 class="cat-custom">Tags</h2>
                                    <ul> <?php
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
                <div class="more more_list_item">
                    <a href="javascript:void(0);" class="view_btn" id="homeloadmore">View More</a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
