<article class="box box--full">
    <header class="header header--box">
        <h2 class="header__text header__text--box">
            <a class="link header__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <h3 class="header__subtext header__subtext--box">
            <?php the_date(); ?>
        </h3>
    </header>
    <section class="box__content">
        <?php the_excerpt(); ?>
    </section>
</article>
