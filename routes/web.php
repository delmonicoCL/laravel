<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get("/", [App\Http\Controllers\SaludController::class, 'inicio']);
route::post("/saludo/{comentario}", [App\Http\Controllers\SaludController::class, 'saludo']);



// Route::get('/', function () {
//     return view('index');
// });






Route::get('/saludo/{nombre?}', function ($nombre = null) {

    return "HOLA MARCELO " . $nombre;

});


route::get("/prova", function () {


    $nombre ='Francisco'; 
    $apellidos ='Carvajal'; 
    
    // $data['nombre'] ='Francisco';   
    // $data['apellidos'] = 'Fernandez';

    return view("carpeta.saludo", compact("nombre","apellidos"));
 
})->name("saludo");

route::get("/suma/{numero1?}/{numero2?}", function ($numero1, $numero2) {
    $resultado =$numero1 + $numero2;
    
    return ("LA SUMA DE $numero1 y $numero2 es: $resultado");

});