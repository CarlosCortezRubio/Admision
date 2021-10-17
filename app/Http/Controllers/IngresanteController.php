<?php

namespace App\Http\Controllers;

use App\Mail\MensajeIngresantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IngresanteController extends Controller
{
    public function SimularIngresante(){
        Mail::to(config('app.email_soporte'))->send(new MensajeIngresantes(config('app.url_pasarela').'/simularPago'));
        return 'mensaje simulado con exito';
    }
}
