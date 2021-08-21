<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" type="text/css"
    media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" type="text/css"
    media="screen" />

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
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/typewriterjs.min.js"></script>
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

  <title>Cafe</title>
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

  <header id="header" class="index-header">
    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"
        alt="Cafe Logo" /></a>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </header>

  <main id="main" class="index-main">
    <section class="hero">
      <div id="slider" class="slider">
        <div class="wrapper">
          <div id="slides" class="slides">
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero1.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero0.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero2.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero3.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero4.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero5.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero6.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero7.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero8.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero9.jpg')"></span>
            <span class="slide"
              style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero10.jpg')"></span>
          </div>
        </div>
        <a id="prev" class="control prev">previous</a>
        <a id="next" class="control next">next
      </div>
      </div>
      <div class="hero-text">
        <h1>The Best Coffee Ever!</h1>
        <a id="scroll" href="#cards">scroll down</a>
      </div>
    </section>

    <section id="cards" class="cards">
      <a class="card" href="/wordpress/le_salon_de_the">
        <div class="letter g">C</div>
        <div class="card-content">
          <h2>Coffee</h2>
          <button>Go</button>
        </div>
      </a>

      <a class="card" href="/wordpress/nos_patisseries_marocainces">
        <div class="letter a">A</div>
        <div class="card-content">
          <h2>Desserts</h2>
          <button>Go</button>
        </div>
      </a>

      <a class="card" href="/wordpress/recettes_astuces">
        <div class="letter t">F</div>
        <div class="card-content">
          <h2>Tips</h2>
          <button>Go</button>
        </div>
      </a>

      <a class="card" href="/wordpress/contact">
        <div class="letter o">E</div>
        <div class="card-content">
          <h2>Contact</h2>
          <button>Go</button>
        </div>
      </a>
    </section>

    <section class="text">
      <h2>Cafe</h2>
      <p>
        C’est dans l’amoure et le respect des traditions que la pâtisserie GATÔ a vue le jour au cœur de la ville
        ocre, Marrakech.
      </p>
      <p>
        Une pâtisserie purement marocaine, aucune activité mécanique, tout est traité comme de la dentelle, pièce par
        pièce. Seules des mains expertes peuvent doser les assemblages très étudiés, seules les meilleures matières
        premières des terroirs marocains sont ici admises, ont les sélectionnent rigoureusement pour leur qualité et
        toujours en fonction de la saison
      </p>
      <p>
        Le concept GATÔ est de faire revivre nos recettes marocaines ancestrales, les mettre en valeur, et attirer
        l’attention sur cet art culinaire, riche en ses ingrédients et très varié en ses saveurs.
      </p>
      <p>
        GATÔ vous fera voyager à travers les multiples saveurs du terroir et on vous rappellera les gouts d’enfance
        avec nos gâteaux marocains à base d’amande, noix, fleur d’oranger, miel, anis, et gomme arabique.
      </p>
      <p>
        Le passage à GATÔ, sera votre nouvel instant de plaisir pur tradition, avec nos sublimes délices : Cornes de
        gazelle, Mhenchas, chebbakias, fekkas, briouates au miel, Ghribas aux amandes, aux noix ou au sésame, qui sont
        les ambassadeurs de la pâtisserie marocaine aux quatre coins du monde.
      </p>
    </section>
  </main>

  <footer id="footer">
    <p>Follow us</p>
    <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer"><span
        class="fab fa-facebook-f"></span></a>
  </footer>
</body>

</html>