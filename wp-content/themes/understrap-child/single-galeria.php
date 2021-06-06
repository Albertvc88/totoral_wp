<?php
    defined( 'ABSPATH' ) || exit;

    get_header();
    
$descripcion =	get_field('g_descripcion');
$video =	get_field('g_video');

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
                    ?>
                        <div class="col-md-5">
                            <h1 class="title-dark"><?php the_title()?></h1>
                            <div class="subtitle-dark mb-4 mb-md-0">
                                <?= $descripcion ?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <?php
                                if($video != '') {				
                                    echo $video;
                                }else {
                                    echo get_the_post_thumbnail( $post->ID, 'large' );
                                }
                            ?>
                        </div>
                        <div class="col-12 mt-5">
                            <?php the_content(); ?>
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
                        <p class="subtitle-top mb-0"><?php echo __( 'PORTAFOLIO', 'understrap-child' ) ?></p>
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
                                    'posts_per_page' => 999,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'categoria_proyecto',
                                            'field'    => 'slug',
                                            'terms'    => ['docu-game','aplicacion'],
                                        ),
                                    ),
                                );

                                $project = new WP_Query( $args );
                        ?>
                            
                            <?php /* Start the Loop */ ?>
                                <?php 
                                    while ( $project->have_posts() ) : $project->the_post();                               
                                    $thumbnailUrl =	wp_get_attachment_url(get_post_thumbnail_id( $post->ID, 'large'  ));
                                    $cates = get_the_terms( $post->ID, 'categoria_proyecto' );
                        ?>
                        <div class="swiper-slide">
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
                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </section>


    </main>

    <?php get_footer(); ?>