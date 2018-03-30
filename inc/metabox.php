<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Campos adicionais para letras', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'   => 'album',
                'name' => __( 'Álbum', 'textdomain' ),
                'type' => 'text',
            ),
            
            
            array(
                'id'   => 'traducao',
                'name' => __( 'Letra traduzida', 'textdomain' ),
                'type' => 'textarea',
            ),
            
            array(
                'id'   => 'fonte',
                'name' => __( 'Fonte', 'textdomain' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}