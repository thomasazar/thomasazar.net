<?php
/** Production */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('DISALLOW_FILE_MODS', true);

define('RT_WP_NGINX_HELPER_CACHE_PATH', '/etc/nginx/cache/' . $_SERVER['HTTP_HOST']);
