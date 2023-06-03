<?php

use App\Models\Categorium;
use App\Models\Componente;
use App\Models\Marca;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/main', function () {
    return view('paginas.paginas');
});

Route::get('/', function () {
    return view('products.Linicio');
})->name('inicio');


Route::get('/categoriasdulces', function () {
    $categorias= Categorium::all();
    return view('products.Lcategorias', ['categorias'=> $categorias]);
})->name('categoriasdulces');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//MARCAS

Route::delete('/deletemarca/{id}', [App\Http\Controllers\MarcasController::class, 'eliminar'])->name('deletemarca');

Route::get('marcas', [App\Http\Controllers\MarcasController::class, 'getMarcas'])->name('marcas');

Route::get('/listadomarca', function () {
    return view('ListadoMarcas');
})->name('listadomarca');

Route::get('/agregarmarca', function () {
    return view('MarcasAgregar');
})->name('agregarmarca');

Route::post('/crearmarca', [App\Http\Controllers\MarcasController::class, 'store'])->name('crearmarca');


//Categorias
Route::delete('/deletecategoria/{id}', [App\Http\Controllers\CategoriasController::class, 'eliminar'])->name('deletecategoria');

Route::get('categorium', [App\Http\Controllers\CategoriasController::class, 'getCategorias'])->name('categorium');

Route::get('/listadocategoria', function () {
    return view('ListadoCategorias');
})->name('listadocategoria');

Route::get('/agregarcategoria', function () {
    return view('CategoriasAgregar');
})->name('agregarcategoria');

Route::post('/crearcategoria', [App\Http\Controllers\CategoriasController::class, 'store'])->name('crearcategoria');

//edit
Route::get('/categoriaedit/{id}', [\App\Http\Controllers\CategoriasController::class, 'editar'])->name('categoriaedit');

Route::post('/editcategoria', function (Illuminate\Http\Request $request) {
    $categoria = App\Models\Categorium::findOrFail($request->input('id_categoria'));

    $imagen = $request->file('imagen');
    $imagenBlob = $imagen->getContent();

    $categoria->nombre_categoria = $request->input('nombre_categoria');
    $categoria->descripcion_categoria = $request->input('descripcion_categoria');
    $categoria->image_cat = $imagenBlob;
    $categoria->status_categoria = $request->has('estatus');
    $categoria->save();

    $categorias= Categorium::all();
    return view('categorias', ['categorias'=> $categorias]);
})->name('editcategoria');

//PRODUCTOS
Route::get('/productoslist', [\App\Http\Controllers\ProductosController::class, 'getCompoentesByCat'])
    ->name('productoslist');
Route::get('productos', [App\Http\Controllers\ProductosController::class, 'getComponentes'])->name('productos');

//addcomponentes
Route::get('/productosad', function () {
    $categorias = Categorium::where('status_categoria', '1')->get();
    $marcas = Marca::where('status', '1')->get();
    return view('ProductosAgregar', ['categorias' => $categorias, 'marcas' => $marcas]);
})->name('productosad');

Route::post('/addproductosad', function (Illuminate\Http\Request $request) {
    // Validación para asegurarte de que se proporciona una clave de componente
    if (!$request->has('clave_componente')) {
        return redirect()->back()->withInput()->withErrors(['La clave del componente es requerida']);
    }
    $claveComponente = $request->input('clave_componente');
    $imagen = $request->file('imagen');
    $imagenBlob = file_get_contents($imagen);
    $componente = new Componente;
    $componente->clave_componente = $claveComponente;
    $componente->nombre_componente = $request->input('nombre_componente');
    $componente->descripcion_componente = $request->input('descripcion_componente');
    $componente->precio_actual_componente = $request->input('precio_actual_componente');
    $componente->existencia_componente = $request->input('existencia_componente');
    $componente->stock_min_componente = $request->input('stock_min_componente');
    $componente->stock_max_componente = $request->input('stock_max_componente');
    $componente->id_ct_marca = $request->input('id_ct_marca');
    $componente->id_categoria = $request->input('id_categoria');
    $componente->descuento_componente = $request->input('descuento_componente');
    $componente->imagen = $imagenBlob;

    $componente->save();

    $componentes = Componente::all();
    return view('productos', ['componentes' => $componentes]);
})->name('addproductosad');
//delete Productos
Route::delete('/productoborrar/{id}', [\App\Http\Controllers\ProductosController::class, 'eliminar'])->name('productoborrar');

//edit componentes
Route::get('/productoedit/{id}', [\App\Http\Controllers\ProductosController::class, 'editar'])->name('productoedit');

Route::post('/editproducto', function (Illuminate\Http\Request $request) {
    $componente = App\Models\Componente::findOrFail($request->input('id_componente'));
    $componente->nombre_componente = $request->input('nombre_componente');
    $componente->descripcion_componente = $request->input('descripcion_componente');
    $componente->status_componente = $request->has('estatus');
    $componente->save();

    return view('PanelAdm.Susses', ['tipo' => 'marca', 'action' => 'editar', 'marca' => $componente]);
})->name('editproducto');



Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'index'])->name('catalogo');
