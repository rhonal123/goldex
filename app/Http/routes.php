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
use App\User;
use Illuminate\Support\Facades\Auth;
/*
Route::group(array('before' => 'auth'), function() {
    
    Route::get('current_user', function(){
        return Auth::user();
    })->middleware('auth');

    Route::group(['prefix' => 'webservices/','before' => 'auth'], function () {

        Route::get('tipos','ServiciosController@tipos')->middleware('auth');
        Route::get('movimientos','ServiciosController@movimientos')->middleware('auth');
        Route::get('negocios','ServiciosController@negocios')->middleware('auth');
        Route::get('cuentas','ServiciosController@cuentas')->middleware('auth');
        Route::get('bancos','ServiciosController@bancos')->middleware('auth');
        Route::get('negocios/{id}/abonospendientes','ServiciosController@abonospendientes')->middleware('auth');
        Route::get('negocios/{id}/movimientospendites','ServiciosController@movimientospendites')->middleware('auth');

    });

	Route::group(['prefix' => 'sistema','before' => 'auth'], function () {

        Route::get('bancos','BancosController@index')->middleware('auth');
        Route::get('bancos/{id}','BancosController@show')->middleware('auth');
        Route::post('bancos','BancosController@create')->middleware('auth');
        Route::delete('bancos/{id}','BancosController@delete')->middleware('auth');
        Route::patch('bancos/{id}','BancosController@update')->middleware('auth');

        Route::get('movimientos','MovimientosController@index')->middleware('auth');
        Route::get('movimientos/{id}','MovimientosController@show')->middleware('auth');
        Route::post('movimientos','MovimientosController@create')->middleware('auth');
        Route::delete('movimientos/{id}','MovimientosController@delete')->middleware('auth');
        Route::patch('movimientos/{id}','MovimientosController@update')->middleware('auth');
        Route::patch('movimientos/{id}/precio_puro','MovimientosController@precio_puro')->middleware('auth');
        Route::get('reporte/movimientos','MovimientosController@reporte')->middleware('auth');

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

        Route::get('negocios/{id}/movimientos/','NegociosController@movimientos')->middleware('auth');
        Route::get('negocios/{id}/abonos','NegociosController@abonos')->middleware('auth');
        Route::get('negocios/{id}/cierres','NegociosController@cierres')->middleware('auth');

        Route::group(array('prefix' => 'negocios/{id}/'), function() {
            Route::get('movimientos','NegociosController@movimientos')->middleware('auth');
        });


        Route::get('abonos','AbonosController@index')->middleware('auth');
        Route::get('abonos/{id}','AbonosController@show')->middleware('auth');
        Route::post('abonos','AbonosController@create')->middleware('auth');
        Route::delete('abonos/{id}','AbonosController@delete')->middleware('auth');
        Route::patch('abonos/{id}','AbonosController@update')->middleware('auth');

        Route::get('tipos','TiposController@index')->middleware('auth');
        Route::get('tipos/{id}','TiposController@show')->middleware('auth');
        Route::post('tipos','TiposController@create')->middleware('auth');
        Route::delete('tipos/{id}','TiposController@delete')->middleware('auth');
        Route::patch('tipos/{id}','TiposController@update')->middleware('auth');

        Route::get('usuarios','UsuariosController@index')->middleware('auth');
        Route::get('usuarios/{id}','UsuariosController@show')->middleware('auth');
        Route::get('usuarios/{id}/permisos','UsuariosController@permisos')->middleware('auth');
        Route::post('usuarios','UsuariosController@create')->middleware('auth');

        Route::patch('usuarios/{id}','UsuariosController@update')->middleware('auth');
        Route::patch('usuarios/{id}','UsuariosController@update')->middleware('auth');

        Route::patch('usuarios/{id}/password','UsuariosController@password')->middleware('auth');
        Route::patch('usuarios/{id}/permisos','UsuariosController@agregarPermiso')->middleware('auth');
        Route::delete('usuarios/{id}','UsuariosController@delete')->middleware('auth');
        Route::delete('usuarios/{id}/permisos/{permiso}','UsuariosController@quitarPermiso')->middleware('auth');

        Route::get('cierres','CierresController@index')->middleware('auth');
        Route::get('cierres/{id}','CierresController@show')->middleware('auth');
        Route::post('cierres','CierresController@create')->middleware('auth');
        Route::delete('cierres/{id}','CierresController@delete')->middleware('auth');
        Route::patch('cierres/{id}','CierresController@update')->middleware('auth');
        Route::get('cierres/{id}/imprimir','CierresController@imprimir')->middleware('auth');

    });
});
*/

Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::group(array('middleware' => 'auth'), function() {
    Route::resource('bancos', 'BancosController');
    Route::resource('cuentas', 'CuentasController');
    Route::resource('negocios', 'NegociosController');
    Route::resource("users","UserController");  

    Route::get('movimientos/reportes',
            ['as' => 'movimientos.reporte', 
                'uses' => 'MovimientoController@reporte_edit']);

    Route::post('movimientos/reportes',
            ['as' => 'movimientos.reporte', 
            'uses' => 'MovimientoController@reporte']);

    Route::resource("movimientos","MovimientoController");

    Route::patch('users/{id}/password','UserController@password')->middleware('auth');
    Route::get('users/{id}/password',
            ['as' => 'users.password', 
                'uses' => 'UserController@password_edit'])->middleware('auth');

    Route::patch('users/{id}/permisos/{permiso_id}',
        ['as' => 'users.permisos_add', 
        'uses' => 'UserController@agregarPermiso'])->middleware('auth');

    Route::delete('users/{id}/permisos/{permiso_id}',
         ['as' => 'users.permisos_rm', 
        'uses' => 'UserController@quitarPermiso'])->middleware('auth');
});
