<?php
ini_set('display_errors', 0 );
error_reporting(0);

add_theme_support('post-thumbnails');
add_image_size( 'imgUltimasNoticias', 300, 250);

require get_template_directory() . '/inc/metabox.php';

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
    return 30; //Nova quantidade de caracteres do excerpt
}

function wordpress_pagination() {
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }
      
//single individual
add_filter('single_template', 'check_for_category_single_template');

function check_for_category_single_template( $t )

{

  foreach( (array) get_the_category() as $cat )

  {

    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";

    if($cat->parent)

    {

      $cat = get_the_category_by_ID( $cat->parent );

      if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";

    }

  }

  return $t;

}

function escolherCapa( $wp_customize ) {
    $wp_customize->get_setting( 'imgCapa' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoCapa', array(
    "title" => 'Capa',
    "priority" => 28,
    "description" => __( 'Subir uma imagem de capa.', 'theme-slug' )
    ));
    $wp_customize->add_setting('imgCapa', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'imgCapa', array(
    'label' => __( 'Escolher capa', 'theme-slug' ),
    'section' => 'secaoCapa',
    'settings' => 'imgCapa',
    'width'    => 1319,
    'height'   => 257,
    ))
    );
}


function escolherPublicidade1( $wp_customize ) {
    $wp_customize->get_setting( 'imgAd1' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoAd1', array(
    "title" => 'Publicidade 1',
    "priority" => 28,
    "description" => __( 'Subir uma imagem de publicidade.', 'theme-slug' )
    ));
    $wp_customize->add_setting('imgAd1', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'imgAd1', array(
    'label' => __( 'Publicidade 1', 'theme-slug' ),
    'section' => 'secaoAd1',
    'settings' => 'imgAd1',
    'width'    => 300,
    'height'   => 250,
    ))
    );
}

function escolherPublicidade2( $wp_customize ) {
    $wp_customize->get_setting( 'imgAd2' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoAd2', array(
    "title" => 'Publicidade 2',
    "priority" => 28,
    "description" => __( 'Subir uma imagem de publicidade.', 'theme-slug' )
    ));
    $wp_customize->add_setting('imgAd2', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'imgAd2', array(
    'label' => __( 'Publicidade 2', 'theme-slug' ),
    'section' => 'secaoAd2',
    'settings' => 'imgAd2',
    'width'    => 300,
    'height'   => 250,
    ))
    );
}

function escolherVideo1( $wp_customize ) {
    $wp_customize->get_setting( 'video1' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoVideo1', array(
    "title" => 'Vídeo 1',
    "priority" => 28,
    "description" => __( 'Link do vídeo em destaque 1', 'theme-slug' )
    ));
    $wp_customize->add_setting('video1', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'video1', array(
    'label' => __( 'URL do vídeo 1', 'theme-slug' ),
    'section' => 'secaoVideo1',
    'settings' => 'video1'
    ))
    );
}

function escolherVideo2( $wp_customize ) {
    $wp_customize->get_setting( 'video2' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoVideo2', array(
    "title" => 'Vídeo 2',
    "priority" => 28,
    "description" => __( 'Link do vídeo em destaque 2', 'theme-slug' )
    ));
    $wp_customize->add_setting('video2', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'video2', array(
    'label' => __( 'URL do vídeo 2', 'theme-slug' ),
    'section' => 'secaoVideo2',
    'settings' => 'video2'
    ))
    );
}

function escolherVideo3( $wp_customize ) {
    $wp_customize->get_setting( 'video3' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoVideo3', array(
    "title" => 'Vídeo 3',
    "priority" => 28,
    "description" => __( 'Link do vídeo em destaque 3', 'theme-slug' )
    ));
    $wp_customize->add_setting('video3', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'video3', array(
    'label' => __( 'URL do vídeo 3', 'theme-slug' ),
    'section' => 'secaoVideo3',
    'settings' => 'video3'
    ))
    );
}

function escolherVideo4( $wp_customize ) {
    $wp_customize->get_setting( 'video4' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoVideo4', array(
    "title" => 'Vídeo 4',
    "priority" => 28,
    "description" => __( 'Link do vídeo em destaque 4', 'theme-slug' )
    ));
    $wp_customize->add_setting('video4', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'video4', array(
    'label' => __( 'URL do vídeo 4', 'theme-slug' ),
    'section' => 'secaoVideo4',
    'settings' => 'video4'
    ))
    );
}

function escolherFacebook( $wp_customize ) {
    $wp_customize->get_setting( 'facebook' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoFacebook', array(
    "title" => 'Link do facebook',
    "priority" => 28,
    "description" => __( 'Link do facebook do fã-clube(começando com http://)', 'theme-slug' )
    ));
    $wp_customize->add_setting('facebook', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
    'label' => __( 'URL do facebook', 'theme-slug' ),
    'section' => 'secaoFacebook',
    'settings' => 'facebook'
    ))
    );
}

function escolherTwitter( $wp_customize ) {
    $wp_customize->get_setting( 'twitter' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoTwitter', array(
    "title" => 'Link do twitter',
    "priority" => 28,
    "description" => __( 'Link do twitter do fã-clube(começando com http://)', 'theme-slug' )
    ));
    $wp_customize->add_setting('twitter', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
    'label' => __( 'URL do twitter', 'theme-slug' ),
    'section' => 'secaoTwitter',
    'settings' => 'twitter'
    ))
    );
}

function escolherInstagram( $wp_customize ) {
    $wp_customize->get_setting( 'instagram' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('secaoInstagram', array(
    "title" => 'Link do instagram',
    "priority" => 28,
    "description" => __( 'Link do instagram do fã-clube(começando com http://)', 'theme-slug' )
    ));
    $wp_customize->add_setting('instagram', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
    'label' => __( 'URL do instagram', 'theme-slug' ),
    'section' => 'secaoInstagram',
    'settings' => 'instagram'
    ))
    );
}

add_action( 'customize_register', 'escolherCapa' );
add_action( 'customize_register', 'escolherPublicidade1' );
add_action( 'customize_register', 'escolherPublicidade2' );
add_action( 'customize_register', 'escolherVideo1' );
add_action( 'customize_register', 'escolherVideo2' );
add_action( 'customize_register', 'escolherVideo3' );
add_action( 'customize_register', 'escolherVideo4' );
add_action( 'customize_register', 'escolherFacebook' );
add_action( 'customize_register', 'escolherTwitter' );
add_action( 'customize_register', 'escolherInstagram' );


add_filter('pre_get_posts', 'per_category_basis');

function per_category_basis($query){
    if ($query->is_category) {
       
        if (is_category('letras')){
            $query->set('posts_per_page', 17);
        }
       
        if (is_category('noticias')){
            $query->set('posts_per_page', 5);
        }
    }
    return $query;
}

function convertYoutube($string) {
    return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
        $string
    );
}

?>