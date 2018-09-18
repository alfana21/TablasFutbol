<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pantalla1', function(){

    $player=['canavaro','cancerbero','chavo','milito'];
    $posicion=['defensa','medio','central','delantero'];
return view ('pantalla1')->with('jugador',$player)->with('posicion',$posicion);
    
});

Route::get('/pantalla2',function(){
    $equipos=['Colombia','Brazil','Argentina','Paraguay','Uruguay'];

return view('pantalla2')->with('equipos',$equipos);

});