<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presupuesto;
use App\LineaPresupuesto;
use Storage;
use Illuminate\Support\Facades\Mail;

class PresupuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** Email contestando a presupuesto */
        if($request->ajax()){   
            if($request->email_a_interesado==true){ //email desde sistama ? a interesado en inmueble
                $nombreArchivo = null;
                if ($request->file('adjunto')) {
                    $file = $request->file('adjunto');
                    $nombreArchivo = 'adjunto_' . time() . '.' . $file->getClientOriginalExtension();
                    Storage::disk('files')->put($nombreArchivo, \File::get($file));
                }

                // Se a�ade el email a la historia de la Oportunidad
                $historia = new Historia_Oportunidad();
                $historia->titulo = 'Envio de email desde sistema';
                $historia->detalle = 'Mensaje: '.$request->mensaje;
                $historia->oportunidad_id = $request->oportunidad_id;
                $historia->save();
                //--------------------------------------------------
                try{
                    Mail::send('emails.admin_a_interesado', $request->all(), function($msj){
                        $msj->subject('Mensaje de agente desde www.InmobiliariaNube.com');
                        $msj->attach('files/Plano.jpg'/*.$nombreArchivo*/);
                        $msj->to('jpaulnava@gmail.com');
                    });
                    return response()->json(json_encode("Se envio el email del pedido", true));
                }catch (Exception $e){
                    $respuesta = array("excepcion"=>$e);
                    return response()->json(json_encode($respuesta, true));
                }
            }
        }
        $presupuestos = Presupuesto::all();     
        return view('/admin/presupuestos/main')->with('presupuestos', $presupuestos); // se devuelven los registros
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file') ){

            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $nombre=$file->getClientOriginalName();
            $r= Storage::disk('files')->put($nombre,  \File::get($file));       //'files' esta configurado como carpeta en config/filesystem.php
        }
        else{
            return "no";
        }

        if($r){
            return $nombre ;
        }
        else
        {
            return "error, vuelva a intentarlo";
        }
    }

    public function enviar(Request $request)
    {
        $pathToFile="";
        $containfile=false;
        if($request->hasFile('file') ){
            $containfile=true;
            $file = $request->file('file');
            $nombre=$file->getClientOriginalName();
            $pathToFile= realpath(('files') ."/".$nombre);   //en la carpeta 'files' se guardo anteriormente nuestro adjunto (func. store)
        }
        $destinatario = $request->input("destinatario");
        $asunto = $request->input("asunto");
        $mensaje = $request->input("mensaje");

        $data = array('mensaje' => $mensaje);  
        $r= Mail::send('emails.email_presupuesto', $data, function ($message) use ($asunto,$destinatario,  $containfile,$pathToFile) {
            $message->from('ventas@alexdistribuidora.com', 'ALEX DISTRIBUIDORA SA');
            $message->to('jpaulnava@gmail.com')->subject('Presupuesto de ALEX DISTRIBUIDORA SA');
            if($containfile){
                $message->attach($pathToFile);
            }
        });

        if($r){
            if($containfile){ Storage::disk('local')->delete($nombre); }
            return view("emails.msj_correcto")->with("msj","Correo Enviado correctamente ?");
        }
        else
        {
            return view("emails.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");
        }
    }

    public function show($id)
    {
        $presupuesto = Presupuesto::find($id);
        $lineas_presupuesto = LineaPresupuesto::where('presupuesto_id', $id)->get();
        return view('admin.presupuestos.formulario.show')->with('presupuesto', $presupuesto)
                                                            ->with('lineas_presupuesto', $lineas_presupuesto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
