
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

	<!-- C.1. MASTHEAD -->

	<header class="o-header o-page-header" id="o-header">
    <a class="m-figure" href="/">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/Logo.png" alt="CTBA Logo" class="a-image logo-image">
    </a>
		<div class="m-breadcrumbs">
      <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>


    <div class="o-hamburger m-hamburger--spin toggle-div burger-nav" name="burger-nav" id="burger-menu">
      <div class="m-hamburger-box">
        <div class="m-hamburger-inner"></div>
      </div>
    </div>

	</header>
