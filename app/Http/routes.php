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

Route::auth();
Route::get('/', 'HomeController@index')->name('root');

Route::group(array('middleware' => 'auth'), function() {

    Route::get('/password', 'HomeController@password_edit')->name('password');
    Route::post('/password', 'HomeController@password')->name('password');


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
    Route::resource("abonos","AbonosController");

    Route::get('gastos/reportes',
            ['as' => 'gastos.reporte', 
                'uses' => 'GastosController@reporte_edit']);

    Route::post('gastos/reportes',
            ['as' => 'gastos.reporte', 
            'uses' => 'GastosController@reporte']);
    Route::resource("gastos","GastosController");


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
