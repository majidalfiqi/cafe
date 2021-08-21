<?php
/*
  * Template Name: patisseries
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/static.js"></script>
  <title>Cafe - Desserts</title>
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
    <section class="intro">
      <h1>Desserts</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quia adipisci quo enim vel facere voluptatem
        delectus non qui nemo sit unde aliquid optio, quod praesentium ex aperiam dolore rem.
      </p>
    </section>
    <section class="parags">
      <div class="parag">
        <div>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam! Unde, sed? Veniam
            consequuntur tempore voluptatum qui, alias quod eligendi quibusdam. Aut voluptas maiores dicta similique
            veniam quibusdam cumque libero. Fuga dolore, sed dolores repudiandae dolorum harum. Qui, mollitia
            accusantium vero eius debitis aliquam libero incidunt dolore aperiam quas quo non ullam similique
            repudiandae! Doloribus nobis ut impedit ipsum ducimus? Quasi minima delectus illo repudiandae debitis.
            Doloremque illum exercitationem facere totam eum provident quis consectetur. Veritatis incidunt iusto
            vitae ex, exercitationem, nihil consequatur facere at odit repudiandae autem libero omnis?
          </p>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/hero1.jpg" alt="patisseries" />
      </div>
      <div class="parag">
        <div>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam! Unde, sed? Veniam
            consequuntur tempore voluptatum qui, alias quod eligendi quibusdam. Aut voluptas maiores dicta similique
            veniam quibusdam cumque libero. Fuga dolore, sed dolores repudiandae dolorum harum. Qui, mollitia
            accusantium vero eius debitis aliquam libero incidunt dolore aperiam quas quo non ullam similique
            repudiandae! Doloribus nobis ut impedit ipsum ducimus? Quasi minima delectus illo repudiandae debitis.
            Doloremque illum exercitationem facere totam eum provident quis consectetur. Veritatis incidunt iusto
            vitae ex, exercitationem, nihil consequatur facere at odit repudiandae autem libero omnis?
          </p>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/hero2.jpg" alt="patisseries" />
      </div>
      <div class="parag">
        <div>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam! Unde, sed? Veniam
            consequuntur tempore voluptatum qui, alias quod eligendi quibusdam. Aut voluptas maiores dicta similique
            veniam quibusdam cumque libero. Fuga dolore, sed dolores repudiandae dolorum harum. Qui, mollitia
            accusantium vero eius debitis aliquam libero incidunt dolore aperiam quas quo non ullam similique
            repudiandae! Doloribus nobis ut impedit ipsum ducimus? Quasi minima delectus illo repudiandae debitis.
            Doloremque illum exercitationem facere totam eum provident quis consectetur. Veritatis incidunt iusto
            vitae ex, exercitationem, nihil consequatur facere at odit repudiandae autem libero omnis?
          </p>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/hero6.jpg" alt="patisseries" />
      </div>
      <div class="parag">
        <div>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laboriosam! Unde, sed? Veniam
            consequuntur tempore voluptatum qui, alias quod eligendi quibusdam. Aut voluptas maiores dicta similique
            veniam quibusdam cumque libero. Fuga dolore, sed dolores repudiandae dolorum harum. Qui, mollitia
            accusantium vero eius debitis aliquam libero incidunt dolore aperiam quas quo non ullam similique
            repudiandae! Doloribus nobis ut impedit ipsum ducimus? Quasi minima delectus illo repudiandae debitis.
            Doloremque illum exercitationem facere totam eum provident quis consectetur. Veritatis incidunt iusto
            vitae ex, exercitationem, nihil consequatur facere at odit repudiandae autem libero omnis?
          </p>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/hero7.jpg" alt="patisseries" />
      </div>
    </section>
  </main>

  <footer id="footer" class="patisseries-footer">
    <p>Follow us</p>
    <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer"><span
        class="fab fa-facebook-f"></span></a>
  </footer>
</body>

</html>