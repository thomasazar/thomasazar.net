<?php $the_query = new WP_Query(['post_type' => 'azar_gallery', 'posts_per_page' => -1,]); ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php get_template_part('templates/content', 'media'); ?>
<?php endwhile; ?>
