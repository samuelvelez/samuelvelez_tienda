<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Categoria_producto;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;
use Illuminate\Http\Facades\File;
use Illuminate\Http\Facades\DB;


class ProductoController extends Controller
{
    //
  

    public function index(Request $request){
        $productos = Productos::where('estado','1')->get();

        return $productos;
    }

    public function create(){
       //
    }

    public function show(){
        //
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'      => 'required',
            'cantidad'  => 'required|numeric|gt:0',
            'vendedor'  => 'required',
            'categoria'  => 'required',

        ]);
        DB::transaction(function() use ($request){
            $producto = [
                'name'      => $request->name,
                'cantidad'  => $request->cantidad,
                'estado'    => 0,
                'description' => $request->description,
            ];
            $id_producto = Producto::insertGetId($producto);

            $cat_producto = [
                'id_categoria'  => $request->categoria,
                'id_producto'   => $id_producto,
            ];
            Categoria_producto::create($cat_producto);
            //DB::table('Productos'->insert())
        });
        return $id_producto;
    }
}
