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
define('DB_NAME', 'motorzite');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'AqC}Ch|A&BX1Hv0!%0n, uT8_!VEHVt)>X:k{,CHmR%[#=^WF257U3>sZZfm 8Rm'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '4N/aIH1h.zy}B9w-:pMmgk_9*)xh`TA0HpBU&3>L%%GMa70Fy{kVba=szkC2jNKI'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'X~46T=a>d+Zi!e=6&7SJ>[aPUh6_L+*9_GThWft0/ow4-iWqmtnAjxqmc^X0L{B='); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'S1$ e%k~[c]#)aItoOMd}8W`$M?}:P#}4VB_)r+zOJQFT(lvT{]rJ~<ZG-X&#LSW'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', ',|vd:fXbPN@,WUXW<|u$qzJ1|d-Mo%x)4Xc `yWp.nX|Ke5+,SVzoPF#SiJm>KlY'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '+3Y5CIL+P^<i,z8!`hl Pf6b)yf8iLZ89Xm`Gd[iy^SWMc,QzT=FhV[rPIUB*)~='); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'cBF6.E05X(`D/tW$!7|-BV<awHo|QU f~WQ.|t/KdH=SF++H!B70bz{t^4{vp)-Z'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '}m8rDau;4>[+72ihc^rFo5@h?5{8#!kNLFX{6iFvY(e.=,?R5`eJV1G#]K~PS5G1'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'autozite.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

