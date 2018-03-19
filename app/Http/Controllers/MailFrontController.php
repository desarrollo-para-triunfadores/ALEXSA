<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailFrontController extends Controller
{
    public function index(Request $request)
    {
        //dd($request);
        Mail::send('emails.contact', $request->all(), function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('jpcaceres.nea@gmail.com');
        });
        Flash::overlay('Bien! su mensaje se envio correctamente');
        return Redirect::to('/');
    }

    public function create(Request $request)
    {
        if($request->ajax()){
            Mail::send('emails.contact', $request->all(), function($msj){
                $msj->subject('Correo de contacto');
                $msj->to('jpcaceres.nea@gmail.com');
            });
        }
        //dd($request);


    }

}
