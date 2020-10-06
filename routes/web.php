<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


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
    return view('auth.login');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('test');
})->name('dashboard');

Route::get('/test', function () {
    return view('test');
});

Route::get('/category', 'CategoryController@index');
Route::get('/upc', 'UpcController@index');

Route::get('/temp', function () {
    return view('temp');
});

Route::get('/approved', 'UpcController@approved')->name('approved');
Route::get('/approved/{cate}', 'UpcController@approved_cate')->name('approved_cate');
Route::get('/denied', 'UpcController@denied')->name('denied');
Route::get('/pending', 'UpcController@pending')->name('pending');
Route::get('/recent_edit', 'UpcController@recent_edit')->name('recent_edit');


Route::get('/t', function () {
    return view('t1');
});
