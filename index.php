<?php
  get_header();
  get_header('navigation');
?>
  <div class="container mx-auto">
    <?php
      if ( have_posts() ) { 
        while( have_posts() ) {
          the_post();
          the_content();
        }
      }
    ?>
  </div>
  <?php get_footer(); ?>
