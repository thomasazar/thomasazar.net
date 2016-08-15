<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('box box--full'); ?>>
    <header class='header header--box'>
      <h1 class='header__text header__text--box'><?php the_title(); ?></h1>
      <h2 class="header__subtext header__subtext--box"><?php the_date(); ?></h2>
    </header>
    <section class=box__content>
      <section class=box__content--entry>
        <?php the_content(); ?>
        <small>
          <?php previous_post_link( 'Previous post: %link', '%title', $in_same_term = true, $taxonomy = 'category' ); ?> <br />
          <?php next_post_link( 'Next post: %link', '%title', $in_same_term = true, $taxonomy = 'category' ); ?>
        </small>
      </section>
      <?php comments_template('/templates/comments.php'); ?>
    </section>
  </article>
<?php endwhile; ?>
