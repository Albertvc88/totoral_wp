<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/css/components/swiper/swiper-bundle.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'line-icons', 'https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css');
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'object-fit-videos', get_stylesheet_directory_uri() . '/js/object-fit-videos.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'swipe', get_stylesheet_directory_uri() . '/js/components/swipe/swiper-bundle.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/js/components/isotope/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

add_action( 'widgets_init', 'understrap_widgets_init' );
if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Footer', 'understrap' ),
				'id'            => 'footer',
				'description'   => __( 'Footer widget area', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

        
		register_sidebar(
			array(
				'name'          => __( 'Footer2', 'understrap' ),
				'id'            => 'footer2',
				'description'   => __( 'Footer widget area', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

        
		register_sidebar(
			array(
				'name'          => __( 'Instagram Slider', 'understrap' ),
				'id'            => 'instagram_slider',
				'description'   => __( 'Footer widget area', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

        register_sidebar(
			array(
				'name'          => __( 'Redes sociales', 'understrap' ),
				'id'            => 'redes_sociales',
				'description'   => __( 'Footer widget area', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

        register_sidebar(
			array(
				'name'          => __( 'Creditos', 'understrap' ),
				'id'            => 'creditos',
				'description'   => __( 'Footer widget area', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Right Sidebar', 'understrap' ),
				'id'            => 'right-sidebar',
				'description'   => __( 'Right sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

	}
} // End of function_exists( 'understrap_widgets_init' ).

// Add autocomplete="off" input contact form 7
add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
function imp_wpcf7_form_elements( $content ) {
    $str_pos = strpos( $content, 'name="your_name"' );
    $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

    $str_pos = strpos( $content, 'name="your_email"' );
    $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );
	
    $str_pos = strpos( $content, 'name="your_telephone"' );
    $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

    $str_pos = strpos( $content, 'name="your_subject"' );
    $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

    return $content;
}

function my_load_scripts() {
    wp_enqueue_script( 'my_js', get_theme_file_uri( 'js/galeria.js'), array('jquery') );

    wp_localize_script( 'my_js', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
        'action' => 'event-list'
    ) );
}
add_action( 'wp_enqueue_scripts', 'my_load_scripts' );

//Consultas ajax a galeria
function my_event_list_cb() {
    $nonce = sanitize_text_field( $_POST['nonce'] );
	$id = $_POST['id']; 
    if ( ! wp_verify_nonce( $nonce, 'my-ajax-nonce' ) ) {
        die ( 'Busted!');
    }

    $args = array(
        'post_type' => 'galeria',
		'p' => $id,
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ($query->have_posts()) {
            $query->the_post();
			
			if(get_field('g_video') != '') {				
				echo '<div>' . get_field('g_video') . '</div>';
			}else {
				echo get_the_post_thumbnail( $post->ID, 'large' );
			}
            echo '<div  class="text-center mt-2"> <h3 class="text-white font-weight-normal">' . get_the_title() . '</h3></div>';
            echo '<div  class="text-center"> <p class="text-muted">' . get_field('g_descripcion') . '</p></div>';
			echo '<div class="text-center"><a href="' . get_permalink() . '" class="btn btn-lg btn-line btn-lg link-line btn-white">Saber más </a>';
        }
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_event-list', 'my_event_list_cb' );
add_action( 'wp_ajax_event-list', 'my_event_list_cb' );

//Shortcode Proyectos
function understrap_proyecto_shortcode($atts, $content = null) {
	
	global $post;
    //atributos
	extract(shortcode_atts(array(
        'tipo' => '',
		'order'   => 'DESC',
		'orderby' => 'date',     
        'posts_per_page' => 999,
	), $atts));
	//filtros de query

	$args = array(
		'order'          => $order,
        'orderby'        => $orderby,        
        'posts_per_page' => 999,
        'post_type'      => 'proyecto',
    );
    //si exite algun tipo de proyecto en especifico [proyecto tipo="pelicula"]
    if ( isset($atts[ 'tipo' ] ) ) {
        $type = $atts[ 'tipo' ];
		$tipo = explode(",", $type);
        $tax_queries         = array (
            array (
                'taxonomy' => 'categoria_proyecto',
                'field'    => 'ID',
                'terms'    => $tipo,
            ),
        );
        $args[ 'tax_query' ] = $tax_queries;
    }
	$output = '';
	$filter = '';

	
	 
		$idc = $type;
		$categorias = get_terms(array(
			'taxonomy' => 'categoria_proyecto',
			'number'  =>  999,
			'include' => $idc,
			'hide_empty'  => false, 
			'orderby'  => 'include', 
			));
		
		foreach($categorias as $categoria)
		{
			$filter .='	<li class="filter" data-filter=".'.$categoria->slug.'">'.$categoria->name.'</li>';
		
		}
    $posts = get_posts($args);
	foreach($posts as $post) {
		
        setup_postdata($post);
		                             
		$thumbnailUrl =	wp_get_attachment_url(get_post_thumbnail_id( $post->ID, 'large'  ));
		$cates = get_the_terms( $post->ID, 'categoria_proyecto' );
/*          print_r($cates);
	die; */
        $output .='
		<div class="col-md-6 col-lg-4 mb-4 portafolio-thumbnail todas ';	

			foreach($cates as $cat) {
				$output .=''.$cat->slug.' ';
			}
			$output .='">';
			$output .='
			<div class="card card-portafolio justify-content-center cover" style="background-image:url('.$thumbnailUrl.')">
				<a href="'.get_the_permalink().'" class="link-cover">
					<div class="card-body">
						<a class="bg-body" href="'.get_the_permalink().'">          
							<p class="text-uppercase mb-0">
				';
										foreach($cates as $cat) {
											$output .=''.$cat->name.' ';
											
										}		
				$output .='
							</p>                                  
							<h5 class="card-title font-wight-bold text-uppercase">'.get_the_title().'</h5>
						</a>
					</div>
				</a>
			</div>
		</div>
		';

	
		
	}
	
	wp_reset_postdata();
	
    return '
	<div class="container">
        <div class="row">
            <div class="col-12 px-0">
				<ul id="portafolio-filter" class="list-unstyled">
					<li class="filter filter-active" data-filter=".todas">Todas</li>
					'.$filter.'
				</ul>
				<div class="portafolio-container">
					'.$output.'
				</div>
			</div>
		</div>
	</div>
	';
	
}
add_shortcode('proyectos', 'understrap_proyecto_shortcode');