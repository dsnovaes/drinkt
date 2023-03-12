<?php
get_header();
?>
<div class="container py-5">   
  <h1 class="text-primary text-center"><?php single_cat_title(); ?></h1>
    <?php $desc = get_the_archive_description();
    if (!empty($desc)) { 
        echo "<div class='row'><div class='col-12 col-md-10 mx-auto mb-3'>". $desc . "</div></div>";
           }  
    ?>
</div>

<section class="news py-5">
    <div class="container">
        <div class="col-11 col-md-12 mx-auto">
            <div class="row mb-3">
            <?php
            $query = new WP_Query(
                array(
                    'post_type' => 'produtos',
                    'orderby' => 'date',
                    'status' => 'publish'
                )
            );
            ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  ?>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <div class="mb-4 single">
                        <div class="thumb" style="background:url('<?php the_post_thumbnail_url($size='thumb-news'); ?>') no-repeat;">
                            <h3 class="p-4"><a href="<?php the_permalink(); ?>" data-link="home-news"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

            <?php else: ?>
            <p><?php _e('<div class="alert alert-danger" role="alert">Desculpe, nenhuma publicação encontrada.</div>'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>