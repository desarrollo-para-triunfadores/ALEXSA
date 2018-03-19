<?php

namespace App\Http\Controllers;

use App\ImagenInmueble;
use App\Inmueble;
use App\Proyecto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RRHHController extends Controller
{
    public function index()
    {
        return view('front.rrhh.index');
    }

    /*
    public function mantenimiento()
    {
        Flash::overlay('Bien! su mensaje se envio correctamente');
        return Redirect::to('/');
    }
    */
    public function create(Request $request)
    {
        Mail::send('emails.contact', $request->all(), function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('jpcaceres.nea@gmail.com');
        });
    }

}
