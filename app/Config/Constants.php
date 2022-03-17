<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// ============================================
// ============================================
// ==== CONSTANTS DEFINITION FOR OVERLORD =====
// ============================================
// ============================================

// ROLES
define("ADMIN_ROLE", array('nombre'=>'Administrador', 'id'=>'1'));
define("OPERATOR_ROLE", array('nombre'=>'Operador', 'id'=>'2'));
define("USER_ROLE", array('nombre'=>'Usuario', 'id'=>'3'));

// SEXES
define("MALE_SEX", 'M');
define("FEMALE_SEX", 'F');
define("SEXES", array('M' => 'Masculino', 'F' => 'Femenino'));

// ======= PANEL CONSTANTS ===================

// DASHBOARD
define("DASHBOARD_TASK", "dashboard");

// INSTRUMENTOS
define("INS_GUITARS_TASK", "guitarras");
define("INS_DRUMS_TASK", "baterias");
define("INS_KEYBOARDS_TASK", "teclados");
define("INS_MONITORS_TASK", "monitores");

define("INS_GUITARS_NEW_TASK", "guitarras_nuevo");
define("INS_DRUMS_NEW_TASK", "baterias_nuevo");
define("INS_KEYBOARDS_NEW_TASK", "teclados_nuevo");
define("INS_MONITORS_NEW_TASK", "monitores_nuevo");

// GALERÍA
define("GALLERY_TASK", "galeria");

// OFERTAS
define("DEALS_TASK", "ofertas");

// USUARIOS
define("USERS_ALL_TASK", "usuarios_todos");
define("USERS_NEW_TASK", "usuarios_nuevo");
define("USERS_DETAIL_TASK", "usuarios_detalle");

// EXTRAS
DEFINE("MAX_IMG_SIZE", 4194304);

// ======= PORTAL CONSTANTS ===================

// INICIO
define("PORTAL_HOME_TASK", "inicio_portal");

// NOSOTROS
define("PORTAL_INFO_TASK", "nosotros_portal");

// OFERTAS
define("PORTAL_DEALS_TASK", "ofertas_portal");

// INSTRUMENTOS
define("PORTAL_INS_GUITARS_TASK", "guitarras_portal");
define("PORTAL_INS_DRUMS_TASK", "baterias_portal");
define("PORTAL_INS_KEYBOARDS_TASK", "teclados_portal");
define("PORTAL_INS_MONITORS_TASK", "monitores_portal");

// GALERÍA
define("PORTAL_GALLERY_TASK", "galeria_portal");

// CONTACTO
define("PORTAL_CONTACT_TASK", "contacto_portal");

// ACERCA DE
define("PORTAL_ABOUT_SITE_TASK", "sitio_portal");
define("PORTAL_ABOUT_AUTHOR_TASK", "autor_portal");
