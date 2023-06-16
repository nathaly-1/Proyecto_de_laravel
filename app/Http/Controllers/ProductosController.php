<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use App\Models\Componente;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function getComponentes()
    {
        $componentes = Componente::all();
        return view('productos', ['componentes' => $componentes]);
    }

    public function getCompoentesByCat(Request $cat)
    {
        $clave = $cat->input('clave');
        $categorias = Componente::where('id_categoria', $clave)
            ->get();
        return view('products.Lproductos', ['componentes' => $categorias, 'cat'=>$clave]);

    }
    public function eliminar($id)
    {
        $componente = Componente::find($id);
        $componente->delete();

        $componentes = Componente::all();
        return view('productos', ['componentes' => $componentes]);
    }
    public function editar($id)
    {
        $componente = Componente::find($id);
        $marcas=Marca::all();
        $categorias=Categorium::all();
        return view('ProductosEditar', ['componente'=>$componente, 'categorias'=>$categorias, 'marcas'=>$marcas]);
    }
}
