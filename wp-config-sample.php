<?php
/**
 * Basic WP Config
 */

define('DB_NAME',     'db_name');
define('DB_USER',     'db_user');
define('DB_PASSWORD', 'db_pass');
define('DB_HOST',     'db_host');
define('DB_CHARSET',  'utf8mb4');
define('DB_COLLATE',  '');

$table_prefix  = 'wp_';

# Rememeber to get your salts at http://api.wordpress.org/secret-key/1.1/salt/

define('AUTH_KEY',         'y%*XT).2%GS9D(DDaPmaH|dg8)BMh*>$w+(S2vWH!=avSS>Q9sdLMn<$`sv<a/!Z');
define('SECURE_AUTH_KEY',  'Bs >->v>0%`&2{^o^OP9Ta|wu9ESalMU?Y-^*Dd?Q$Fn:d{F:TmBp=r?nrW$dX<#');
define('LOGGED_IN_KEY',    ';V-M%Z3M[IoJ{q_73gE25+-M@ge}B80DhkSRvx:Ax,/5gB@!2IOH4fv@kjbD()T`');
define('NONCE_KEY',        'qwsK_l*Tx)>X%bLm2+:1z%8a6|.+Yz7S=T2 +m<1jD!P2,pQ=R5(3aYl76W&{=tU');
define('AUTH_SALT',        '):>bXn.2rVQ=m-mx[|^b!-e LKE`__Lp0V;zC>bB+--</Pnh3@cX7-2f=`RXM:eS');
define('SECURE_AUTH_SALT', 'Juey96K7;<KDIB>-8egHPge<+!rtt>OnK&:G$/bb[G-OWdfWx4{y9Kk?ka(GK7rb');
define('LOGGED_IN_SALT',   'Bb*on-)LpeuPEul0<GTY}*+|aQ--a;-QK/$ad)8b&oY+TkS)<]= z+(UI]jP]4pm');
define('NONCE_SALT',       'q!eu@*@_P3=!ovElTnP^?/1-`-tfvFa;Y;n%SizxtM*O2->V|%-hV*=O!Zx m!wy');

define('WPLANG', EN_us);

/**
 * Custom WordPress Install Path
 */

# Sets the site's admin location and the site's location, respectively
define( 'WP_SITEURL', 'https://yourhost.io/wp' );
define( 'WP_HOME', 'https://yourhost.io' );

# Sets the content location, related to what's defined on composer.json file
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content');

# Sets the plugins location, related to what's defined on composer.json file
define( 'WP_PLUGIN_URL',  WP_CONTENT_URL . '/plugins' );

# Disables the embebeded editor
/*
define( 'DISALLOW_FILE_EDIT', true);
define( 'DISALLOW_FILE_MODS', true);
define( 'RELOCATE', true);
*/

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/**
 * SSL
 * You might want to force SSL on the admin page
 */

# define( 'FORCE_SSL_LOGIN', true );
# define( 'FORCE_SSL_ADMIN', true );

/**
 * Debug Flags
 * Use them under development environments
 */

define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('SAVEQUERIES', false);

/* KEEP OUT BELOW */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
