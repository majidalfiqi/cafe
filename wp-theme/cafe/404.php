<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Pâtisseries marocaines / Salon de thé
    Large choix de Pâtisseries fine aux amandes sans colorant ni arômes artificiels, petit déjeuner typique traditionnel servis toute la journée. Pastillat poulet amande pour déjeuner" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <style>
  #menu-nav {
    margin: 0 !important;
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
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/404.js"></script>
  <title>Cafe - Page Doesn't Exist</title>
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

  <header id="header" class="patisseries-header expanded">
    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"
        alt="Cafe Logo" /></a>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </header>

  <main id="main" class="patisseries-main">
    <div class="bg"></div>
    <div class="frame"></div>
    <h1 class="not-found">
      Unfortunately, this page doesn't exist.<a href="<?php echo home_url(); ?>">Home Page</a>
    </h1>
  </main>
  <footer id="footer" class="recettes-footer">
    <p>Follow us</p>
    <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer"><span
        class="fab fa-facebook-f"></span></a>
  </footer>
</body>

</html>