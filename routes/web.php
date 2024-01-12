<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //anggota
    $router->get('/anggota', 'anggotaController@index');
    $router->get('/anggota/{id}', 'anggotaController@show');
    $router->post('/anggota', 'anggotaController@store');
    $router->put('/anggota/{id}', 'anggotaController@update');
    $router->delete('/anggota/{id}', 'anggotaController@destroy');
    //buku
    $router->get('/buku', 'bukuController@index');
    $router->get('/buku/{id}', 'bukuController@show');
    $router->post('/buku', 'bukuController@store');
    $router->put('/buku/{id}', 'bukuController@update');
    $router->delete('/buku/{id}', 'bukuController@destroy');
    //detail_peminjaman
    $router->get('/detail_peminjaman', 'detail_peminjamanController@index');
    $router->get('/detail_peminjaman/{id}', 'detail_peminjamanController@show');
    $router->post('/detail_peminjaman', 'detail_peminjamanController@store');
    $router->put('/detail_peminjaman/{id}', 'detail_peminjamanController@update');
    $router->delete('/detail_peminjaman/{id}', 'detail_peminjamanController@destroy');
    //peminjaman
    $router->get('/peminjaman', 'peminjamanController@index');
    $router->get('/peminjaman/{id}', 'peminjamanController@show');
    $router->post('/peminjaman', 'peminjamanController@store');
    $router->put('/peminjaman/{id}', 'peminjamanController@update');
    $router->delete('/peminjaman/{id}', 'peminjamanController@destroy');
    //petugas
    $router->get('/petugas', 'petugasController@index');
    $router->get('/petugas/{id}', 'petugasController@show');
    $router->post('/petugas', 'petugasController@store');
    $router->put('/petugas/{id}', 'petugasController@update');
    $router->delete('/petugas/{id}', 'petugasController@destroy');
    //transaksi_petugas
    $router->get('/transaksi_petugas', 'transaksi_petugasController@index');
    $router->get('/transaksi_petugas/{id}', 'transaksi_petugasController@show');
    $router->post('/transaksi_petugas', 'transaksi_petugasController@store');
    $router->put('/transaksi_petugas/{id}', 'transaksi_petugasController@update');
    $router->delete('/transaksi_petugas/{id}', 'transaksi_petugasController@destroy');


});