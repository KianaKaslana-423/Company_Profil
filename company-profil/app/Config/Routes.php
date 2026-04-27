<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'LoginController::index');
$routes->post('/login-auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('admin/pages', 'AdminPagesController::index');
$routes->get('/admin/pages/add', 'AdminPagesController::add'); // Menampilkan form
$routes->post('/admin/pages/store', 'AdminPagesController::store'); // Proses simpan ke DB
$routes->get('/admin/pages/edit/(:num)', 'AdminPagesController::edit/$1'); // Menampilkan form edit
$routes->post('/admin/pages/update/(:num)', 'AdminPagesController::update/$1'); // Proses update ke DB
$routes->get('/admin/pages/delete/(:num)', 'AdminPagesController::delete/$1'); // Proses hapus
$routes->get('register', 'RegisterController::index');
$routes->post('register/store', 'RegisterController::store');
$routes->post('profile/update-foto', 'ProfileController::updateFoto');
$routes->get('bantuan', 'HelpController::index');
$routes->get('lapor', 'HelpController::lapor');
$routes->get('admin/pages/delete/(:num)', 'Admin\Pages::delete/$1');
$routes->get('admin/pages/edit/(:num)', 'AdminPagesController::edit/$1');
$routes->post('admin/pages/update/(:num)', 'AdminPagesController::update/$1');
$routes->get('admin/pages/edit/(:num)', 'PagesController::edit/$1');
$routes->get('structure', 'PagesController::structure');

$routes->get('services', 'Home::services');

$routes->get('/contact', function() {
    return view('contact');
});

$routes->get('/products', function() {
    return view('products');
});

$routes->get('/innovation', function() {
    return view('innovation');
});

$routes->get('/services', function() {
    return view('services');
});

$routes->get('/sustainability', function() {
    return view('sustainability');
});

$routes->group('admin', function($routes) {
    $routes->get('inbox', function() {
        return view('admin/inbox');
    });
});

$routes->group('admin', function($routes) {
    // Rute inbox sebelumnya
    $routes->get('inbox', function() {
        return view('admin/inbox');
    });
    
    // Rute baru untuk manage pages
    $routes->get('pages', function() {
        return view('admin/pages/index');
    });
});

// Gunakan (:any) untuk menangkap teks slug apa pun
$routes->get('(:any)', 'PagesController::viewDetail/$1');