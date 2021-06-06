<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
$single_page = is_singular( ['proyecto', 'galeria'] );
if($single_page) {
    $footer = ' footer-wrap-dark';    
    $btnWhite = ' btn-white';
}elseif(is_front_page()) {   
    $footer = ' ';
    $btnWhite = ' ';
}else { 
    $footer = ' ';    
    $btnWhite = ' ';
}
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer-wrap  footer-wrap-dark">
<div class="contacto-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 py-5 text-md-right pr-3 bg-contacto-2">
                <p class="mb-0 title"><?php echo __( '¿Tienes un proyecto en mente?', 'understrap-child' ) ?></p>
                <p class="subtitle mb-0"><?php echo __( 'Escríbenos..', 'understrap-child' ) ?></p>
            </div>
            <div class="col-md-6 py-5 pl-5 d-flex align-items-center bg-contacto">
                <a class="btn btn-lg btn-line link-line btn-white up" data-toggle="modal"
                            data-target="#contactoModal"><?php echo __( 'Formulario de contacto', 'understrap-child' ) ?></a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-footer footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> py-5">

		<div class="row">
            <div class="col-md-6 text-center">                
                <h3><?php echo __( 'Confían en nosotros', 'understrap-child' ) ?></h3>
                <div class="swiper-container aliados">
                    <div class="swiper-wrapper">                    
                        <?php dynamic_sidebar('footer2') ?>              
                    </div>
                </div>
            </div>
            <div class="col-md-6  text-center">
                <?php dynamic_sidebar('redes_sociales') ?>
            </div>         

		</div><!-- row end -->

	</div><!-- container end -->
    <div class="py-3 text-center creditos">                
        <?php dynamic_sidebar('creditos') ?>
        
        
    </div>

            <!-- Contacto Modal -->
        <div class="modal modal-dark fade" id="contactoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>                            
                            <h5 class="modal-title">
                            <?php echo __( 'Contactanos', 'understrap-child' ) ?>
                            </h5>
                            <p class="mb-0 subtitle">
                                
                            </p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= do_shortcode('[contact-form-7 id="105" title="Formulario de contacto 1"]'); ?>
                    </div>
                    <div class="modal-footer text-center text-white">                        
                        <?php dynamic_sidebar('redes_sociales') ?>
                    </div>
                </div>
            </div>
        </div>
</div><!-- wrapper end -->
</div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

