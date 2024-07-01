<?php
 namespace Config;
 $routes = Services::routes();
 $routes->setDefaultNamespace('App\Controllers');
 // controller default yang dipanggil 
// pertama kali saat aplikasi dijalankan
 $routes->setDefaultController('Dashboard');
 $routes->setDefaultMethod('index');
 $routes->setTranslateURIDashes(false);
 $routes->set404Override();
 $routes->setAutoRoute(false);
 // routing URL Controller Dashboard
 $routes->get('/', 'Dashboard::index');
 $routes->get('dashboard', 'Dashboard::index');
 $routes->get('getdata', 'Dashboard::getdata');
 // routing URL Controller Kecamatan
 $routes->get('kecamatan','Kecamatan::index');
 $routes->get('tambahkecamatan','Kecamatan::tambah');
 $routes->get('editkecamatan/(:num)','Kecamatan::edit/$1');
 $routes->get('hapuskecamatan/(:num)','Kecamatan::hapus/$1');
 $routes->post('simpankecamatan','Kecamatan::simpan');
 $routes->post('updatekecamatan','Kecamatan::update');
 // routing URL Controller Sekolah
 $routes->get('sekolah','Sekolah::index');
 $routes->get('tambahsekolah','Sekolah::tambah');
 $routes->get('editsekolah/(:num)','Sekolah::edit/$1');
 $routes->get('hapussekolah/(:num)','Sekolah::hapus/$1');
 $routes->post('simpansekolah','Sekolah::simpan');
 $routes->post('updatesekolah','Sekolah::update');
 if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
 }
 ?>