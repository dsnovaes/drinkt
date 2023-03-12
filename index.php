<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Água Lôa
 * @since Água Lôa
 */
?>
<?php
/*
 Template Name: Home
*/
get_header();
?>

<section class="banner">  
  <?php if (is_front_page()) { get_template_part( 'template-parts/topo' ); } ?>
  <div class="swiper-container">
    <div class="swiper2 swiper-bannerHome">
      <div class="swiper-wrapper">
        <?php
          query_posts( 'post_type=banners&orderby=date&post_status=publish&posts_per_page=5' );
          while ( have_posts() ) : the_post();
            $desktop = get_field('desktop');
            $mobile = get_field('mobile');
            $url = get_field('destino');
              if ($url) {
                echo '<div class="swiper-slide d-md-block d-none"><a href="' . $url . '" rel="nofollow noopener"><picture><img src="' . $desktop . '" /></picture></a></div>';
                echo '<div class="swiper-slide d-md-none"><a href="' . $url . '" rel="nofollow noopener"><picture><img src="' . $mobile . '" /></picture></a></div>';
              } else {
                echo '<div class="swiper-slide d-md-block d-none"><picture><img src="' . $desktop . '" /></picture></div>';
                echo '<div class="swiper-slide d-md-none"><picture><img src="' . $mobile . '" /></picture></div>';
              } 
          endwhile;
          wp_reset_query();
        ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>

<?php
  query_posts( 'post_type=produtos&orderby=date&post_status=publish' ); 
?>

<section class="container my-5 produtos">
  <div class="swiper swiper-produtos">
    <div class="swiper-wrapper">
      <?php 
          while ( have_posts() ) : the_post();
      ?>
      <div class="swiper-slide"> 
        <div class="row">
          <div class="col-4 col-lg-5">
            <div class="packshot">
              <a href="<?php the_permalink(); ?>" class="align-self-center"><img src="<?php the_post_thumbnail_url($size='product-thumb'); ?>" alt="<?php the_title(); ?>"></a>
              <div class="borda align-self-center"></div>
            </div>
          </div>
          <div class="col-8 col-lg-7 align-self-center">
            <h3 class="text-primary">Produtos</h3>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo get_excerpt(140, 'the_content'); ?></p>
            <p><a href="<?php echo get_permalink(22); ?>" class="btn-primary text-primary">Onde comprar</a></p>
          </div>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_query();
      ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<?php get_template_part( 'template-parts/where_to_buy' ); ?>

<article class="container py-5">   
  <h1 class="text-primary text-center"><?php echo the_title(); ?></h1>
  <p><?php the_content(); ?></p> 
</article>

<?php get_template_part( 'template-parts/dicas' ); ?>

<script>
  const swiper = new Swiper('.swiper-produtos', {
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  });


  const swiper2 = new Swiper('.swiper-bannerHome', {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  });

</script>

<?php
get_footer();
?>