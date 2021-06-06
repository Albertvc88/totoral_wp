<?php
/**
 * Template Name: Full width no project
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper mb-6" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12  content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <header class="entry-header">

                        <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                        </header><!-- .entry-header -->

                        <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

                        <div class="entry-content">

                            <?php the_content(); ?>

                            <?php
                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                                    'after'  => '</div>',
                                )
                            );
                            ?>

                        </div><!-- .entry-content -->

                        <footer class="entry-footer">

                            <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

                        </footer><!-- .entry-footer -->

                        </article><!-- #post-## -->
                        <?php

					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
