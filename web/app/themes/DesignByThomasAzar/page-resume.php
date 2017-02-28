<article class="box box--full box--resume">
    <header class="header header--box">
        <h2 class="header__text header__text--box">Theatre</h2>
    </header>
    <section class="box__content">
        <table class="resume-table">
            <?php if (have_rows('theatre')) : ?>
                <?php while (have_rows('theatre')) : the_row(); ?>
                    <tr>
                        <td><?php the_sub_field('show'); ?></td>
                        <td><?php the_sub_field('role'); ?></td>
                        <td><?php the_sub_field('venue'); ?></td>
                        <td><?php the_sub_field('director'); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif;?>
        </table>
    </section>
</article>
<article class="box box--full box--resume">
    <header class="header header--box">
        <h2 class="header__text header__text--box">Film</h2>
    </header>
    <section class="box__content">
            <?php if (have_rows('film')) : ?>
                <?php while (have_rows('film')) : the_row(); ?>
                    <tr>
                        <td><?php the_sub_field('show'); ?></td>
                        <td><?php the_sub_field('role'); ?></td>
                        <td><?php the_sub_field('venue'); ?></td>
                        <td><?php the_sub_field('director'); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif;?>
    </section>
</article>
