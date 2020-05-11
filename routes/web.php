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
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);

});


Route::get('/', function () {
    return view('index');
});

Route::get('/razrabotka-sajtov', function () {
    return view('sites');
});

Route::get('/razrabotka-sajtov/internet-magazin', function () {
    return view('sites.internet-magazin');
});

Route::get('/razrabotka-sajtov/mnogostranichnyj-sajt', function () {
    return view('sites.mnogostranichnyj-sajt');
});
Route::get('/razrabotka-sajtov/sajt-katalog', function () {
    return view('sites.sajt-katalog');
});
Route::get('/razrabotka-sajtov/sajt-vizitka', function () {
    return view('sites.sajt-vizitka');
});




Route::get('/seo', function () {
    return view('seo');
});

Route::get('/smm', function () {
    return view('smm');
});

Route::get('/kontekstnaya-reklama', function () {
    return view('kontekstnaya-reklama');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contacts', function () {
    return view('contacts');
});


Route::get('/vacancy', function () {
    return view('vacancy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
