<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'Web\FrontController@index')->name('beranda');

Route::get('/about', 'Web\FrontController@about')->name('about');

Route::get('/contact', 'Web\FrontController@contact')->name('contact');

Route::get('/artikel/{artikel}', 'Web\FrontController@show')->name('artikel.detail');

Route::get('/artikel-kategori/{kategori}', 'Web\FrontController@artikel_kategori')->name('artikel.kategori');


// Auth::routes();
// Route::get('/login', function () {
//     return redirect()->route('login');
// });

Route::get('/admin', function () {
    return redirect()->route('login');
});
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/admin/register', [
//     'as' => 'register',
//     'uses' => 'Auth\RegisterController@showRegistrationForm'
// ]);


// Route::post('/admin/register', [
//     'as' => '',
//     'uses' => 'Auth\RegisterController@register'
// ]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', 'HomeController@index')->name('home');

    Route::resource('/admin/categori', 'CategoriController');

    Route::resource('/admin/artikel', 'ArtikelController');
});
