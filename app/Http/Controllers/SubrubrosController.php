<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subrubro;
use App\Localidad;
use App\Rubro;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Http\Requests\subrubroRequestCreate;
use App\Http\Requests\subrubroRequestEdit;
Use Session;

class SubrubrosController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subrubros = Subrubro::all();
        $rubros = Rubro::all();
        if ($subrubros->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.subrubros.sinRegistros')->with('rubros', $rubros); //se devuelve la vista para crear un registro
        } else {
            return view('admin.subrubros.main')
                ->with('subrubros', $subrubros)
                ->with('rubros', $rubros);
        }
    }

    public function create()
    {        
        return view('admin.subrubros.create');
    }

    public function store(Request $request)
    {
        $subrubro = new subrubro($request->all());
        $subrubro->save();
        Session::flash('message', 'Se ha registrado el subrubro.');
        return redirect()->route('subrubros.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubros = rubro::all()->lists('nombre','id');
        $subrubro = subrubro::find($id);
        return view('admin.subrubros.show')
            ->with('subrubro', $subrubro)
            ->with('rubros', $rubros);
    }


    public function update(Request $request, $id) {
        $subrubro = subrubro::find($id);
        $subrubro->fill($request->all());
        $subrubro->save();
        Session::flash('message', 'Se ha actualizado el subrubro');
        return redirect()->route('subrubros.index');
    }


    public function destroy($id) {
        $subrubro = subrubro::find($id);
        $subrubro->delete();
        Session::flash('message', 'La subrubro ha sido eliminado');
        return redirect()->route('subrubros.index');
    }
}
