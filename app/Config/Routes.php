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
// Instruments dropdown
$routes->get('instrumentos/guitarras', 'Portal_controllers/Ins_guitars::index');
$routes->get('instrumentos/baterias', 'Portal_controllers/Ins_drums::index');
$routes->get('instrumentos/teclados', 'Portal_controllers/Ins_keyboards::index');
$routes->get('instrumentos/monitores', 'Portal_controllers/Ins_monitors::index');
//
$routes->get('galeria', 'Portal_controllers/Gallery::index');
$routes->get('contacto', 'Portal_controllers/Contact::index');
// About us dropdown
$routes->get('acerca/sitio', 'Portal_controllers/Site::index');
$routes->get('acerca/autor', 'Portal_controllers/Author::index');

$routes->get('instrumentos/guitarras/guitarra001', 'Portal_controllers/Single_guitars::guitar001');
$routes->get('instrumentos/guitarras/guitarra002', 'Portal_controllers/Single_guitars::guitar002');
$routes->get('instrumentos/guitarras/guitarra003', 'Portal_controllers/Single_guitars::guitar003');
$routes->get('instrumentos/guitarras/guitarra004', 'Portal_controllers/Single_guitars::guitar004');
$routes->get('instrumentos/guitarras/guitarra005', 'Portal_controllers/Single_guitars::guitar005');

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
$routes->post('panel/registrar_nueva_guitarra', 'Panel_controllers/Ins_guitars_new::index');

$routes->get('panel/baterias', 'Panel_controllers/Ins_drums::index');
$routes->get('panel/baterias/registrar_bateria', 'Panel_controllers/Ins_drums_new::index');
$routes->post('panel/registrar_nueva_bateria', 'Panel_controllers/Ins_drums_new::index');

$routes->get('panel/teclados', 'Panel_controllers/Ins_keyboards::index');
$routes->get('panel/teclados/registrar_teclado', 'Panel_controllers/Ins_keyboards_new::index');
$routes->post('panel/registrar_nuevo_teclado', 'Panel_controllers/Ins_keyboards_new::index');

$routes->get('panel/monitores', 'Panel_controllers/Ins_monitors::index');
$routes->get('panel/monitores/registrar_monitor', 'Panel_controllers/Ins_monitors_new::index');
$routes->post('panel/registrar_nuevo_monitor', 'Panel_controllers/Ins_monitors_new::index');

// OFERTAS PANEL SECTION
$routes->get('panel/ofertas', 'Panel_controllers/Deals::index');

// GALERÍA PANEL SECTION
$routes->get('panel/galeria', 'Panel_controllers/Gallery::index');

// USUARIOS PANEL SECTION
$routes->get('panel/usuarios', 'Panel_controllers/Users_all::index');
$routes->get('panel/usuarios/registrar_usuario', 'Panel_controllers/Users_new::index');
$routes->post('panel/registrar_nuevo_usuario', 'Panel_controllers/Users_new::insert_user');


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
