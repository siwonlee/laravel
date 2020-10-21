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
Route::get('/approved/{cate}/{sub}', 'UpcController@approved_sub')->name('approved_sub');
Route::get('/make_approved/{id}', 'UpcController@make_approved')->name('make_approved');

Route::get('/denied', 'UpcController@denied')->name('denied');
Route::post('/denied/{id}', 'UpcController@make_denied')->name('make_denied');
Route::get('/denied_cate', 'UpcController@denied_cate')->name('denied_cate');

Route::get('/pending', 'UpcController@pending')->name('pending');
Route::get('/make_pending/{id}', 'UpcController@make_pending')->name('make_pending');
Route::get('/pending_cate', 'UpcController@pending_cate')->name('pending_cate');

Route::get('/recent_edit', 'UpcController@recent_edit')->name('recent_edit');

Route::post('/edit/{id}', 'UpcController@edit')->name('edit');
Route::post('/edit_attach/{id}', 'UpcController@edit_attach')->name('edit_attach');


Route::get('/detail/{id}', 'UpcController@detail')->name('detail');

Route::get('/add_upc', 'UpcController@add_upc')->name('add_upc');
Route::post('/add_upc', 'UpcController@add_upc_post')->name('add_upc_post');
Route::get('/add_upc/status', 'UpcController@status')->name('add_upc_status');
Route::get('/add_upc/sub/{id}', 'UpcController@subcategory');

Route::post('/add_upc_upload', 'UpcController@add_upc_upload')->name('add_upc_upload');
Route::get('/check_digit', 'CheckdigitController@index')->name('check_digit');
Route::get('/check_digit/find', 'CheckdigitController@find')->name('check_digit.find');
Route::get('/check_digit/check', 'CheckdigitController@check')->name('check_digit.check');
Route::get('/check_digit/convert', 'CheckdigitController@convert')->name('check_digit.convert');
Route::get('/check_digit/plu', 'CheckdigitController@plu')->name('check_digit.plu');

Route::get('/search', 'SearchController@index')->name('search');
Route::get('/search/general', 'SearchController@general')->name('search.general');
Route::post('/search/{id}', 'SearchController@edit')->name('search.edit');
Route::post('/search/category', 'SearchController@category')->name('search.category');


Route::get('/data_for_p', 'ProcessorController@index')->name('processor');
Route::get('/data_for_p/{id}', 'ProcessorController@edit')->name('processor.edit');
Route::get('/data_for_p/fix/compare', 'ProcessorController@compare')->name('processor.compare'); 
Route::get('/data_for_p/fix/apltype', 'ProcessorController@apltype')->name('processor.apltype'); 


Route::get('/checkdigit', function () {
    return view('checkdigit');
});


Route::get('/t', function () {
    return view('t1');
});
