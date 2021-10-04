<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressTheme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ownerTheme' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'F]_eBbx3a4R68KUb' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ipuu>lcf)@WrjRGAs}r#4+:<PNX}pkg}MbyLqL%v}a]?*tm?{,@BI5*Q:=_NYjaZ' );
define( 'SECURE_AUTH_KEY',  'd!&nQWIHO>+&U7=/>s}hg#ov{R:Gv@o*7VYZA}<_+C-WgBi|Z|E9@9IZDl`JHy6k' );
define( 'LOGGED_IN_KEY',    'quy`sx8nXZS|b`@;v&ARnSV=$ZsC_@`ZGi%aKBs7zw@-=5?]E`fuPcIG>cAg<UL4' );
define( 'NONCE_KEY',        'e`:(^3UF4Coo]j5oX=f/c9<ZaRA`FzF7Q 0xF&7ghp_F)!YQ (8W:Zd9xSG^MI,d' );
define( 'AUTH_SALT',        '|<uXIa7{/`hk|1 }kPKk*bd]}V34ZGAeBqO7VZq6( 94V#3eCYqE<*jhBMLS]FAR' );
define( 'SECURE_AUTH_SALT', '3I(2#PiP4uo[.4m=9!zEPwE7k#=^XM-1?F$um@|HG:ME.R~,D&3ceMrFPJ(;byMz' );
define( 'LOGGED_IN_SALT',   'xGl~Ur4mIh#* :.(~^#/gd [Fo7#Q:wtt*kHJ-;%^_S]4oYTM5$V7-W^R.ar16Xq' );
define( 'NONCE_SALT',       'i`K.k}j1Z,3F#gQCQ(j4U(#H`=Zw-y>f(ix4hT_0Zizx%d8!wA}rb&1 @o}hig_(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp666_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
