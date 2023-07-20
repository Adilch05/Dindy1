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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dindy--' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NikMdlzhS;V?HwZx1w06|9k?|Qj&BQDs(,u]5~@]g/_bA^;tC98;skt-h0AN~8(!' );
define( 'SECURE_AUTH_KEY',  'Qr|Rq-,Lcy7I80?b/{O]u]KKMG9qqo#p3^FjGv)C4y7RaHv`w*!h]nB3nU^oyydP' );
define( 'LOGGED_IN_KEY',    'yPyCKH|+rxow.+d6fuc=lG8<zV;Q+%7h(}$/Y*gBI`MYcDCs;i.<.c_-KDci|=bS' );
define( 'NONCE_KEY',        ';W&Hdkv[I~*XM`rR5{zXQph6FHT&gOzD+_YKdzR 2GXtt~B~7b}Llma$b39?Q~/R' );
define( 'AUTH_SALT',        'Ztt^knbj`bDK*e15n_H}=Js4r%*zl] i H-?9PaC{{Z)]Kl! JXd?TQ3kk<gbn0C' );
define( 'SECURE_AUTH_SALT', ']7+uK1}B {D4 -1Ck+V/Rx38%,Dut2l]4*T4/;.C@0P+z&/ia?m@=NB4|8{<zc%o' );
define( 'LOGGED_IN_SALT',   ')u*+&BrW!fDp8>H7IeRg`=.q^]+:jg^[xM_C4<GzFJF0LEXEsJx-JnQLlCnk>,D+' );
define( 'NONCE_SALT',       'A8w#PS0EW^wey_g#T$%[ebMf@Zmh]PBuwx*=U@l#Um/tPHv3MuME+3J39b}P .6f' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
