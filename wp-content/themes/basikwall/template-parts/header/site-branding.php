<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
$acf_logo = get_field('acf_logo',41);
?>

<?php if ( has_custom_logo() && $show_title ) : ?>
<!--<div class="site-logo"><a href="<?php the_field("logo_link"); ?>"> <?php the_custom_logo(); ?> </a></div>-->
<?php endif; ?>

<div class="site-branding">
    <div class="site-logo">
        <a href="<?php echo site_url()?>"><img src="<?php echo $acf_logo?>" alt="Basikwall Logo" />
        </a>
    </div>
</div>