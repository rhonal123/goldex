<?php

use Illuminate\Database\Seeder;

use App\Tipo;
class TipoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
  */
  public function run()
  {
    Tipo::create([
      'tipo' => 'Peso Argentino',
      'simbolo'=>'peso',
      'tasa' => 3750,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Peso Boliviano',
      'simbolo'=>'peso', 
      'tasa' => 22,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Real Brasileño',
      'simbolo'=>'reales',
      'tasa' => 124,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Dólar Canadiense', 
      'simbolo'=>'dolares',
      'tasa' => 200,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Peso Chileno',    
      'simbolo'=>'peso', 
      'tasa' => 450,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Peso Colombiano',
      'simbolo'=>'peso',
      'tasa' => 20,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Sol Perúano',
      'simbolo'=>'sol',
      'tasa' => 44,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Peso Uruguayo',   
      'simbolo'=>'peso',  
      'tasa' => 33,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'Bolivar Venezuela', 
      'simbolo'=>'Bolivares',
      'tasa' => 1,
      'divisa' => true
    ]);

    Tipo::create([
      'tipo' => 'ORO ',   
      'simbolo'=>'gramos',  
      'tasa' => 1000,
      'divisa' => false
    ]);

    Tipo::create([
      'tipo' => 'Plata', 
      'simbolo'=>'gramos',
      'tasa' => 500,
      'divisa' => false
    ]);




  }
}




