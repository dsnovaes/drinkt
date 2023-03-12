<?php
get_header();
?>
<article class="container py-5">   
  <figure>
    <img src="<?php the_post_thumbnail_url($size='product-featured'); ?>" alt="<?php echo the_title(); ?>" />
    <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
  </figure>


  <h1 class="title"><?php echo the_title(); ?></h1>
  <?php the_content(); ?>
  <p class="mt-5"><a href="<?php echo get_permalink(22); ?>" class="btn-white text-primary">Onde comprar</a></p>
</article>


<?php
get_footer();
?>