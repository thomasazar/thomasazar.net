<header class="header header--top header--front-page">
  <h1 class="header__text header__text--top">
    <a href="<?= esc_url(home_url('/')); ?>" title="Return to home" class="header__link header__link--top"><?php bloginfo('name'); ?></a>
  </h1>
  <h2 class="header__subtext header__subtext--top"><?php bloginfo('description'); ?></h2>
  <nav class="nav nav--main">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list nav__list nav__list--main']);
    endif;
    ?>
  </nav>
</header>
