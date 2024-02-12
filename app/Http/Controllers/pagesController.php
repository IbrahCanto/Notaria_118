<?php

namespace App\Http\Controllers;

use App\Mail\correoNotaria118;
use App\Mail\correoDestinatario;
use App\Models\registro_mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function inicio(){
    	return view('welcome');
    }

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

    $registro_mensaje_reg = new registro_mensaje();
    $registro_mensaje_reg->Nombre = $request->Nombre;
    $registro_mensaje_reg->Email = $request->Email;
    $registro_mensaje_reg->Telefono = $request->Telefono;
    $registro_mensaje_reg->Mensaje = $request->Mensaje;
    $registro_mensaje_reg->Tipo_de_Informacion = $request->Tipo_de_Informacion;
    $registro_mensaje_reg->checkbox_form = $request->checkbox_form;

    if ($validator->fails()) {
        return back()->with('error', 'Favor de revisar su mensaje')
                    ->withErrors($validator)
                    ->withInput();
    }

    $registro_mensaje_reg->save();

    if ($validator->passes()) {

        $correoDestino1 = 'icafurry@gmail.com';
        $correoDestino2 = $registro_mensaje_reg->Email;
        $datosFormulario = [
            'Nombre' => $request->Nombre,
            'Email' => $request->Email,
            'Telefono' => $request->Telefono,
            'Mensaje' => $request->Mensaje,
            'Tipo_de_Informacion' => $request->Tipo_de_Informacion,
            'checkbox_form' => $request->checkbox_form,
        ];
        
        Mail::to([$correoDestino1])->send(new correoNotaria118($datosFormulario));
        Mail::to([$correoDestino2])->send(new correoDestinatario($datosFormulario));

        return back()->with('success', 'Gracias por enviarnos su mensaje. Pronto nos pondremos en contacto con usted');
    }

    $errors = $validator->errors();
}
}