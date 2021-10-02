<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
    <header>
      <input type="checkbox">
      <div class="brand">
        <a href="<?php echo home_url(); ?>">
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h2>' . get_bloginfo('name') . '</h2>';
} ?>
        </a>
      </div>
      <nav>
      <?php $args = array('theme_location' => 'primary'); wp_nav_menu($args);?>
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url() ?>">
      <div class="search-bar">
      <input type="text" value="<?php echo get_search_query(); ?>" name="s" data-swplive="true" data-swpengine="default" data-swpconfig="default" id="s" placeholder="Search">
      <button type="submit" id="searchsubmit">
        <i class="bi bi-search"></i>
      </button>
      </div>
    </form>
      </nav>
        <div class="humberger">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </header id="top">