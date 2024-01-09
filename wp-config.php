<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q7!,9Qs).e=Y]%oUyJp)ng*in0Mqnj5Llpuo&i#5UMv6|4>aG~_ShQ=5[Fi12}cQ' );
define( 'SECURE_AUTH_KEY',  '$ B|oL*%e!C3b>=4MH[&X0Sc&Emu3&YS4.[V+?Imk91)VQeQZ,z Qb0}F f@K:y,' );
define( 'LOGGED_IN_KEY',    '1J|m3d_XqUGPszj8=/>LVw|d:~W>cfg^CT|rde0K+!%Ar=ejVt;HEGT90{6/1+]t' );
define( 'NONCE_KEY',        'GeJ6v) @1-qa<?NmWT~kR;gxaX0-_w *xkB`[X3]4[I8!a:pxl[ZWMDmlyVQH#[C' );
define( 'AUTH_SALT',        ' _wHnE[_E7?Z/E)p8rlhS|</LQaZ<^Zd~ceP>8xG:vGicbwxmjc7~_8&u 4rB ^|' );
define( 'SECURE_AUTH_SALT', '>Hy-)@9KMBRquH({G)nl9PG)4QHHfJ)3 B;Ov=PzMdyG=7!8+csvY1EjMJi-^5EN' );
define( 'LOGGED_IN_SALT',   '_6;padmr`+zkUkmuH>v8$)@/i[u%}|jQr7cBoH@X|J:11BQ6.YgvV+WpTK}qD#pE' );
define( 'NONCE_SALT',       'v^S:G9./=u7omi1u``(%|h6 afn|Hq=Bf6M]L*G6QP7zu/lc);Tf9fpLRb:)j@+}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
