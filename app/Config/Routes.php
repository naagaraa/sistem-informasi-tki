<?php

namespace Config;

use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Backend\LokerController;
use App\Controllers\Backend\UsersController;
use App\Controllers\Backend\LaporanController;
use App\Controllers\Backend\DaftarTkiController;
use App\Controllers\Backend\DashboardController;
use App\Controllers\Backend\PerusahaanController;
use App\Controllers\Backend\SaldoUsersController;
use App\Controllers\Backend\TransaktionController;
use App\Controllers\Backend\SaldoPerusahaanController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', [DashboardController::class, "index"]);

// saldo
$routes->get('/saldo/perusahaan', [SaldoPerusahaanController::class, 'index']);
$routes->get('/saldo/users', [SaldoUsersController::class, 'index']);

// loker
$routes->get('/loker', [LokerController::class, 'index']);
$routes->get('/loker/show/(:any)', [LokerController::class, 'show']);
$routes->get('/loker/delete/(:any)', [LokerController::class, 'delete']);
$routes->post('/loker/edit', [LokerController::class, 'edit']);
$routes->get('/loker/create', [LokerController::class, 'indexCreate']);
$routes->post('/loker/create', [LokerController::class, 'create']);

// daftar loker
$routes->get('/pendaftaran', [DaftarTkiController::class, 'index']);
$routes->get('/pendaftaran/delete/(:any)', [DaftarTkiController::class, 'delete']);
$routes->post('/daftar', [DaftarTkiController::class, 'create']);

// perusahaan
$routes->get('/perusahaan', [PerusahaanController::class, 'index']);
$routes->get('/perusahaan/show/(:any)', [PerusahaanController::class, 'show']);
$routes->get('/perusahaan/delete/(:any)', [PerusahaanController::class, 'delete']);
$routes->post('/perusahaan/edit', [PerusahaanController::class, 'edit']);
$routes->get('/perusahaan/create', [PerusahaanController::class, 'indexCreate']);
$routes->post('/perusahaan/create', [PerusahaanController::class, 'create']);

// laporan
$routes->get('/laporan', [LaporanController::class, 'index']);
$routes->get('/laporan/show/(:any)', [LaporanController::class, 'index']);

// transaksi
$routes->get('/transaksi/perusahaan', [TransaktionController::class, 'indexPerusahaan']);
$routes->get('/transaksi/perusahaan/(:any)', [TransaktionController::class, 'showTransaksiPerusahaan']);
$routes->get('/transaksi/users', [TransaktionController::class, 'indexUsers']);
$routes->get('/transaksi/users/(:any)', [TransaktionController::class, 'showTransaksiUsers']);

// users
$routes->get('/users', [UsersController::class, 'index']);
$routes->get('/users/show/(:any)', [UsersController::class, 'show']);
$routes->post('/users/edit/', [UsersController::class, 'edit']);
$routes->get('/users/create', [UsersController::class, 'indexCreate']);
$routes->post('/users/create', [UsersController::class, 'create']);

// auth
$routes->get('/login', [LoginController::class, 'index']);
$routes->post('/login/auth', [LoginController::class, 'auth']);
$routes->get('/register', [RegisterController::class, 'index']);
$routes->post('/register/create', [RegisterController::class, 'create']);
$routes->get('/logout', [LoginController::class, 'logout']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
