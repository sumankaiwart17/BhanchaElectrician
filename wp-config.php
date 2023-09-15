<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_#|.lI{Eac~`Bu!lzwTy4-F$8>UV<MEMSeY{]-M=/}$njm]`mT9pE;;#]eI4kXbi' );
define( 'SECURE_AUTH_KEY',  'b$[y3[8vE{7b]p{f@~<-AK.Gq8I{OBivm^E{)W!52qDnxcv4:@c2/+?oZz@I3Ewo' );
define( 'LOGGED_IN_KEY',    's#-X<;U`B 2:i;@}OYYyGU%:-D<reFT6[ON2Hzf[%=1n[4,JOYXgV1+2FWhRvC/o' );
define( 'NONCE_KEY',        'ro$JJ#akSDGXMx<]vGD74]Sa93,9t}$gSI;jc(=[2tt)$W.QhgG6V4bNmoX`]5 s' );
define( 'AUTH_SALT',        '+eWq,r@?#1FF-R7I=m@#,zRMC_~X]Bf0ta?~g,Hd5OnQv1rpnMeI|.$WNYwo$:$]' );
define( 'SECURE_AUTH_SALT', '[hn-T(.|l: kS=W00iVg0a~FUoqU!a?0;%<hI!Za]W:,uEeDJ0dwZgNj)3hk:0M.' );
define( 'LOGGED_IN_SALT',   'K].s/xccS5,bqp)gd;Idt~ ][)>KdmDtP(>6jhC%wf3k_)EavDUkHiFl[Y 9%rr;' );
define( 'NONCE_SALT',       'jtGGc:EE/tEO!d5aH2+vW-9)diOscKw jD`1vdl;N9TGj`;F82&1uhG]pX+ng0t`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
