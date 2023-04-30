<?php
/*Template Name: Our Coffe */
?>

<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=" <?php echo get_stylesheet_uri(); ?>">
    <title>Coffe shop</title>
  </head>
  <body>
    <header class="header coffe">
    <?php wp_nav_menu( array( 
        'theme_location' => 'home',
        'container' => 'nav',
        'container_class' => "header-nav",
        'items_wrap' => '<ul class="header-nav__list">%3$s</ul>'
         )); ?>
         <img class="img-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Logo" /></a>
      <div class="header-text">
        <?php $hero = get_field('group_644eb05c7011d');?>
        <h2 class="header-title"><?php echo the_field('header_title');?></h2>
      </div>
    </header>
    <section class="beens">
      <div class="beens-container">
        <div class="beens-inner">
          <img src="<?php bloginfo('template_directory');?>/assets/img/AboutBeens/about-beens.jpg" alt="Beens photo" />
          <div class="beens-text">
            <h3 class="text-title">About our beans</h3>
            <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
            <p class="text-subtitle">
              Extremity sweetness difficult behaviour he of. On disposal of as
              landlord horrible.
            </p>
            <p class="text-subtitle">
            <?php echo the_field('about_field');?>
            </p>
          </div>
        </div>
        <span class="end-section__line"></span>
      </div>
    </section>
    <section class="coffe-cards">
      <div class="filter-section">
        <div class="input-section">
          <h3 class="filter-title">Looking for</h3>
          <input
            class="input-search"
            type="search"
            placeholder="start typing here..."
          />
        </div>
        <div class="sort-section">
          <h3 class="filter-title">Or filter</h3>
          <button class="btn-filter" value="Brazil">Brazil</button>
          <button class="btn-filter" value="Kenya">Kenya</button>
          <button class="btn-filter" value="Columbia">Columbia</button>
        </div>
      </div>
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
    <script src="<?php bloginfo('template_directory');?>/assets/js/index.js"></script>
  </body>
</html>
