<section class="news py-5">
    <div class="container">
        <div class="col-11 col-md-12 mx-auto mb-5 mt-2">
            <div class="row mb-3">
            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'status' => 'publish',
                    'post__not_in' => array( $post->ID )
                )
            );
            ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  ?>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <div class="mb-4 single">
                        <div class="thumb" style="background:url('<?php the_post_thumbnail_url($size='thumb-news'); ?>') no-repeat;">
                            <h3 class="p-4"><a href="<?php the_permalink(); ?>" data-link="home-news"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="p-4">
                            <p><?php echo get_excerpt(140, 'the_content'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6 col-lg-4 mx-auto text-center">
                    <a href="<?php echo get_category_link(1) ?>" data-link="home-news" class="btn-primary text-primary">Veja mais dicas</a>
                </div>
            </div>

            <?php else: ?>
            <p><?php _e('<div class="alert alert-danger" role="alert">Desculpe, nenhuma publicação encontrada.</div>'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>