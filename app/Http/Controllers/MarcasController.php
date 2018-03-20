<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Pais;
use App\Provincia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
Use Session;

class MarcasController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $marcas = Marca::all();
        $paises = Pais::all();
//        if ($paises->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            return view('admin.paises.sinRegistros'); //se devuelve la vista para crear un registro
//        } else {
        return view('/admin/marcas/main')
            ->with('paises', $paises)
            ->with('marcas', $marcas); // se devuelven los registros
//        }
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $marca = new Marca($request->all());
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $nombreImagen = 'ALEXSA_marca' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('marcas')->put($nombreImagen, \File::get($file));
        }

        $marca->logo = $nombreImagen;
        $marca->save();
        Session::flash('message', 'Se ha registrado a una nueva marca');
        return redirect()->route('marcas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $marca = Marca::find($id);
        $marca->fill($request->all());
        $marca->save();
        Session::flash('message', 'Se ha actualizado la información de la marca');
        return redirect()->route('marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $marca = Marca::find($id);
        $marca->delete();
        Session::flash('message', 'La marca seleccionado a sido eliminada');
        return redirect()->route('marcas.index');
    }

}
