<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );


// Para saber si estoy post tipe (proyecto) para mostrar dark mode solo en esa página
$single_page = is_singular( ['proyecto', 'galeria'] );
if($single_page) {
    $navbar = ' navbar-black';
    $footer = ' footer-wrap-dark';
}elseif(is_front_page()) {
    $navbar = ' navbar-header';    
    $footer = ' ';
}else {
    $navbar = ' navbar-2';    
    $footer = ' ';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

    <nav class="navbar <?=$navbar?> navbar-expand-lg fixed-top">
        <?php if ( 'container' === $container ) : ?>
		<div class="container">
		<?php endif; ?>
        <!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

            <?php else : ?>
                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

            <?php endif; ?>

            <?php
                } else {
                    if($single_page) {
                ?>
                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/02/logo-totoral-filmsmedia-rainbow.png" width="150" height="144" class="img-fluid" alt="">
                </a>
                <?php
                    }else {
                        the_custom_logo();
                    }
                }
            ?>
                        <!-- end custom logo -->
            <div>
                <button class="btn-open navbar-toggler d-lg-none">
                    <i class="las la-bars"></i>
                </button>
            </div>

            <div class="nav-items nav-sidebar">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 1,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
				?>
                <a class="btn-close d-lg-none" href="javascript:void(0)"><i class="las la-times"></i></a>
            </div>
        <?php if ( 'container' === $container ) : ?>
		</div><!-- .container -->
		<?php endif; ?>
    </nav>
</div><!-- #wrapper-navbar end -->

