<section class="the-posts">
    <?php

    $the_query = new WP_Query(['category_name' => 'blog', 'posts_per_page' => '-1']);
    $count = 0;
    while ($the_query->have_posts()) : $the_query->the_post();
        if ($count === 0) {
            get_template_part('templates/content', 'full');
        } else {
            get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
        }
        $count++;
    endwhile;
    wp_reset_postdata();

    ?>
</section>
<?php get_template_part('templates/footer', 'blog'); ?>
