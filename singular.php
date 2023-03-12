<?php
get_header();
?>
<div class="container pt-5">   
  <h1 class="text-primary text-center cat-title"><?php the_category(' '); ?></h1>
</div>
<article class="container pb-5">   
  <div class="row">
    <div class="col-11 col-md-8 mx-auto my-3">
      <h1 class="title"><?php echo the_title(); ?></h1>
      <div class="row justify-content-between my-3 align-items-center">
        <div class="col-5 col-md-8 text-start">
        <?php the_date(); ?> 
        <?php 
          $date_created = get_the_time('d/m/Y'); 
          $modified_date = get_the_modified_time('d/m/Y'); 
            if ($modified_date != $date_created) { 
              ?> 
              <span>• <?php echo "Atualizado pela última vez em "; the_modified_time('d/m/Y'); ?></span> 
        <?php 
            } 
        ?> 
        </div>
        <div class="col-7 col-md-4 text-end share">
          <a href="https://api.whatsapp.com/send?phone=&text= 😁 Veja essa notícia: <?php the_title(); ?> Acesse o endereço para descobrir 👉 <?php echo get_permalink(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Compartilhe no WhatsApp" rel="nofollow noopener"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="https://t.me/share/url?url=<?php echo get_permalink(); ?>&text=😁 Veja essa notícia: <?php the_title(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Compartilhe no Telegram" rel="nofollow noopener"><i class="fa-brands fa-telegram"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?title=Veja essa notícia!&text=<?php the_title(); ?> Confira mais notícias de <?= MARCA_ABREVIADA ?> <?php echo get_permalink(); ?>&description=Veja essa notícia!&u=<?php echo get_permalink(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Compartilhe no Facebook" rel="nofollow noopener"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/intent/tweet?text=&title= &description= &status=Veja essa notícia: <?php the_title(); ?>? Acesse o endereço para descobrir 👉 <?php echo get_permalink(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Compartilhe no Twitter" rel="nofollow noopener"><i class="fa-brands fa-twitter"></i></a>
          <a href="mailto:?subject=Veja: <?php the_title(); ?>&body=Veja este conteúdo: <?php the_title(); ?> Acesse o endereço para descobrir 👉 <?php echo get_permalink(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Compartilhe por E-mail" rel="nofollow noopener"><i class="fa-solid fa-envelope"></i></i></a>
          <a data-bs-toggle="tooltip" data-bs-placement="top" title="Copiar link do conteúdo" rel="nofollow noopener" id="copyLink"><i class="fa-solid fa-link"></i></a>
        </div>
        <script>
          const btnCopy = document.getElementById("copyLink")
          btnCopy.addEventListener("click",(e)=> {
            e.preventDefault();
            copyText = "<?= get_permalink(); ?>";
            navigator.clipboard.writeText(copyText).then(() => {
              /* clipboard successfully set */
              alert("Link copiado com sucesso");
            }, () => {
              /* clipboard write failed */
              alert("erro");
            })});
        </script>
      </div>  
    </div>
  </div>   
  <?php if (has_post_thumbnail()) { ?>
  <div class="row">
    <div class="col-12 col-md-10 mx-auto">
          <figure>
            <div class="featured">
              <?php the_post_thumbnail(); ?>
              <?php 
              $credits = get_post(get_post_thumbnail_id())->post_content;
              if ($credits != "") { ?>
                <figcaption class="credits"><?= $credits ?></figcaption> 
              <?php } ?>
            </div>
            <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
          </figure>
    </div>
  </div>   
  <?php } ?>
  <div class="row">
    <div class="col-11 col-md-8 mx-auto">
      <?php the_content(); ?>
    </div>
  </div>
</article>

<h2 class="text-primary text-center">Veja também</h2>
<?php get_template_part( 'template-parts/dicas' ); ?>


<?php
get_footer();
?>