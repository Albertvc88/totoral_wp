<?php
    defined( 'ABSPATH' ) || exit;

    get_header();
    
$descripcion =	get_field('descripcion');
$video =	get_field('video');
$direccion =	get_field('direccion');
$guion =	get_field('guion');
$ano =	get_field('ano');
$pagina_web =	get_field('pagina_web');
$musica =	get_field('musica');
$equipo =	get_field('equipo_de_trabajo');
$galeria =	get_field('galeria');
$genero =	get_field('genero');
$equipo_de_trabajo =	get_field('equipo_de_trabajo');
$produccion =	get_field('produccion');
$premios_fondos =	get_field('premios_fondos');
$auspiciador_pro =	get_field('auspiciador_pro');
$pais =	get_field('pais');
$ficha_tecnica =	get_field('ficha_tecnica');
$logos_fondos_publicos =	get_field('logos_fondos_publicos');

?>
    <!--/ Main Star /-->
    <main  class="bg-dark pb-6">

        <section class="service-detail py-100">
            <div class="intro-box">
                <div class="container">
                    <div class="row">
                    <?php
                        while ( have_posts() ) {                            
					    the_post();

                        //Categorias de este post
                        $categorias = get_the_terms( $post->ID, 'categoria_proyecto' );
                        $categoria = count( $categorias );
                        for ( $i = 0; $i < $categoria; $i++ ) {
                          $categorias_id[$i] = $categorias[$i]->term_id;
                        }
                    ?>
                        <div class="col-md-5 mb-4">
                            <h1 class="title-dark"><?php the_title() ?></h1>
                            <div class="subtitle-dark">
                                <?php 
                                    if($descripcion): 
                                        echo $descripcion;
                                    endif;
                                ?>
                            </div>
                            <ul class="list-group list-group-flush bg-dark">

                                <?php if($direccion): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Director', 'understrap-child' ) ?>: </span><?=$direccion?></li>
                                <?php endif ?>

                                <?php if($guion): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Guión', 'understrap-child' ) ?>:</span> <?= $guion ?></li>
                                <?php endif ?>                                

                                <?php if($pais): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'País', 'understrap-child' ) ?>:</span> <?=$pais?></li>
                                <?php endif ?>

                                <?php if($ano): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Año', 'understrap-child' ) ?>:</span> <?=$ano?></li>
                                <?php endif ?>

                                <?php if($ficha_tecnica): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Ficha técnica', 'understrap-child' ) ?>:</span> <a href="<?=$ficha_tecnica?>" target="_black">Ver ficha</a></li>
                                <?php endif ?>

                                <?php if($musica): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Música', 'understrap-child' ) ?>:</span> <?=$musica?></li>
                                <?php endif ?>
                                
                                <?php if($produccion): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Producción', 'understrap-child' ) ?>:</span> <?=$produccion?></li>
                                <?php endif ?>

                                <?php if($genero): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Género', 'understrap-child' ) ?>:</span> <?=$genero?></li>
                                <?php endif ?>
                                
                                <?php if($pagina_web): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Página web', 'understrap-child' ) ?>:</span> <a href="<?=$pagina_web?>" target="_black"><?=$pagina_web?></a></li>
                                <?php endif ?>   
                                
                                <?php if($premios_fondos): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Premios / fondos', 'understrap-child' ) ?>:</span> <?=$premios_fondos?></li>
                                <?php endif ?> 
                                
                                <?php if($auspiciador_pro): ?>
                                <li class="list-group-item subtitle-dark bg-dark"><span class="title-dark"><?php echo __( 'Auspiciador/ Pro', 'understrap-child' ) ?>:</span> <?=$auspiciador_pro?></li>
                                <?php endif ?>                              

                                <?php if($equipo_de_trabajo): ?>
                                <li class="list-group-item subtitle-dark bg-dark">
                                    <a class="btn btn-line btn-white mb-3" data-toggle="collapse" href="#collapseEquipo" role="button" aria-expanded="false" aria-controls="collapseEquipo">
                                        <?php echo __( 'Equipo de trabajo', 'understrap-child' ) ?>
                                    </a>
                                    <div class="collapse" id="collapseEquipo">
                                        <div class="bg-dark">
                                            <?=$equipo_de_trabajo?>
                                        </div>
                                    </div>   
                                </li>
                                <?php endif ?>

                            </ul>
                        </div>
                        <div class="col-md-7">
                            <?php
                                if($video != '') {				
                                    echo $video;
                                }else {
                                    echo get_the_post_thumbnail( $post->ID, 'large' );
                                }
                            ?>
                            <?php 
                            
                                if($logos_fondos_publicos):  
                                    echo  "<div class='mt-4'>";
                                    echo $logos_fondos_publicos;
                                    echo  "</div>";
                                endif 
                            ?>
                            <?php 
                            
                                if($galeria):  
                                    echo  "<div class='mt-4'>";
                                    echo do_shortcode($galeria) ;
                                    echo  "</div>";
                                endif 
                            ?>
                            
                        </div>
                        <div class="col-12 mt-5 bg-dark">
                            <?php the_content() ?>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section id="portafolio" class="last-project">
            <div class="container">
                <div class="title-one text-center pb-5">
                    <div class="title-content">
                        <p class="subtitle-top mb-0">
                        <p class="subtitle-top mb-0"><?php echo __( 'PORTAFOLIO', 'understrap-child' ) ?></p></p>
                        <h2 class="title pb-4 no-line title-dark"><?php echo __( 'ÚLTIMOS PROYECTOS', 'understrap-child' ) ?></h2>
                    </div>
                </div>
            </div>

            <div class="swiper-container swiper-last-project">
                <div class="swiper-wrapper">
                    
                        <?php 
                            if ( have_posts() ) : 
                                $args = array(
                                    'post_type' => 'proyecto',
                                    'posts_per_page' => 99,
                                    'orderby' => 'date',
                                    'order' => 'DES',
                                    'post__not_in' => array( $post->ID ),
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'categoria_proyecto',
                                            'field'    => 'ID',
                                            'terms'    => $categorias_id,
                                        ),
                                    ),
                                );
                        ?>
                                <?php 
                                    $project = new WP_Query( $args );
                                     
                                    while ( $project->have_posts() ) : $project->the_post(); 

                                    $thumbnailUrl =	wp_get_attachment_url(get_post_thumbnail_id( $post->ID, 'large'  ));
                                    $cates = get_the_terms( $post->ID, 'categoria_proyecto' );
                                ?>
                        <div class="swiper-slide">
                        <div class="card card-portafolio justify-content-center cover" style="background-image:url(<?=$thumbnailUrl?>)">
                            <a href="<?php the_permalink(); ?>" target="_blank" class="link-cover">
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
                            </a>
                        </div>
                    </div>
                    <?php 
                                
                            endwhile; 
                        ?>
                        <?php else : ?>

                        <?php endif; ?>
                </div>                
                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </section>


    </main>

    <?php get_footer(); ?>