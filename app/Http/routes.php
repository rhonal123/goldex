<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/hello','Hello@index');
//Route::get('/hello/{name}', 'Hello@show');



// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
/*Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('hello');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});

*/
Route::group(array('before' => 'auth'), function() {
	Route::group(['prefix' => 'sistema','before' => 'auth'], function () {

        Route::get('bancos','BancosController@index')->middleware('auth');
        Route::get('bancos/{id}','BancosController@show')->middleware('auth');
        Route::post('bancos','BancosController@create')->middleware('auth');
        Route::delete('bancos/{id}','BancosController@delete')->middleware('auth');
        Route::patch('bancos/{id}','BancosController@update')->middleware('auth');

        Route::get('cuentas','CuentasController@index')->middleware('auth');
        Route::get('cuentas/{id}','CuentasController@show')->middleware('auth');
        Route::post('cuentas','CuentasController@create')->middleware('auth');
        Route::delete('cuentas/{id}','CuentasController@delete')->middleware('auth');
        Route::patch('cuentas/{id}','CuentasController@update')->middleware('auth');

        Route::get('negocios','NegociosController@index')->middleware('auth');
        Route::get('negocios/{id}','NegociosController@show')->middleware('auth');
        Route::post('negocios','NegociosController@create')->middleware('auth');
        Route::delete('negocios/{id}','NegociosController@delete')->middleware('auth');
        Route::patch('negocios/{id}','NegociosController@update')->middleware('auth');

        Route::group(array('prefix' => 'negocios/{id}/'), function() {
            Route::get('movimientos','NegociosController@movimientos')->middleware('auth');
        });

        Route::get('prestamos','PrestamosController@index')->middleware('auth');
        Route::get('prestamos/{id}','PrestamosController@show')->middleware('auth');
        Route::post('prestamos','PrestamosController@create')->middleware('auth');
        Route::delete('prestamos/{id}','PrestamosController@delete')->middleware('auth');
        Route::patch('prestamos/{id}','PrestamosController@update')->middleware('auth');

	});
});



Route::auth();

Route::get('/', 'HomeController@index');
 