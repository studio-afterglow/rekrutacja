<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorem-ipsum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lorem-ipsum' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="header-widgets container-fluid">
            <div class="row">
            <div class="social-media col-md-7">
                <?php dynamic_sidebar('social-media'); ?>
            </div>
            <div class="contact-info col-md-5">
                <?php dynamic_sidebar('contact-info'); ?>
            </div>
            </div>
        </div>
		<div class="site-header-2 container-fluid">
			
            <div class="row">
                <h1 class="site-title col-md-6"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">LOGO</a></h1>
                <nav id="site-navigation" class="main-navigation col-md-6">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'lorem-ipsum' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
                'container_class' => 'ml-auto'
			) );
			?>
		</nav>
            </div>
            
		</div><!-- .site-branding -->

		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
