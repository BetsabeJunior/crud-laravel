<?php

namespace App\Http\Controllers;

use App\Mail\FormularioContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store()
    {
        $mensaje = request()->validate(
            [
                'nombre' => 'required',
                'correo' => 'required|email',
                'asunto' => 'required',
                'mensaje' => 'required|min:5'
            ],
            [
                'nombre.required' => __('Ineed your name')
            ]
        );

        Mail::to('betsabehoyos@gmail.com')->queue(new FormularioContacto($mensaje));


        return "Validado";
    }
}
