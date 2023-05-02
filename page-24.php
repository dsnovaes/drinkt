<?php
get_header();
?>
<!-- onde comprar -->

<article class="container py-5">   
    <h1 class="title"><?php echo the_title(); ?></h1>
    <?php the_content();

    if( have_rows('cities') ) :
        while( have_rows('cities') ) : the_row();   
        $city_name = get_sub_field('city_name');
    ?>
    <h2 class="my-5"><?= $city_name; ?></h2> 

    <?php if( have_rows('places') ) : ?>
    <div class="row justify-content-start align-items-center">
        <?php
            while( have_rows('places') ) : the_row();   
            $logos = get_sub_field('logos');
            $img = $logos['sizes']['medium'];
            $place_name = $logos['title'];
        ?>
        <div class="col-6 col-md-4 col-lg-3 text-center mb-3"><img src="<?= $img; ?>" alt="<?= $place_name ?>"  title="<?= $place_name ?>" /></div>
        <?php endwhile; ?>
    </div>
    <?php 
        else:
        endif;
        endwhile;
        else:
        endif;
    ?> 
</article>


<?php
get_footer();
?>