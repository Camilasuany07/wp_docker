<?php
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'sql3786429' );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'sql3786429' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'JSvZY4jVwM' );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'sql3.freesqldatabase.com' );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

// Corrigir problemas de redirecionamento
define( 'WP_HOME', 'https://wp-docker.fly.dev' );
define( 'WP_SITEURL', 'https://wp-docker.fly.dev' );
define( 'FORCE_SSL_ADMIN', true );
$_SERVER['HTTPS'] = 'on';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
