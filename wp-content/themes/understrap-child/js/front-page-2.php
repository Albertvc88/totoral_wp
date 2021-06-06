    
<?php
    defined( 'ABSPATH' ) || exit;

    get_header();
?>
    <!--/ Main Star /-->
    <main class="mb-6">
        <!--/ Hero Star /-->
        <section class="hero-video">
            <video loop="loop" class="film-video p-0 m-0"autoplay playsinline muted>
                <source type="video/mp4" src="<?php bloginfo('stylesheet_directory'); ?>/images/videos/totoral-loop-home.mp4" />
                <source type="video/webm" src="<?php bloginfo('stylesheet_directory'); ?>/images/videos/totoral-loop-home.webm" />
            </video>
            <div class="hero-content d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 mt-lg-n5 order-md-2 mb-2 mb-md-0">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-totoral-filmsmedia-rainbow.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 mt-lg-n5 order-md-1">
                            <h1 class="title font-wight-bold text-uppercase"><?php echo __( 'Conectamos con la realidad que ', 'understrap-child' ) ?> <br> <?php echo __( 'importa', 'understrap-child' ) ?></h1>
                            <p class="subtitle">Creamos experiencias digitales necesarias</p>
                        </div>
                    </div>
                </div>

                <div class="btn-intro-container">
                    <div class="container d-flex justify-content-center">
                        <a href="#hero" class="js-scroll btn-in d-flex align-items-center justify-content-center btn-in">
                            <i class="las la-angle-double-down dd floating"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Hero End /-->

        <!--/ Services Star /-->
        <section id="hero" class="services py-5 mt-5">
            <div class="services-title title-one text-center pt-3 pb-5 mb-5">
                <div class="container">
                    <h2 class="title pb-4 text-uppercase"><?php echo __( 'CREAMOS REALIDADES SIN LÍMITE', 'understrap-child' ) ?></h2>
                    <p class="subtitle">
                        <?php echo __( 'Desarrollamos historias que reflejan la realidad y creamos experiencias interactivas, que reflexionan sobre el pasado, para construir un futuro de esperanzas.', 'understrap-child' ) ?>
                    </p>

                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 mb-5 mb-md-0">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front d-flex align-items-center">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-totoral-films-1.png" class="img-fluid" alt="Totoral Film">
                                </div>
                                <div class="flip-card-back d-flex">
                                    <div class="row no-gutters align-items-center">
                                        <div class="card-body text-center">
                                            <h5 class="card-title m-0 p-0 font-wight-bold">TOTORAL FILMS</h5>
                                            <p class="card-text px-2 mt-2">
                                                <?php echo __( 'Historias reales para un cine sin fronteras', 'understrap-child' ) ?>                                                
                                            </p>
                                            <a class="btn btn-line link-line"  href="<?php echo esc_url( home_url( '/' ) ); ?>films/"><?php echo __( 'Saber más', 'understrap-child' ) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front d-flex align-items-center">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-totoral-interactive-1.png" class="img-fluid"
                                        alt="Totoral interactivos">
                                </div>
                                <div class="flip-card-back d-flex">
                                    <div class="row no-gutters align-items-center">
                                        <div class="card-body text-center">
                                            <h5 class="card-title m-0 p-0">TOTORAL INTERACTIVOS</h5>
                                            <p class="card-text pl-2 mt-2">
                                                <?php echo __( 'Conectamos con la realidad que importa', 'understrap-child' ) ?>   
                                            </p>
                                            <a class="btn btn-line link-line" href="<?php echo esc_url( home_url( '/' ) ); ?>interactivos/"><?php echo __( 'Saber más', 'understrap-child' ) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5  mb-md-0">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front d-flex align-items-center">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-totoral-medialab-1.png" class="img-fluid" alt="Totoral Film">
                                </div>
                                <div class="flip-card-back d-flex">
                                    <div class="row no-gutters align-items-center">
                                        <div class="card-body text-center">
                                            <h5 class="card-title m-0 p-0">TOTORAL MEDIA LAB</h5>
                                            <p class="card-text pl-2 mt-2">
                                                <?php echo __( 'Un ecosistema para experiencias creativas', 'understrap-child' ) ?> 
                                            
                                            </p>
                                            <a class="btn btn-line link-line" href="<?php echo esc_url( home_url( '/' ) ); ?>medialab/"><?php echo __( 'Saber más', 'understrap-child' ) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 py-5 text-center">
                    <a class="btn btn-line btn-lg link-line js-scroll" href="#ver-portafolio"><?php echo __( 'VER PORTAFOLIO', 'understrap-child' ) ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Services Star /-->


        <!--/ Portafolio Star /-->
        <section id="ver-portafolio" class="portafolio py-6">
            <div class="container">
                <div class="services-title title-one text-center pt-3 pb-5">
                    <div class="container">
                        <p class="subtitle-top mb-0"><?php echo __( 'PORTAFOLIO', 'understrap-child' ) ?></p>
                        <h2 class="title pb-4 no-line"><?php echo __( 'PROYECTOS REALIZADOS', 'understrap-child' ) ?></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 px-0">
                    <?php  
                            
                            ?>
                        <ul id="portafolio-filter" class="list-unstyled">
                            
                            <li class="filter filter-active" data-filter=".todas"><?php echo __( 'Todas', 'understrap-child' ) ?></li>
                            <?php  
                                $categorias = get_terms('categoria_proyecto');
                                
                                foreach($categorias as $categoria)
                                {
                            ?>
                                    <li class="filter" data-filter=".<?=$categoria->slug?>"><?=$categoria->name?></li>
                                <?php
                                }
                                ?>                           
                        </ul>
                        <div class="portafolio-container">
                    <?php 
                            if ( have_posts() ) :
                                
                                $project = new WP_Query( array( 'post_type' => 'proyecto', 'orderby' => 'post-id', 'posts_per_page' => 999, 'order' => 'ASC') ); 

                                while ( $project->have_posts() ) : $project->the_post(); 
                                
                                $thumbnailUrl =	wp_get_attachment_url(get_post_thumbnail_id( $post->ID, 'large'  ));// Sustituir por thumbnail, medium, large o full
                                $cates = get_the_terms( $post->ID, 'categoria_proyecto' );
                            ?>
                            <div class="col-md-6 mb-4 portafolio-thumbnail todas 
                                <?php

                                    foreach($cates as $cat) {
                                        $catName = $cat->name.' - ';
                                        echo $cat->slug.' ';
                                    }
                                ?>
                            ">
                                <div class="card card-portafolio justify-content-center cover" style="background-image:url(<?=$thumbnailUrl?>)">
                                    <div class="card-body">
                                        <a class="bg-body" href="<?php the_permalink(); ?>">          
                                            <p class="text-uppercase mb-0">
                                                <?php 
                                                    foreach($cates as $cat) {
                                                        echo $cat->name.'  ';
                                                        
                                                    }
                                                ?>
                                            </p>                                  
                                            <h5 class="card-title font-wight-bold text-uppercase"><?php the_title() ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                
                                endwhile; 
                            ?>
                            <?php else : ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Portafolio Star /-->

        <section class="ceo py-6 ">
            <div class="container-fluid  px-0">
                <div class="row no-gutters align-items-center position-relative">

                    <div class="bg-ceo">
                    </div>
                    <div class="col-md-6">
                        <div class="img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pepe-rovano-2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 pr-4">
                        <div class="content-ceo mt-5 mt-md-0">
                            <p class="ceo-text">
                                <?php echo __( 'UTILIZO LAS NUEVAS TECNOLOGÍAS PARA REFLEXIONAR SOBRE EL PASADO Y MIRAR HACIA EL FUTURO', 'understrap-child' ) ?>
                            </p>
                            <p class="ceo-name">
                                Pepe Rovano - <?php echo __( 'Director', 'understrap-child' ) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Galeria -->
        <section class="video py6 mb-5">
            <div class="container">
                <div class="services-title title-one text-center pt-3 pb-5">
                    <div class="container">
                        <p class="subtitle-top mb-0">VIDEOS</p>
                        <h2 class="title pb-4 no-line">CADA DÍA DAMOS LO MEJOR DE <br> NOSOTROS</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper-video">
                <div class="swiper-wrapper">

                    <?php 
                    if ( have_posts() ) :
                        
                        $galeria = new WP_Query( array( 'post_type' => 'galeria', 'orderby' => 'post-id', 'order' => 'ASC') ); 

                        while ( $galeria->have_posts() ) : $galeria->the_post(); 

                        $imagen =	wp_get_attachment_url(get_post_thumbnail_id( $post->ID, 'large'  ));// Sustituir por thumbnail, medium, large o full    
                        $video = get_field('g_video');
                    ?>
                    <div class="swiper-slide" style="background-image:url(<?= $imagen ?>)">
                        <div class="slide-content">
                            <a id="idd" data-id="<?php echo $post->ID ?>" class="btn-intro d-flex align-items-center justify-content-center"
                               data-toggle="modal"
                            data-target="#contactoModal2">
                                <span></span>
                            </a>
                        </div>
                    </div>
                            
                    <?php 
                        endwhile; 
                    ?>
                    <?php else : ?>

                    <?php endif; ?>
                </div>
                <!-- Add Pagination -->
            </div>
        </section>
        <!-- End Galeria -->
        <div id="gato" class="d-none">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>
        </div>

        <!-- Contacto Modal -->
        <div class="modal modal-dark fade" id="contactoModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>                            
                            <h5 class="modal-title"> </h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                        
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="my-events-list">
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- Main end -->

    <?php get_footer(); ?>