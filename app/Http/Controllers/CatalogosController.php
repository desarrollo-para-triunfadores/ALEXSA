<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Color;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;
use Storage;

class CatalogosController extends Controller
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
        $catalogos = Catalogo::all();
        return view('/admin/catalogos/main')->with('catalogos',$catalogos);

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $catalogo = new Catalogo($request->all());
        if ($request->file('archivo_catalogo')) {
            $file = $request->file('archivo_catalogo');
            //$nombre = 'INube_' . time() . '.jpg'; // Le damos un nombre por defecto: la primera parte es IN + momento + "."extensión
            Storage::disk('catalogos')->put(/*$request->nombre*/"CatalogoSubido.pdf", File::get($file));
            $catalogo->save();
            Session::flash('message', 'El catalogo se publico correctamente en la sección "Descargas".');
            return view('/admin/catalogos/main');
        }
    }


    public function show($id)
    {

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
