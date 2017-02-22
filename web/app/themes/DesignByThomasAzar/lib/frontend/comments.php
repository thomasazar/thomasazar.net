<?php

function format_comment($comment, $args, $depth) {
    /* Pull in the comments */
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_approved != '0') : ?>
        <li class="comments__entry box box--full">
            <p class="comments__byline">
                Comment by: <strong><?php comment_author(); ?></strong> &#8226; Date: <strong><?php comment_date(); ?></strong>
            </p>
            <section class="comments__content">
                <?php comment_text(); ?>
            </section>
        </li>
    <?php endif; ?>
<?php }
