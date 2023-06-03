<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Categorium;
use Illuminate\Http\Request;

class CategoriasController extends Controller{
    public function getCategorias()
    {
        $categorias= Categorium::all();
        return view('categorias', ['categorias'=> $categorias]);
    }
    public function eliminar($id )
    {
        $categoriad= Categorium::find($id);
        $categoriad->delete();
        return view('paginas.paginas');
    }
    public function store(Request $request)
    {
        $categoria = new Categorium();
        $categoria->nombre_categoria = $request->input('nombre_categoria');
        $categoria->descripcion_categoria = $request->input('descripcion_categoria');
        $categoria->status_categoria = $request->has('status_categoria') ? 1 : 0;
        $categoria->save();

        return view('paginas.paginas');
    }
    public function editar($id)
    {
        $categoria = Categorium::find($id);
        return view('CategoriasEdit', ['categoria'=>$categoria]);
    }
}

