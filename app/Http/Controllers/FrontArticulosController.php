<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\Marca;
use App\Material;
use App\Provincia;
use App\Rubro;
use App\Subrubro;
use App\Talle;
use App\Unidad_Medida;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class FrontArticulosController extends Controller
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

        if ($request->ajax()) {
            
            $articulos = Articulo::all();
  
            if (($request->marcas !== "null")&&($request->marcas !=="todo")) {
                $articulos = $articulos->whereIn('marca_id', $request->marcas );              
            }    
  
            if (($request->colores !== "null")&&($request->colores !=="todo")) {
                $articulos = $articulos->whereIn('color_id', $request->colores);
            }
            if (($request->materiales !== "null")&&($request->materiales !=="todo")) {
                $articulos = $articulos->whereIn('material_id', $request->materiales);
            }
            if (($request->subrubros !== "null")&&($request->subrubros !=="todo")) {
                $articulos = $articulos->whereIn('subrubro_id', $request->subrubros);
            }
            if (($request->rubros !== "null")&&($request->rubros !=="todo")) {
                $articulos = $articulos->whereIn('rubro_id', $request->rubros);
            }
         

            return response()->json(view('front.articulos.tabla_articulos', compact('articulos'))->render());
        }
       
       
        $articulos = Articulo::all();
        $marcas = Marca::all();
        $umedidas = Unidad_Medida::all();
        $colores = Color::all();
        $materiales = Material::all();
        $talles = Talle::all();
        //$ume = Color::all();
        $subrubros = Subrubro::all();
        $rubros = Rubro::all();
//        if ($articulos->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            return view('admin.articulos.sinRegistros'); //se devuelve la vista para crear un registro
//        } else {
        return view('/front/articulos/index')->with('articulos', $articulos)
            ->with('marcas', $marcas)
            ->with('umedidas', $umedidas)
            ->with('colores', $colores)
            ->with('subrubros', $subrubros)
            ->with('materiales', $materiales)
            ->with('talles', $talles)
            ->with('rubros', $rubros); // se devuelven los registros
//        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       //
    }


    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('/front/articulos/show')->with('articulo', $articulo);

    }


    public function edit($id)
    {
        //
    }


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
