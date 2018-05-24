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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         's6J?e-GF;kV)tyW_Dcj<%!qLSEd:>,*@6U8/RKxKQ<gSqpZm/vE:y?&V@a7fK5lY');
define('SECURE_AUTH_KEY',  '5N])?QTYRutV}lFWWbpXKp`J9J~S3$Un#N5hj!;t;Ad]utcmGUD|_4/rD36~q0ca');
define('LOGGED_IN_KEY',    'QZ!A?evcO?6u)t(j4zfM}TC!:fw5433EP]sVJ,J20zoF;2}pw}i<hxh@I`XstE63');
define('NONCE_KEY',        'Xsf#I@ <(i?a_Y:,^J91ECyWQvc,9o+mejXt>Swa, O_~3ro?;E66MO3Hu&O_}G;');
define('AUTH_SALT',        '$~MjV>b){qQXIReq+g@>7|M~-OUV+$CS|.c@IvBJz9b3jxD`r}Z:}s-F,&-bbXaX');
define('SECURE_AUTH_SALT', '/RihEsg>7.ntZj2Y;H(M=)NDb~c@ocf9DpwQG3.6LJrtqR6{.3DcYutKUbK))v_A');
define('LOGGED_IN_SALT',   'JS;/@33FOTiz~%8/r?PN@`KjFDc580E=0F,r4Nb$QCet-UY^oplJW(Fgnu~i|1.<');
define('NONCE_SALT',       'v,M?VdeIgU5<UJ-< ) I-:XUg5!dy(pcx.[5cnWP2t]L8%v) wZ*@TQr.IQYpL+V');
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