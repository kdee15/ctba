<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo get_page_language($language); ?>" xml:lang="<?php echo get_page_language($language); ?>">

<head>
  <title><?php if (isset($head_title )) { echo $head_title; } ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <?php echo $head; ?>  
  <script type="text/javascript" src="<?php echo get_full_path_to_theme(); ?>/script.js"></script>  
  <?php echo $styles ?>
  <?php echo $scripts ?>
  <!--[if IE 6]><link rel="stylesheet" href="<?php echo $base_path . $directory; ?>/style.ie6.css" type="text/css" /><![endif]-->  
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>
<div class="PageBackgroundSimpleGradient">
    <div class="PageBackgroundGradient"></div>
</div>
<div class="PageBackgroundGlare">
    <div class="PageBackgroundGlareImage"></div>
</div>
<div class="Main">
<div class="Header">
	<div class="HeaderTop">
    	<div class="SocialMedia">
        	<div class="RSSIcon">
            	<a href="<?php $feedsUrls = array_keys(drupal_add_feed()); if(isset($feedsUrls[0]) && strlen($feedsUrls[0])>0) {echo $feedsUrls[0];} ?>" class="rss-tag-icon" title="RSS"></a>
            </div>
            <div class="FBIcon"><a href="http://www.facebook.com/pages/Western-Province-Basketball-Association/264049970295910" target="_new"></a></div>
            <div class="TTIcon"><a href="#" title="Coming Soon"></a></div>            
            <div class="NewLogin"><?php print garland_user_bar() ?></div>
        </div>  		
        <div class="HeaderSearch"><?php print $HeaderSearch ?></div>
    </div>
</div>
<div class="nav">
<?php
if (get_drupal_version() >= 6) {
	$menu_name = variable_get('menu_default_node_menu', 'primary-links');
	$tree = menu_tree_page_data($menu_name);
	echo art_menu_tree_output_d6($tree);
} else {
	echo art_menu_tree_output_d5(variable_get('menu_primary_menu',0));
}
?>
<div class="l"></div>
<div class="r"><div></div></div>
</div>
<div class="Logo">
	<?php
      // Prepare header
      $site_fields = array();
      if ($site_name) {
        $site_fields[] = check_plain($site_name);
      }
      if ($site_slogan) {
        $site_fields[] = check_plain($site_slogan);
      }
      $site_title = implode(' ', $site_fields);
      if ($site_fields) {
        $site_fields[0] = '<span>'. $site_fields[0] .'</span>';
      }
      $site_html = implode(' ', $site_fields);

      if ($logo || $site_title) {
        print '<h1><a href="'. check_url($front_page) .'" title="'. $site_title .'">';
        if ($logo) {
          print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
        }
        print $site_html .'</a></h1>';
      }
    ?>
</div>
<div class="Sheet">
    <div class="Sheet-tl"></div>
    <div class="Sheet-tr"><div></div></div>
    <div class="Sheet-bl"><div></div></div>
    <div class="Sheet-br"><div></div></div>
    <div class="Sheet-tc"><div></div></div>
    <div class="Sheet-bc"><div></div></div>
    <div class="Sheet-cl"><div></div></div>
    <div class="Sheet-cr"><div></div></div>
    <div class="Sheet-cc"></div>
    <div class="Sheet-body">
<div class="contentLayout">
<div class="content">
<div class="Post">
    <div class="Post-body">
<div class="Post-inner">
<div class="PostContent">
<?php if (!empty($breadcrumb)): print theme('breadcrumb', $breadcrumb); endif; ?>
<?php if (!empty($tabs)): print $tabs.'<div class="cleared"></div>'; endif; ?>
<?php if (!empty($tabs2)): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
<?php if (isset($mission)): print '<div id="mission">' . $mission . '</div>'; endif; ?>
<?php if (isset($help)): print $help; endif; ?>
<?php if (isset($messages)): print $messages; endif; ?>
<?php print art_content_replace($content); ?>

</div>
<div class="cleared"></div>

</div>

    </div>
</div>

</div>
<div class="sidebar1">
<?php
if (isset($sidebar_left)) print $sidebar_left;
else if (isset($left)) print $left; 
?>
<?php print $LeftBar ?>
</div>
<div class="sidebar2">
<?php print $RightBar ?>
<?php
if (isset($sidebar_right)) print $sidebar_right;
else if (isset($right)) print $right; 
?>
</div>

</div>
<div class="cleared"></div>
    </div>
</div>

<div class="Footer">
    <div class="Footer-inner">        
        <div class="Footer-text">
        <?php echo $footer_message; ?>
        <?php echo $footer; ?>
        </div>
    </div>
    <div class="Footer-background"></div>
</div>

<p class="page-footer">
  <?php echo t('Powered by ').'<a href="http://drupal.org/">'.t('Drupal').'</a>'.t(' and ').'<a href="http://www.artisteer.com/drupal">Drupal Theme</a>'.t(' created with ').'Artisteer'; ?>

</p>

</div>


<?php if ($closure_region): ?>
  <div id="closure-blocks"><?php print $closure_region; ?></div>
<?php endif; ?>
<?php print $closure; ?>

</body>
</html>