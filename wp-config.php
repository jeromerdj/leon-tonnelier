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
define('DB_NAME', 'leon-tonnelier54');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'Eza#E0TGopbl_ro}hC$855F^^<<DM58(6YMeV}7ypH1pm)0oiJj1;Vov7a#q!f/}');
define('SECURE_AUTH_KEY',  '6H+@CvE74:=xc]`$mxOz<xRkH,^=Q31+>H~l3 #=#teU:j89+!EJKxi|JmU7]R8w');
define('LOGGED_IN_KEY',    'bv|`w4yCYl~IIDz3q#rh?4A%m%%GE!/9M(p`wHZZZ0(x4OHVoB jXeB;<C:.r!PZ');
define('NONCE_KEY',        'n:nRzUp@^I?@vZX>nkO.Q:?l`/JqDwG+#Ji2@hzbTQw1IlD>)FHs<O|s?~u(1(Mw');
define('AUTH_SALT',        '>NU=L[IK%qwDj{FaEiZGe<5`UMqV11t`wkfl`,EFghmKDtWV?RNY/u(RiDxIgcUj');
define('SECURE_AUTH_SALT', '1KW]S#26%JDs:0mXRZM]ElNoe)sge4cuJu7P]pBhys#JR3|tLw)MJ,@0lhqyP v^');
define('LOGGED_IN_SALT',   '.!PUfk`z9bg8qwoTO[;h_2:0/kLO>60]TL#AOXe2?pkLB3Czx{7q=m-I$jD7G>3D');
define('NONCE_SALT',       '-@Jt#zn;-gTdTj{Vh,-dv{RBK+y|s,Vjl(`NN&W=*.7y}}M~gkT-am=/bNm0b@1=');
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