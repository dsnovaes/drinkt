
<?php

    define("MARCA", "Água Mineral Lôa");
    define("MARCA_ABREVIADA", "Lôa");
    define("USER_IG", "agualoa");
    define("DOMINIO", "agualoa.com.br");


    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'banner_desktop', 1366, 768, true );
    add_image_size( 'banner_mobile', 640, 640, true );
    add_image_size( 'thumb-news', 420, 210, true );
    add_image_size( 'featured', 1440, 800, true );
    add_image_size( 'product-thumb', 200, 300 );
    add_image_size( 'product-featured', 400, 640, true );

    function register_my_menus() {
        register_nav_menus(
            array(
                'principal' => __( 'Principal' ),
                'marcas' => __( 'Marcas da ISM Brasil' ),
                'ism-brasil' => __( 'ISM Brasil' ),
                'sac' => __( 'SAC ISM Brasil' )
                )
            );
        }
    add_action( 'init', 'register_my_menus' );

    function get_excerpt($limit, $source = null){

        $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        return $excerpt;
    }

?>