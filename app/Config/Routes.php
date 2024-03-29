<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// -----------------------------------------------------------------------
// PUBLIC SIDE ROUTES
// -----------------------------------------------------------------------

$routes->get('/', 'Portal_controllers/Home::index');

$routes->get('nosotros', 'Portal_controllers/Info::index');
$routes->get('ofertas', 'Portal_controllers/Deals::index');

//
$routes->get('galeria', 'Portal_controllers/Gallery::index');
$routes->get('contacto', 'Portal_controllers/Contact::index');
// About us dropdown
$routes->get('acerca/sitio', 'Portal_controllers/Site::index');
$routes->get('acerca/autor', 'Portal_controllers/Author::index');

$routes->group('instrumentos', ['namespace' => 'App\Controllers\Portal_controllers'], function($routes){
    $routes->get('guitarras/(:any)', 'Ins_guitars_single::index/$1', ['as' => 'guitarras/guitarra']);
    $routes->get('baterias/(:any)', 'Ins_drums_single::index/$1', ['as' => 'baterias/bateria']);
    $routes->get('teclados/(:any)', 'Ins_keyboards_single::index/$1', ['as' => 'teclados/teclado']);
    $routes->get('monitores/(:any)', 'Ins_monitors_single::index/$1', ['as' => 'monitores/monitor']);
    $routes->get('guitarras', 'Ins_guitars::index');
    $routes->get('baterias', 'Ins_drums::index');
    $routes->get('teclados', 'Ins_keyboards::index');
    $routes->get('monitores', 'Ins_monitors::index');
});

// -----------------------------------------------------------------------
// PANEL SIDE ROUTES
// -----------------------------------------------------------------------
$routes->get('login', 'Panel_controllers/Login::index');
$routes->post('iniciar_sesion', 'Panel_controllers/Login::check_user');
$routes->get('cerrar_sesion', 'Panel_controllers/Logout::index');

// DASHBOARD PANEL SECTION
$routes->get('panel/dashboard', 'Panel_controllers/Dashboard::index');

// INSTRUMENTOS PANEL SECTION
$routes->get('panel/guitarras', 'Panel_controllers/Ins_guitars::index');
$routes->get('panel/guitarras/registrar_guitarra', 'Panel_controllers/Ins_guitars_new::index');
$routes->get('panel/guitarras/editar_guitarra/(:num)', 'Panel_controllers\Ins_guitars_detail::index/$1', ['as' => 'panel/guitarras/editar_guitarra/']);
$routes->get('panel/guitarras/eliminar_guitarra/(:num)', 'Panel_controllers\Ins_guitars::delete_guitar/$1', ['as' => 'panel/guitarras/eliminar_guitarra/']);
$routes->post('panel/registrar_nueva_guitarra', 'Panel_controllers/Ins_guitars_new::insert_guitar');
$routes->post('panel/editar_guitarra', 'Panel_controllers/Ins_guitars_detail::update_guitar');

$routes->get('panel/baterias', 'Panel_controllers/Ins_drums::index');
$routes->get('panel/baterias/registrar_bateria', 'Panel_controllers/Ins_drums_new::index');
$routes->get('panel/baterias/editar_bateria/(:num)', 'Panel_controllers\Ins_drums_detail::index/$1', ['as' => 'panel/baterias/editar_bateria/']);
$routes->get('panel/baterias/eliminar_bateria/(:num)', 'Panel_controllers\Ins_drums::delete_drum/$1', ['as' => 'panel/baterias/eliminar_bateria/']);
$routes->post('panel/registrar_nueva_bateria', 'Panel_controllers/Ins_drums_new::insert_drum');
$routes->post('panel/editar_bateria', 'Panel_controllers/Ins_drums_detail::update_drum');

$routes->get('panel/teclados', 'Panel_controllers/Ins_keyboards::index');
$routes->get('panel/teclados/registrar_teclado', 'Panel_controllers/Ins_keyboards_new::index');
$routes->get('panel/teclados/editar_teclado/(:num)', 'Panel_controllers\Ins_keyboards_detail::index/$1', ['as' => 'panel/teclados/editar_teclado/']);
$routes->get('panel/teclados/eliminar_teclado/(:num)', 'Panel_controllers\Ins_keyboards::delete_keyboard/$1', ['as' => 'panel/teclados/eliminar_teclado/']);
$routes->post('panel/registrar_nuevo_teclado', 'Panel_controllers/Ins_keyboards_new::insert_keyboard');
$routes->post('panel/editar_teclado', 'Panel_controllers/Ins_keyboards_detail::update_keyboard');

$routes->get('panel/monitores', 'Panel_controllers/Ins_monitors::index');
$routes->get('panel/monitores/registrar_monitor', 'Panel_controllers/Ins_monitors_new::index');
$routes->get('panel/monitores/editar_monitor/(:num)', 'Panel_controllers\Ins_monitors_detail::index/$1', ['as' => 'panel/monitores/editar_monitor/']);
$routes->get('panel/monitores/eliminar_monitor/(:num)', 'Panel_controllers\Ins_monitors::delete_monitor/$1', ['as' => 'panel/monitores/eliminar_monitor/']);
$routes->post('panel/registrar_nuevo_monitor', 'Panel_controllers/Ins_monitors_new::insert_monitor');
$routes->post('panel/editar_monitor', 'Panel_controllers/Ins_monitors_detail::update_monitor');

// OFERTAS PANEL SECTION
$routes->get('panel/ofertas', 'Panel_controllers/Deals::index');

// GALERÍA PANEL SECTION
$routes->get('panel/galeria', 'Panel_controllers/Gallery::index');

// USUARIOS PANEL SECTION
$routes->get('panel/usuarios', 'Panel_controllers/Users_all::index');
$routes->get('panel/usuarios/registrar_usuario', 'Panel_controllers/Users_new::index');
$routes->get('panel/usuarios/editar_usuario/(:num)', 'Panel_controllers\Users_detail::index/$1', ['as' => 'panel/usuarios/editar_usuario/']);
$routes->get('panel/usuarios/eliminar_usuario/(:num)', 'Panel_controllers\Users_all::delete_user/$1', ['as' => 'panel/usuarios/eliminar_usuario/']);
$routes->post('panel/registrar_nuevo_usuario', 'Panel_controllers/Users_new::insert_user');
$routes->post('panel/editar_usuario', 'Panel_controllers/Users_detail::update_user');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
