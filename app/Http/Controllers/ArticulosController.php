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
use Storage;

class ArticulosController extends Controller
{

    public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $articulos = Articulo::all();
            if ($request->marcas !== null) {          
                $articulos = $articulos->whereIn('marca_id', $request->marcas);
            }
            if ($request->umedidas !== null) {
                $articulos = $articulos->whereIn('umedida_id', $request->umedidas);
            }
            if ($request->colores !== null) {
                $articulos = $articulos->whereIn('color_id', $request->colores);
            }
            if ($request->materiales !== null) {
                $articulos = $articulos->whereIn('material_id', $request->materiales);
            }
            if ($request->subrubros !== null) {
                $articulos = $articulos->whereIn('subrubro_id', $request->subrubros);
            }
            if ($request->rubros !== null) {
                $articulos = $articulos->whereIn('rubro_id', $request->rubros);
            }
            return response()->json(view('admin.articulos.main', compact('articulos'))->render());
            
        }
       
       
        $articulos = Articulo::all();
        $marcas = Marca::all();
        $umedidas = Unidad_Medida::all();
        $colores = Color::all();
        $materiales = Material::all();
        $talles = Talle::all();
        $subrubros = Subrubro::all();
        $rubros = Rubro::all();
//        if ($articulos->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
//            return view('admin.articulos.sinRegistros'); //se devuelve la vista para crear un registro
//        } else {
        return view('/admin/articulos/main')->with('articulos', $articulos)
            ->with('marcas', $marcas)
            ->with('umedidas', $umedidas)
            ->with('colores', $colores)
            ->with('subrubros', $subrubros)
            ->with('materiales', $materiales)
            ->with('talles', $talles)
            ->with('rubros', $rubros); // se devuelven los registros
//        }
    }

    public function create(Request $request)
    {
       
    }

    public function store(Request $request)
    {
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen')) {           
            $file = $request->file('imagen');
            $nombreImagen = 'articulo_' . time() . '.png'/*. $file->getClientOriginalExtension()*/;
            Storage::disk('articulos')->put($nombreImagen, \File::get($file));
        }
        $articulo = new Articulo($request->all());
        $articulo->imagen = $nombreImagen;
        $articulo->save();
        return response()->json('se creo articulo');
    }
  

    public function update(Request $request, $id)
    {
        $nombreImagen = 'sin imagen';
        $articulo = Articulo::find($id);
        if ($request->file('imagen')) {           
            if (Storage::disk('articulos')->exists($articulo->imagen)) {
                Storage::disk('articulos')->delete($articulo->imagen);   // Borramos la imagen anterior.      
            }  
            $file = $request->file('imagen');
            $nombreImagen = 'articulo_' . time() . '.'. $file->getClientOriginalExtension();
            Storage::disk('articulos')->put($nombreImagen, \File::get($file));
        }
       
        $articulo->fill($request->all());
        $articulo->imagen = $nombreImagen;
        $articulo->save();
        return response()->json('ok');
    }

    public function show($id) {
        $articulo = Articulo::find($id);
        $marcas = Marca::all();
        $rubros = Rubro::all();
        $subrubros = Subrubro::all();
        $umedidas = Unidad_Medida::all();
        $materiales = Material::all();
        return view('admin.articulos.show')
                        ->with('marcas', $marcas)
                        ->with('rubros', $rubros)
                        ->with('subrubros', $subrubros)    
                        ->with('umedidas', $umedidas)       
                        ->with('materiales', $materiales)                 
                        ->with('articulo', $articulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        Session::flash('message', '¡El articulo seleccionado a sido eliminado!');
        return redirect()->route('articulos.index');
    }
}
