<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marilyse-portfolio
 */
?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marilyse-portfolio
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'marilyse-portfolio' ); ?></a>

	<header id="masthead" class="home-site-header">
		<div class="site-branding">
		<h1 class="logo-text">Marilyse</h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php //esc_html_e( 'Menu', 'marilyse-portfolio' ); ?>
				<span class="bar bar-top"></span>
				<span class="bar bar-middle"></span>
				<span class="bar bar-bottom"></span>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">


		<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php // marilyse_portfolio_post_thumbnail(); ?>
			<?php
			while ( have_posts() ) :
				the_post();

				// get_template_part( 'template-parts/content', 'page' );
				


			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php
get_footer();
