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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'empleosunm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql2021' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E~S-T~lz?Yhej}vz%zt-kd10+{$8nCD?>q!SO>NJk|SR]jDiy.[ yc:r_UR3Zou/' );
define( 'SECURE_AUTH_KEY',  '+,mQl@Qgt!YWYn2uO]o3i+?@c,!7i&GT2N~Sp9&Ep`9QQ}o97Dv!3+}ib=jCIPj|' );
define( 'LOGGED_IN_KEY',    'I$)IEm^1*/l/%!|t,Y=Dz>49M4psY!i91e]A=8)[>icG)k:&qe,fngE_D70;O8zp' );
define( 'NONCE_KEY',        'FmU`{Y^9I< ZK_.c~@KLakBGVUSeF_0q11 ]maa/T4n?*5;hpg?2G|kJXWFK?]hG' );
define( 'AUTH_SALT',        'oA7oW_]4Ew&wiu1-jsc]{kVzZbgo`dWdzoXp_]:;k$;?AEFI:0U6jvv*R9>I<+I|' );
define( 'SECURE_AUTH_SALT', '`FIGB iWMCoNd,Nm{T|-xTNVXVZX?/Lw#3_L3c~CMV /U[7jBwyuYGDIr=@Gwr>Z' );
define( 'LOGGED_IN_SALT',   '@nU=[$r/u~RWvUbI0Dm^5DB;)X[gN.l_[.M!f+TL(7eojM!J461`+FFN@2%UbwM2' );
define( 'NONCE_SALT',       'J=3CJdYtt)mNpB@k.S.*nawa&Gf%$Z[OJHDC(f9wO2jT`/+zdI3ihlL6wlbu@OP]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
