<?php while (have_posts()) : the_post(); ?>
  <article class="box box--full">
    <header class="header header--box">
        <h2 class="header__text header__text--box"><?php the_title(); ?></h2>
        <h3 class="header__subtext header__subtext--box"><?php the_date(); ?></h3>
    </header>
    <section class="box__content">
        <?php the_content(); ?>
    </section>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
