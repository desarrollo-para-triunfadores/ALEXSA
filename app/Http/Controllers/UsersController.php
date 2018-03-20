<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\Http\Requests;
use Carbon\Carbon;
Use Session;

class UsersController extends Controller {

    public function __construct() {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

   
    public function index() {

        $users = User::all();
        return view('/admin/usuarios/main')->with('usuarios', $users);        
//        $users = User::all();
//        //$roles = Rol::all()->lists('nombre','id');
//        if ($users->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            //return view('admin.usuarios.sinRegistros')->with('roles', $roles); //se devuelve la vista para crear un registro
//        } else {
//            return view('admin.usuarios.tabla')->with('usuarios', $users); // se devuelven los registros
//        }
    }

   
    public function create() {
        //
    }

    public function store(Request $request) {
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $nombreImagen = 'usuario_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file));
        }

        $user = new User($request->all());
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->imagen = $nombreImagen;
        $user->rol_id = 1;
        $user->save();

        Session::flash('message', '¡Se ha registrado a un nuevo usuario con éxito!');
        return redirect()->route('usuarios.index');
    }

    
    public function show($id) {
        //
    }

    
    public function edit($id) {
        //
    }

    public function actPass(Request $request, $id) {
        $usuario = User::find($id);
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        Session::flash('message', '¡Se ha actualizado el password del usuario con éxito!');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $usuario = User::find($id);
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $nombreImagen = 'usuario_' . time() . '.' . $file->getClientOriginalExtension();
            if (Storage::disk('usuarios')->exists($usuario->imagen)) {
                Storage::disk('usuarios')->delete($usuario->imagen);   // Borramos la imagen anterior.      
            }
            $usuario->fill($request->all());
            $usuario->imagen = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/usuarios   
            $usuario->save();
            Session::flash('message', '¡Se ha actualizado la información del usuario con éxito!');
            return redirect()->route('usuarios.index');
        }
        $usuario->fill($request->all());       
        $usuario->save();
        Session::flash('message', '¡Se ha actualizado la información del usuario con éxito!');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $usuario = User::find($id);
        if ($usuario->imagen != 'sin imagen') {
            Storage::disk('usuarios')->delete($usuario->imagen); // Borramos la imagen asociada.
        }
        $usuario->delete();
        Session::flash('message', '¡El usuario seleccionado a sido eliminado!');
        return redirect()->route('usuarios.index');
    }

}
