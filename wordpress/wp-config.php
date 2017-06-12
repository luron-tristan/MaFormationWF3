<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&f!M:f?uA?VHWCtLg[H*0DUcW6}Rq|SFp|[h=<bwL4.!cbrrjw$ff#c,Q|_G1xJb');
define('SECURE_AUTH_KEY',  'm}[Q+^f,BRLBkxdfWar%`kCjol.($AQGWXN@uW~5aHb+CoXQq&;0;l5Kq?K<@C>c');
define('LOGGED_IN_KEY',    'hqWfW4P~+{+sGJ1@Q.tw04?Ex2djZ..!Q]Cqz?it<//Pc@Dx}mJm 3;o>|(eld,B');
define('NONCE_KEY',        'uOf6:.EFb3#~B7j0{=naFI/5t3V5;EU:)OKo=wjugn)%ye|5>mK&+lj d;i0I>Br');
define('AUTH_SALT',        'adfe~y7t+s|]%)RZmO7DAF~5oq1n(~-K0/WTnJdb@WeQ&VHl4d:* t9BnHy<S38K');
define('SECURE_AUTH_SALT', 't}Z|]SAf*8$#AvEcJVmETVRw%H/U`Fh VZO{%&82yY_lTV5/|_a&A`(Ord,Aopew');
define('LOGGED_IN_SALT',   'xeI0UX^@M%zq#Q[{)Y0;r%*pU]0[g9Ku)N }tNyn`4Pds-8Yk}XwlP+SV^EIjo3#');
define('NONCE_SALT',       'W{5z1RK.CyWZDx,awbBqKcSww^UV*MvY[]BpEj>]B9&zu1fK)#$wI~/:Y^@2<f[:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');