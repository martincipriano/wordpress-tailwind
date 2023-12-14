<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <?php wp_head(); ?>
</head>
<body>
  <?php wp_body_open(); ?>

  <div class="container mx-auto">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque velit dicta ut illo obcaecati sapiente deleniti magni iusto aliquam tenetur suscipit eos inventore, debitis aspernatur ad vero, fuga in enim.
    <?php
      if ( have_pots() ) { 
        while( have_posts() ) {
          the_post();
          the_content();
        }
      }
    ?>
  </div>
  
  <?php wp_footer(); ?>
</body>
</html>