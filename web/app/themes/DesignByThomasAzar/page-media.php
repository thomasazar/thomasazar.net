<?php

$args = [
    'post_type' => 'azar_gallery',
    'posts_per_page' => -1,
];

$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post();
    get_template_part('templates/content', 'gallery');
endwhile;

wp_reset_postdata();
