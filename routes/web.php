<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    $fecha = fechaEspanol (date('d-m-Y H:i:s'));

    return view('index', [
            "hoy" => $fecha, 
        ]);
});

Route::get('{card}', function ($card) {
    return view('cards.' . $card, []);
})->where('card', 'rmh|tdg|mpq|cce|apv|ahc|vmm|lnu|aee');


Route::post('registro_mensaje/{nombre?}', [PagesController::class, 'recibir'])->name('comentatios_recibir');

function fechaEspanol ($fecha) {
    $anio = date('Y', strtotime($fecha));
    return $anio;
}
