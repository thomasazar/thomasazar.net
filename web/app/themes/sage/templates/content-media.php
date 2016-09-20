<article class="gallery">
  <header class='header header--box header--gallery'>
    <h1 class='header__text header__text--box'><?php the_title(); ?></h1>
  </header>
  <section class="gallery__content">
    <ul class="list gallery__list">
      <?php
      $photos = rwmb_meta($field_id = 'azar_photos');
      $group  = md5($post->ID); // Generate md5sum for fancybox

      // Display first element in array
      $first_photo = array_shift($photos);
      $title    = $first_photo['title'];
      $caption  = $first_photo['caption'];
      $url      = $first_photo['url'];
      $full_url = $first_photo['full_url']; ?>
      <li class="gallery__list-item">
        <a class="gallery__item fancybox" href="<?= $full_url; ?>" title="<?= $caption; ?>" data-fancybox-group="<?= $group; ?>">
          <img src="<?= $url; ?>">
        </a>
      </li>

      <?php
      // Display everything else as hidden images in a list
      foreach ($photos as $photo) {
        $title    = $photo['title'];
        $caption  = $photo['caption'];
        $url      = $photo['url'];
        $full_url = $photo['full_url']; ?>
        <li class="gallery__list-item gallery__list-item--hidden">
          <a class="gallery__item fancybox" href="<?= $full_url; ?>" title="<?= $caption; ?>" data-fancybox-group="<?= $group; ?>">
            <img src="<?= $url; ?>">
          </a>
        </li>
      <?php } ?>
    </ul>
  </section>
</article>
