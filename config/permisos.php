<?php
//config('permisos')
return [

  ['codigo' => 'A01' , 'accion' => 'BancoController@show'],
  ['codigo' => 'A02' , 'accion' => 'BancoController@delete'],
  ['codigo' => 'A03' , 'accion' => 'BancoController@update'],
  ['codigo' => 'A04' , 'accion' => 'BancoController@create'],
  ['codigo' => 'A05' , 'accion' => 'BancoController@index'],

  ['codigo' => 'B01' , 'accion' => 'CuentasController@show'],
  ['codigo' => 'B02' , 'accion' => 'CuentasController@delete'],
  ['codigo' => 'B03' , 'accion' => 'CuentasController@update'],
  ['codigo' => 'B04' , 'accion' => 'CuentasController@create'],
  ['codigo' => 'B05' , 'accion' => 'CuentasController@index'],

  ['codigo' => 'C01' , 'accion' => 'NegociosController@show'],
  ['codigo' => 'C02' , 'accion' => 'NegociosController@delete'],
  ['codigo' => 'C03' , 'accion' => 'NegociosController@update'],
  ['codigo' => 'C04' , 'accion' => 'NegociosController@create'],
  ['codigo' => 'C05' , 'accion' => 'NegociosController@index'],

  ['codigo' => 'D01' , 'accion' => 'CierresController@show'],
  ['codigo' => 'D02' , 'accion' => 'CierresController@delete'],
  ['codigo' => 'D03' , 'accion' => 'CierresController@update'],
  ['codigo' => 'D04' , 'accion' => 'CierresController@create'],
  ['codigo' => 'D05' , 'accion' => 'CierresController@index'],
  ['codigo' => 'D06' , 'accion' => 'CierresController@imprimir'],


  ['codigo' => 'E01' , 'accion' => 'UsuariosController@show'],
  ['codigo' => 'E02' , 'accion' => 'UsuariosController@delete'],
  ['codigo' => 'E03' , 'accion' => 'UsuariosController@update'],
  ['codigo' => 'E04' , 'accion' => 'UsuariosController@create'],
  ['codigo' => 'E05' , 'accion' => 'UsuariosController@index'],
  ['codigo' => 'E06' , 'accion' => 'UsuariosController@password'],
  ['codigo' => 'E07' , 'accion' => 'UsuariosController@permisos'],

  ['codigo' => 'F01' , 'accion' => 'AbonosController@show'],
  ['codigo' => 'F02' , 'accion' => 'AbonosController@delete'],
  ['codigo' => 'F03' , 'accion' => 'AbonosController@update'],
  ['codigo' => 'F04' , 'accion' => 'AbonosController@create'],
  ['codigo' => 'F05' , 'accion' => 'AbonosController@index'],

  ['codigo' => 'G01' , 'accion' => 'TiposController@show'],
  ['codigo' => 'G02' , 'accion' => 'TiposController@delete'],
  ['codigo' => 'G03' , 'accion' => 'TiposController@update'],
  ['codigo' => 'G04' , 'accion' => 'TiposController@create'],
  ['codigo' => 'G05' , 'accion' => 'TiposController@index'],

  ['codigo' => 'I01' , 'accion' => 'MovimientosController@show'],
  ['codigo' => 'I02' , 'accion' => 'MovimientosController@delete'],
  ['codigo' => 'I03' , 'accion' => 'MovimientosController@update'],
  ['codigo' => 'I04' , 'accion' => 'MovimientosController@create'],
  ['codigo' => 'I05' , 'accion' => 'MovimientosController@index'],
  ['codigo' => 'I06' , 'accion' => 'MovimientosController@precio_puro'],
  ['codigo' => 'I07' , 'accion' => 'MovimientosController@reporte'],

];
