
<?php if ( is_front_page() == true ) {  get_template_part( 'template-parts/ig_feed' ); } ?>


<footer <?php if ( is_front_page() == false ) {  echo "class='mt-5'"; } ?>>
  <div class="container">
    <div class="row py-5">
      <div class="col-xs-4 col-md-3 col-sm-12">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-ism-negativo.svg" alt="Logo ISM Brasil">
      </div>
      <div class="col-xs-4 col-md-2 col-sm-12">
        <p>Marcas da ISM Brasil</p>
        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'marcas',
              'items_wrap'     => '<ul class="navbar-nav mr-auto">%3$s</ul>',
            )
          );
        ?>
        
      </div>
      <div class="col-xs-4 col-md-4 col-sm-12 sac">
        <p>SAC ISM Brasil</p>
        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'sac',
              'items_wrap'     => '<ul class="navbar-nav mr-auto">%3$s</ul>',
            )
          );
        ?>
      </div>
      <div class="col-xs-4 col-md-3 col-sm-12">
        <p>ISM Brasil</p>
        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'ism-brasil',
              'items_wrap'     => '<ul class="navbar-nav mr-auto">%3$s</ul>',
            )
          );
        ?>
      </div>
    </div>
  </div>
<script>
  new Date().getFullYear()
</script>
  <div class="container last">
    <div class="row py-4 justify-content-between">
      <div class="col-md-2 col-3">ISM &copy; <span id="year"></span></div>
      <script type="text/javascript">document.getElementById("year").innerHTML = new Date().getFullYear();</script>
      <div class="col-md-2 col-5 text-left d-none"><small><a href="https://grupoism.com.br/politicas-de-privacidade" rel="nofollow noopener">Políticas de Privacidade</a></small></div>
      <div class="col-md-8 col-4 text-end"><small><a href="https://diegonovaes.com.br" rel="nofollow noopener">Desenvolvedor Frontend</a></small></div>
    </div>
  </div>
</footer>

  <!-- /RODAPE -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    
    
  <?php $ipt = get_post_type(); if ($ipt == 'post') { ?>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
  <?php } ?>
</body>

</html>