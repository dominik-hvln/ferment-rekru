<?php
function init_acf_banner() {

    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }

    acf_register_block_type( array(
        'name'              => 'manner',
        'title'             => __( 'Banner', '_themename' ),
        'description'       => __( 'Blok sekcji bannerowej', '_themename' ),
        'category'          => 'custom_blocks',
        'icon'              => 'dashicons-align-full-width',
        'keywords'          => array( 'acf', 'banner' ),
        'render_template'   => get_template_directory() . '/parts/blocks/acf-banner/index.php',
    ));

}
add_action( 'acf/init', 'init_acf_banner' );