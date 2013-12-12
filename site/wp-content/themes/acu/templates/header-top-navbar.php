<header class="banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-51x20.png" alt="ACU">
        <!--<?php bloginfo('name'); ?> <span class="glyphicon glyphicon-book"></span>-->
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        wpmem_inc_sidebar();

      /*  if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      */
      ?>
    </nav>
  </div>
</header>