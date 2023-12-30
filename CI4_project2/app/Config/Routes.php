<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProfileController;

/**
 * @var RouteCollection $routes
 * 
 */




// $routes->get('register', 'Home::register');
$routes->get('/', 'Home::index');
$routes->get('katalog', 'Katalog::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('signup', 'Home::register');

$routes->group(
    'profile',
    ['filter' => 'auth'],
    function ($routes) {
        $routes->get('/', 'ProfileController::index', ['as' => 'profile']);
    }
);


<<<<<<< HEAD
$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('profile', 'ProfileController::index', ['as' => 'profile']);
    $routes->get('settings', 'UserController::settings');
    $routes->get('activity-log', 'UserController::activityLog');
    $routes->get('logout', 'UserController::logout');
});


// $routes->add('Admin', 'Admin::index', ['filter' => 'role:admin']);
=======
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
>>>>>>> a71d2de9426396bb56942a7cc7ea58e66764e4c4
