<nav id="navbar" class="navbar">
  <button class="navbar-toggler" type="button">
    <?php do_action('smpna_img', 'hamburger', 'svg'); ?>
    <span>Menu</span>
  </button>
  <div class="container">
    <button class="nav-search"><?php do_action('smpna_img', 'search', 'svg'); ?></button>
    <a class="site-logo" href="<?php _e( get_bloginfo('url') ); ?>">
      <?php do_action('smpna_img', 'site-logo', 'svg'); ?>
    </a>
  </div>
  <a href="#">
    <?php do_action('smpna_img', 'user', 'svg'); ?>
    <span>Log in/ Sign up</span>
  </a>
</nav>
