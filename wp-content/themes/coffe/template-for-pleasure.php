<?php
/*Template Name: For Pleasure */
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
    <header class="header pleasure">
    <?php wp_nav_menu( array( 
        'theme_location' => 'home',
        'container' => 'nav',
        'container_class' => "header-nav",
        'items_wrap' => '<ul class="header-nav__list">%3$s</ul>'
         )); ?>
         <img class="img-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Logo" /></a>
      <div class="header-text">
        <h2 class="header-title">For your pleasure</h2>
      </div>
    </header>
    <section class="beens">
      <div class="beens-container">
        <div class="beens-inner">
          <img src="<?php bloginfo('template_directory');?>/assets/img/AboutUs/about-section.png" alt="Beens photo" />
          <div class="beens-text">
            <h3 class="text-title">About our goods</h3>
            <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
            <p class="text-subtitle">
              Extremity sweetness difficult behaviour he of. On disposal of as
              landlord horrible.
            </p>
            <p class="text-subtitle">
              Afraid at highly months do things on at. Situation recommend
              objection do intention so questions. As greatly removed calling
              pleased improve an. Last ask him cold feel met spot shy want.
              Children me laughing we prospect answered followed. At it went is
              song that held help face.
            </p>
          </div>
        </div>
        <span class="end-section__line"></span>
      </div>
    </section>
    <section class="coffe-cards">
      <div class="cards">
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Brazil</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Kenya</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Columbia</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Brazil</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Brazil</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
        <a href="single-page.html" class="card">
          <img
            class="card-img"
            src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/been-cards.png"
            alt="Best price card #3"
          />
          <h6 class="card-title">AROMISTICO Coffee 1 kg</h6>
          <h4 class="card-country">Brazil</h4>
          <h5 class="card-price">6.99$</h5>
        </a>
      </div>
    </section>
    <?php get_footer();?>
  </body>
</html>
