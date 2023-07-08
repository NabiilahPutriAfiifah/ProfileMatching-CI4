<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

//Dashboard
$routes->add('/', 'Dashboard::index');
$routes->add('/dashboard', 'Dashboard::index');
$routes->add('/dashboard/(:any)', 'dashboard::$1');

//Login
$routes->add('/login', 'Login::index');
$routes->add('/login/(:any)', 'login::$1');

//Logout
$routes->add('/logout', 'Login::logout');
$routes->add('/logout/(:any)', 'logout::$1');

//Aspek
$routes->add('/aspek', 'Aspek::aspek');
$routes->add('/aspek/(:any)', 'Aspek::$1');

//Faktor Penilaian
$routes->add('/faktor_penilaian', 'FaktorPenilaian::faktor_penilaian');
$routes->add('/faktor_penilaian/(:any)', 'FaktorPenilaian::$1');

//Nama Kandidat
$routes->add('/nama_kandidat', 'NamaKandidat::nama_kandidat');
$routes->add('/nama_kandidat/(:any)', 'NamaKandidat::$1');

//Data Kandidat
$routes->add('/data_kandidat', 'DataKandidat::data_kandidat');
$routes->add('/data_kandidat/(:any)', 'DataKandidat::$1');
// $routes->add('/data_kandidat/(:any)', 'DataKandidat::$1');

//Tabel Pembobotan
$routes->add('/tabel_pembobotan', 'TabelPembobotan::tabel_pembobotan');
$routes->add('/tabel_pembobotan/(:any)', 'TabelPembobotan::$1');

//Nilai Gap
$routes->add('/nilai_gap', 'NilaiGap::nilai_gap');
$routes->add('/nilai_gap/(:any)', 'NilaiGap::$1');

//Pembobotan Gap
$routes->add('/pembobotan_gap', 'PembobotanGap::pembobotan_gap');
$routes->add('/pembobotan_gap/(:any)', 'PembobotanGap::$1');

//Nilai Total
$routes->add('/nilai_total', 'NilaiTotal::nilai_total');
$routes->add('/nilai_total/(:any)', 'NilaiTotal::$1');

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