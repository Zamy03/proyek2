<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('katalog', 'Katalog::index');

$routes->get('register', 'Auth\Register::index');
$routes->post('register/save', 'Auth\Register::save');

$routes->get('signup', 'Signup::index');
$routes->post('signup/processSignup', 'Signup::processSignup');

$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);


$routes->group('masuk', function ($routes) {
    $routes->get('/', 'Masuk::index'); // Menggunakan 'Masuk' bukan 'stok_in'
    $routes->get('index', 'Masuk::index'); // Menggunakan 'Masuk' bukan 'stok_in'
});

$routes->group('inventory', function ($routes) {
    $routes->get('/', 'Inventory::index'); // Menggunakan 'Masuk' bukan 'stok_in'
    $routes->get('index', 'Inventory::index'); // Menggunakan 'Masuk' bukan 'stok_in'

    $routes->get('insert', 'Inventory::insert'); // Menggunakan 'Masuk' bukan 'stok_in'
    $routes->post('insert', 'Inventory::insert'); // Menggunakan 'Masuk' bukan 'stok_in'
});

$routes->group('keluar', function ($routes) {
    $routes->get('/', 'Keluar::index'); // Menggunakan 'Masuk' bukan 'stok_in'
    $routes->get('index', 'Keluar::index'); // Menggunakan 'Masuk' bukan 'stok_in'
});