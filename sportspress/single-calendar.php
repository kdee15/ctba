<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header();

?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. PAGE HEADER --------------------------------- -->

<?php get_template_part( 'inc/page-header' ); ?>

<?php get_template_part( 'inc/navigation-page' ); ?>

<!-- C.1. END ----------------------------------------- -->

<main class="p-main page default-page">

  <!-- C.1. PAGE HEADER ------------------------------- -->

  <figure class="o-article-header">
    <h1 class="a-post-title">Fixtures & Results</h1>
  </figure>

  <!-- C.1. END --------------------------------------- -->

  <div class="container" id="container">

    <!-- C.2. SECTIONS -------------------------------- -->


    <?php while ( have_posts() ) : the_post(); ?>

      <?php
      // If team names are being displayed, don't output the event title
      if ( 'yes' === get_option( 'sportspress_event_show_logos', 'yes' ) && 'yes' === get_option( 'sportspress_event_logos_show_team_names', 'yes' ) ) {
        get_template_part( 'content', 'notitle' );
      } else {
        get_template_part( 'content', 'page' );
      }

      // If comments are open or we have at least one comment, load up the comment template
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      ?>

    <?php endwhile; // end of the loop. ?>

    <!-- C.2. END ------------------------------------- -->

  </div>

  <!-- C.3. FOOTER  ----------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.3. END --------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->