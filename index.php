<?php
/*Template Name: Coffe house */
?>

<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>Coffe shop</title>
   
  </head>
  <body>
    <header class="header-main__page">
      <?php wp_nav_menu( array( 
        'theme_location' => 'home',
        'container' => 'nav',
        'container_class' => "header-nav",
        'items_wrap' => '<ul class="header-nav__list">%3$s</ul>'
         )); ?>
          <img class="img-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Logo" /></a>
      <section class="intro-section">
        <div class="intro-inner">
          <h2 class="intro-title">Everything You Love About Coffee</h2>
          <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
          <h4 class="intro-subtitle">
            We makes every day full of energy and taste
          </h4>
          <h4 class="intro-subtitle">Want to try our beans?</h4>
          <a href="#about-us" class="btn-more">More</a>
        </div>
      </section>
    </header>
    <section id="about-us">
      <div class="about-container">
        <div class="about-inner">
          <h3 class="about-title">About Us</h3>
          <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
          <p class="about-text">
            Extremity sweetness difficult behaviour he of. On disposal of as
            landlord horrible. Afraid at highly months do things on at.
            Situation recommend objection do intention so questions. As greatly
            removed calling pleased improve an. Last ask him cold feel met spot
            shy want. Children me laughing we prospect answered followed. At it
            went is song that held help face.
          </p>

          <p class="about-text">
            Now residence dashwoods she excellent you. Shade being under his bed
            her, Much read on as draw. Blessing for ignorant exercise any
            yourself unpacked. Pleasant horrible but confined day end marriage.
            Eagerness furniture set preserved far recommend. Did even but nor
            are most gave hope. Secure active living depend son repair day
            ladies now.
          </p>
        </div>
      </div>
    </section>
    <section class="our-best">
      <div class="best-container">
        <div class="best-inner">
          <h4 class="best-title">Our best</h4>
          <div class="best-list">
            <a href="<?php bloginfo('template_directory');?>/single-page.php" class="card">
              <img
                class="card-img"
                src="<?php bloginfo('template_directory');?>/assets/img/MainPage/main-card1.png"
                alt="Best price card #1"
              />
              <h6 class="card-title">Solimo Coffee Beans 2 kg</h6>
              <h5 class="card-price">10.73$</h5>
            </a>
            <a href="href="<?php bloginfo('template_directory');?>/single-page.php" class="card">
              <img
                class="card-img"
                src="<?php bloginfo('template_directory');?>/assets/img/MainPage/main-card2.png"
                alt="Best price card #2"
              />
              <h6 class="card-title">Presto Coffee Beans 1 kg</h6>
              <h5 class="card-price">15.99$</h5>
            </a>
            <a href="<?php bloginfo('template_directory');?>/single-page.php" class="card">
              <img
                class="card-img"
                src="<?php bloginfo('template_directory');?>/assets/img/MainPage/main-card3.png"
                alt="Best price card #3"
              />
              <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
              <h5 class="card-price">6.99$</h5>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
  </body>
</html>
