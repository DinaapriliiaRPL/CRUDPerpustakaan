<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Buku::index');
$routes->get('/buku', 'Buku::tampil');
//artinya kode diatas adalah untuk menyambungkan controller dan method
//buka controller buku::method index

$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/store', 'Buku::store');
$routes->post('/buku/edit', 'Buku::edit');
$routes->post('/buku/update', 'Buku::update');
$routes->post('buku/delete', 'Buku::hapus');

$routes->get('/user', 'User::index');
$routes->get('/user/create', 'User::create');
$routes->post('/user/store', 'User::store');
$routes->post('/user/edit', 'User::edits');
$routes->post('/user/update', 'User::update');
$routes->post('/user/delete', 'User::delete');


$routes->get('/peminjaman', 'PeminjamanController::index');
$routes->get('/peminjaman/create', 'PeminjamanController::create');
$routes->post('/peminjaman', 'PeminjamanController::store');
$routes->get('/peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->put('/peminjaman/update/(:num)', 'PeminjamanController::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'PeminjamanController::delete/$1');

$routes->get('/pengembalian', 'Pengembalian::index');
$routes->get('/pengembalian/create', 'Pengembalian::create');
$routes->post('/pengembalian', 'Pengembalian::store');
$routes->get('/pengembalian/edit/(:num)', 'Pengembalian::edit/$1');
$routes->put('/pengembalian/update/(:num)', 'Pengembalian::update/$1');
$routes->get('/pengembalian/delete/(:num)', 'Pengembalian::delete/$1');








