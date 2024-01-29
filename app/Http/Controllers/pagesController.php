<?php

namespace App\Http\Controllers;

use App\Models\table_test;
use Illuminate\Http\Request;
// use App\Models\Config;
use Illuminate\Support\Facades\Validator;


class PagesController extends Controller
{
    public function inicio(){
    	return view('welcome');
    }

    // public function table_test_reg_mostrar(){


    //     return view('table_test_reg_mostrar');
    // }

    public function recibir(Request $request)
{
    $validator = Validator::make($request->all(), [
        'Nombre' => 'required',
        'Email' => 'required|email',
        'Telefono' => 'required',
        'Mensaje' => 'required',
        'Tipo_de_Informacion' => 'required',
        'checkbox_form' =>'required'
    ]);

    $table_test_reg = new table_test();

    $table_test_reg->Nombre = $request->Nombre;
    $table_test_reg->Email = $request->Email;
    $table_test_reg->Telefono = $request->Telefono;
    $table_test_reg->Mensaje = $request->Mensaje;
    $table_test_reg->Tipo_de_Informacion = $request->Tipo_de_Informacion;

    // if ($validator->fails()) {
    //     return back()->with('error', 'Favor de revisarlo');
    // }

    if ($validator->fails()) {
        return back()->with('error', 'Favor de revisar su mensaje')
                    ->withErrors($validator)
                    ->withInput();
    }

    $table_test_reg->save();

    // Check validation failure


    // Check validation success
    if ($validator->passes()) {
        return back()->with('success', 'Pronto nos pondremos en contacto con usted');
    }

    // Retrieve errors message bag
    $errors = $validator->errors();
}

    // public function recibir(Request $request){

    //     $request->validate([
    //     'Nombre' => 'required',
    //     'Email' => 'required|email',
    //     'Telefono' => 'required',
    //     'Mensaje' => 'required',
    //     'Tipo_de_Informacion' => 'required',
    //     'checkbox_form' =>'required'

    //     ]);

    //     $table_test_reg = new table_test();

    //     $table_test_reg->Nombre = $request->Nombre;
    //     $table_test_reg->Email = $request->Email;
    //     $table_test_reg->Telefono = $request->Telefono;
    //     $table_test_reg->Mensaje = $request->Mensaje;
    //     $table_test_reg->Tipo_de_Informacion = $request->Tipo_de_Informacion;

    //     $table_test_reg->save();

    //     return back()->with('success', '');

    //     // return redirect()->route('/#contactus')->with('success', '');

    //     // return redirect()->route('table_test_reg_validacion');
    // }

    // public function table_test_reg_validacion(){


    //     return view('#contactus');
    // }
}