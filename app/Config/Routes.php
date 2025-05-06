<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default routes
$routes->get('/', 'Admin::login');
$routes->get('/admin/login-admin', 'Admin::login');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');
$routes->post('/admin/autentikasi-login', 'Admin::autentikasi');
$routes->get('/admin/logout', 'Admin::logout');

// Routes untuk module Admin
$routes->get('/admin/master-data-admin', 'Admin::master_data_admin'); // Menampilkan daftar admin
$routes->get('/admin/input-data-admin', 'Admin::input_data_admin'); // Menampilkan form input admin
$routes->post('/admin/simpan-admin', 'Admin::simpan_data_admin'); // Menyimpan data admin baru
$routes->get('/admin/edit-data-admin/(:alphanum)', 'Admin::edit_data_admin/$1'); // Menampilkan form edit admin berdasarkan ID
$routes->post('/admin/update-admin', 'Admin::update_admin'); // Memperbarui data admin
$routes->get('/admin/hapus-data-admin/(:alphanum)', 'Admin::hapus_data_admin/$1'); // Menghapus data admin berdasarkan ID

// Routes untuk module Kategori
$routes->get('/admin/master-data-kategori', 'Kategori::master_data_kategori'); // Menampilkan daftar kategori
$routes->get('/admin/input-data-kategori', 'Kategori::input_data_kategori'); // Menampilkan form input kategori
$routes->post('/admin/simpan-kategori', 'Kategori::simpan_data_kategori'); // Menyimpan data kategori baru
$routes->get('/admin/edit-data-kategori/(:alphanum)', 'Kategori::edit_data_kategori/$1'); // Menampilkan form edit kategori berdasarkan ID
$routes->post('/admin/update-kategori', 'Kategori::update_kategori'); // Memperbarui data kategori
$routes->get('/admin/hapus-data-kategori/(:alphanum)', 'Kategori::hapus_data_kategori/$1'); // Menghapus data kategori berdasarkan ID

// Routes untuk module Anggota
$routes->get('/admin/master-data-anggota', 'Anggota::master_data_anggota'); // Menampilkan daftar anggota
$routes->get('/admin/input-data-anggota', 'Anggota::input_data_anggota'); // Menampilkan form input anggota
$routes->post('/admin/simpan-anggota', 'Anggota::simpan_data_anggota'); // Menyimpan data anggota baru
$routes->get('/admin/edit-data-anggota/(:alphanum)', 'Anggota::edit_data_anggota/$1'); // Menampilkan form edit anggota berdasarkan ID
$routes->post('/admin/update-anggota', 'Anggota::update_anggota'); // Memperbarui data anggota
$routes->get('/admin/hapus-data-anggota/(:alphanum)', 'Anggota::hapus_data_anggota/$1'); // Menghapus data anggota berdasarkan ID

// Routes untuk module Rak
$routes->get('/admin/master-data-rak', 'Rak::master_data_rak'); // Menampilkan daftar rak
$routes->get('/admin/input-data-rak', 'Rak::input_data_rak'); // Menampilkan form input rak
$routes->post('/admin/simpan-rak', 'Rak::simpan_data_rak'); // Menyimpan data rak baru
$routes->get('/admin/edit-data-rak/(:alphanum)', 'Rak::edit_data_rak/$1'); // Menampilkan form edit rak berdasarkan ID
$routes->post('/admin/update-rak', 'Rak::update_rak'); // Memperbarui data rak
$routes->get('/admin/hapus-data-rak/(:alphanum)', 'Rak::hapus_data_rak/$1'); // Menghapus data rak berdasarkan ID

