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

$routes->get('/nosotros', 'Portal_controllers/Info::index');
$routes->get('/ofertas', 'Portal_controllers/Deals::index');
// Instruments dropdown
$routes->get('/instrumentos/guitarras', 'Portal_controllers/Instruments::guitars');
$routes->get('/instrumentos/baterias', 'Portal_controllers/Instruments::drums');
$routes->get('/instrumentos/teclados', 'Portal_controllers/Instruments::keyboards');
$routes->get('/instrumentos/monitores', 'Portal_controllers/Instruments::monitors');
//
$routes->get('/galeria', 'Portal_controllers/Gallery::index');
$routes->get('/contacto', 'Portal_controllers/Contact::index');
// About us dropdown
$routes->get('/acerca/sitio', 'Portal_controllers/About::site');
$routes->get('/acerca/autor', 'Portal_controllers/About::author');

$routes->get('/instrumentos/guitarras/guitarra001', 'Portal_controllers/Single_guitars::guitar001');
$routes->get('/instrumentos/guitarras/guitarra002', 'Portal_controllers/Single_guitars::guitar002');
$routes->get('/instrumentos/guitarras/guitarra003', 'Portal_controllers/Single_guitars::guitar003');
$routes->get('/instrumentos/guitarras/guitarra004', 'Portal_controllers/Single_guitars::guitar004');
$routes->get('/instrumentos/guitarras/guitarra005', 'Portal_controllers/Single_guitars::guitar005');

// -----------------------------------------------------------------------
// Panel SIDE ROUTES
// -----------------------------------------------------------------------
$routes->get('/login', 'Panel_controllers/Login::index');
$routes->post('/iniciar_sesion', 'Panel_controllers/Login::check_user');
$routes->get('/cerrar_sesion', 'Panel_controllers/Logout::index');

$routes->get('panel/dashboard', 'Panel_controllers/Dashboard::index');

$routes->get('panel/guitarras', 'Panel_controllers/Ins_guitars::index');
$routes->get('panel/baterias', 'Panel_controllers/Ins_drums::index');
$routes->get('panel/teclados', 'Panel_controllers/Ins_keyboards::index');
$routes->get('panel/monitores', 'Panel_controllers/Ins_monitors::index');

$routes->get('panel/ofertas', 'Panel_controllers/Deals::index');

$routes->get('panel/galeria', 'Panel_controllers/Gallery::index');

$routes->get('panel/usuarios', 'Panel_controllers/Users::index');


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
