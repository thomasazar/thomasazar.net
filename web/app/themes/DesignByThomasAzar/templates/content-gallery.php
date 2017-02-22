<?php $images = get_field('photos'); ?>

<article class="gallery">
    <header class="header header--box header--gallery">
        <h2 class="header__text header__text--box"><?php the_title(); ?></h2>
    </header>
    <section class="gallery__content">
        <ul class="list gallery__list">
            <?php if ($images) : ?>
                <?php foreach ($images as $image) : ?>
                    <li class="gallery__list-item">
                        <a class="gallery__item fancybox" href="<?= $image['url']; ?>" title="<?= $image['alt']; ?>" data-fancybox-group="<?php the_title(); ?>">
                            <img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= $image['alt']; ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </section>
</article>
