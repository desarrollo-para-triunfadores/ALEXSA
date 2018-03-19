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

class DescargasController extends Controller
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
        return view('front.descargas.index');

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
