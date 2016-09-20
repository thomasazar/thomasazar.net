<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php $the_query = new WP_Query(['category_name' => 'Blog', 'posts_per_page' => -1,]); ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php get_template_part('templates/content', 'home'); ?>
  <?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<footer class="footer footer--blog">
  <q class="footer--blog__quote">
    Make no little plans; they have no magic to stir men’s blood. Make big plans.
  </q>
  <cite class="footer--blog__cite">
    Daniel Burnham
  </cite>
</footer>
