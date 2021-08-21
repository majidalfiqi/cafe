<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />

  <!-- pagination styles -->
  <style>
  #menu-nav {
    margin: 0 !important;
  }

  .pagination {
    margin-bottom: 100px;
  }

  .screen-reader-text {
    display: none;
  }

  .page-numbers {
    text-decoration: none;
    color: #890a13;
    padding: 7px 10px;
    margin: 0 5px;
    background-color: #fff;
    color: #890a13;
    border: 2px solid #890a13;
    box-shadow: 2px 2px 0 #890a13;
    font-family: Brown, sans-serif;
    font-size: 0.8em;
    text-transform: uppercase;
    justify-self: self-start;
    align-self: flex-end;
    cursor: pointer;
    transition: box-shadow 0.5s ease;
  }

  .page-numbers:hover {
    box-shadow: 2px -2px 0 #890a13;
  }

  .current {
    color: #e1c9b1;
    border: 2px solid #e1c9b1;
    box-shadow: 2px -2px 0 #e1c9b1;
  }

  .current:hover {
    box-shadow: 2px -2px 0 #e1c9b1;
  }
  </style>

  <link rel="preload" href="<?php bloginfo('template_url'); ?>/assets/fonts/Brown.woff" as="font"
    crossorigin="anonymous" />
  <link rel="preload" href="<?php bloginfo('template_url'); ?>/assets/fonts/Brown-Bold.woff" as="font"
    crossorigin="anonymous" />
  <link rel="preload" href="<?php bloginfo('template_url'); ?>/assets/fonts/TTBells-Bold.woff" as="font"
    crossorigin="anonymous" />

  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/fontawesome.min.js"></script>
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/brands.min.js"></script>
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/typewriterjs.min.js"></script>
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/recettes.js"></script>
  <title>Cafe - Tips</title>
</head>

<body>
  <nav id="nav">
    <div class="frame"></div>
    <div class="nav-container">
      <button class="close">close</button>
      <ul style="margin: 100px 0;">
        <li>
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"
              alt="Cafe Logo" /></a>
        </li>
      </ul>

      <?php
      $home = get_page_by_title('Home');

      wp_nav_menu(
        array(
          'menu' => 'nav',
          'theme_location' => 'nav',
          'exclude' => "{$home->ID}"
        )
      )
      ?>
    </div>
  </nav>

  <header id="header" class="recettes-header expanded">
    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"
        alt="Cafe Logo" /></a>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </header>

  <main id="main" class="recettes-main">
    <div class="frame"></div>
    <section class="hero">
      <div class="bg-pic" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero3.jpg')">
      </div>
      <div class="hero-text">
        <h1>You're looking for the best coffee?</h1>
        <a id="scroll" href="#posts">scroll down</a>
      </div>
    </section>
    <h1 id="posts" class="posts-title">Tips</h1>