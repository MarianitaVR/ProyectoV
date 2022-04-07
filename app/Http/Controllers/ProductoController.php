<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\CategoriaProducto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=DB::table('productos')
        ->join('categoriaproducto', 'productos.idProducto', '=' , 'categoriaproducto.idCategoria')
        ->select('productos.*','categoriaproducto.descripcioProducto')
        ->get();

        return view('producto.index' , $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $datos['categoriaproductos'] = CategoriaProducto::all();

        return view('producto.registrar', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.editar',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $producto = Producto::findOrFail($id);
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcionProducto = $request->descripcionProducto;
        $producto->precioProducto = $request->precioProducto;
        $producto->stock = $request->stock;
        $producto->estadoProducto = $request->estadoProducto;

        $producto->update();

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
