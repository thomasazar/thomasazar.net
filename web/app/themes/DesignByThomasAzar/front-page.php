<?php

$args = [
    'category_name' => 'front-page',
    'orderby' => 'menu_order',
    'post_status' => 'publish',
];
$count = 1;

$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <?php if ($count === 3) : ?>
        <article class="box box--full">
    <?php else : ?>
        <article class="box box--half">
    <?php endif; ?>
        <header class="header header--box">
            <h2 class="header__text header__text--box"><?php the_title(); ?></h2>
        </header>
        <section class="box__content">
            <?php the_content(); ?>
        </section>
    </article>
    <?php $count++; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
