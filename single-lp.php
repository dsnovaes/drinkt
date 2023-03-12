<?php
/*
    Template Name: LandingPage
    Template Post Type: lp
*/
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
  <title><?php echo wp_title(); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow" /> 
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
</head>

<?php 
    $campanha = get_field('campanha'); 
    $title = get_the_title();
?>
<body bgcolor="#fff" style="margin:0;padding:0;">
<table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" bgcolor="#fff" style="border-spacing:0;border-collapse: unset;">

<?php 
        while( have_rows('fatias') ) : the_row();   
        $img = get_sub_field('imagem');
        $link = get_sub_field('link');
?>
  <tr style="text-align:center">
    <td style="text-align:center" bgcolor="#fff">
        <?php
            if($link) { 
                echo '<a href="'. $link .'?utm_medium=lp&utm_campaign=' . $campanha . '&utm_source='. $title .'&utm_content='. $img .'" target="_blank" style="border:none;text-align:center;"><img src="'. $img .'" style="display:block;margin:0;padding:0;width:100%;height:auto;"></a>';
            } else { 
                echo '<img src="'. $img .'" style="display:block;margin:0;padding:0;width:100%;height:auto;">';
            }
        ?>
    </td>
  </tr>
<?php
    endwhile;   
    wp_reset_query();
?>      
</table>

</body>

</html>