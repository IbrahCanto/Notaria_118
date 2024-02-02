<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notaria118 extends Mailable
{
    use Queueable, SerializesModels;

    public $datosFormulario;

    public function __construct($datosFormulario)
    {
        $this->datosFormulario = $datosFormulario;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.correo')->subject('Nuevos datos de contacto recibidos');
    }
}


