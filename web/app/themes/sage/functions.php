<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  // Admin stuff
  'lib/admin/close-menu.php', // Comments for blog post
  'lib/admin/comments.php', // Comments for blog post

  // Metaboxes
  'lib/metabox/azar_resume_uploads.php',
  'lib/metabox/azar_shows.php',
  'lib/metabox/gallery.php',

  // Post Types
  'lib/post-types/azar_resume_uploads.php', // Resume PDFs, etc
  'lib/post-types/azar_shows.php',          // Shows (current, coming soon)
  'lib/post-types/gallery.php',             // Media gallery
  'lib/post-types/home.php',                // Front page news items

  // Custom TinyMCE buttons
  'lib/tinymce/tinymce.php',

  'lib/assets.php',     // Scripts and stylesheets
  'lib/extras.php',     // Custom functions
  'lib/setup.php',      // Theme setup
  'lib/titles.php',     // Page titles
  'lib/wrapper.php',    // Theme wrapper class
  'lib/customizer.php', // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
