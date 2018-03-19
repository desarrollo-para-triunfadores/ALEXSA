<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rubro;
use App\Provincia;
use App\Subrubro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
Use Session;

class RubrosController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //si la peticion se realiza por ajax, quiere decir que estamos en vista clientes.createForm intentando encontrar provincias desde rubro en un select.
        if($request->ajax()){
            $subrubrosDeRubro = Subrubro::subrubros($request->id);
            return response()->json($subrubrosDeRubro);
        }
        $rubros = rubro::all();
//        if ($rubros->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            return view('admin.rubros.sinRegistros'); //se devuelve la vista para crear un registro
//        } else {
        return view('/admin/rubros/main')->with('rubros', $rubros); // se devuelven los registros
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rubro = new rubro($request->all());
        $rubro->save();
        Session::flash('message', '¡Se ha registrado a un nuevo país!');
        return redirect()->route('rubros.index');
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
        dd($request);
        $rubro = rubro::find($id);
        $rubro->fill($request->all());
        $rubro->save();
        Session::flash('message', '¡Se ha actualizado la información del país con éxito!');
        return redirect()->route('rubros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $rubro = rubro::find($id);
        $rubro->delete();
        Session::flash('message', '¡El país seleccionado a sido eliminado!');
        return redirect()->route('rubros.index');
    }

}
