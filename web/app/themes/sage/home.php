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
