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
define( 'DB_NAME', 'laura_shop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wYpV`ULGx{[4{i7yRPh3>0~!ojjlW[b0:(Ldp=5QX}8dLU^=x.=4=Fx$^t/[%X/;' );
define( 'SECURE_AUTH_KEY',  '`dx]S70p?`eUTDNwVrVn[Lk8Kv1k_c!n(]/?bm{H_j`_:[P 1:X~%e-!~=Xr81}(' );
define( 'LOGGED_IN_KEY',    'JshoKFOV`Vb0fYTf~V-sp?AhOle0mKGS:= fVGc%(N0%fF8Fzsf..JtkK k0o!tm' );
define( 'NONCE_KEY',        '56K(K<Anlz)r| KYZQwM4kaTiU/O/4;xNnth*9D=m!>FyE:A;fR/;/vs`x~[E{|P' );
define( 'AUTH_SALT',        'fR~6tM4)X{8)L[&C/,U!^P_p@kR)deJO75`T<?!1>a^DgG6Ia >Sp JkVUk^5IfC' );
define( 'SECURE_AUTH_SALT', ']V<m:-u0ea0!64Ffx 24UF}RUeGb&T)rvI*punKua:[!,knQ!Z{(?1[y.NV*`$Mn' );
define( 'LOGGED_IN_SALT',   '6jhySzz[a`L.m?(?7P<`hv,.zQtf2C1F%|->g.7Ig;XFl})da4e<JYW:or=)*@q{' );
define( 'NONCE_SALT',       '_|S^l<#lc(<i q+aV*U[#;q_8L9bC F)Z*{/Unp^I4+?Ea@OU8|zUffvK;y|uJ]M' );
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
