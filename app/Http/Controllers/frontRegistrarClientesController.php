<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Storage;
use App\Http\Requests;
use Carbon\Carbon;
Use Session;

class frontRegistrarClientesController extends Controller {

    public function __construct() {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('front/registro/index');

//        
//        $users = User::all();
//        //$roles = Rol::all()->lists('nombre','id');
//        if ($users->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            //return view('admin.clientes.sinRegistros')->with('roles', $roles); //se devuelve la vista para crear un registro
//        } else {
//            return view('admin.clientes.tabla')->with('clientes', $users); // se devuelven los registros
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if ($request->ajax()){

            $cliente = DB::table('clientes')->where('cuit', $request->cuit)->first(); #encontrar el cliente con ese CUIT
            if($cliente != null){
                #resta validar que email no este repetido (que ya no exista este usuario en sistema)
                $usuario = new User();
                $usuario->name = $request->cuit;
                $password_sin_hash = str_random(6);
                $usuario->password = Hash::make($password_sin_hash);
                $usuario->email = $request->email;
                $usuario->rol_id = 15;          #harcodeado, despues hay que cambiarlo por que detecte cual tiene nombre de rol "cliente"

                /*
                if($cliente->empresa == ''){
                    $usuario->name = $cliente->empresa;
                }else{
                    $usuario->name = $cliente->nombre." ".$cliente->apellido;
                }
                */
                $usuario->imagen = "sin imagen";
                $usuario->save();
                try{
                    Mail::send('emails.registro_cliente', ['cliente'=>$cliente,'usuario'=>$usuario, 'pass'=>$password_sin_hash], function($msj){
                        $msj->subject('ALEX DISTRIBUIDORA SA | Credenciales de Acceso a Cliente');
                        $msj->to('jpcaceres.nea@gmail.com');
                    });
                    return response()->json(json_encode("Se envio el email", true));
                }catch (Exception $e){
                    $respuesta = array("excepcion"=>$e);
                    return response()->json(json_encode($respuesta, true));
                }
            }else{
                return response()->json(json_encode('todavia no es cliente', true));    #no hay cliente con ese cuit
            }

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $nombreImagen = 'cliente_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('clientes')->put($nombreImagen, \File::get($file));
        }

        $user = new User($request->all());
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->imagen = $nombreImagen;
        $user->rol_id = 1;
        $user->save();


        Session::flash('message', '¡Se ha registrado a un nuevo cliente con éxito!');
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function actPass(Request $request, $id) {
        $cliente = User::find($id);
        $cliente->password = bcrypt($request->password);
        $cliente->save();
        Session::flash('message', '¡Se ha actualizado el password del cliente con éxito!');
        return redirect()->route('admin.clientes.index');
    }


    public function update(Request $request, $id) {
        $cliente = User::find($id);
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $nombreImagen = 'cliente_' . time() . '.' . $file->getClientOriginalExtension();
            if (Storage::disk('clientes')->exists($cliente->imagen)) {
                Storage::disk('clientes')->delete($cliente->imagen);   // Borramos la imagen anterior.
            }
            $cliente->fill($request->all());
            $cliente->imagen = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            Storage::disk('clientes')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/clientes
            $cliente->save();
            Session::flash('message', '¡Se ha actualizado la información del cliente con éxito!');
            return redirect()->route('clientes.index');
        }
        $cliente->fill($request->all());
        $cliente->save();
        Session::flash('message', '¡Se ha actualizado la información del cliente con éxito!');
        return redirect()->route('clientes.index');
    }


    public function destroy($id) {
        $cliente = User::find($id);
        if ($cliente->imagen != 'sin imagen') {
            Storage::disk('clientes')->delete($cliente->imagen); // Borramos la imagen asociada.
        }
        $cliente->delete();
        Session::flash('message', '¡El cliente seleccionado a sido eliminado!');
        return redirect()->route('clientes.index');
    }

}
