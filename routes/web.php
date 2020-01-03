<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/salons', 'HomeController@getAllSalons')->name('salons');

Route::get('/music-groups', 'HomeController@getAllMusicGroups')->name('music-groups');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/users', 'AdminController@users')->name('admin.users');

Route::get('/admin/user/{userId}', 'AdminController@singleUser')->name('admin.single-user');

Route::post('/admin/user/{userId}', 'AdminController@updateUser')->name('admin.update-user');

Route::get('/admin/salons/all', 'AdminController@salons')->name('admin.salons');

Route::get('/admin/salons/create', 'AdminController@renderCreateTemplate')->name('admin.render-salon-create');

Route::post('/admin/salons/create', 'AdminController@createSalon')->name('admin.create-salon');

Route::get('/admin/salons/get/{salonId}', 'AdminController@getSalon')->name('admin.get-salon');

Route::post('/admin/salons/update/{salonId}', 'AdminController@updateSalon')->name('admin.update-salon');

Route::get('/admin/salons/delete/{salonId}', 'AdminController@deleteSalon')->name('admin.delete-salon');

Route::get('/admin/music-groups/all', 'AdminController@getAllMusicGroups')->name('admin.music-groups');

Route::get('/admin/music-groups/create', 'AdminController@renderCreateMusicGroupTemplate')->name('admin.render-music-group-create');

Route::post('/admin/music-groups/create', 'AdminController@createMusicGroup')->name('admin.create-music-group');

Route::get('/admin/music-group/get/{groupId}', 'AdminController@getMusicGroup')->name('admin.get-music-group');

Route::post('/admin/music-group/update/{groupId}', 'AdminController@updateMusicGroup')->name('admin.update-music-group');

Route::get('/admin/music-groups/delete/{groupId}', 'AdminController@deleteMusicGroup')->name('admin.delete-music-group');

Auth::routes();
