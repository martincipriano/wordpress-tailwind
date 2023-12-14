<?php get_header(); ?>

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