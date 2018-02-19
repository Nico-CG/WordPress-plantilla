<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '}mC36:UDz@F@8nE:{NG:Npv,NKA#PW/o*fS<6|XS|tfNE.y4Hf0L@&)81<Yn><8N');
define('SECURE_AUTH_KEY', ':QQfH&--owWwfnso-,lo)K)9~$(IvO[.r8flQ@tj^MWI]P~},a]faOMPosGKFX>j');
define('LOGGED_IN_KEY', '+=qVQuT(-j#GS93/g[*;C4BD@#P:[9J;bwBg:kt_O1ts0uz50u4+4#U;:mWy,T@L');
define('NONCE_KEY', 'Zn_C#it6piY&XIo{i}EDR/A9p.ae)RD<O#?=ip=yaOe?oy%K>5N*(3_N7}y0A/k;');
define('AUTH_SALT', 'r]G5Dn@Oanpfv@Ns@$;.aO2bi`M0.]]<GS6:NS$pZ?#XWL7w%0~2<00R-bHi*n:=');
define('SECURE_AUTH_SALT', 'G |jA?J_ieM{4]Z-$>2Kb4End=ao2n)5GGmR%}gr2t~W5m>sMB1 #U8|m5%V#gRE');
define('LOGGED_IN_SALT', 'ijb)n_)?&EE2:=M*zc6qt+BPi<Hub%i<J*Eeo vE9b6Oc=i1cj0}3m_Yb/W;.i$2');
define('NONCE_SALT', '6OOhEP|!7PV)THxQ8kiK3]9mWZZkij1wJb~N-e/ET6aGGy=s.(.)-9b@q4C.@#me');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** jetpacl */


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
