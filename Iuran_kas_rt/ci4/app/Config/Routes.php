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
$routes->get('/', 'Warga::index');
$routes->get('/warga', 'Warga::index');
$routes->get('/iuran', 'Iuran::index');
$routes->get('/laporan', 'Laporan::index');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('warga', 'Warga::admin_index');
    $routes->add('warga/add', 'Warga::add');
    $routes->add('warga/edit/(:any)', 'Warga::edit/$1');
    $routes->get('warga/delete/(:any)', 'Warga::delete/$1');
    $routes->get('iuran', 'Iuran::admin_index');
    $routes->add('iuran/add', 'Iuran::add');
    $routes->add('iuran/edit/(:any)', 'Iuran::edit/$1');
    $routes->get('iuran/delete/(:any)', 'Iuran::delete/$1');
    $routes->get('laporan', 'Laporan::admin_index');
    $routes->add('logout', 'User::logout');
});
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
