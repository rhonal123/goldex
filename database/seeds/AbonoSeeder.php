<?php

use Illuminate\Database\Seeder;
use App\Abono;

class AbonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/*
			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '24/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 250,
   			'cantidad' => 2800]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '27/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 12000,
   			'cantidad' => 2400]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '29/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 84000,
   			'cantidad' => 2400]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '20/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 370850,
   			'cantidad' => 2400]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '08/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 1200,
   			'cantidad' => 87800]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '12/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 1200,
   			'cantidad' => 1020]);

			Abono::crearAbono([
				'negocio_id' => 2,
		  	'afecta_banco' => false,
   			'fecha' => '14/12/2016',
   			'tipo_id' =>  2, 
   			'tasa' => 1200,
   			'cantidad' => 8400]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 102800,
   			'cuenta_id'=> 1,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 92800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 82800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 72800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 62800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 52800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 42800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 32800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

			Abono::crearAbono([	
		  	'negocio_id' => 11,
		  	'afecta_banco' => true,
   			'fecha' => '24/01/2016',
   			'tipo_id' =>  8, 
   			'cantidad' => 12800,
   			'cuenta_id'=> 01,
   			'referencia' =>'2248AKDOEM',
   			'tasa' => 350,
    	]);

/****************************************************************/
/*

      Abono::crearAbono([
        'id' => 100001,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '24/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 250,
        'cantidad' => 2800]);

      Abono::crearAbono([
        'id' => 100002,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '27/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 12000,
        'cantidad' => 2400]);

      Abono::crearAbono([
        'id' => 100003,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '29/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 84000,
        'cantidad' => 2400]);

      Abono::crearAbono([
        'id' => 100004,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '20/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 370850,
        'cantidad' => 2400]);

      Abono::crearAbono([
        'id' => 100005,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '08/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 1200,
        'cantidad' => 87800]);

      Abono::crearAbono([
        'id' => 100006,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '12/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 1200,
        'cantidad' => 1020]);

      Abono::crearAbono([
        'id' => 100007,
        'negocio_id' => 2,
        'afecta_banco' => false,
        'fecha' => '14/12/2016',
        'tipo_id' =>  2, 
        'tasa' => 1200,
        'cantidad' => 8400]);
*/


    }
}
