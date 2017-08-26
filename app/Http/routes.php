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


    Route::get('reportegeneral',
            ['as' => 'reportegeneral', 
                'uses' => 'HomeController@reporte_edit']);

    Route::post('reportegeneral',
            ['as' => 'reportegeneral', 
            'uses' => 'HomeController@reporte']);


    Route::get('reportecuenta',
            ['as' => 'reportecuenta', 
                'uses' => 'HomeController@reporte_cuenta_edit']);
    
    Route::post('reportecuenta',
            ['as' => 'reportecuenta', 
            'uses' => 'HomeController@reporte_cuenta']);




    Route::resource('bancos', 'BancosController');
    Route::resource('cuentas', 'CuentasController');

    Route::get('cuentas/{id}/transferencias',
          ['as' => 'cuentas.transferencias', 
        'uses' => 'CuentasController@transferencias']);

    Route::get('cuentas/{id}/gastos',
          ['as' => 'cuentas.gastos', 
        'uses' => 'CuentasController@gastos']);
    
    Route::get('cuentas/{id}/abonos',
          ['as' => 'cuentas.abonos', 
        'uses' => 'CuentasController@abonos']);
     

    Route::resource('negocios', 'NegociosController');
    Route::resource("users","UserController");  

    Route::get('movimientos/reportes',
            ['as' => 'movimientos.reporte', 
                'uses' => 'MovimientoController@reporte_edit']);
    Route::post('movimientos/reportes',
            ['as' => 'movimientos.reporte', 
            'uses' => 'MovimientoController@reporte']);
    Route::resource("movimientos","MovimientoController");


    Route::get('abonos/reportes',
            ['as' => 'abonos.reporte', 
                'uses' => 'AbonosController@reporte_edit']);
    Route::post('abonos/reportes',
            ['as' => 'abonos.reporte', 
            'uses' => 'AbonosController@reporte']);
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
        ['as' => 'users.permisos_change', 
        'uses' => 'UserController@permisos'])->middleware('auth');


    Route::get('users/{id}/permisos/',
        ['as' => 'users.permisos', 
        'uses' => 'UserController@permisos_edit'])->middleware('auth');


/*
    Route::delete('users/{id}/permisos/{permiso_id}',
         ['as' => 'users.permisos_rm', 
        'uses' => 'UserController@quitarPermiso'])->middleware('auth');
*/

});


