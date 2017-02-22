<?php

function banner_class() {
    if (is_page('resume')) {
        return 'resume';
    } elseif (is_page('media')) {
        return 'media';
    } elseif (is_home()) {
        return 'blog';
    } elseif (is_page('contact')) {
        return 'contact';
    } else {
        return 'front-page';
    }
}
