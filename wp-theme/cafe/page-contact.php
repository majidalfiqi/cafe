<?php
/*
  * Template Name: contact
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
  <script defer src="<?php bloginfo('template_url'); ?>/assets/js/contact.js"></script>
  <title>Cafe - Contact</title>
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

  <header id="header" class="contact-header expanded">
    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"
        alt="Cafe Logo" /></a>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </header>

  <main id="main" class="contact-main">
    <div class="frame"></div>
    <section class="intro">
      <h1>Contact Us</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quia adipisci quo enim vel facere voluptatem
        delectus non qui nemo sit unde aliquid optio, quod praesentium ex aperiam dolore rem.
      </p>
    </section>
    <section class="branch">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/hero0.jpg" alt="Cafe Fa??ade" />
      <h2>California, LA</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quam ratione ipsam architecto neque
        soluta rerum earum ut quia id temporibus accusantium minima, facere, ipsa impedit nesciunt tempore. Expedita,
        quod!
      </p>
      <a class="toggle">Working Hours</a>
      <div class="times hidden">
        <h3>Monday - Friday</h3>
        <p>08:30 - 19:30</p>
      </div>
    </section>
    <section class="info">
      <div class="tel">
        <p>Telephone</p>
        <h3><a href="tel:+1 555-555-5555">+1 555-555-5555</a></h3>
      </div>
      <div class="email">
        <p>email</p>
        <h3><a href="mailto:cafe@domain.com">cafe@domain.com</a></h3>
      </div>
      <div class="facebook">
        <p>facebook</p>
        <h3>
          <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer">Cafe</a>
        </h3>
      </div>
    </section>
  </main>

  <footer id="footer" class="contact-footer">
    <p>Follow us</p>
    <a href="http://www.facebook.com/" target="_blank" rel="noopener noreferrer"><span
        class="fab fa-facebook-f"></span></a>
  </footer>
</body>

</html>