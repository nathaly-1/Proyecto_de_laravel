<?php

namespace App\Http\Controllers;

use App\Models\Componente;
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
        $action='eliminar';
        $componente = Componente::find($id);
        $componente->delete();

        $componentes = Componente::all();
        return view('productos', ['componentes' => $componentes]);
    }
    public function editar($id)
    {
        $componente = Componente::find($id);
        return view('PanelAdm.ComponentesUD', ['componente'=>$componente]);
    }
}
