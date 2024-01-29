<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('test', function () {
    return view('test');
});


Route::post('table_test_cat/{nombre?}', [PagesController::class, 'recibir'])->name('comentatios_recibir');

// Route::get('comentarios_validacion/{nombre?}',  function () {
//     return view('comentarios_validacion',[
//         ]);
// },
// [PagesController::class, 'comentarios_validacion'])->name('comentarios_validacion');

