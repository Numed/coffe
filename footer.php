<footer class="footer-container">
      <!-- <div class="footer-inner"> -->
      <?php wp_nav_menu( array( 
        'theme_location' => 'footer',
        'container' => "div",
        'container_class' => "footer-inner",
        'items_wrap' => '<ul class="header-nav__list">%3$s</ul>'
         )); ?>
        <!-- <ul class="header-nav__list">
          <li class="nav-link">
            <img class="img-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Logo" /><a
              href="index.php"
              >Coffee house</a
            >
          </li>
          <li class="nav-link">
            <a href="our-coffe.php">Our coffee</a>
          </li>
          <li class="nav-link">
            <a href="for-pleasure.php">For your pleasure</a>
          </li>
        </ul> -->
        <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
      <!-- </div> -->
    </footer>