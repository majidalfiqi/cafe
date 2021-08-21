<?php

function execute_site_actions( $blog_id, $user_id, $domain, $path, $site_id, $meta ) {
  switch_to_blog($blog_id);

  
  restore_current_blog();
}

add_action( 'wpmu_new_blog', 'execute_site_actions', 10, 6 );


if (isset($_GET['activated']) && is_admin()){
  
  $pages = array('Home', 'Coffee', 'Desserts', 'Tips', 'Contact');
  $slugs = array('home', 'coffee', 'desserts', 'tips', 'contact');
  $templates = array('', 'page-the.php', 'page-patisseries.php', 'index.php', 'page-contact.php');
  
  for ($i = 0; $i <= count($pages)-1; $i++) {
    $new_page_title = $pages[$i];
    $new_page_template = $templates[$i];
    
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
      'post_type' => 'page',
      'post_title' => $new_page_title,
      'post_name'  => $slugs[$i],
      'comment_status' => 'closed',
      'ping_status' => 'closed',
      'post_status' => 'publish',
      'post_author' => 1,
      'page_template' => $templates[$i],
      'menu_order' => $i
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        
        if ($new_page['post_title'] == 'Home') {
          $homepage_id = $new_page_id;
          update_option('page_on_front', $homepage_id);
          update_option('show_on_front', 'page');
        }
        elseif ($new_page['post_title'] == 'Tips'){
          $postspage_id = $new_page_id;
          update_option('page_for_posts', $postspage_id);
          update_option('rss_use_excerpt', 1);
          update_option('show_on_front', 'page');
        }
      }
    }
    
    $defaultPage = get_page_by_title( 'Sample Page' );
    wp_delete_post( $defaultPage->ID, $bypass_trash = true );

    $privacyPage = get_page_by_title( 'Privacy Policy' );
    wp_delete_post( $privacyPage->ID, $bypass_trash = true );
    
    $defaultPost = get_posts( array( 'title' => 'Hello World!' ) );
    wp_delete_post( $defaultPost[0]->ID, $bypass_trash = true );
    
  }
  
  
  function pg_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  
  add_action('after_setup_theme', 'pg_theme_support');
  
  
  function gp_menus() {
    register_nav_menu('nav', __('Navigation Menu'));
  }
  
  add_action('after_setup_theme', 'gp_menus');
  
  ?>