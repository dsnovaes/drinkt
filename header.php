<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Lôa
 * @since Lôa
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
<title><?php echo wp_title(); ?></title>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TN3DJR5');</script>
<!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#37793e">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <?php if ( is_front_page() == true ) { ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <?php } ?>

  <?php $ipt = get_post_type(); if ($ipt == 'post') { ?>
  <script src="https://kit.fontawesome.com/c2c2eb9e10.js" crossorigin="anonymous"></script>
  <?php } ?>
  <script type='application/ld+json'>
    {
       "@context": "http://schema.org",
       "@type": "WebSite",
       "url": "https://drinkt.com.br",
       "potentialAction": {
         "@type": "SearchAction",
         "target": "https://drinkt.com.br/?q={search_term_string}",
         "query-input": "required name=search_term_string"
       }
    }
    </script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN3DJR5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if (!is_front_page()) { get_template_part( 'template-parts/topo' ); } ?>