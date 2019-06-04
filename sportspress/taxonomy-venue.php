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

  <!-- C.1. PAGE HEADER ------------------------------- -->

  <figure class="o-article-header">
    <h3 class="a-post-title">VENUE DETAILS</h3>
  </figure>

  <!-- C.1. END --------------------------------------- -->

  <!-- C.2. SECTIONS ---------------------------------- -->

  <?php the_post_thumbnail(); ?>

  <section class="o-block event-list container">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="a-match-day"><?php the_date(); ?></div>
        <section class="o-table-layout event-list">
            <div class="a-table-row">
              <div class="a-table-cell a-match-up"><?php the_title(); ?></div>
              <div class="a-table-cell a-time"><?php the_time(); ?></div>
              <div class="a-table-cell a-division"><?php the_field(sp_day); ?></div>
            </div>
        </section>
      <?php endwhile; // end of the loop. ?>
    </div>
  </section>

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