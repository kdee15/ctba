<?php
// $Id

if (get_drupal_version() == 5) {
  require_once("drupal5_methods.php");
}
else {
  require_once("drupal6_methods.php");
}

/* Common methods */

function get_drupal_version() {	
	$tok = strtok(VERSION, '.');
	//return first part of version number
	return (int)$tok[0];
}

function get_page_language($language) {
  if (get_drupal_version() >= 6) return $language->language;
  return $language;
}

function get_full_path_to_theme()
{
  return base_path().path_to_theme();
}

/**
 * Allow themable wrapping of all breadcrumbs.
 */
function art_breadcrumb_woker($breadcrumb) {
  $breadcrumb = menu_get_active_breadcrumb();
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">' . implode(' | ', $breadcrumb) . '</div>';
  }
}

/**
 * Custom Login Bar
 */
function garland_user_bar() {
  global $user;                                                                
  $output = '';

  if (!$user->uid) {                                                           
    $output .= drupal_get_form('user_login_block');                            
  }                                                                            
  else {                                                                       
    $output .= t('<p class="user-info">Hi !user, welcome back.</p>', array('!user' => theme('username', $user))); 
  
    $output .= theme('item_list', array(
      l(t('Your account'), 'user/'.$user->uid, array('title' => t('Edit your account'))),
      l(t('Sign out'), 'logout')));
  }
    
  $output = '<div id="user-bar">'.$output.'</div>';
      
  return $output;
}

/**
 * Allow themable wrapping of all comments.
 */
function art_comment_woker($content, $type = null) {
  static $node_type;
  if (isset($type)) $node_type = $type;
  return '<div id="comments">'. $content . '</div>';
}

/*
 * Split out taxonomy terms by vocabulary.
 *
 * @param $node
 *   An object providing all relevant information for displaying a node:
 *   - $node->nid: The ID of the node.
 *   - $node->type: The content type (story, blog, forum...).
 *   - $node->title: The title of the node.
 *   - $node->created: The creation date, as a UNIX timestamp.
 *   - $node->teaser: A shortened version of the node body.
 *   - $node->body: The entire node contents.
 *   - $node->changed: The last modification date, as a UNIX timestamp.
 *   - $node->uid: The ID of the author.
 *   - $node->username: The username of the author.
 *
 * @ingroup themeable
 */
function art_terms_worker($node) {
  $output = '';
  if (isset($node->links)) {
    $output = '&nbsp;&nbsp;|&nbsp;';
  }
  $terms = $node->taxonomy;
  
  if ($terms) {
    $links = array();
    ob_start();?><img class="metadata-icon" src="<?php echo get_full_path_to_theme(); ?>/images/PostTagIcon.png" width="18" height="18" alt="PostTagIcon"/> <?php
	$output .= ob_get_clean();
    $output .= t('Tags: ');
    foreach ($terms as $term) {
      $links[] = l($term->name, taxonomy_term_path($term), array('rel' => 'tag', 'title' => strip_tags($term->description)));
    }  
    $output .= implode(', ', $links);
    $output .= ', ';
  }
  
  $output = substr($output, 0, strlen($output)-2); // removes last comma with space
  return $output;
}

/**
 * Return a themed set of links.
 *
 * @param $links
 *   A keyed array of links to be themed.
 * @param $attributes
 *   A keyed array of attributes
 * @return
 *   A string containing an unordered list of links.
 */
function art_links_woker($links, $attributes = array('class' => 'links')) {
  $output = '';

  if (count($links) > 0) {
    $output = '';

    $num_links = count($links);
    $index = 0;

    foreach ($links as $key => $link) {
      $class = $key;

      if (strpos ($class, "read_more") !== FALSE) {
        break;
      }
      
      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
      }
      else {
        $link['attributes']['class'] = $key;
      }

      if ($index > 0) {
	    $output .= '&nbsp;&nbsp;|&nbsp;';
	  }
	  
      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($index == 1) {
        $extra_class .= 'first ';
      }
      if ($index == $num_links) {
        $extra_class .= 'last ';
      }

	  if ($class) {
        if (strpos ($class, "comment") !== FALSE) {
		  ob_start();?><img class="metadata-icon" src="<?php echo get_full_path_to_theme(); ?>/images/PostCommentsIcon.png" width="18" height="18" alt="PostCommentsIcon"/> <?php
		  $output .= ob_get_clean();
        }
		else {
		  ob_start();?><img class="metadata-icon" src="<?php echo get_full_path_to_theme(); ?>/images/PostCategoryIcon.png" width="18" height="18" alt="PostCategoryIcon"/> <?php
		  $output .= ob_get_clean();
        }
      }

      $index++;
      $output .= get_html_link_output($link);
    }
  }
  
  return $output;
}

function get_html_link_output($link) {
  $output = '';
  // Is the title HTML?
  $html = isset($link['html']) && $link['html'];
  
  // Initialize fragment and query variables.
  $link['query'] = isset($link['query']) ? $link['query'] : NULL;
  $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;

  if (isset($link['href'])) {
    $output = l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment'], FALSE, $html);
  }
  else if ($link['title']) {
  //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
    if (!$html) {
      $link['title'] = check_plain($link['title']);
    }
    $output = $link['title'];
  }
  
  return $output;
}

/**
 * Returns the rendered local tasks. The default implementation renders them as tabs.
 *
 * @ingroup themeable
 */
function art_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= $primary;
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= $secondary;
  }
  return $output;
}

/**
 * Format the forum body.
 *
 * @ingroup themeable
 */
function art_content_replace($content) {
  $first_time_str = '<div id="first-time"';
  $article_str = 'class="article"';
  $pos = strpos($content, $first_time_str);
  if($pos !== false)
{
    $output = str_replace($first_time_str, $first_time_str . $article_str, $content);
    $output = <<< EOT
<div class="Post">
        <div class="Post-body">
    <div class="Post-inner">
    
<div class="PostContent">
    
      $output

    </div>
    <div class="cleared"></div>
    

    </div>
    
        </div>
    </div>
    
EOT;
  }
  else 
{
    $output = $content;
  }
  return $output;
}