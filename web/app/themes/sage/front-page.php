<section class="half">
  <?php $the_query = new WP_Query(['post_type' => 'azar_home', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC']); ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <article class='box box--third'>
      <?php get_template_part('templates/box'); ?>
    </article>
  <?php endwhile; ?>
</section>
