<article <?php post_class('box box--news'); ?>>
  <header class='header header--box'>
    <h1 class='header__text header__text--box'>
      <a class="link header__link" href="<?php echo get_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
    <h2 class="header__subtext header__subtext--box"><?php the_date(); ?></h2>
  </header>
  <section class='box__content'>
    <?php the_excerpt(); ?>
  </section>
  <section class="comments comments__bottombar">
    <a class="link comments__link comment__link--number" href="<?php comments_link(); ?>">
      <?php comments_number(); ?>
    </a>
    <a class="link comments__link comment__link--post" href="<?php echo get_permalink(); ?>#comments__form">
      Add your comment
    </a>
  </section>
</article>
