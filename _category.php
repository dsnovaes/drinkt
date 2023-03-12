<?php
get_header();
?>

<div class="blog p-5">
  <div class="container">
    <h3><?php single_cat_title(); ?></h3>
    <div class="row justify-content-around loop">
    <?php query_posts( "cat=1&orderby=date&order=DESC&posts_per_page=30" );  ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-xs-3 col-md-3 col-sm-12 mb-3">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
        <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title(); ?></a>
      </div>
      <?php endwhile; else: ?>
      <p><?php _e('<div class="alert alert-danger" role="alert">Desculpe, nenhuma publicação encontrada.</div>'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>