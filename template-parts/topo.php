<header>
  <div class="container">
    <div class="row align-items-center justify-content-between py-4">
      <?php /* <div id="selo-ism">
        <a href="https://grupoism.com.br" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/selo-ism<?php $ipt = get_post_type(); if ($ipt == 'post' || is_page()) { ?>-verde<?php } ?>.svg" /></a>
      </div> */ ?>

      <div class="col-2">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo <?php echo MARCA_ABREVIADA ?>" height="50" class="my-2" /></a>
      </div>

      <nav class="col-10 text-end">
        <?php 
          wp_nav_menu(
            array(
              'menu'           => 'Principal',
              'theme_location' => 'primary',
              'menu_class'     => '',
              'items_wrap'     => '<ul class="justify-content-end my-2">%3$s</ul>',
            )
          );
        ?>
      </nav>
    </div>
  </div>
</header>