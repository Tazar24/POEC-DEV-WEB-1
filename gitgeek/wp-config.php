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
define('DB_NAME', 'gitgeek');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q+!K|?n5$dogQ[fr<9jYL@w|_X&9a4qKU~}DYG)4M-2H[S*Mv=E8/CvKl/Jb(g~Q');
define('SECURE_AUTH_KEY',  '5JuCY]%<O;@[gR!K}xxTO_U?tC3}-lm*@[0A6#KdJ3;TS|5.E1X6rvp$Ev&977r ');
define('LOGGED_IN_KEY',    '3&qxqmP15FdYWTBaq}e&;vENtC^?)S/[a0&>aD6fzZ=`q?r+@?fy]:++m=M;v6]S');
define('NONCE_KEY',        'APpdc3(0F{CNz}$wZA-wLqv7r:Xx7p6>q55woJ^S`K/,^2=sjwy?PWm6}|$t56Po');
define('AUTH_SALT',        'Fo-]Ci*o&48PFz KcI,:z9xML~<9{j,R44G!Mc%ey64M2(1y_TtkO~xY09#>O3n0');
define('SECURE_AUTH_SALT', 'vGbgd@% QbtPw6,W(16Wacl0JL/:O&Wcq) xq[C>#3,.m#8|}f<-Z`% o[cV~Qlo');
define('LOGGED_IN_SALT',   'jPFxmd|J;xc!I]0?a.o)C#z7HdjaNUZI[%.Y6eaXl*f{gMn=(%4j3O~7D5)S!{:y');
define('NONCE_SALT',       '6r2x~vxKAm-eu<h JAZD?sh6*r2GTQdCe6X{n!%a8S8s<r!F%XZnSx Ajs{a4u2~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'pp_';

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