<footer class="footer-container">

      <?php wp_nav_menu( array( 
        'theme_location' => 'footer',
        'container' => "div",
        'container_class' => "footer-inner",
        'items_wrap' => '<ul class="footer-nav__list">%3$s</ul>'
         )); ?>
         <img class="img-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Logo" />
        <img class="beans-image" src="<?php bloginfo('template_directory');?>/assets/img/beans.svg" alt="beans" />
    </footer>