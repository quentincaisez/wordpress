<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')K_/qN^KnbdGQ_*]AD:P_cB{1(%nd9Op2x*.AH?bc`gU9&)@VXivx33$}IM?@!r~' );
define( 'SECURE_AUTH_KEY',  'HTsUK^XwaT+ 54Z~=`9Mq]m;l6X &0 *Wju*c2O8qGwt$5$T#gX#RM^xQcsoc}*j' );
define( 'LOGGED_IN_KEY',    '0Kx2O90Gvt9fqEG!ID9^0q&|iHo95yzqoDV1~j,p[[j0!1NF PYW>[@mw+7fi6oK' );
define( 'NONCE_KEY',        '.?cF:)vTy]b!rJ)+NOle$|z9 Kp[},U($yWQ(dGj_iC)7^A=%J!gafsASEqd>12W' );
define( 'AUTH_SALT',        '8EHr(uml~Y!Q^U?XW@d=MNhNYf$VURNyQA0=~|;UG1qo6f1}3/uKPgy#DGK?!BcE' );
define( 'SECURE_AUTH_SALT', 'a&xN)<C>5=s)4`Ho0K}QuM$T_l{=ipM(h353k7D,qGqXb^uTb){|>.4YAG:~n `j' );
define( 'LOGGED_IN_SALT',   'zc5Md;m4UK.2}n3E[g5m^^HH&43QH.FsGQSmdnw=~?(hen1/(-<Z%JX=V?=/#4(Q' );
define( 'NONCE_SALT',       '+6;6%pOpchIS#tq8eUW+Nk4xP$S|#tY4CV8s[B;5c]c6UV&z!XjZ4htd@tT!*j&}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
