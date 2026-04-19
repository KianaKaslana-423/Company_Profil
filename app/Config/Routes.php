<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', function() {
    return view('login');
});

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