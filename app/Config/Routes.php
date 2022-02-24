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

$routes->get('/', 'Public_controllers/Home::index');

$routes->get('/nosotros', 'Public_controllers/Info::index');
$routes->get('/ofertas', 'Public_controllers/Deals::index');
// Instruments dropdown
$routes->get('/instrumentos/guitarras', 'Public_controllers/Instruments::guitars');
$routes->get('/instrumentos/baterias', 'Public_controllers/Instruments::drums');
$routes->get('/instrumentos/teclados', 'Public_controllers/Instruments::keyboards');
$routes->get('/instrumentos/monitores', 'Public_controllers/Instruments::monitors');
//
$routes->get('/galeria', 'Public_controllers/Gallery::index');
$routes->get('/contacto', 'Public_controllers/Contact::index');
// About us dropdown
$routes->get('/acerca/sitio', 'Public_controllers/About::site');
$routes->get('/acerca/autor', 'Public_controllers/About::author');

$routes->get('/instrumentos/guitarras/guitarra001', 'Public_controllers/Single_guitars::guitar001');
$routes->get('/instrumentos/guitarras/guitarra002', 'Public_controllers/Single_guitars::guitar002');
$routes->get('/instrumentos/guitarras/guitarra003', 'Public_controllers/Single_guitars::guitar003');
$routes->get('/instrumentos/guitarras/guitarra004', 'Public_controllers/Single_guitars::guitar004');
$routes->get('/instrumentos/guitarras/guitarra005', 'Public_controllers/Single_guitars::guitar005');

// -----------------------------------------------------------------------
// Panel SIDE ROUTES
// -----------------------------------------------------------------------
$routes->get('/login', 'Panel_controllers/Login::index');
$routes->post('/iniciar_sesion', 'Panel_controllers/Login::check_user');
$routes->get('/cerrar_sesion', 'Panel_controllers/Logout::index');

$routes->get('/dashboard', 'Panel_controllers/Dashboard::index');

$routes->get('/guitarras', 'Panel_controllers/Ins_guitars::index');
$routes->get('/baterias', 'Panel_controllers/Ins_drums::index');
$routes->get('/teclados', 'Panel_controllers/Ins_keyboards::index');
$routes->get('/monitores', 'Panel_controllers/Ins_monitors::index');

$routes->get('/usuarios', 'Panel_controllers/Users::index');


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
