<section class="latest-news">
  <?php $the_query = new WP_Query(['category_name' => 'Top', 'posts_per_page' => 2,]); ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <article class='box box--half'>
      <header class='header header--box'>
        <h1 class='header__text header__text--box'><?php the_title(); ?></h1>
      </header>
      <section class='box__content'>
        <?php the_content(); ?>
      </section>
    </article>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
</section>
<section class="older-news">
  <?php $the_query = new WP_Query(['category_name' => 'News', 'posts_per_page' => 6,]); ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <article class='box box--news'>
      <header class='header header--box'>
        <h1 class='header__text header__text--box'><?php the_title(); ?></h1>
      </header>
      <section class='box__content'>
        <?php the_content(); ?>
      </section>
    </article>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
</section>
