<?php

/*
Template Name: Venue Page
*/

get_header();

?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. PAGE HEADER --------------------------------- -->

<?php get_template_part( 'inc/page-header' ); ?>

<?php get_template_part( 'inc/navigation-page' ); ?>

<!-- C.1. END ----------------------------------------- -->

<main class="p-main page single">
 
    <figure class="o-article-header">
      <?php the_post_thumbnail(); ?>
      <h3 class="a-post-title">VENUE TITLE<span class="a-footnote"><?php the_date(); ?></span></h3>
    </figure>
 

  <!-- C.1. PAGE HEADER ------------------------------- -->

  <?php while ( have_posts() ) : the_post(); ?>

    <p class="a-post-title">
    <?php the_title(); ?></p>
    <p><?php the_date(); ?></p>
    <p><?php the_field(sp_day); ?></p>

  

  <?php endwhile; // end of the loop. ?>

  <!-- C.1. END --------------------------------------- -->

  <!-- C.2. SECTIONS ---------------------------------- -->



  <!-- C.2. END --------------------------------------- -->

  <!-- C.3. FOOTER  ----------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.3. END --------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->