<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulo;
use App\Presupuesto;
use App\LineaPresupuesto;
use Mockery\Exception;


class CarritoController extends Controller
{
    public function agregar_articulo(Request $request)
    {
        if($request->session()->has('carrito')){
            $carrito =  $request->session()->get('carrito');
        } else{
            $carrito = $request->session()->put('carrito',array());
        }
        $articulo = Articulo::find($request->articulo);    
        $carrito =  $request->session()->get('carrito');
        $linea = [
            "cantidad" => $request->cantidad,
            "articulo" => $articulo,     
        ];
        $carrito[$request->articulo] =  $linea;
        try{
            if(($request->cantidad != null) && ($request->articulo)){
                $request->session()->put('carrito',$carrito);
                return response()->json('agregado');
            }else{
                return response()->json('no agregado');
            }
        }catch (Exception $e){
            return response()->json('no agregado');
        }

    }

    public function eliminar_articulo(Request $request)
    {      
        $carrito =  $request->session()->get('carrito');
        unset($carrito[$request->articulo]);        
        $request->session()->put('carrito',$carrito);
        $carrito = $request->session()->get('carrito');
        return response()->json(view('front.carrito.tabla_articulos', compact('carrito'))->render());
    }



    public function actualizar(Request $request)
    {       
        $carrito =  $request->session()->get('carrito');
        $carrito[$request->articulo]['cantidad'] =  $request->cantidad;
        $request->session()->put('carrito',$carrito);
        $carrito = $request->session()->get('carrito');
        return response()->json(view('front.carrito.tabla_articulos', compact('carrito'))->render());
    }



    public function vaciar_carrito(Request $request)
    {      

        if($request->session()->has('carrito')){
            $request->session()->forget('carrito');
        } 
        $carrito = $request->session()->put('carrito',array());        
        return response()->json(view('front.carrito.tabla_articulos', compact('carrito'))->render());
    }



    public function show(Request $request)
    {
        if($request->session()->has('carrito')){
            $carrito =  $request->session()->get('carrito');
        } else{
            $carrito = $request->session()->put('carrito',array());
        }
        return view('front.carrito.index', compact('carrito'));
    }

    public function registrar_carrito(Request $request)
    {        
            $carrito =  $request->session()->get('carrito');
            $presupuesto = new Presupuesto();
            $presupuesto->user_id = "1"; 
            $presupuesto->estado = "pendiente";
            $presupuesto->save();

            foreach ( $carrito as $item) {
                $linea = new LineaPresupuesto();
                $linea->presupuesto_id = $presupuesto->id;
                $linea->cantidad = $item['cantidad'];
                $linea->articulo_id = $item['articulo']['id'];
                $linea->save();
            }
       
            $carrito = $request->session()->put('carrito',array());        
            return response()->json(view('front.carrito.tabla_articulos', compact('carrito'))->render());
    }



}
