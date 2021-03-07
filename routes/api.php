<?php
use app\Models\artikel;
use Illuminate\Support\Facades\Route;

/*

|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthAPIController@login');
    Route::post('logout', 'App\Http\Controllers\AuthAPIController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthAPIController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthAPIController@me');

});

Route::apiResource('artikel',ArtikelAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Soal 1
//Tampilkan artikel dengan id=17 dan users_id=160
Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

//Soal 2
//Tampilkan artikel dengan id=2 atau id=5
 Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

// //Soal 3
// //Tampilkan artikel dengan id=3 dan user dengan nama  =Aslijan Megantara
 Route::post('soal3','App\Http\Controllers\BabSatuController@a3');

// //Soal 4
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
 Route::post('soal4','App\Http\Controllers\BabSatuController@a4');

// //Soal 5
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan kategori galeri yang di awali dengan Aut
 Route::put('soal5','App\Http\Controllers\BabDuaController@a5');

// //Soal 6
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga galeri
 Route::patch('soal6','App\Http\Controllers\BabDuaController@a6');

// //Soal 7
// //Tampilkan pengumuman yang dibuat oleh user yang membuat dua berita atau lebih
 Route::delete('soal7','BabDuaController@a7');

 