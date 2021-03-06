<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
            'as' => 'home', 'uses' => 'BeritaController@home'
        ]);

Route::group(['as' => 'home::', 'middleware' => ['role:mahasiswa']], function () {
        Route::get('kontak', [
                'as' => 'kontak', 'uses' => 'BeritaController@kontak'
            ]);
});

Route::group(['as' => 'admin::', 'middleware' => ['role:admin']], function () {

        Route::get('admin/utama', [
            'as' => 'tes', 'uses' => 'AdminController@tes'
        ]);
        #user
        Route::get('admin/user', [
            'as' => 'user', 'uses' => 'AdminController@user']);

        Route::get('admin/user/buat', [
            'as' => 'tambah_user', 'uses' => 'AdminController@buat_user']);

        Route::post('admin/user/daftar', [
            'as' => 'simpan_user', 'uses' => 'AdminController@simpanuser']);

        Route::get('admin/user/edit/{username}', [
            'as' => 'ubah_user', 'uses' => 'AdminController@ubah_user']);

        Route::patch('admin/user/edit/{username}', [
            'as' => 'update_user', 'uses' => 'AdminController@update_user']);

        Route::delete('admin/user/{username}', [
            'as' => 'hapus_user', 'uses' => 'AdminController@hapus_user']);
        //METHOD NOT ALLOWED D SINI


        #berita
        Route::get('admin/berita', [
            'as' => 'berita', 'uses' => 'AdminController@berita'
        ]);
        Route::get('admin/berita/buat', [
            'as' => 'tambah_berita', 'uses' => 'AdminController@buat_berita']);

        Route::post('admin/berita/daftar', [
            'as' => 'simpan_berita', 'uses' => 'AdminController@simpanberita']);

        Route::get('admin/berita/edit/{id}', [
            'as' => 'ubah_berita', 'uses' => 'AdminController@ubah_berita']);

        Route::patch('admin/berita/edit/{id}', [
            'as' => 'update_berita', 'uses' => 'AdminController@update_berita']);

        Route::delete('admin/berita/{id}', [
            'as' => 'hapus_berita', 'uses' => 'AdminController@hapus_berita']);

        #kontak
        Route::get('admin/kontak', [
            'as' => 'kontak', 'uses' => 'AdminController@kontak'
        ]);
});


Route::get('login', [
    'as'=>'getLogin',
    'uses'=>'Auth\AuthController@getLogin']);

Route::post('login', [
    'as'=>'postLogin',
    'uses'=>'Auth\AuthController@postLogin']);

Route::get('logout',[
    'as'=>'getLogout',
    'uses'=>'Auth\AuthController@getLogout']);
