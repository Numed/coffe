<?php
/*Template Name: Single Page */
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
        <h2 class="header-title">Our Coffee</h2>
      </div>
    </header>
    <section class="beens">
      <div class="beens-container">
        <div class="beens-inner">
          <img src="<?php bloginfo('template_directory');?>/assets/img/SinglePage/coffe.jpg" alt="Photo of product" />
          <div class="beens-text">
            <h3 class="text-title">About it</h3>
            <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
            <div class="about-it__text">
              <h4 class="text-country">Country: <span>Brazil</span></h4>
              <p class="text-subtitle">
                <span>Description:</span>
                Afraid at highly months do things on at. Situation recommend
                objection do intention so questions. As greatly removed calling
                pleased improve an. Last ask him cold feel met spot shy want.
                Children me laughing we prospect answered followed. At it went
                is song that held help face.
              </p>
              <h3 class="text-price">Price: <span>16.99$</span></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
 <?php get_footer();?>
  </body>
</html>
