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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news',[App\Http\controllers\HomeController::class, "ourNews"])->name("news");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {	

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Auth::routes();
//get routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/purchases', [App\Http\Controllers\HomeController::class, 'purchases'])->name('purchases');
Route::get('/sales', [App\Http\Controllers\HomeController::class, 'getSales'])->name('get.sales');
Route::get('/make-sale/{car_id}', [App\Http\Controllers\HomeController::class, 'makeSale'])->name('make.sale');
Route::get('/car-details/{car_id}', [App\Http\Controllers\HomeController::class, 'carDetails'])->name('car.details');
Route::get('/add-purchases', [App\Http\Controllers\HomeController::class, 'addPurchases'])->name('add.purchases');
Route::get('/edit-purchases/{car_id}', [App\Http\Controllers\HomeController::class, 'editPurchases'])->name('edit.purchases');
Route::get('/stock', [App\Http\Controllers\HomeController::class, 'getSales'])->name('get.stock');
Route::get('available-stock', [App\Http\Controllers\HomeController::class, 'getAvailableStock'])->name('available-stock');


// post routes
Route::post('/make-sale/{car_id}', [App\Http\Controllers\HomeController::class, 'storeSale'])->name('store.sale');
Route::get('/all-purchases', [App\Http\Controllers\HomeController::class, 'getData'])->name('getPurchases');



// post routes
Route::post('/add-purchases', [App\Http\Controllers\HomeController::class, 'storePurchases'])->name('store.purchases');
//put routes
Route::put('/edit-purchases/{car_id}', [App\Http\Controllers\HomeController::class, 'updatePurchases'])->name('update.purchases');


