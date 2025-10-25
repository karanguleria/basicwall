<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
$homepage_id = 41;

$acf_email = get_field('acf_email', $homepage_id);
$acf_phone_number = get_field('acf_phone_number', $homepage_id);
$acf_dealer_link = get_field('acf_dealer_link', $homepage_id);
$acf_dealer_text = get_field('acf_dealer_text', $homepage_id);
$acf_dealer_login_text = get_field('acf_dealer_login_text', $homepage_id);
$acf_dealer_login_link = get_field('acf_dealer_login_link', $homepage_id);
?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>" role="banner">

	<?php if (get_field('top_bar', $homepage_id)) { ?>
		<div class="top-row">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p><?php the_field('top_bar', $homepage_id); ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="top_bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="logo col-sm-4">
					<?php get_template_part('template-parts/header/site-branding'); ?>
				</div>

				<div class="right_box col-sm-8">
					<div class="d-flex align-items-center justify-content-end">
						<ul class="dealer">
							<li><a href="<?php echo $acf_dealer_link ?>"><i class="fas fa-map-marker-alt"></i><span><?php echo $acf_dealer_text ?></span></a></li>
						</ul>

						<div class="top_search">
							<form id="searchform" method="get" action="<?php echo site_url(); ?>">
								<input type="text" class="search-field" name="s" placeholder="Search" value="<?php //echo get_search_query(); 
																												?>">
								<div class="search-box">
									<input type="submit" value="Search">
								</div>
							</form>
						</div>

						<!--						<ul>
							<li><a href="<?php echo $acf_dealer_login_link ?>"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $acf_dealer_login_text ?></span></a></li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bottom_bar">
		<div class="container">
			<div class="row">
				<div class="navigation">
					<?php get_template_part('template-parts/header/site-nav'); ?>
				</div>
			</div>
		</div>
	</div>

</header><!-- #masthead -->
