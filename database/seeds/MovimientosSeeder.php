<?php

use Illuminate\Database\Seeder;

use App\Movimiento; 
use Carbon\Carbon;


class MovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



	Movimiento::crearMovimiento([
		'monto'       => 1836532,
		'comision'    => 95,
		'fecha'       =>  '29/6/2017',
		'descripcion' => 'esta es una descripcion 1',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR32341ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8627182,
		'comision'    => 37,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 2',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 1,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR32342ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.763008243759906,
		'comision'    => 0,
		'fecha'       =>  '4/8/2017',
		'descripcion' => 'esta es una descripcion 3',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR32343ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 29.114406538460706,
		'comision'    => 0,
		'fecha'       =>  '3/5/2017',
		'descripcion' => 'esta es una descripcion 4',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR32344ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 855732,
		'comision'    => 25,
		'fecha'       =>  '13/12/2017',
		'descripcion' => 'esta es una descripcion 5',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR32345ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6430374,
		'comision'    => 2,
		'fecha'       =>  '6/4/2017',
		'descripcion' => 'esta es una descripcion 6',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR32346ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3399809,
		'comision'    => 38,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 7',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR32347ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9075323,
		'comision'    => 56,
		'fecha'       =>  '28/10/2017',
		'descripcion' => 'esta es una descripcion 8',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR32348ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8565342,
		'comision'    => 67,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 9',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR32349ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 15.991519811956623,
		'comision'    => 0,
		'fecha'       =>  '11/11/2017',
		'descripcion' => 'esta es una descripcion 10',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR323410ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5368873,
		'comision'    => 69,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 11',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR323411ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7020574,
		'comision'    => 69,
		'fecha'       =>  '17/8/2017',
		'descripcion' => 'esta es una descripcion 12',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR323412ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.52981097008979,
		'comision'    => 0,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 13',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR323413ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 84353,
		'comision'    => 76,
		'fecha'       =>  '17/3/2017',
		'descripcion' => 'esta es una descripcion 14',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 4,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR323414ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2661195,
		'comision'    => 74,
		'fecha'       =>  '12/7/2017',
		'descripcion' => 'esta es una descripcion 15',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 20,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR323415ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8981307,
		'comision'    => 16,
		'fecha'       =>  '27/10/2017',
		'descripcion' => 'esta es una descripcion 16',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR323416ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 73.27397430447132,
		'comision'    => 0,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 17',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR323417ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2688613,
		'comision'    => 76,
		'fecha'       =>  '1/8/2017',
		'descripcion' => 'esta es una descripcion 18',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR323418ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1336851,
		'comision'    => 49,
		'fecha'       =>  '3/6/2017',
		'descripcion' => 'esta es una descripcion 19',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR323419ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6428444,
		'comision'    => 54,
		'fecha'       =>  '25/1/2017',
		'descripcion' => 'esta es una descripcion 20',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR323420ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6491738,
		'comision'    => 81,
		'fecha'       =>  '2/5/2017',
		'descripcion' => 'esta es una descripcion 21',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR323421ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.57284085349606,
		'comision'    => 0,
		'fecha'       =>  '13/4/2017',
		'descripcion' => 'esta es una descripcion 22',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 70,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR323422ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 50.34428508034551,
		'comision'    => 0,
		'fecha'       =>  '11/11/2017',
		'descripcion' => 'esta es una descripcion 23',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR323423ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2344045,
		'comision'    => 92,
		'fecha'       =>  '11/5/2017',
		'descripcion' => 'esta es una descripcion 24',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR323424ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.448224659846094,
		'comision'    => 0,
		'fecha'       =>  '8/7/2017',
		'descripcion' => 'esta es una descripcion 25',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR323425ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9952227,
		'comision'    => 4,
		'fecha'       =>  '8/11/2017',
		'descripcion' => 'esta es una descripcion 26',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR323426ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 74.73928717606377,
		'comision'    => 0,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 27',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR323427ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3946798,
		'comision'    => 93,
		'fecha'       =>  '30/10/2017',
		'descripcion' => 'esta es una descripcion 28',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 85,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR323428ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 52.444561381527166,
		'comision'    => 0,
		'fecha'       =>  '23/2/2017',
		'descripcion' => 'esta es una descripcion 29',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR323429ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 14271,
		'comision'    => 75,
		'fecha'       =>  '19/8/2017',
		'descripcion' => 'esta es una descripcion 30',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR323430ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2950104,
		'comision'    => 56,
		'fecha'       =>  '2/11/2017',
		'descripcion' => 'esta es una descripcion 31',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR323431ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5860758,
		'comision'    => 20,
		'fecha'       =>  '9/5/2017',
		'descripcion' => 'esta es una descripcion 32',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR323432ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9325239,
		'comision'    => 7,
		'fecha'       =>  '13/1/2017',
		'descripcion' => 'esta es una descripcion 33',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR323433ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5593797,
		'comision'    => 72,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 34',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 85,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR323434ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 61.585882878063046,
		'comision'    => 0,
		'fecha'       =>  '30/3/2017',
		'descripcion' => 'esta es una descripcion 35',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 31,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR323435ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5837881,
		'comision'    => 76,
		'fecha'       =>  '9/10/2017',
		'descripcion' => 'esta es una descripcion 36',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 52,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR323436ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.720719325969599,
		'comision'    => 0,
		'fecha'       =>  '12/2/2017',
		'descripcion' => 'esta es una descripcion 37',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 26,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR323437ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 39.682273985528425,
		'comision'    => 0,
		'fecha'       =>  '1/11/2017',
		'descripcion' => 'esta es una descripcion 38',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 24,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR323438ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8370745,
		'comision'    => 99,
		'fecha'       =>  '1/3/2017',
		'descripcion' => 'esta es una descripcion 39',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR323439ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5949610,
		'comision'    => 36,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 40',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR323440ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2648783,
		'comision'    => 22,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 41',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR323441ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8141638,
		'comision'    => 46,
		'fecha'       =>  '2/12/2017',
		'descripcion' => 'esta es una descripcion 42',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR323442ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.718970333024153,
		'comision'    => 0,
		'fecha'       =>  '21/12/2017',
		'descripcion' => 'esta es una descripcion 43',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 48,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR323443ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5000980,
		'comision'    => 85,
		'fecha'       =>  '17/5/2017',
		'descripcion' => 'esta es una descripcion 44',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR323444ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2402161,
		'comision'    => 49,
		'fecha'       =>  '4/3/2017',
		'descripcion' => 'esta es una descripcion 45',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR323445ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6375050,
		'comision'    => 77,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 46',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR323446ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.68465284025032,
		'comision'    => 0,
		'fecha'       =>  '8/5/2017',
		'descripcion' => 'esta es una descripcion 47',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 86,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR323447ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2442443,
		'comision'    => 82,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 48',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR323448ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 72.16470569787192,
		'comision'    => 0,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 49',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR323449ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6158210,
		'comision'    => 82,
		'fecha'       =>  '6/5/2017',
		'descripcion' => 'esta es una descripcion 50',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR323450ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9773782,
		'comision'    => 11,
		'fecha'       =>  '10/5/2017',
		'descripcion' => 'esta es una descripcion 51',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR323451ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 33.65559935984407,
		'comision'    => 0,
		'fecha'       =>  '17/11/2017',
		'descripcion' => 'esta es una descripcion 52',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 70,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR323452ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5576798,
		'comision'    => 67,
		'fecha'       =>  '12/10/2017',
		'descripcion' => 'esta es una descripcion 53',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 74,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR323453ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.1059625145221,
		'comision'    => 0,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 54',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR323454ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8294219,
		'comision'    => 8,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 55',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 18,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR323455ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 3.7373161288276364,
		'comision'    => 0,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 56',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 49,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR323456ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 71.25162223647058,
		'comision'    => 0,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 57',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR323457ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7719118,
		'comision'    => 84,
		'fecha'       =>  '4/3/2017',
		'descripcion' => 'esta es una descripcion 58',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR323458ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1079911,
		'comision'    => 5,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 59',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR323459ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3786825,
		'comision'    => 87,
		'fecha'       =>  '13/1/2017',
		'descripcion' => 'esta es una descripcion 60',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 51,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR323460ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 72.65735887373103,
		'comision'    => 0,
		'fecha'       =>  '19/7/2017',
		'descripcion' => 'esta es una descripcion 61',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 79,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR323461ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1971603,
		'comision'    => 97,
		'fecha'       =>  '21/9/2017',
		'descripcion' => 'esta es una descripcion 62',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 47,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR323462ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 79.45732295589296,
		'comision'    => 0,
		'fecha'       =>  '21/11/2017',
		'descripcion' => 'esta es una descripcion 63',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 10,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR323463ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3202384,
		'comision'    => 55,
		'fecha'       =>  '2/6/2017',
		'descripcion' => 'esta es una descripcion 64',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 17,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR323464ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8230696,
		'comision'    => 30,
		'fecha'       =>  '1/10/2017',
		'descripcion' => 'esta es una descripcion 65',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR323465ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1545086,
		'comision'    => 32,
		'fecha'       =>  '21/11/2017',
		'descripcion' => 'esta es una descripcion 66',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR323466ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7875548,
		'comision'    => 55,
		'fecha'       =>  '24/2/2017',
		'descripcion' => 'esta es una descripcion 67',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 51,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR323467ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 43.469478313130786,
		'comision'    => 0,
		'fecha'       =>  '19/8/2017',
		'descripcion' => 'esta es una descripcion 68',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR323468ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1237581,
		'comision'    => 25,
		'fecha'       =>  '14/3/2017',
		'descripcion' => 'esta es una descripcion 69',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 71,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR323469ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6118780,
		'comision'    => 15,
		'fecha'       =>  '13/7/2017',
		'descripcion' => 'esta es una descripcion 70',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR323470ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.167263264838034,
		'comision'    => 0,
		'fecha'       =>  '17/11/2017',
		'descripcion' => 'esta es una descripcion 71',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 78,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR323471ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 37.78761370353526,
		'comision'    => 0,
		'fecha'       =>  '11/2/2017',
		'descripcion' => 'esta es una descripcion 72',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 10,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR323472ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.227080109394313,
		'comision'    => 0,
		'fecha'       =>  '12/9/2017',
		'descripcion' => 'esta es una descripcion 73',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR323473ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.820825514300306,
		'comision'    => 0,
		'fecha'       =>  '16/10/2017',
		'descripcion' => 'esta es una descripcion 74',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR323474ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4764064,
		'comision'    => 28,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 75',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR323475ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 518600,
		'comision'    => 74,
		'fecha'       =>  '6/6/2017',
		'descripcion' => 'esta es una descripcion 76',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 19,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR323476ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 1.478761296757651,
		'comision'    => 0,
		'fecha'       =>  '18/10/2017',
		'descripcion' => 'esta es una descripcion 77',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR323477ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.27486350840294,
		'comision'    => 0,
		'fecha'       =>  '19/12/2017',
		'descripcion' => 'esta es una descripcion 78',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR323478ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.765292551353724,
		'comision'    => 0,
		'fecha'       =>  '15/6/2017',
		'descripcion' => 'esta es una descripcion 79',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR323479ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7058380,
		'comision'    => 55,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 80',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR323480ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3867807,
		'comision'    => 3,
		'fecha'       =>  '17/10/2017',
		'descripcion' => 'esta es una descripcion 81',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR323481ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4045087,
		'comision'    => 89,
		'fecha'       =>  '7/7/2017',
		'descripcion' => 'esta es una descripcion 82',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 62,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR323482ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1217384,
		'comision'    => 6,
		'fecha'       =>  '18/3/2017',
		'descripcion' => 'esta es una descripcion 83',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR323483ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2249561,
		'comision'    => 62,
		'fecha'       =>  '27/9/2017',
		'descripcion' => 'esta es una descripcion 84',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR323484ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3759737,
		'comision'    => 45,
		'fecha'       =>  '19/10/2017',
		'descripcion' => 'esta es una descripcion 85',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 9,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR323485ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.975605325970818,
		'comision'    => 0,
		'fecha'       =>  '9/2/2017',
		'descripcion' => 'esta es una descripcion 86',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 29,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR323486ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.18188026719464,
		'comision'    => 0,
		'fecha'       =>  '4/10/2017',
		'descripcion' => 'esta es una descripcion 87',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR323487ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9744268,
		'comision'    => 33,
		'fecha'       =>  '9/8/2017',
		'descripcion' => 'esta es una descripcion 88',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 7,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR323488ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3548324,
		'comision'    => 47,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 89',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 46,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR323489ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9524580,
		'comision'    => 54,
		'fecha'       =>  '14/6/2017',
		'descripcion' => 'esta es una descripcion 90',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR323490ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 24.43122167607229,
		'comision'    => 0,
		'fecha'       =>  '11/3/2017',
		'descripcion' => 'esta es una descripcion 91',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 54,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR323491ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.442136938126499,
		'comision'    => 0,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 92',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 8,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR323492ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9036398,
		'comision'    => 27,
		'fecha'       =>  '5/12/2017',
		'descripcion' => 'esta es una descripcion 93',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR323493ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.10160493536056,
		'comision'    => 0,
		'fecha'       =>  '11/7/2017',
		'descripcion' => 'esta es una descripcion 94',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR323494ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.990755500475494,
		'comision'    => 0,
		'fecha'       =>  '21/11/2017',
		'descripcion' => 'esta es una descripcion 95',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 86,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR323495ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7057390,
		'comision'    => 92,
		'fecha'       =>  '15/1/2017',
		'descripcion' => 'esta es una descripcion 96',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 57,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR323496ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4998945,
		'comision'    => 81,
		'fecha'       =>  '1/9/2017',
		'descripcion' => 'esta es una descripcion 97',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR323497ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.7776867114397,
		'comision'    => 0,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 98',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 22,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR323498ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.319730550526984,
		'comision'    => 0,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 99',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR323499ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 567828,
		'comision'    => 17,
		'fecha'       =>  '29/6/2017',
		'descripcion' => 'esta es una descripcion 100',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 78,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234100ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5873019,
		'comision'    => 33,
		'fecha'       =>  '23/8/2017',
		'descripcion' => 'esta es una descripcion 101',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 69,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234101ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9476202,
		'comision'    => 58,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 102',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234102ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2711772,
		'comision'    => 25,
		'fecha'       =>  '29/6/2017',
		'descripcion' => 'esta es una descripcion 103',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234103ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4861869,
		'comision'    => 71,
		'fecha'       =>  '14/12/2017',
		'descripcion' => 'esta es una descripcion 104',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 9,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234104ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1557026,
		'comision'    => 4,
		'fecha'       =>  '8/9/2017',
		'descripcion' => 'esta es una descripcion 105',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234105ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8955220,
		'comision'    => 4,
		'fecha'       =>  '29/6/2017',
		'descripcion' => 'esta es una descripcion 106',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234106ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.06878433946176,
		'comision'    => 0,
		'fecha'       =>  '1/9/2017',
		'descripcion' => 'esta es una descripcion 107',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 38,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234107ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2528641,
		'comision'    => 50,
		'fecha'       =>  '2/10/2017',
		'descripcion' => 'esta es una descripcion 108',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234108ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.35195025513353,
		'comision'    => 0,
		'fecha'       =>  '13/7/2017',
		'descripcion' => 'esta es una descripcion 109',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234109ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2005995,
		'comision'    => 7,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 110',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 30,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234110ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6297352,
		'comision'    => 40,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 111',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234111ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2554158,
		'comision'    => 90,
		'fecha'       =>  '27/4/2017',
		'descripcion' => 'esta es una descripcion 112',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234112ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1460956,
		'comision'    => 28,
		'fecha'       =>  '2/12/2017',
		'descripcion' => 'esta es una descripcion 113',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234113ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5309164,
		'comision'    => 62,
		'fecha'       =>  '29/12/2017',
		'descripcion' => 'esta es una descripcion 114',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234114ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6529667,
		'comision'    => 13,
		'fecha'       =>  '4/7/2017',
		'descripcion' => 'esta es una descripcion 115',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 59,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234115ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8617642,
		'comision'    => 52,
		'fecha'       =>  '22/3/2017',
		'descripcion' => 'esta es una descripcion 116',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234116ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6403494,
		'comision'    => 40,
		'fecha'       =>  '26/9/2017',
		'descripcion' => 'esta es una descripcion 117',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234117ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1792740,
		'comision'    => 53,
		'fecha'       =>  '9/10/2017',
		'descripcion' => 'esta es una descripcion 118',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234118ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.944736536231005,
		'comision'    => 0,
		'fecha'       =>  '25/8/2017',
		'descripcion' => 'esta es una descripcion 119',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234119ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8351285,
		'comision'    => 76,
		'fecha'       =>  '26/2/2017',
		'descripcion' => 'esta es una descripcion 120',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234120ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.877332352883755,
		'comision'    => 0,
		'fecha'       =>  '11/11/2017',
		'descripcion' => 'esta es una descripcion 121',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 60,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234121ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4392645,
		'comision'    => 12,
		'fecha'       =>  '29/12/2017',
		'descripcion' => 'esta es una descripcion 122',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234122ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.420594327699355,
		'comision'    => 0,
		'fecha'       =>  '12/5/2017',
		'descripcion' => 'esta es una descripcion 123',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234123ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 72.83165989057201,
		'comision'    => 0,
		'fecha'       =>  '21/4/2017',
		'descripcion' => 'esta es una descripcion 124',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234124ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9645824,
		'comision'    => 90,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 125',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234125ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7615566,
		'comision'    => 86,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 126',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 20,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234126ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 21.456298839642393,
		'comision'    => 0,
		'fecha'       =>  '26/4/2017',
		'descripcion' => 'esta es una descripcion 127',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 27,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234127ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.02885486822784,
		'comision'    => 0,
		'fecha'       =>  '21/9/2017',
		'descripcion' => 'esta es una descripcion 128',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 50,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234128ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7198065,
		'comision'    => 66,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 129',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234129ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.1112317446487,
		'comision'    => 0,
		'fecha'       =>  '27/4/2017',
		'descripcion' => 'esta es una descripcion 130',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234130ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3464348,
		'comision'    => 89,
		'fecha'       =>  '7/2/2017',
		'descripcion' => 'esta es una descripcion 131',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 4,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234131ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 39.393428454368134,
		'comision'    => 0,
		'fecha'       =>  '16/2/2017',
		'descripcion' => 'esta es una descripcion 132',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234132ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8703187,
		'comision'    => 52,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 133',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234133ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2929794,
		'comision'    => 45,
		'fecha'       =>  '23/1/2017',
		'descripcion' => 'esta es una descripcion 134',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234134ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9884221,
		'comision'    => 93,
		'fecha'       =>  '28/9/2017',
		'descripcion' => 'esta es una descripcion 135',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 59,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234135ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2005585,
		'comision'    => 46,
		'fecha'       =>  '4/10/2017',
		'descripcion' => 'esta es una descripcion 136',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234136ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8103472,
		'comision'    => 32,
		'fecha'       =>  '2/1/2017',
		'descripcion' => 'esta es una descripcion 137',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234137ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9629209,
		'comision'    => 40,
		'fecha'       =>  '6/12/2017',
		'descripcion' => 'esta es una descripcion 138',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234138ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.32102657284725,
		'comision'    => 0,
		'fecha'       =>  '16/12/2017',
		'descripcion' => 'esta es una descripcion 139',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 79,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234139ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.83642912352396,
		'comision'    => 0,
		'fecha'       =>  '15/8/2017',
		'descripcion' => 'esta es una descripcion 140',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234140ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 19.45419943705257,
		'comision'    => 0,
		'fecha'       =>  '11/6/2017',
		'descripcion' => 'esta es una descripcion 141',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234141ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8415941,
		'comision'    => 40,
		'fecha'       =>  '22/6/2017',
		'descripcion' => 'esta es una descripcion 142',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234142ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2716811,
		'comision'    => 65,
		'fecha'       =>  '3/6/2017',
		'descripcion' => 'esta es una descripcion 143',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 25,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234143ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3444477,
		'comision'    => 12,
		'fecha'       =>  '12/11/2017',
		'descripcion' => 'esta es una descripcion 144',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234144ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8012105,
		'comision'    => 47,
		'fecha'       =>  '20/6/2017',
		'descripcion' => 'esta es una descripcion 145',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 59,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234145ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2584667,
		'comision'    => 74,
		'fecha'       =>  '13/1/2017',
		'descripcion' => 'esta es una descripcion 146',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 17,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234146ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 18.75654713829029,
		'comision'    => 0,
		'fecha'       =>  '19/8/2017',
		'descripcion' => 'esta es una descripcion 147',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 12,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234147ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 42226,
		'comision'    => 67,
		'fecha'       =>  '11/3/2017',
		'descripcion' => 'esta es una descripcion 148',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234148ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.60840976361573,
		'comision'    => 0,
		'fecha'       =>  '24/1/2017',
		'descripcion' => 'esta es una descripcion 149',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 35,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234149ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 87.09570461915784,
		'comision'    => 0,
		'fecha'       =>  '29/7/2017',
		'descripcion' => 'esta es una descripcion 150',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234150ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 471015,
		'comision'    => 100,
		'fecha'       =>  '15/6/2017',
		'descripcion' => 'esta es una descripcion 151',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 30,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234151ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 63.0479844237403,
		'comision'    => 0,
		'fecha'       =>  '15/6/2017',
		'descripcion' => 'esta es una descripcion 152',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 79,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234152ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.701914414002225,
		'comision'    => 0,
		'fecha'       =>  '17/10/2017',
		'descripcion' => 'esta es una descripcion 153',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 2,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234153ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2801154,
		'comision'    => 44,
		'fecha'       =>  '17/8/2017',
		'descripcion' => 'esta es una descripcion 154',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 78,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234154ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.27486427767967,
		'comision'    => 0,
		'fecha'       =>  '8/4/2017',
		'descripcion' => 'esta es una descripcion 155',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 24,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234155ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8989015,
		'comision'    => 1,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 156',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 12,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234156ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.89736299441643,
		'comision'    => 0,
		'fecha'       =>  '22/9/2017',
		'descripcion' => 'esta es una descripcion 157',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234157ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.333189382681052,
		'comision'    => 0,
		'fecha'       =>  '6/10/2017',
		'descripcion' => 'esta es una descripcion 158',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 35,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234158ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5570130,
		'comision'    => 24,
		'fecha'       =>  '8/10/2017',
		'descripcion' => 'esta es una descripcion 159',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234159ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 15.493757440403922,
		'comision'    => 0,
		'fecha'       =>  '3/1/2017',
		'descripcion' => 'esta es una descripcion 160',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234160ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1841675,
		'comision'    => 14,
		'fecha'       =>  '5/2/2017',
		'descripcion' => 'esta es una descripcion 161',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234161ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.17928368542255,
		'comision'    => 0,
		'fecha'       =>  '9/6/2017',
		'descripcion' => 'esta es una descripcion 162',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 10,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234162ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 547032,
		'comision'    => 18,
		'fecha'       =>  '23/2/2017',
		'descripcion' => 'esta es una descripcion 163',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234163ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.60574508016653,
		'comision'    => 0,
		'fecha'       =>  '19/2/2017',
		'descripcion' => 'esta es una descripcion 164',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234164ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1278331,
		'comision'    => 19,
		'fecha'       =>  '3/4/2017',
		'descripcion' => 'esta es una descripcion 165',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234165ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8077095,
		'comision'    => 78,
		'fecha'       =>  '17/3/2017',
		'descripcion' => 'esta es una descripcion 166',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234166ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4160103,
		'comision'    => 2,
		'fecha'       =>  '28/8/2017',
		'descripcion' => 'esta es una descripcion 167',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234167ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.935524518582912,
		'comision'    => 0,
		'fecha'       =>  '9/12/2017',
		'descripcion' => 'esta es una descripcion 168',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234168ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.7664876747655,
		'comision'    => 0,
		'fecha'       =>  '5/3/2017',
		'descripcion' => 'esta es una descripcion 169',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 10,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234169ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4144313,
		'comision'    => 13,
		'fecha'       =>  '30/1/2017',
		'descripcion' => 'esta es una descripcion 170',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234170ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.968910057928575,
		'comision'    => 0,
		'fecha'       =>  '17/2/2017',
		'descripcion' => 'esta es una descripcion 171',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234171ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 24.72758439946513,
		'comision'    => 0,
		'fecha'       =>  '27/4/2017',
		'descripcion' => 'esta es una descripcion 172',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234172ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 23.72916751090475,
		'comision'    => 0,
		'fecha'       =>  '22/12/2017',
		'descripcion' => 'esta es una descripcion 173',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 84,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234173ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2602673,
		'comision'    => 95,
		'fecha'       =>  '25/4/2017',
		'descripcion' => 'esta es una descripcion 174',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 88,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234174ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 2.4614273006070437,
		'comision'    => 0,
		'fecha'       =>  '15/6/2017',
		'descripcion' => 'esta es una descripcion 175',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234175ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 47.26926805303524,
		'comision'    => 0,
		'fecha'       =>  '19/8/2017',
		'descripcion' => 'esta es una descripcion 176',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 4,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234176ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 90.74299690302205,
		'comision'    => 0,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 177',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234177ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.02364178220082,
		'comision'    => 0,
		'fecha'       =>  '27/2/2017',
		'descripcion' => 'esta es una descripcion 178',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 76,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234178ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.26574012996818,
		'comision'    => 0,
		'fecha'       =>  '27/5/2017',
		'descripcion' => 'esta es una descripcion 179',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 26,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234179ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2579151,
		'comision'    => 96,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 180',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234180ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6309385,
		'comision'    => 24,
		'fecha'       =>  '17/11/2017',
		'descripcion' => 'esta es una descripcion 181',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 88,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234181ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7870196,
		'comision'    => 68,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 182',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234182ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.262543278068356,
		'comision'    => 0,
		'fecha'       =>  '4/3/2017',
		'descripcion' => 'esta es una descripcion 183',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 12,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234183ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6705434,
		'comision'    => 20,
		'fecha'       =>  '3/12/2017',
		'descripcion' => 'esta es una descripcion 184',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234184ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 20.702849688960526,
		'comision'    => 0,
		'fecha'       =>  '13/4/2017',
		'descripcion' => 'esta es una descripcion 185',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 4,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234185ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.87121061539918,
		'comision'    => 0,
		'fecha'       =>  '28/4/2017',
		'descripcion' => 'esta es una descripcion 186',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234186ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8858387,
		'comision'    => 36,
		'fecha'       =>  '20/2/2017',
		'descripcion' => 'esta es una descripcion 187',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 29,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234187ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 38.2471888423404,
		'comision'    => 0,
		'fecha'       =>  '22/12/2017',
		'descripcion' => 'esta es una descripcion 188',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234188ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 47.946625772840655,
		'comision'    => 0,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 189',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234189ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9018037,
		'comision'    => 83,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 190',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234190ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5803784,
		'comision'    => 3,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 191',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234191ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8411250,
		'comision'    => 14,
		'fecha'       =>  '13/7/2017',
		'descripcion' => 'esta es una descripcion 192',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234192ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.5403153431055525,
		'comision'    => 0,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 193',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234193ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 33.99730431324241,
		'comision'    => 0,
		'fecha'       =>  '17/5/2017',
		'descripcion' => 'esta es una descripcion 194',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234194ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.25641333143773,
		'comision'    => 0,
		'fecha'       =>  '18/6/2017',
		'descripcion' => 'esta es una descripcion 195',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234195ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.821382373446188,
		'comision'    => 0,
		'fecha'       =>  '6/4/2017',
		'descripcion' => 'esta es una descripcion 196',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 65,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234196ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2329227,
		'comision'    => 71,
		'fecha'       =>  '12/9/2017',
		'descripcion' => 'esta es una descripcion 197',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234197ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 9.459188609724894,
		'comision'    => 0,
		'fecha'       =>  '17/3/2017',
		'descripcion' => 'esta es una descripcion 198',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 85,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234198ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4848666,
		'comision'    => 70,
		'fecha'       =>  '6/6/2017',
		'descripcion' => 'esta es una descripcion 199',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 50,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234199ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 24.522203014288255,
		'comision'    => 0,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 200',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234200ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1102336,
		'comision'    => 39,
		'fecha'       =>  '6/1/2017',
		'descripcion' => 'esta es una descripcion 201',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 4,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234201ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6432685,
		'comision'    => 91,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 202',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 28,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234202ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2313997,
		'comision'    => 56,
		'fecha'       =>  '7/10/2017',
		'descripcion' => 'esta es una descripcion 203',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 74,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234203ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4114221,
		'comision'    => 44,
		'fecha'       =>  '14/11/2017',
		'descripcion' => 'esta es una descripcion 204',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 85,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234204ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 56.263212311950575,
		'comision'    => 0,
		'fecha'       =>  '24/5/2017',
		'descripcion' => 'esta es una descripcion 205',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234205ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1670918,
		'comision'    => 87,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 206',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234206ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 6.09891774421152,
		'comision'    => 0,
		'fecha'       =>  '26/10/2017',
		'descripcion' => 'esta es una descripcion 207',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 52,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234207ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9530134,
		'comision'    => 88,
		'fecha'       =>  '25/1/2017',
		'descripcion' => 'esta es una descripcion 208',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 81,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234208ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.047742344511452,
		'comision'    => 0,
		'fecha'       =>  '2/4/2017',
		'descripcion' => 'esta es una descripcion 209',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 52,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234209ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1028328,
		'comision'    => 96,
		'fecha'       =>  '29/1/2017',
		'descripcion' => 'esta es una descripcion 210',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234210ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.01783827171825,
		'comision'    => 0,
		'fecha'       =>  '10/11/2017',
		'descripcion' => 'esta es una descripcion 211',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 45,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234211ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2669983,
		'comision'    => 79,
		'fecha'       =>  '6/3/2017',
		'descripcion' => 'esta es una descripcion 212',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234212ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.12864703066215,
		'comision'    => 0,
		'fecha'       =>  '26/7/2017',
		'descripcion' => 'esta es una descripcion 213',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234213ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.12514375507269,
		'comision'    => 0,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 214',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 38,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234214ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.347219633677476,
		'comision'    => 0,
		'fecha'       =>  '16/1/2017',
		'descripcion' => 'esta es una descripcion 215',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 10,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234215ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 62.95855069319505,
		'comision'    => 0,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 216',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 13,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234216ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 18.449091021299793,
		'comision'    => 0,
		'fecha'       =>  '17/6/2017',
		'descripcion' => 'esta es una descripcion 217',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 31,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234217ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1438066,
		'comision'    => 78,
		'fecha'       =>  '12/2/2017',
		'descripcion' => 'esta es una descripcion 218',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 7,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234218ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3374931,
		'comision'    => 36,
		'fecha'       =>  '6/3/2017',
		'descripcion' => 'esta es una descripcion 219',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234219ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.643951151908055,
		'comision'    => 0,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 220',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 71,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234220ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2146493,
		'comision'    => 8,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 221',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 47,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234221ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 62.3097914482146,
		'comision'    => 0,
		'fecha'       =>  '28/10/2017',
		'descripcion' => 'esta es una descripcion 222',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234222ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1250137,
		'comision'    => 58,
		'fecha'       =>  '19/4/2017',
		'descripcion' => 'esta es una descripcion 223',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234223ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.502463290719238,
		'comision'    => 0,
		'fecha'       =>  '6/7/2017',
		'descripcion' => 'esta es una descripcion 224',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234224ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 79.07803797841441,
		'comision'    => 0,
		'fecha'       =>  '18/6/2017',
		'descripcion' => 'esta es una descripcion 225',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234225ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 70.6777060583265,
		'comision'    => 0,
		'fecha'       =>  '22/12/2017',
		'descripcion' => 'esta es una descripcion 226',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 16,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234226ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 83.15451284859175,
		'comision'    => 0,
		'fecha'       =>  '9/7/2017',
		'descripcion' => 'esta es una descripcion 227',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234227ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8732912,
		'comision'    => 52,
		'fecha'       =>  '15/7/2017',
		'descripcion' => 'esta es una descripcion 228',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234228ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8914718,
		'comision'    => 1,
		'fecha'       =>  '5/3/2017',
		'descripcion' => 'esta es una descripcion 229',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 76,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234229ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.628568173748214,
		'comision'    => 0,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 230',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234230ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 373968,
		'comision'    => 42,
		'fecha'       =>  '10/11/2017',
		'descripcion' => 'esta es una descripcion 231',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234231ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5036166,
		'comision'    => 55,
		'fecha'       =>  '16/8/2017',
		'descripcion' => 'esta es una descripcion 232',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234232ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4164049,
		'comision'    => 89,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 233',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 53,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234233ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.39806486911279,
		'comision'    => 0,
		'fecha'       =>  '4/6/2017',
		'descripcion' => 'esta es una descripcion 234',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 65,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234234ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2768718,
		'comision'    => 84,
		'fecha'       =>  '27/5/2017',
		'descripcion' => 'esta es una descripcion 235',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234235ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7155690,
		'comision'    => 36,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 236',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234236ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 333415,
		'comision'    => 70,
		'fecha'       =>  '30/10/2017',
		'descripcion' => 'esta es una descripcion 237',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234237ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 36.753568443289126,
		'comision'    => 0,
		'fecha'       =>  '12/7/2017',
		'descripcion' => 'esta es una descripcion 238',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234238ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 83.21012349185118,
		'comision'    => 0,
		'fecha'       =>  '17/9/2017',
		'descripcion' => 'esta es una descripcion 239',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 33,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234239ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 38.29321425334871,
		'comision'    => 0,
		'fecha'       =>  '30/8/2017',
		'descripcion' => 'esta es una descripcion 240',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 75,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234240ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7229325,
		'comision'    => 56,
		'fecha'       =>  '9/9/2017',
		'descripcion' => 'esta es una descripcion 241',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 65,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234241ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.26388841156547,
		'comision'    => 0,
		'fecha'       =>  '5/2/2017',
		'descripcion' => 'esta es una descripcion 242',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234242ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2961639,
		'comision'    => 44,
		'fecha'       =>  '30/12/2017',
		'descripcion' => 'esta es una descripcion 243',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234243ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 26.912568549441264,
		'comision'    => 0,
		'fecha'       =>  '21/4/2017',
		'descripcion' => 'esta es una descripcion 244',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 76,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234244ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4954728,
		'comision'    => 29,
		'fecha'       =>  '26/1/2017',
		'descripcion' => 'esta es una descripcion 245',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 27,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234245ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 98.02460112022406,
		'comision'    => 0,
		'fecha'       =>  '11/6/2017',
		'descripcion' => 'esta es una descripcion 246',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234246ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 26.70712456759274,
		'comision'    => 0,
		'fecha'       =>  '6/2/2017',
		'descripcion' => 'esta es una descripcion 247',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 72,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234247ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3593637,
		'comision'    => 96,
		'fecha'       =>  '22/1/2017',
		'descripcion' => 'esta es una descripcion 248',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234248ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5330711,
		'comision'    => 41,
		'fecha'       =>  '14/5/2017',
		'descripcion' => 'esta es una descripcion 249',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234249ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6750045,
		'comision'    => 57,
		'fecha'       =>  '6/11/2017',
		'descripcion' => 'esta es una descripcion 250',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234250ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.94401839555482,
		'comision'    => 0,
		'fecha'       =>  '6/11/2017',
		'descripcion' => 'esta es una descripcion 251',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234251ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9827111,
		'comision'    => 9,
		'fecha'       =>  '12/7/2017',
		'descripcion' => 'esta es una descripcion 252',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234252ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7851697,
		'comision'    => 37,
		'fecha'       =>  '7/12/2017',
		'descripcion' => 'esta es una descripcion 253',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234253ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.1731778911972,
		'comision'    => 0,
		'fecha'       =>  '1/6/2017',
		'descripcion' => 'esta es una descripcion 254',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234254ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.54461829070141,
		'comision'    => 0,
		'fecha'       =>  '26/7/2017',
		'descripcion' => 'esta es una descripcion 255',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234255ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 710094,
		'comision'    => 44,
		'fecha'       =>  '23/6/2017',
		'descripcion' => 'esta es una descripcion 256',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234256ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7536608,
		'comision'    => 19,
		'fecha'       =>  '10/6/2017',
		'descripcion' => 'esta es una descripcion 257',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234257ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.407261406432326,
		'comision'    => 0,
		'fecha'       =>  '7/4/2017',
		'descripcion' => 'esta es una descripcion 258',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 61,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234258ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.37249948096794,
		'comision'    => 0,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 259',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234259ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7221957,
		'comision'    => 42,
		'fecha'       =>  '11/5/2017',
		'descripcion' => 'esta es una descripcion 260',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 47,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234260ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.597707739414115,
		'comision'    => 0,
		'fecha'       =>  '24/1/2017',
		'descripcion' => 'esta es una descripcion 261',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234261ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6990038,
		'comision'    => 12,
		'fecha'       =>  '5/12/2017',
		'descripcion' => 'esta es una descripcion 262',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234262ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5547966,
		'comision'    => 74,
		'fecha'       =>  '11/12/2017',
		'descripcion' => 'esta es una descripcion 263',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 22,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234263ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4017339,
		'comision'    => 82,
		'fecha'       =>  '24/1/2017',
		'descripcion' => 'esta es una descripcion 264',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234264ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 80.67557244670967,
		'comision'    => 0,
		'fecha'       =>  '24/4/2017',
		'descripcion' => 'esta es una descripcion 265',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234265ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9863491,
		'comision'    => 35,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 266',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 79,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234266ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.85196679998483,
		'comision'    => 0,
		'fecha'       =>  '17/9/2017',
		'descripcion' => 'esta es una descripcion 267',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234267ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.48125280096268,
		'comision'    => 0,
		'fecha'       =>  '10/4/2017',
		'descripcion' => 'esta es una descripcion 268',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234268ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3180461,
		'comision'    => 62,
		'fecha'       =>  '4/11/2017',
		'descripcion' => 'esta es una descripcion 269',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234269ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 87.6632175888414,
		'comision'    => 0,
		'fecha'       =>  '4/1/2017',
		'descripcion' => 'esta es una descripcion 270',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234270ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 36.71005817426104,
		'comision'    => 0,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 271',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234271ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5169815,
		'comision'    => 8,
		'fecha'       =>  '24/5/2017',
		'descripcion' => 'esta es una descripcion 272',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 8,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234272ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.3033352663055,
		'comision'    => 0,
		'fecha'       =>  '5/7/2017',
		'descripcion' => 'esta es una descripcion 273',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 26,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234273ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2688783,
		'comision'    => 95,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 274',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234274ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 2.87613651293515,
		'comision'    => 0,
		'fecha'       =>  '13/1/2017',
		'descripcion' => 'esta es una descripcion 275',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 84,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234275ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4129086,
		'comision'    => 67,
		'fecha'       =>  '28/4/2017',
		'descripcion' => 'esta es una descripcion 276',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234276ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1744034,
		'comision'    => 76,
		'fecha'       =>  '1/11/2017',
		'descripcion' => 'esta es una descripcion 277',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234277ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4924627,
		'comision'    => 97,
		'fecha'       =>  '27/9/2017',
		'descripcion' => 'esta es una descripcion 278',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 58,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234278ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.620407734756627,
		'comision'    => 0,
		'fecha'       =>  '29/12/2017',
		'descripcion' => 'esta es una descripcion 279',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234279ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5134752,
		'comision'    => 90,
		'fecha'       =>  '5/12/2017',
		'descripcion' => 'esta es una descripcion 280',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234280ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7363712,
		'comision'    => 74,
		'fecha'       =>  '18/11/2017',
		'descripcion' => 'esta es una descripcion 281',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 25,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234281ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 557309,
		'comision'    => 5,
		'fecha'       =>  '8/4/2017',
		'descripcion' => 'esta es una descripcion 282',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234282ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.232007519941035,
		'comision'    => 0,
		'fecha'       =>  '25/1/2017',
		'descripcion' => 'esta es una descripcion 283',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 22,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234283ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3997510,
		'comision'    => 96,
		'fecha'       =>  '4/7/2017',
		'descripcion' => 'esta es una descripcion 284',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234284ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8865102,
		'comision'    => 70,
		'fecha'       =>  '17/11/2017',
		'descripcion' => 'esta es una descripcion 285',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234285ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 14.184142873270256,
		'comision'    => 0,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 286',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234286ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 54.83652984979597,
		'comision'    => 0,
		'fecha'       =>  '12/7/2017',
		'descripcion' => 'esta es una descripcion 287',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234287ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.4921852901557,
		'comision'    => 0,
		'fecha'       =>  '1/6/2017',
		'descripcion' => 'esta es una descripcion 288',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234288ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.25425049321161,
		'comision'    => 0,
		'fecha'       =>  '29/3/2017',
		'descripcion' => 'esta es una descripcion 289',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 89,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234289ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4872090,
		'comision'    => 4,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 290',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234290ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.13767237861978,
		'comision'    => 0,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 291',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234291ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 20.383889307509325,
		'comision'    => 0,
		'fecha'       =>  '14/6/2017',
		'descripcion' => 'esta es una descripcion 292',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234292ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 6.634663394942511,
		'comision'    => 0,
		'fecha'       =>  '9/3/2017',
		'descripcion' => 'esta es una descripcion 293',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234293ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 11.752403460269473,
		'comision'    => 0,
		'fecha'       =>  '20/3/2017',
		'descripcion' => 'esta es una descripcion 294',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 49,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234294ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1073836,
		'comision'    => 13,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 295',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234295ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 26.953022828388324,
		'comision'    => 0,
		'fecha'       =>  '6/7/2017',
		'descripcion' => 'esta es una descripcion 296',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234296ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.84570270556407,
		'comision'    => 0,
		'fecha'       =>  '13/7/2017',
		'descripcion' => 'esta es una descripcion 297',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234297ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2986797,
		'comision'    => 8,
		'fecha'       =>  '17/3/2017',
		'descripcion' => 'esta es una descripcion 298',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 4,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234298ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.63896162923915,
		'comision'    => 0,
		'fecha'       =>  '2/6/2017',
		'descripcion' => 'esta es una descripcion 299',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234299ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6590889,
		'comision'    => 68,
		'fecha'       =>  '17/12/2017',
		'descripcion' => 'esta es una descripcion 300',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234300ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2871428,
		'comision'    => 57,
		'fecha'       =>  '27/2/2017',
		'descripcion' => 'esta es una descripcion 301',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234301ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.54588472106678,
		'comision'    => 0,
		'fecha'       =>  '16/2/2017',
		'descripcion' => 'esta es una descripcion 302',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 17,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234302ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 659667,
		'comision'    => 84,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 303',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234303ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.376146685276,
		'comision'    => 0,
		'fecha'       =>  '22/12/2017',
		'descripcion' => 'esta es una descripcion 304',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234304ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7315928,
		'comision'    => 91,
		'fecha'       =>  '1/11/2017',
		'descripcion' => 'esta es una descripcion 305',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 12,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234305ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3178271,
		'comision'    => 99,
		'fecha'       =>  '22/8/2017',
		'descripcion' => 'esta es una descripcion 306',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 67,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234306ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5487029,
		'comision'    => 59,
		'fecha'       =>  '19/3/2017',
		'descripcion' => 'esta es una descripcion 307',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 9,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234307ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.77921872439573,
		'comision'    => 0,
		'fecha'       =>  '22/5/2017',
		'descripcion' => 'esta es una descripcion 308',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234308ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9454433,
		'comision'    => 76,
		'fecha'       =>  '20/7/2017',
		'descripcion' => 'esta es una descripcion 309',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234309ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.601774354748436,
		'comision'    => 0,
		'fecha'       =>  '11/10/2017',
		'descripcion' => 'esta es una descripcion 310',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234310ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 65.07700308671717,
		'comision'    => 0,
		'fecha'       =>  '1/10/2017',
		'descripcion' => 'esta es una descripcion 311',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234311ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.16793169160124,
		'comision'    => 0,
		'fecha'       =>  '4/4/2017',
		'descripcion' => 'esta es una descripcion 312',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234312ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.587364689850652,
		'comision'    => 0,
		'fecha'       =>  '3/1/2017',
		'descripcion' => 'esta es una descripcion 313',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234313ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4641134,
		'comision'    => 70,
		'fecha'       =>  '29/3/2017',
		'descripcion' => 'esta es una descripcion 314',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234314ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.4990118860374,
		'comision'    => 0,
		'fecha'       =>  '12/12/2017',
		'descripcion' => 'esta es una descripcion 315',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234315ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9860716,
		'comision'    => 76,
		'fecha'       =>  '16/4/2017',
		'descripcion' => 'esta es una descripcion 316',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234316ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2435313,
		'comision'    => 49,
		'fecha'       =>  '6/12/2017',
		'descripcion' => 'esta es una descripcion 317',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234317ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 50.46536808510098,
		'comision'    => 0,
		'fecha'       =>  '26/1/2017',
		'descripcion' => 'esta es una descripcion 318',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234318ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 52.01312557812439,
		'comision'    => 0,
		'fecha'       =>  '24/11/2017',
		'descripcion' => 'esta es una descripcion 319',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234319ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.60061826564891,
		'comision'    => 0,
		'fecha'       =>  '9/4/2017',
		'descripcion' => 'esta es una descripcion 320',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 85,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234320ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 80.6261106293059,
		'comision'    => 0,
		'fecha'       =>  '12/2/2017',
		'descripcion' => 'esta es una descripcion 321',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234321ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 23.51346963223683,
		'comision'    => 0,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 322',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234322ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4276431,
		'comision'    => 95,
		'fecha'       =>  '16/6/2017',
		'descripcion' => 'esta es una descripcion 323',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 4,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234323ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6075522,
		'comision'    => 63,
		'fecha'       =>  '6/11/2017',
		'descripcion' => 'esta es una descripcion 324',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234324ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 94.06581340913553,
		'comision'    => 0,
		'fecha'       =>  '1/1/2017',
		'descripcion' => 'esta es una descripcion 325',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234325ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6126987,
		'comision'    => 43,
		'fecha'       =>  '21/5/2017',
		'descripcion' => 'esta es una descripcion 326',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234326ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6811237,
		'comision'    => 77,
		'fecha'       =>  '23/11/2017',
		'descripcion' => 'esta es una descripcion 327',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 8,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234327ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 29.613678912001596,
		'comision'    => 0,
		'fecha'       =>  '2/4/2017',
		'descripcion' => 'esta es una descripcion 328',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234328ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.44093824229303,
		'comision'    => 0,
		'fecha'       =>  '16/4/2017',
		'descripcion' => 'esta es una descripcion 329',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234329ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.16758762212599,
		'comision'    => 0,
		'fecha'       =>  '7/2/2017',
		'descripcion' => 'esta es una descripcion 330',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 48,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234330ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5471213,
		'comision'    => 92,
		'fecha'       =>  '6/12/2017',
		'descripcion' => 'esta es una descripcion 331',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234331ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.640524114818898,
		'comision'    => 0,
		'fecha'       =>  '8/3/2017',
		'descripcion' => 'esta es una descripcion 332',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234332ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2569856,
		'comision'    => 48,
		'fecha'       =>  '15/2/2017',
		'descripcion' => 'esta es una descripcion 333',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 76,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234333ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 20.128219022337337,
		'comision'    => 0,
		'fecha'       =>  '16/2/2017',
		'descripcion' => 'esta es una descripcion 334',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 71,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234334ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 66.53399026776383,
		'comision'    => 0,
		'fecha'       =>  '27/10/2017',
		'descripcion' => 'esta es una descripcion 335',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234335ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2324298,
		'comision'    => 61,
		'fecha'       =>  '14/4/2017',
		'descripcion' => 'esta es una descripcion 336',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234336ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9709969,
		'comision'    => 81,
		'fecha'       =>  '21/1/2017',
		'descripcion' => 'esta es una descripcion 337',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 8,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234337ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2190175,
		'comision'    => 85,
		'fecha'       =>  '22/4/2017',
		'descripcion' => 'esta es una descripcion 338',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234338ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2895219,
		'comision'    => 62,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 339',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 43,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234339ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3488439,
		'comision'    => 77,
		'fecha'       =>  '15/11/2017',
		'descripcion' => 'esta es una descripcion 340',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 58,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234340ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.95354724759906,
		'comision'    => 0,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 341',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234341ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3245503,
		'comision'    => 58,
		'fecha'       =>  '17/12/2017',
		'descripcion' => 'esta es una descripcion 342',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 28,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234342ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8496734,
		'comision'    => 26,
		'fecha'       =>  '15/9/2017',
		'descripcion' => 'esta es una descripcion 343',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234343ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 66.84468831221575,
		'comision'    => 0,
		'fecha'       =>  '9/4/2017',
		'descripcion' => 'esta es una descripcion 344',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 39,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234344ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9674549,
		'comision'    => 29,
		'fecha'       =>  '13/11/2017',
		'descripcion' => 'esta es una descripcion 345',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234345ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.81324731310703,
		'comision'    => 0,
		'fecha'       =>  '5/11/2017',
		'descripcion' => 'esta es una descripcion 346',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234346ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 19.853209296312475,
		'comision'    => 0,
		'fecha'       =>  '7/12/2017',
		'descripcion' => 'esta es una descripcion 347',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234347ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6081781,
		'comision'    => 64,
		'fecha'       =>  '29/4/2017',
		'descripcion' => 'esta es una descripcion 348',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234348ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.194090916871,
		'comision'    => 0,
		'fecha'       =>  '17/4/2017',
		'descripcion' => 'esta es una descripcion 349',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234349ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 38.10158350296797,
		'comision'    => 0,
		'fecha'       =>  '29/5/2017',
		'descripcion' => 'esta es una descripcion 350',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234350ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 90.65436836275607,
		'comision'    => 0,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 351',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234351ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6448354,
		'comision'    => 80,
		'fecha'       =>  '16/5/2017',
		'descripcion' => 'esta es una descripcion 352',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234352ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 11.893745750713341,
		'comision'    => 0,
		'fecha'       =>  '22/1/2017',
		'descripcion' => 'esta es una descripcion 353',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234353ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2488554,
		'comision'    => 83,
		'fecha'       =>  '3/4/2017',
		'descripcion' => 'esta es una descripcion 354',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 27,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234354ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.85748964407841,
		'comision'    => 0,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 355',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234355ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.12238403777292,
		'comision'    => 0,
		'fecha'       =>  '22/9/2017',
		'descripcion' => 'esta es una descripcion 356',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234356ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.729328960318194,
		'comision'    => 0,
		'fecha'       =>  '8/8/2017',
		'descripcion' => 'esta es una descripcion 357',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 14,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234357ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8444462,
		'comision'    => 54,
		'fecha'       =>  '29/9/2017',
		'descripcion' => 'esta es una descripcion 358',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234358ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3415116,
		'comision'    => 9,
		'fecha'       =>  '26/6/2017',
		'descripcion' => 'esta es una descripcion 359',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234359ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 65.82452751643488,
		'comision'    => 0,
		'fecha'       =>  '5/9/2017',
		'descripcion' => 'esta es una descripcion 360',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234360ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 52.699792412433005,
		'comision'    => 0,
		'fecha'       =>  '6/7/2017',
		'descripcion' => 'esta es una descripcion 361',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 50,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234361ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1717678,
		'comision'    => 21,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 362',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234362ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.218491749779055,
		'comision'    => 0,
		'fecha'       =>  '1/11/2017',
		'descripcion' => 'esta es una descripcion 363',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234363ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 669441,
		'comision'    => 49,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 364',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234364ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.82260740318508,
		'comision'    => 0,
		'fecha'       =>  '28/11/2017',
		'descripcion' => 'esta es una descripcion 365',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234365ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.178572082841164,
		'comision'    => 0,
		'fecha'       =>  '26/10/2017',
		'descripcion' => 'esta es una descripcion 366',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234366ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.08291446132724,
		'comision'    => 0,
		'fecha'       =>  '14/6/2017',
		'descripcion' => 'esta es una descripcion 367',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 12,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234367ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.88203619673438,
		'comision'    => 0,
		'fecha'       =>  '15/5/2017',
		'descripcion' => 'esta es una descripcion 368',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 4,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234368ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8434641,
		'comision'    => 66,
		'fecha'       =>  '23/12/2017',
		'descripcion' => 'esta es una descripcion 369',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234369ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3555853,
		'comision'    => 39,
		'fecha'       =>  '4/6/2017',
		'descripcion' => 'esta es una descripcion 370',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 50,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234370ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.58958350442575,
		'comision'    => 0,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 371',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234371ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 290646,
		'comision'    => 20,
		'fecha'       =>  '2/1/2017',
		'descripcion' => 'esta es una descripcion 372',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234372ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 3.7602476956464446,
		'comision'    => 0,
		'fecha'       =>  '8/2/2017',
		'descripcion' => 'esta es una descripcion 373',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 33,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234373ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9996983,
		'comision'    => 34,
		'fecha'       =>  '29/9/2017',
		'descripcion' => 'esta es una descripcion 374',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234374ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7597919,
		'comision'    => 18,
		'fecha'       =>  '28/4/2017',
		'descripcion' => 'esta es una descripcion 375',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 49,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234375ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 60.00902309803317,
		'comision'    => 0,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 376',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234376ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1832718,
		'comision'    => 8,
		'fecha'       =>  '12/12/2017',
		'descripcion' => 'esta es una descripcion 377',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234377ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7720681,
		'comision'    => 39,
		'fecha'       =>  '21/7/2017',
		'descripcion' => 'esta es una descripcion 378',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234378ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 44.19933295776996,
		'comision'    => 0,
		'fecha'       =>  '7/8/2017',
		'descripcion' => 'esta es una descripcion 379',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 45,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234379ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 408016,
		'comision'    => 28,
		'fecha'       =>  '23/10/2017',
		'descripcion' => 'esta es una descripcion 380',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234380ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 86.3344595752009,
		'comision'    => 0,
		'fecha'       =>  '19/4/2017',
		'descripcion' => 'esta es una descripcion 381',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234381ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 471903,
		'comision'    => 78,
		'fecha'       =>  '26/4/2017',
		'descripcion' => 'esta es una descripcion 382',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234382ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7225329,
		'comision'    => 82,
		'fecha'       =>  '13/3/2017',
		'descripcion' => 'esta es una descripcion 383',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234383ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1505195,
		'comision'    => 29,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 384',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 14,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234384ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4430408,
		'comision'    => 10,
		'fecha'       =>  '17/10/2017',
		'descripcion' => 'esta es una descripcion 385',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234385ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3493006,
		'comision'    => 44,
		'fecha'       =>  '4/4/2017',
		'descripcion' => 'esta es una descripcion 386',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 50,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234386ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 56.92027646507265,
		'comision'    => 0,
		'fecha'       =>  '9/1/2017',
		'descripcion' => 'esta es una descripcion 387',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 57,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234387ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 37.89996954367926,
		'comision'    => 0,
		'fecha'       =>  '21/4/2017',
		'descripcion' => 'esta es una descripcion 388',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 70,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234388ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.01460175039367,
		'comision'    => 0,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 389',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234389ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.864240703791967,
		'comision'    => 0,
		'fecha'       =>  '10/5/2017',
		'descripcion' => 'esta es una descripcion 390',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234390ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.17527176903904,
		'comision'    => 0,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 391',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234391ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4804147,
		'comision'    => 84,
		'fecha'       =>  '10/9/2017',
		'descripcion' => 'esta es una descripcion 392',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234392ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.019226118862036,
		'comision'    => 0,
		'fecha'       =>  '23/7/2017',
		'descripcion' => 'esta es una descripcion 393',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234393ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 35.06997387807245,
		'comision'    => 0,
		'fecha'       =>  '27/10/2017',
		'descripcion' => 'esta es una descripcion 394',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234394ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.01003440030827,
		'comision'    => 0,
		'fecha'       =>  '25/1/2017',
		'descripcion' => 'esta es una descripcion 395',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 8,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234395ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 563344,
		'comision'    => 39,
		'fecha'       =>  '29/7/2017',
		'descripcion' => 'esta es una descripcion 396',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 53,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234396ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6662591,
		'comision'    => 3,
		'fecha'       =>  '12/10/2017',
		'descripcion' => 'esta es una descripcion 397',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234397ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 96.89010954852824,
		'comision'    => 0,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 398',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234398ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4946631,
		'comision'    => 21,
		'fecha'       =>  '11/2/2017',
		'descripcion' => 'esta es una descripcion 399',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234399ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2808299,
		'comision'    => 66,
		'fecha'       =>  '27/12/2017',
		'descripcion' => 'esta es una descripcion 400',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234400ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1438816,
		'comision'    => 40,
		'fecha'       =>  '12/3/2017',
		'descripcion' => 'esta es una descripcion 401',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234401ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 70.84957348015936,
		'comision'    => 0,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 402',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 22,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234402ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8573447,
		'comision'    => 36,
		'fecha'       =>  '30/4/2017',
		'descripcion' => 'esta es una descripcion 403',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234403ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6884369,
		'comision'    => 47,
		'fecha'       =>  '11/10/2017',
		'descripcion' => 'esta es una descripcion 404',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234404ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9052425,
		'comision'    => 32,
		'fecha'       =>  '14/7/2017',
		'descripcion' => 'esta es una descripcion 405',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 49,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234405ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.96748403483807,
		'comision'    => 0,
		'fecha'       =>  '19/3/2017',
		'descripcion' => 'esta es una descripcion 406',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234406ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.59608108703343,
		'comision'    => 0,
		'fecha'       =>  '28/6/2017',
		'descripcion' => 'esta es una descripcion 407',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234407ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 54.85766387278153,
		'comision'    => 0,
		'fecha'       =>  '16/1/2017',
		'descripcion' => 'esta es una descripcion 408',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 15,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234408ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3799730,
		'comision'    => 56,
		'fecha'       =>  '19/10/2017',
		'descripcion' => 'esta es una descripcion 409',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 24,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234409ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3590567,
		'comision'    => 31,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 410',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234410ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 518884,
		'comision'    => 48,
		'fecha'       =>  '12/12/2017',
		'descripcion' => 'esta es una descripcion 411',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234411ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 96.5388045343007,
		'comision'    => 0,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 412',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234412ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 179236,
		'comision'    => 87,
		'fecha'       =>  '28/8/2017',
		'descripcion' => 'esta es una descripcion 413',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 78,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234413ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3277158,
		'comision'    => 81,
		'fecha'       =>  '28/2/2017',
		'descripcion' => 'esta es una descripcion 414',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 69,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234414ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.591712939153936,
		'comision'    => 0,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 415',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234415ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 89.1019612536759,
		'comision'    => 0,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 416',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 51,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234416ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5312059,
		'comision'    => 80,
		'fecha'       =>  '5/2/2017',
		'descripcion' => 'esta es una descripcion 417',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234417ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2297907,
		'comision'    => 16,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 418',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234418ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2190840,
		'comision'    => 43,
		'fecha'       =>  '6/2/2017',
		'descripcion' => 'esta es una descripcion 419',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 11,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234419ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8650556,
		'comision'    => 3,
		'fecha'       =>  '17/3/2017',
		'descripcion' => 'esta es una descripcion 420',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 65,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234420ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.43661298997793,
		'comision'    => 0,
		'fecha'       =>  '11/5/2017',
		'descripcion' => 'esta es una descripcion 421',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 17,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234421ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 981367,
		'comision'    => 12,
		'fecha'       =>  '15/3/2017',
		'descripcion' => 'esta es una descripcion 422',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234422ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 98.46534721029434,
		'comision'    => 0,
		'fecha'       =>  '22/9/2017',
		'descripcion' => 'esta es una descripcion 423',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234423ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 86.92491979487451,
		'comision'    => 0,
		'fecha'       =>  '7/9/2017',
		'descripcion' => 'esta es una descripcion 424',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234424ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 54.57778091677762,
		'comision'    => 0,
		'fecha'       =>  '13/3/2017',
		'descripcion' => 'esta es una descripcion 425',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 84,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234425ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6313661,
		'comision'    => 80,
		'fecha'       =>  '24/8/2017',
		'descripcion' => 'esta es una descripcion 426',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234426ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 79.22983705004842,
		'comision'    => 0,
		'fecha'       =>  '19/3/2017',
		'descripcion' => 'esta es una descripcion 427',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234427ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 2.799225749280241,
		'comision'    => 0,
		'fecha'       =>  '1/1/2017',
		'descripcion' => 'esta es una descripcion 428',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234428ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 84.08956140070369,
		'comision'    => 0,
		'fecha'       =>  '21/12/2017',
		'descripcion' => 'esta es una descripcion 429',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234429ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.410918754450087,
		'comision'    => 0,
		'fecha'       =>  '26/1/2017',
		'descripcion' => 'esta es una descripcion 430',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234430ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9029041,
		'comision'    => 91,
		'fecha'       =>  '15/6/2017',
		'descripcion' => 'esta es una descripcion 431',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234431ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8197488,
		'comision'    => 75,
		'fecha'       =>  '14/12/2017',
		'descripcion' => 'esta es una descripcion 432',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234432ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9862395,
		'comision'    => 14,
		'fecha'       =>  '17/4/2017',
		'descripcion' => 'esta es una descripcion 433',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 1,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234433ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 98.76403980328158,
		'comision'    => 0,
		'fecha'       =>  '24/2/2017',
		'descripcion' => 'esta es una descripcion 434',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234434ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.870967658643853,
		'comision'    => 0,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 435',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234435ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1567626,
		'comision'    => 56,
		'fecha'       =>  '19/6/2017',
		'descripcion' => 'esta es una descripcion 436',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234436ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 57.57786904101066,
		'comision'    => 0,
		'fecha'       =>  '2/1/2017',
		'descripcion' => 'esta es una descripcion 437',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234437ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2194400,
		'comision'    => 82,
		'fecha'       =>  '18/6/2017',
		'descripcion' => 'esta es una descripcion 438',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 29,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234438ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.18884620153873,
		'comision'    => 0,
		'fecha'       =>  '25/10/2017',
		'descripcion' => 'esta es una descripcion 439',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 24,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234439ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8344653,
		'comision'    => 86,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 440',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 7,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234440ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 4.287454115136386,
		'comision'    => 0,
		'fecha'       =>  '5/11/2017',
		'descripcion' => 'esta es una descripcion 441',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 38,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234441ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 36.15826218021268,
		'comision'    => 0,
		'fecha'       =>  '19/11/2017',
		'descripcion' => 'esta es una descripcion 442',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234442ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5445872,
		'comision'    => 85,
		'fecha'       =>  '4/8/2017',
		'descripcion' => 'esta es una descripcion 443',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234443ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.682932873101436,
		'comision'    => 0,
		'fecha'       =>  '18/5/2017',
		'descripcion' => 'esta es una descripcion 444',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234444ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 70.10724806878328,
		'comision'    => 0,
		'fecha'       =>  '24/1/2017',
		'descripcion' => 'esta es una descripcion 445',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 72,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234445ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5447129,
		'comision'    => 96,
		'fecha'       =>  '24/8/2017',
		'descripcion' => 'esta es una descripcion 446',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234446ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2680255,
		'comision'    => 46,
		'fecha'       =>  '6/8/2017',
		'descripcion' => 'esta es una descripcion 447',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234447ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 89.52178035728923,
		'comision'    => 0,
		'fecha'       =>  '8/1/2017',
		'descripcion' => 'esta es una descripcion 448',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234448ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4937950,
		'comision'    => 68,
		'fecha'       =>  '19/2/2017',
		'descripcion' => 'esta es una descripcion 449',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234449ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.35809980616081,
		'comision'    => 0,
		'fecha'       =>  '6/5/2017',
		'descripcion' => 'esta es una descripcion 450',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234450ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.36556794357875,
		'comision'    => 0,
		'fecha'       =>  '16/6/2017',
		'descripcion' => 'esta es una descripcion 451',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 49,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234451ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 60.24699097967086,
		'comision'    => 0,
		'fecha'       =>  '18/10/2017',
		'descripcion' => 'esta es una descripcion 452',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234452ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 60.0987651201534,
		'comision'    => 0,
		'fecha'       =>  '16/8/2017',
		'descripcion' => 'esta es una descripcion 453',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 5,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234453ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.28030179735317,
		'comision'    => 0,
		'fecha'       =>  '13/12/2017',
		'descripcion' => 'esta es una descripcion 454',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234454ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.63823749933329,
		'comision'    => 0,
		'fecha'       =>  '22/4/2017',
		'descripcion' => 'esta es una descripcion 455',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234455ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8321296,
		'comision'    => 36,
		'fecha'       =>  '7/11/2017',
		'descripcion' => 'esta es una descripcion 456',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 67,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234456ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1112237,
		'comision'    => 43,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 457',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234457ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.223291181248214,
		'comision'    => 0,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 458',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234458ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 39.56988042280482,
		'comision'    => 0,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 459',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234459ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3113552,
		'comision'    => 6,
		'fecha'       =>  '29/6/2017',
		'descripcion' => 'esta es una descripcion 460',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234460ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.507333334642183,
		'comision'    => 0,
		'fecha'       =>  '21/4/2017',
		'descripcion' => 'esta es una descripcion 461',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234461ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4714414,
		'comision'    => 59,
		'fecha'       =>  '30/4/2017',
		'descripcion' => 'esta es una descripcion 462',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234462ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 507451,
		'comision'    => 79,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 463',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 20,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234463ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7215911,
		'comision'    => 81,
		'fecha'       =>  '15/9/2017',
		'descripcion' => 'esta es una descripcion 464',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234464ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.11084063098254,
		'comision'    => 0,
		'fecha'       =>  '30/9/2017',
		'descripcion' => 'esta es una descripcion 465',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 48,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234465ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.49355665130597,
		'comision'    => 0,
		'fecha'       =>  '22/11/2017',
		'descripcion' => 'esta es una descripcion 466',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234466ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2402020,
		'comision'    => 93,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 467',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234467ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.52326580540795,
		'comision'    => 0,
		'fecha'       =>  '16/8/2017',
		'descripcion' => 'esta es una descripcion 468',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234468ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4003674,
		'comision'    => 75,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 469',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234469ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.102968717102234,
		'comision'    => 0,
		'fecha'       =>  '23/12/2017',
		'descripcion' => 'esta es una descripcion 470',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234470ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 37.73600507403248,
		'comision'    => 0,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 471',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 84,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234471ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 50.35714181678248,
		'comision'    => 0,
		'fecha'       =>  '2/7/2017',
		'descripcion' => 'esta es una descripcion 472',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 21,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234472ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.735527169573853,
		'comision'    => 0,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 473',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234473ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.20451624665652,
		'comision'    => 0,
		'fecha'       =>  '23/9/2017',
		'descripcion' => 'esta es una descripcion 474',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234474ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6252523,
		'comision'    => 76,
		'fecha'       =>  '17/10/2017',
		'descripcion' => 'esta es una descripcion 475',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234475ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 61.34780479846935,
		'comision'    => 0,
		'fecha'       =>  '13/8/2017',
		'descripcion' => 'esta es una descripcion 476',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 45,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234476ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5466408,
		'comision'    => 8,
		'fecha'       =>  '25/9/2017',
		'descripcion' => 'esta es una descripcion 477',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234477ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9048642,
		'comision'    => 76,
		'fecha'       =>  '10/6/2017',
		'descripcion' => 'esta es una descripcion 478',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 76,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234478ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 11.866469800400937,
		'comision'    => 0,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 479',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 51,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234479ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6384603,
		'comision'    => 72,
		'fecha'       =>  '1/5/2017',
		'descripcion' => 'esta es una descripcion 480',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234480ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 83.64222546816444,
		'comision'    => 0,
		'fecha'       =>  '18/5/2017',
		'descripcion' => 'esta es una descripcion 481',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 21,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234481ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.20775359495255,
		'comision'    => 0,
		'fecha'       =>  '9/7/2017',
		'descripcion' => 'esta es una descripcion 482',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 57,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234482ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8117931,
		'comision'    => 9,
		'fecha'       =>  '9/6/2017',
		'descripcion' => 'esta es una descripcion 483',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 46,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234483ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5617290,
		'comision'    => 83,
		'fecha'       =>  '15/7/2017',
		'descripcion' => 'esta es una descripcion 484',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234484ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4286179,
		'comision'    => 91,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 485',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234485ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.48937413593128,
		'comision'    => 0,
		'fecha'       =>  '5/4/2017',
		'descripcion' => 'esta es una descripcion 486',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 17,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234486ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1102641,
		'comision'    => 6,
		'fecha'       =>  '23/9/2017',
		'descripcion' => 'esta es una descripcion 487',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234487ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 35.81388771719658,
		'comision'    => 0,
		'fecha'       =>  '1/4/2017',
		'descripcion' => 'esta es una descripcion 488',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234488ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7015538,
		'comision'    => 82,
		'fecha'       =>  '14/7/2017',
		'descripcion' => 'esta es una descripcion 489',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 62,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234489ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 87.92956596372052,
		'comision'    => 0,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 490',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234490ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.539067044645643,
		'comision'    => 0,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 491',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234491ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 76.74088639156659,
		'comision'    => 0,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 492',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234492ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 832668,
		'comision'    => 48,
		'fecha'       =>  '27/2/2017',
		'descripcion' => 'esta es una descripcion 493',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234493ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.34254386190136,
		'comision'    => 0,
		'fecha'       =>  '18/1/2017',
		'descripcion' => 'esta es una descripcion 494',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234494ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 94.68455325838939,
		'comision'    => 0,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 495',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234495ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 60.379921276216905,
		'comision'    => 0,
		'fecha'       =>  '8/8/2017',
		'descripcion' => 'esta es una descripcion 496',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234496ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 13.103346210428224,
		'comision'    => 0,
		'fecha'       =>  '8/7/2017',
		'descripcion' => 'esta es una descripcion 497',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 61,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234497ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.84083292460236,
		'comision'    => 0,
		'fecha'       =>  '26/5/2017',
		'descripcion' => 'esta es una descripcion 498',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234498ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.594259061810488,
		'comision'    => 0,
		'fecha'       =>  '12/3/2017',
		'descripcion' => 'esta es una descripcion 499',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234499ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 80.25976410985639,
		'comision'    => 0,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 500',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234500ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6980952,
		'comision'    => 72,
		'fecha'       =>  '20/11/2017',
		'descripcion' => 'esta es una descripcion 501',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 67,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234501ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6631082,
		'comision'    => 55,
		'fecha'       =>  '11/9/2017',
		'descripcion' => 'esta es una descripcion 502',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234502ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8836901,
		'comision'    => 14,
		'fecha'       =>  '24/3/2017',
		'descripcion' => 'esta es una descripcion 503',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234503ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 36.08618016243812,
		'comision'    => 0,
		'fecha'       =>  '1/7/2017',
		'descripcion' => 'esta es una descripcion 504',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234504ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4524990,
		'comision'    => 89,
		'fecha'       =>  '26/4/2017',
		'descripcion' => 'esta es una descripcion 505',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234505ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.52117352079529,
		'comision'    => 0,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 506',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234506ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.64702468668804,
		'comision'    => 0,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 507',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 84,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234507ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9866600,
		'comision'    => 56,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 508',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 18,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234508ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.9742302706528,
		'comision'    => 0,
		'fecha'       =>  '20/8/2017',
		'descripcion' => 'esta es una descripcion 509',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 56,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234509ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.3826147392919,
		'comision'    => 0,
		'fecha'       =>  '7/12/2017',
		'descripcion' => 'esta es una descripcion 510',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234510ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7709558,
		'comision'    => 92,
		'fecha'       =>  '25/1/2017',
		'descripcion' => 'esta es una descripcion 511',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 69,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234511ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2985934,
		'comision'    => 74,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 512',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234512ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1624916,
		'comision'    => 55,
		'fecha'       =>  '4/1/2017',
		'descripcion' => 'esta es una descripcion 513',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 62,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234513ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.87574322180198,
		'comision'    => 0,
		'fecha'       =>  '23/12/2017',
		'descripcion' => 'esta es una descripcion 514',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234514ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.30711880994897,
		'comision'    => 0,
		'fecha'       =>  '23/7/2017',
		'descripcion' => 'esta es una descripcion 515',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 13,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234515ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.04827290607873,
		'comision'    => 0,
		'fecha'       =>  '30/11/2017',
		'descripcion' => 'esta es una descripcion 516',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 75,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234516ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 56.487977365102005,
		'comision'    => 0,
		'fecha'       =>  '14/7/2017',
		'descripcion' => 'esta es una descripcion 517',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234517ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 75.8772327668943,
		'comision'    => 0,
		'fecha'       =>  '17/6/2017',
		'descripcion' => 'esta es una descripcion 518',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 31,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234518ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1043948,
		'comision'    => 55,
		'fecha'       =>  '2/3/2017',
		'descripcion' => 'esta es una descripcion 519',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234519ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 43.74277672736267,
		'comision'    => 0,
		'fecha'       =>  '13/7/2017',
		'descripcion' => 'esta es una descripcion 520',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234520ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3016903,
		'comision'    => 41,
		'fecha'       =>  '5/7/2017',
		'descripcion' => 'esta es una descripcion 521',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 71,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234521ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5140177,
		'comision'    => 68,
		'fecha'       =>  '14/5/2017',
		'descripcion' => 'esta es una descripcion 522',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234522ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6282805,
		'comision'    => 42,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 523',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234523ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 60.41576990516717,
		'comision'    => 0,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 524',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234524ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.99902863202317,
		'comision'    => 0,
		'fecha'       =>  '17/11/2017',
		'descripcion' => 'esta es una descripcion 525',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 13,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234525ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8559663,
		'comision'    => 59,
		'fecha'       =>  '6/3/2017',
		'descripcion' => 'esta es una descripcion 526',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234526ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 5.166069498712604,
		'comision'    => 0,
		'fecha'       =>  '17/10/2017',
		'descripcion' => 'esta es una descripcion 527',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 24,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234527ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 35.01799481491961,
		'comision'    => 0,
		'fecha'       =>  '16/4/2017',
		'descripcion' => 'esta es una descripcion 528',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234528ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6510524,
		'comision'    => 44,
		'fecha'       =>  '19/12/2017',
		'descripcion' => 'esta es una descripcion 529',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 79,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234529ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8917881,
		'comision'    => 83,
		'fecha'       =>  '8/4/2017',
		'descripcion' => 'esta es una descripcion 530',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234530ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 65.44022137540396,
		'comision'    => 0,
		'fecha'       =>  '27/11/2017',
		'descripcion' => 'esta es una descripcion 531',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234531ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 18.992583757464914,
		'comision'    => 0,
		'fecha'       =>  '8/4/2017',
		'descripcion' => 'esta es una descripcion 532',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234532ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.26783876483778,
		'comision'    => 0,
		'fecha'       =>  '8/2/2017',
		'descripcion' => 'esta es una descripcion 533',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 60,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234533ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8593392,
		'comision'    => 87,
		'fecha'       =>  '8/4/2017',
		'descripcion' => 'esta es una descripcion 534',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234534ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8498668,
		'comision'    => 51,
		'fecha'       =>  '10/10/2017',
		'descripcion' => 'esta es una descripcion 535',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234535ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.345232822300577,
		'comision'    => 0,
		'fecha'       =>  '12/12/2017',
		'descripcion' => 'esta es una descripcion 536',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 79,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234536ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2699993,
		'comision'    => 26,
		'fecha'       =>  '18/11/2017',
		'descripcion' => 'esta es una descripcion 537',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 17,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234537ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.0704670954971,
		'comision'    => 0,
		'fecha'       =>  '8/8/2017',
		'descripcion' => 'esta es una descripcion 538',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234538ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 28.733146949724613,
		'comision'    => 0,
		'fecha'       =>  '21/9/2017',
		'descripcion' => 'esta es una descripcion 539',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234539ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.469808179894171,
		'comision'    => 0,
		'fecha'       =>  '16/8/2017',
		'descripcion' => 'esta es una descripcion 540',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234540ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 90.0256120729549,
		'comision'    => 0,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 541',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234541ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7581584,
		'comision'    => 29,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 542',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234542ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 9.695389373362294,
		'comision'    => 0,
		'fecha'       =>  '20/8/2017',
		'descripcion' => 'esta es una descripcion 543',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234543ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 61.49644534102107,
		'comision'    => 0,
		'fecha'       =>  '30/4/2017',
		'descripcion' => 'esta es una descripcion 544',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234544ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.420871512876706,
		'comision'    => 0,
		'fecha'       =>  '26/2/2017',
		'descripcion' => 'esta es una descripcion 545',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234545ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8317500,
		'comision'    => 67,
		'fecha'       =>  '30/4/2017',
		'descripcion' => 'esta es una descripcion 546',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234546ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9849353,
		'comision'    => 16,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 547',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234547ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8060788,
		'comision'    => 81,
		'fecha'       =>  '6/12/2017',
		'descripcion' => 'esta es una descripcion 548',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 79,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234548ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5952525,
		'comision'    => 8,
		'fecha'       =>  '4/7/2017',
		'descripcion' => 'esta es una descripcion 549',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234549ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.60138213485276,
		'comision'    => 0,
		'fecha'       =>  '11/3/2017',
		'descripcion' => 'esta es una descripcion 550',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234550ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7171676,
		'comision'    => 26,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 551',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234551ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6133964,
		'comision'    => 68,
		'fecha'       =>  '8/2/2017',
		'descripcion' => 'esta es una descripcion 552',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234552ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8543740,
		'comision'    => 87,
		'fecha'       =>  '8/8/2017',
		'descripcion' => 'esta es una descripcion 553',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234553ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9706017,
		'comision'    => 6,
		'fecha'       =>  '1/6/2017',
		'descripcion' => 'esta es una descripcion 554',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 24,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234554ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.23019116781211,
		'comision'    => 0,
		'fecha'       =>  '1/8/2017',
		'descripcion' => 'esta es una descripcion 555',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234555ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.69040345569332,
		'comision'    => 0,
		'fecha'       =>  '13/2/2017',
		'descripcion' => 'esta es una descripcion 556',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 33,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234556ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9840604,
		'comision'    => 58,
		'fecha'       =>  '16/5/2017',
		'descripcion' => 'esta es una descripcion 557',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234557ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2239578,
		'comision'    => 91,
		'fecha'       =>  '20/12/2017',
		'descripcion' => 'esta es una descripcion 558',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234558ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5765736,
		'comision'    => 91,
		'fecha'       =>  '24/7/2017',
		'descripcion' => 'esta es una descripcion 559',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234559ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4623972,
		'comision'    => 100,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 560',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234560ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9378875,
		'comision'    => 86,
		'fecha'       =>  '7/4/2017',
		'descripcion' => 'esta es una descripcion 561',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234561ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9056965,
		'comision'    => 68,
		'fecha'       =>  '24/3/2017',
		'descripcion' => 'esta es una descripcion 562',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234562ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 99.29693114970516,
		'comision'    => 0,
		'fecha'       =>  '13/10/2017',
		'descripcion' => 'esta es una descripcion 563',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234563ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6402744,
		'comision'    => 98,
		'fecha'       =>  '19/11/2017',
		'descripcion' => 'esta es una descripcion 564',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234564ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1533581,
		'comision'    => 27,
		'fecha'       =>  '12/10/2017',
		'descripcion' => 'esta es una descripcion 565',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234565ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 57.7445391765567,
		'comision'    => 0,
		'fecha'       =>  '5/5/2017',
		'descripcion' => 'esta es una descripcion 566',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 24,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234566ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.251369540242624,
		'comision'    => 0,
		'fecha'       =>  '29/11/2017',
		'descripcion' => 'esta es una descripcion 567',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 49,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234567ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3732075,
		'comision'    => 98,
		'fecha'       =>  '5/6/2017',
		'descripcion' => 'esta es una descripcion 568',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234568ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 689815,
		'comision'    => 19,
		'fecha'       =>  '7/7/2017',
		'descripcion' => 'esta es una descripcion 569',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 36,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234569ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4253546,
		'comision'    => 25,
		'fecha'       =>  '28/10/2017',
		'descripcion' => 'esta es una descripcion 570',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234570ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3148178,
		'comision'    => 32,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 571',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 63,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234571ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.38918904172749,
		'comision'    => 0,
		'fecha'       =>  '13/10/2017',
		'descripcion' => 'esta es una descripcion 572',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234572ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.608562360949314,
		'comision'    => 0,
		'fecha'       =>  '2/1/2017',
		'descripcion' => 'esta es una descripcion 573',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234573ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.7566867572381,
		'comision'    => 0,
		'fecha'       =>  '14/1/2017',
		'descripcion' => 'esta es una descripcion 574',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234574ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7776729,
		'comision'    => 51,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 575',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234575ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.43995739933274,
		'comision'    => 0,
		'fecha'       =>  '2/4/2017',
		'descripcion' => 'esta es una descripcion 576',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234576ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2832349,
		'comision'    => 94,
		'fecha'       =>  '18/8/2017',
		'descripcion' => 'esta es una descripcion 577',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 7,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234577ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7139761,
		'comision'    => 3,
		'fecha'       =>  '6/2/2017',
		'descripcion' => 'esta es una descripcion 578',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 71,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234578ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 98.14056402527704,
		'comision'    => 0,
		'fecha'       =>  '23/11/2017',
		'descripcion' => 'esta es una descripcion 579',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234579ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6247488,
		'comision'    => 8,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 580',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 59,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234580ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 26.85039421029807,
		'comision'    => 0,
		'fecha'       =>  '11/10/2017',
		'descripcion' => 'esta es una descripcion 581',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 5,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234581ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.636590842378034,
		'comision'    => 0,
		'fecha'       =>  '15/5/2017',
		'descripcion' => 'esta es una descripcion 582',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234582ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2251700,
		'comision'    => 30,
		'fecha'       =>  '28/1/2017',
		'descripcion' => 'esta es una descripcion 583',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 47,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234583ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1620003,
		'comision'    => 30,
		'fecha'       =>  '10/12/2017',
		'descripcion' => 'esta es una descripcion 584',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 18,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234584ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 4.431487955925151,
		'comision'    => 0,
		'fecha'       =>  '10/7/2017',
		'descripcion' => 'esta es una descripcion 585',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 21,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234585ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3888582,
		'comision'    => 61,
		'fecha'       =>  '14/7/2017',
		'descripcion' => 'esta es una descripcion 586',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 71,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234586ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 94.4161180947066,
		'comision'    => 0,
		'fecha'       =>  '4/4/2017',
		'descripcion' => 'esta es una descripcion 587',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234587ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 34.771227479273435,
		'comision'    => 0,
		'fecha'       =>  '20/1/2017',
		'descripcion' => 'esta es una descripcion 588',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234588ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 12.107494634400947,
		'comision'    => 0,
		'fecha'       =>  '6/10/2017',
		'descripcion' => 'esta es una descripcion 589',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 39,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234589ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.579536651293665,
		'comision'    => 0,
		'fecha'       =>  '22/4/2017',
		'descripcion' => 'esta es una descripcion 590',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234590ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1209894,
		'comision'    => 26,
		'fecha'       =>  '14/9/2017',
		'descripcion' => 'esta es una descripcion 591',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 46,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234591ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 29.86889830880592,
		'comision'    => 0,
		'fecha'       =>  '16/12/2017',
		'descripcion' => 'esta es una descripcion 592',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 2,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234592ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1904189,
		'comision'    => 21,
		'fecha'       =>  '13/4/2017',
		'descripcion' => 'esta es una descripcion 593',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234593ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2151218,
		'comision'    => 41,
		'fecha'       =>  '3/4/2017',
		'descripcion' => 'esta es una descripcion 594',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234594ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9389272,
		'comision'    => 91,
		'fecha'       =>  '11/8/2017',
		'descripcion' => 'esta es una descripcion 595',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 49,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234595ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.743678426418775,
		'comision'    => 0,
		'fecha'       =>  '3/10/2017',
		'descripcion' => 'esta es una descripcion 596',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 76,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234596ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 28.408063986082684,
		'comision'    => 0,
		'fecha'       =>  '2/1/2017',
		'descripcion' => 'esta es una descripcion 597',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234597ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2077538,
		'comision'    => 52,
		'fecha'       =>  '7/2/2017',
		'descripcion' => 'esta es una descripcion 598',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 76,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234598ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8949922,
		'comision'    => 22,
		'fecha'       =>  '18/1/2017',
		'descripcion' => 'esta es una descripcion 599',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234599ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2384252,
		'comision'    => 81,
		'fecha'       =>  '10/3/2017',
		'descripcion' => 'esta es una descripcion 600',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234600ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 73.19595170547635,
		'comision'    => 0,
		'fecha'       =>  '11/3/2017',
		'descripcion' => 'esta es una descripcion 601',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234601ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 65.27486350543462,
		'comision'    => 0,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 602',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234602ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.67120429267418,
		'comision'    => 0,
		'fecha'       =>  '10/9/2017',
		'descripcion' => 'esta es una descripcion 603',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 54,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234603ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.52039322221682,
		'comision'    => 0,
		'fecha'       =>  '30/5/2017',
		'descripcion' => 'esta es una descripcion 604',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 61,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234604ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.60100635614864,
		'comision'    => 0,
		'fecha'       =>  '21/10/2017',
		'descripcion' => 'esta es una descripcion 605',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234605ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.574255525128876,
		'comision'    => 0,
		'fecha'       =>  '14/9/2017',
		'descripcion' => 'esta es una descripcion 606',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 61,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234606ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9601608,
		'comision'    => 32,
		'fecha'       =>  '26/4/2017',
		'descripcion' => 'esta es una descripcion 607',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 27,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234607ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4085296,
		'comision'    => 68,
		'fecha'       =>  '12/9/2017',
		'descripcion' => 'esta es una descripcion 608',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 25,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234608ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1071644,
		'comision'    => 14,
		'fecha'       =>  '24/10/2017',
		'descripcion' => 'esta es una descripcion 609',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234609ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.233140840557478,
		'comision'    => 0,
		'fecha'       =>  '20/12/2017',
		'descripcion' => 'esta es una descripcion 610',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234610ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 16.87834012572992,
		'comision'    => 0,
		'fecha'       =>  '4/11/2017',
		'descripcion' => 'esta es una descripcion 611',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234611ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6284876,
		'comision'    => 3,
		'fecha'       =>  '5/1/2017',
		'descripcion' => 'esta es una descripcion 612',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234612ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7882674,
		'comision'    => 65,
		'fecha'       =>  '14/2/2017',
		'descripcion' => 'esta es una descripcion 613',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 81,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234613ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1218336,
		'comision'    => 75,
		'fecha'       =>  '19/4/2017',
		'descripcion' => 'esta es una descripcion 614',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 29,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234614ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8704785,
		'comision'    => 55,
		'fecha'       =>  '2/3/2017',
		'descripcion' => 'esta es una descripcion 615',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234615ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3614184,
		'comision'    => 11,
		'fecha'       =>  '22/8/2017',
		'descripcion' => 'esta es una descripcion 616',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 76,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234616ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.954700743406285,
		'comision'    => 0,
		'fecha'       =>  '10/8/2017',
		'descripcion' => 'esta es una descripcion 617',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234617ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 539575,
		'comision'    => 51,
		'fecha'       =>  '10/6/2017',
		'descripcion' => 'esta es una descripcion 618',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234618ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4231584,
		'comision'    => 8,
		'fecha'       =>  '2/12/2017',
		'descripcion' => 'esta es una descripcion 619',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234619ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.86835649565492,
		'comision'    => 0,
		'fecha'       =>  '15/8/2017',
		'descripcion' => 'esta es una descripcion 620',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234620ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 344552,
		'comision'    => 55,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 621',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234621ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 657163,
		'comision'    => 6,
		'fecha'       =>  '19/3/2017',
		'descripcion' => 'esta es una descripcion 622',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 90,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234622ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3007110,
		'comision'    => 55,
		'fecha'       =>  '2/8/2017',
		'descripcion' => 'esta es una descripcion 623',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 90,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234623ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 44.57955332463378,
		'comision'    => 0,
		'fecha'       =>  '27/12/2017',
		'descripcion' => 'esta es una descripcion 624',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234624ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1187674,
		'comision'    => 77,
		'fecha'       =>  '19/10/2017',
		'descripcion' => 'esta es una descripcion 625',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234625ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7758806,
		'comision'    => 22,
		'fecha'       =>  '23/2/2017',
		'descripcion' => 'esta es una descripcion 626',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 65,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234626ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.590504669740868,
		'comision'    => 0,
		'fecha'       =>  '20/1/2017',
		'descripcion' => 'esta es una descripcion 627',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 8,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234627ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 726786,
		'comision'    => 29,
		'fecha'       =>  '28/1/2017',
		'descripcion' => 'esta es una descripcion 628',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234628ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8524725,
		'comision'    => 18,
		'fecha'       =>  '15/11/2017',
		'descripcion' => 'esta es una descripcion 629',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234629ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 727370,
		'comision'    => 62,
		'fecha'       =>  '20/9/2017',
		'descripcion' => 'esta es una descripcion 630',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 25,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234630ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 211432,
		'comision'    => 74,
		'fecha'       =>  '29/9/2017',
		'descripcion' => 'esta es una descripcion 631',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 57,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234631ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6496809,
		'comision'    => 73,
		'fecha'       =>  '20/9/2017',
		'descripcion' => 'esta es una descripcion 632',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 51,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234632ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3418160,
		'comision'    => 26,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 633',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 57,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234633ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6018565,
		'comision'    => 53,
		'fecha'       =>  '13/6/2017',
		'descripcion' => 'esta es una descripcion 634',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234634ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 11.386365377353954,
		'comision'    => 0,
		'fecha'       =>  '2/12/2017',
		'descripcion' => 'esta es una descripcion 635',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 16,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234635ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4788573,
		'comision'    => 9,
		'fecha'       =>  '11/11/2017',
		'descripcion' => 'esta es una descripcion 636',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 46,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234636ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7133405,
		'comision'    => 7,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 637',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234637ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 12.177645693373922,
		'comision'    => 0,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 638',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234638ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6851343,
		'comision'    => 81,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 639',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 58,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234639ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.27757565721809,
		'comision'    => 0,
		'fecha'       =>  '26/7/2017',
		'descripcion' => 'esta es una descripcion 640',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 16,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234640ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.65319500592598,
		'comision'    => 0,
		'fecha'       =>  '17/5/2017',
		'descripcion' => 'esta es una descripcion 641',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234641ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4760191,
		'comision'    => 11,
		'fecha'       =>  '28/8/2017',
		'descripcion' => 'esta es una descripcion 642',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234642ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7775769,
		'comision'    => 38,
		'fecha'       =>  '12/10/2017',
		'descripcion' => 'esta es una descripcion 643',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 43,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234643ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3097120,
		'comision'    => 88,
		'fecha'       =>  '26/7/2017',
		'descripcion' => 'esta es una descripcion 644',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234644ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5777160,
		'comision'    => 24,
		'fecha'       =>  '25/9/2017',
		'descripcion' => 'esta es una descripcion 645',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234645ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5222628,
		'comision'    => 10,
		'fecha'       =>  '8/7/2017',
		'descripcion' => 'esta es una descripcion 646',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234646ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1401169,
		'comision'    => 80,
		'fecha'       =>  '7/12/2017',
		'descripcion' => 'esta es una descripcion 647',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234647ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1266494,
		'comision'    => 34,
		'fecha'       =>  '17/4/2017',
		'descripcion' => 'esta es una descripcion 648',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234648ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.85780809068039,
		'comision'    => 0,
		'fecha'       =>  '28/8/2017',
		'descripcion' => 'esta es una descripcion 649',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234649ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 75.81569217774116,
		'comision'    => 0,
		'fecha'       =>  '7/2/2017',
		'descripcion' => 'esta es una descripcion 650',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 35,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234650ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 39.57637777093748,
		'comision'    => 0,
		'fecha'       =>  '11/11/2017',
		'descripcion' => 'esta es una descripcion 651',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 14,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234651ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 530068,
		'comision'    => 95,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 652',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234652ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 68.44990480622153,
		'comision'    => 0,
		'fecha'       =>  '11/5/2017',
		'descripcion' => 'esta es una descripcion 653',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 5,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234653ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 346116,
		'comision'    => 6,
		'fecha'       =>  '18/9/2017',
		'descripcion' => 'esta es una descripcion 654',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234654ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3665797,
		'comision'    => 3,
		'fecha'       =>  '3/3/2017',
		'descripcion' => 'esta es una descripcion 655',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234655ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7416407,
		'comision'    => 90,
		'fecha'       =>  '14/11/2017',
		'descripcion' => 'esta es una descripcion 656',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 16,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234656ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2013479,
		'comision'    => 47,
		'fecha'       =>  '17/2/2017',
		'descripcion' => 'esta es una descripcion 657',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 69,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234657ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8259642,
		'comision'    => 20,
		'fecha'       =>  '2/3/2017',
		'descripcion' => 'esta es una descripcion 658',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 9,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234658ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 56.45645264331978,
		'comision'    => 0,
		'fecha'       =>  '24/5/2017',
		'descripcion' => 'esta es una descripcion 659',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234659ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 16.320855817096408,
		'comision'    => 0,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 660',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234660ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2535070,
		'comision'    => 52,
		'fecha'       =>  '10/1/2017',
		'descripcion' => 'esta es una descripcion 661',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234661ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 17.337030695173052,
		'comision'    => 0,
		'fecha'       =>  '30/7/2017',
		'descripcion' => 'esta es una descripcion 662',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234662ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.73538848726568,
		'comision'    => 0,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 663',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 86,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234663ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4456269,
		'comision'    => 43,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 664',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 19,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234664ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5158233,
		'comision'    => 62,
		'fecha'       =>  '19/10/2017',
		'descripcion' => 'esta es una descripcion 665',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 90,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234665ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.01525345043974,
		'comision'    => 0,
		'fecha'       =>  '23/3/2017',
		'descripcion' => 'esta es una descripcion 666',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 85,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234666ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6658570,
		'comision'    => 18,
		'fecha'       =>  '14/8/2017',
		'descripcion' => 'esta es una descripcion 667',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234667ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 940850,
		'comision'    => 25,
		'fecha'       =>  '29/1/2017',
		'descripcion' => 'esta es una descripcion 668',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234668ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2927217,
		'comision'    => 78,
		'fecha'       =>  '21/11/2017',
		'descripcion' => 'esta es una descripcion 669',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234669ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3850601,
		'comision'    => 75,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 670',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 30,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234670ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9400311,
		'comision'    => 56,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 671',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234671ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5868264,
		'comision'    => 41,
		'fecha'       =>  '8/10/2017',
		'descripcion' => 'esta es una descripcion 672',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234672ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7240791,
		'comision'    => 74,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 673',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234673ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 34.62863488124982,
		'comision'    => 0,
		'fecha'       =>  '15/9/2017',
		'descripcion' => 'esta es una descripcion 674',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234674ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.528014073186608,
		'comision'    => 0,
		'fecha'       =>  '14/3/2017',
		'descripcion' => 'esta es una descripcion 675',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234675ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6793896,
		'comision'    => 49,
		'fecha'       =>  '29/4/2017',
		'descripcion' => 'esta es una descripcion 676',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 27,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234676ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 43.09979686549132,
		'comision'    => 0,
		'fecha'       =>  '20/5/2017',
		'descripcion' => 'esta es una descripcion 677',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 51,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234677ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 183884,
		'comision'    => 49,
		'fecha'       =>  '6/9/2017',
		'descripcion' => 'esta es una descripcion 678',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 81,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234678ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.496951826284366,
		'comision'    => 0,
		'fecha'       =>  '17/5/2017',
		'descripcion' => 'esta es una descripcion 679',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234679ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 19.646736952302227,
		'comision'    => 0,
		'fecha'       =>  '23/6/2017',
		'descripcion' => 'esta es una descripcion 680',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234680ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.41579356259425,
		'comision'    => 0,
		'fecha'       =>  '28/2/2017',
		'descripcion' => 'esta es una descripcion 681',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234681ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 28.493790930471196,
		'comision'    => 0,
		'fecha'       =>  '17/8/2017',
		'descripcion' => 'esta es una descripcion 682',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 8,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234682ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.561101027337003,
		'comision'    => 0,
		'fecha'       =>  '27/5/2017',
		'descripcion' => 'esta es una descripcion 683',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234683ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.40910854206551,
		'comision'    => 0,
		'fecha'       =>  '24/5/2017',
		'descripcion' => 'esta es una descripcion 684',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234684ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.860268496315737,
		'comision'    => 0,
		'fecha'       =>  '18/6/2017',
		'descripcion' => 'esta es una descripcion 685',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234685ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4177106,
		'comision'    => 82,
		'fecha'       =>  '23/4/2017',
		'descripcion' => 'esta es una descripcion 686',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 38,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234686ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 76.30495943228942,
		'comision'    => 0,
		'fecha'       =>  '19/4/2017',
		'descripcion' => 'esta es una descripcion 687',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 77,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234687ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3165159,
		'comision'    => 11,
		'fecha'       =>  '6/1/2017',
		'descripcion' => 'esta es una descripcion 688',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234688ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 420783,
		'comision'    => 59,
		'fecha'       =>  '3/11/2017',
		'descripcion' => 'esta es una descripcion 689',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234689ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 15.048382463927501,
		'comision'    => 0,
		'fecha'       =>  '14/9/2017',
		'descripcion' => 'esta es una descripcion 690',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 12,
		'cuenta_id'   => 40,
		'referencia'  => 'ABCR3234690ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3298033,
		'comision'    => 11,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 691',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 58,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234691ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.046250630749356,
		'comision'    => 0,
		'fecha'       =>  '20/10/2017',
		'descripcion' => 'esta es una descripcion 692',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234692ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 9.416129705325183,
		'comision'    => 0,
		'fecha'       =>  '18/5/2017',
		'descripcion' => 'esta es una descripcion 693',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234693ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1900717,
		'comision'    => 35,
		'fecha'       =>  '10/11/2017',
		'descripcion' => 'esta es una descripcion 694',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 28,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234694ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7737313,
		'comision'    => 17,
		'fecha'       =>  '11/1/2017',
		'descripcion' => 'esta es una descripcion 695',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 30,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234695ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6978192,
		'comision'    => 50,
		'fecha'       =>  '13/8/2017',
		'descripcion' => 'esta es una descripcion 696',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234696ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 34.41055794137759,
		'comision'    => 0,
		'fecha'       =>  '17/2/2017',
		'descripcion' => 'esta es una descripcion 697',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234697ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.58070062405911,
		'comision'    => 0,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 698',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234698ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.346321517481954,
		'comision'    => 0,
		'fecha'       =>  '25/10/2017',
		'descripcion' => 'esta es una descripcion 699',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234699ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3281638,
		'comision'    => 48,
		'fecha'       =>  '20/10/2017',
		'descripcion' => 'esta es una descripcion 700',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234700ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9518860,
		'comision'    => 52,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 701',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 74,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234701ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.363890939877294,
		'comision'    => 0,
		'fecha'       =>  '16/1/2017',
		'descripcion' => 'esta es una descripcion 702',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 17,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234702ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 57.20468031189651,
		'comision'    => 0,
		'fecha'       =>  '16/5/2017',
		'descripcion' => 'esta es una descripcion 703',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234703ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 63.48539899223749,
		'comision'    => 0,
		'fecha'       =>  '15/2/2017',
		'descripcion' => 'esta es una descripcion 704',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234704ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4299393,
		'comision'    => 19,
		'fecha'       =>  '29/11/2017',
		'descripcion' => 'esta es una descripcion 705',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 14,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234705ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.65412595978945,
		'comision'    => 0,
		'fecha'       =>  '1/5/2017',
		'descripcion' => 'esta es una descripcion 706',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234706ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.43945883823725,
		'comision'    => 0,
		'fecha'       =>  '23/4/2017',
		'descripcion' => 'esta es una descripcion 707',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234707ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4001252,
		'comision'    => 13,
		'fecha'       =>  '27/5/2017',
		'descripcion' => 'esta es una descripcion 708',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234708ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.28575391240084,
		'comision'    => 0,
		'fecha'       =>  '1/10/2017',
		'descripcion' => 'esta es una descripcion 709',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 27,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234709ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 76.40060072433643,
		'comision'    => 0,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 710',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 13,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234710ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8100961,
		'comision'    => 50,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 711',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 28,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234711ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 22.191101117796833,
		'comision'    => 0,
		'fecha'       =>  '5/4/2017',
		'descripcion' => 'esta es una descripcion 712',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 6,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234712ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5537349,
		'comision'    => 75,
		'fecha'       =>  '3/5/2017',
		'descripcion' => 'esta es una descripcion 713',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 49,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234713ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 87.66055229484118,
		'comision'    => 0,
		'fecha'       =>  '22/12/2017',
		'descripcion' => 'esta es una descripcion 714',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234714ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3490643,
		'comision'    => 36,
		'fecha'       =>  '10/6/2017',
		'descripcion' => 'esta es una descripcion 715',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234715ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1777673,
		'comision'    => 20,
		'fecha'       =>  '21/2/2017',
		'descripcion' => 'esta es una descripcion 716',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 63,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234716ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 84.2874591217361,
		'comision'    => 0,
		'fecha'       =>  '30/11/2017',
		'descripcion' => 'esta es una descripcion 717',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234717ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1851283,
		'comision'    => 64,
		'fecha'       =>  '18/9/2017',
		'descripcion' => 'esta es una descripcion 718',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 80,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234718ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.77842932453907,
		'comision'    => 0,
		'fecha'       =>  '30/6/2017',
		'descripcion' => 'esta es una descripcion 719',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234719ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.9723308630385314,
		'comision'    => 0,
		'fecha'       =>  '8/3/2017',
		'descripcion' => 'esta es una descripcion 720',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234720ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7541895,
		'comision'    => 46,
		'fecha'       =>  '13/6/2017',
		'descripcion' => 'esta es una descripcion 721',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 11,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234721ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2820867,
		'comision'    => 15,
		'fecha'       =>  '29/5/2017',
		'descripcion' => 'esta es una descripcion 722',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 1,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234722ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.07153921607219,
		'comision'    => 0,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 723',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234723ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6031927,
		'comision'    => 69,
		'fecha'       =>  '24/6/2017',
		'descripcion' => 'esta es una descripcion 724',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234724ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.22472166356376,
		'comision'    => 0,
		'fecha'       =>  '8/3/2017',
		'descripcion' => 'esta es una descripcion 725',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234725ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.1784158978862,
		'comision'    => 0,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 726',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234726ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6029156,
		'comision'    => 19,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 727',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234727ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 17.70585165505842,
		'comision'    => 0,
		'fecha'       =>  '25/11/2017',
		'descripcion' => 'esta es una descripcion 728',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 52,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234728ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9291547,
		'comision'    => 16,
		'fecha'       =>  '23/6/2017',
		'descripcion' => 'esta es una descripcion 729',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 11,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234729ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8857931,
		'comision'    => 9,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 730',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 78,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234730ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9531894,
		'comision'    => 46,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 731',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234731ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8268498,
		'comision'    => 85,
		'fecha'       =>  '8/6/2017',
		'descripcion' => 'esta es una descripcion 732',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 60,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234732ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 71.70899917989028,
		'comision'    => 0,
		'fecha'       =>  '12/11/2017',
		'descripcion' => 'esta es una descripcion 733',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 31,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234733ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8498515,
		'comision'    => 96,
		'fecha'       =>  '10/12/2017',
		'descripcion' => 'esta es una descripcion 734',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 9,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234734ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8062840,
		'comision'    => 23,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 735',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 18,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234735ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3063078,
		'comision'    => 22,
		'fecha'       =>  '16/1/2017',
		'descripcion' => 'esta es una descripcion 736',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 19,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234736ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 1.1429843910670643,
		'comision'    => 0,
		'fecha'       =>  '18/12/2017',
		'descripcion' => 'esta es una descripcion 737',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234737ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 90.50468045345872,
		'comision'    => 0,
		'fecha'       =>  '14/11/2017',
		'descripcion' => 'esta es una descripcion 738',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234738ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 812046,
		'comision'    => 26,
		'fecha'       =>  '18/11/2017',
		'descripcion' => 'esta es una descripcion 739',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 61,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234739ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4500616,
		'comision'    => 20,
		'fecha'       =>  '6/5/2017',
		'descripcion' => 'esta es una descripcion 740',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 50,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234740ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2072197,
		'comision'    => 30,
		'fecha'       =>  '13/5/2017',
		'descripcion' => 'esta es una descripcion 741',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 90,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234741ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.22497445211079,
		'comision'    => 0,
		'fecha'       =>  '12/6/2017',
		'descripcion' => 'esta es una descripcion 742',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 64,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234742ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 97.97232602517548,
		'comision'    => 0,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 743',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234743ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 179463,
		'comision'    => 74,
		'fecha'       =>  '9/3/2017',
		'descripcion' => 'esta es una descripcion 744',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234744ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2817730,
		'comision'    => 51,
		'fecha'       =>  '3/12/2017',
		'descripcion' => 'esta es una descripcion 745',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 8,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234745ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1370428,
		'comision'    => 26,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 746',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234746ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9112336,
		'comision'    => 96,
		'fecha'       =>  '23/9/2017',
		'descripcion' => 'esta es una descripcion 747',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 88,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234747ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.44905783125212,
		'comision'    => 0,
		'fecha'       =>  '19/11/2017',
		'descripcion' => 'esta es una descripcion 748',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 78,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234748ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6016275,
		'comision'    => 85,
		'fecha'       =>  '11/1/2017',
		'descripcion' => 'esta es una descripcion 749',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234749ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1353104,
		'comision'    => 50,
		'fecha'       =>  '13/12/2017',
		'descripcion' => 'esta es una descripcion 750',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234750ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 516858,
		'comision'    => 12,
		'fecha'       =>  '18/3/2017',
		'descripcion' => 'esta es una descripcion 751',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 46,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234751ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 3.435553330001897,
		'comision'    => 0,
		'fecha'       =>  '11/10/2017',
		'descripcion' => 'esta es una descripcion 752',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 61,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234752ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2966067,
		'comision'    => 13,
		'fecha'       =>  '29/1/2017',
		'descripcion' => 'esta es una descripcion 753',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234753ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7183140,
		'comision'    => 3,
		'fecha'       =>  '18/4/2017',
		'descripcion' => 'esta es una descripcion 754',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234754ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.110482040398047,
		'comision'    => 0,
		'fecha'       =>  '13/3/2017',
		'descripcion' => 'esta es una descripcion 755',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234755ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2485737,
		'comision'    => 51,
		'fecha'       =>  '2/3/2017',
		'descripcion' => 'esta es una descripcion 756',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 24,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234756ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.64808380765719,
		'comision'    => 0,
		'fecha'       =>  '27/7/2017',
		'descripcion' => 'esta es una descripcion 757',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234757ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9197137,
		'comision'    => 13,
		'fecha'       =>  '13/8/2017',
		'descripcion' => 'esta es una descripcion 758',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234758ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.25576768550271,
		'comision'    => 0,
		'fecha'       =>  '6/12/2017',
		'descripcion' => 'esta es una descripcion 759',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 17,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234759ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.81450131498569,
		'comision'    => 0,
		'fecha'       =>  '21/2/2017',
		'descripcion' => 'esta es una descripcion 760',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234760ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7653248,
		'comision'    => 89,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 761',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 33,
		'referencia'  => 'ABCR3234761ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6403053,
		'comision'    => 7,
		'fecha'       =>  '5/9/2017',
		'descripcion' => 'esta es una descripcion 762',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 2,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234762ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.94198847113053,
		'comision'    => 0,
		'fecha'       =>  '27/9/2017',
		'descripcion' => 'esta es una descripcion 763',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234763ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3573964,
		'comision'    => 83,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 764',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 61,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234764ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.78792085295644,
		'comision'    => 0,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 765',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 76,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234765ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1407767,
		'comision'    => 60,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 766',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 57,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234766ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.35640162834662,
		'comision'    => 0,
		'fecha'       =>  '19/6/2017',
		'descripcion' => 'esta es una descripcion 767',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234767ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 83.11314146542848,
		'comision'    => 0,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 768',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 12,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234768ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6412173,
		'comision'    => 47,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 769',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 15,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234769ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9050927,
		'comision'    => 28,
		'fecha'       =>  '21/10/2017',
		'descripcion' => 'esta es una descripcion 770',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234770ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 84.95776839065738,
		'comision'    => 0,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 771',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234771ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 8.360915135173686,
		'comision'    => 0,
		'fecha'       =>  '6/9/2017',
		'descripcion' => 'esta es una descripcion 772',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234772ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 43.86818579880968,
		'comision'    => 0,
		'fecha'       =>  '8/11/2017',
		'descripcion' => 'esta es una descripcion 773',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234773ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7574920,
		'comision'    => 90,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 774',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234774ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2619847,
		'comision'    => 73,
		'fecha'       =>  '21/1/2017',
		'descripcion' => 'esta es una descripcion 775',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234775ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 71.71256176786264,
		'comision'    => 0,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 776',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234776ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 86.06290257237112,
		'comision'    => 0,
		'fecha'       =>  '14/5/2017',
		'descripcion' => 'esta es una descripcion 777',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234777ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 50.20105590514835,
		'comision'    => 0,
		'fecha'       =>  '5/3/2017',
		'descripcion' => 'esta es una descripcion 778',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 60,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234778ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 91.67494431939846,
		'comision'    => 0,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 779',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234779ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2046236,
		'comision'    => 52,
		'fecha'       =>  '10/9/2017',
		'descripcion' => 'esta es una descripcion 780',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 20,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234780ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 23.551237857921002,
		'comision'    => 0,
		'fecha'       =>  '30/7/2017',
		'descripcion' => 'esta es una descripcion 781',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234781ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.89295713992139,
		'comision'    => 0,
		'fecha'       =>  '8/11/2017',
		'descripcion' => 'esta es una descripcion 782',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 58,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234782ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 93.77360191776911,
		'comision'    => 0,
		'fecha'       =>  '29/4/2017',
		'descripcion' => 'esta es una descripcion 783',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234783ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 86.67560898694389,
		'comision'    => 0,
		'fecha'       =>  '19/11/2017',
		'descripcion' => 'esta es una descripcion 784',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234784ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.191391308759236,
		'comision'    => 0,
		'fecha'       =>  '2/10/2017',
		'descripcion' => 'esta es una descripcion 785',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 56,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234785ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9717072,
		'comision'    => 6,
		'fecha'       =>  '4/11/2017',
		'descripcion' => 'esta es una descripcion 786',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234786ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.61026458574532,
		'comision'    => 0,
		'fecha'       =>  '17/9/2017',
		'descripcion' => 'esta es una descripcion 787',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234787ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8399922,
		'comision'    => 43,
		'fecha'       =>  '8/1/2017',
		'descripcion' => 'esta es una descripcion 788',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 63,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234788ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 43.322167299138826,
		'comision'    => 0,
		'fecha'       =>  '11/4/2017',
		'descripcion' => 'esta es una descripcion 789',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 19,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234789ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.200042082170924,
		'comision'    => 0,
		'fecha'       =>  '18/1/2017',
		'descripcion' => 'esta es una descripcion 790',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234790ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.79563718754785,
		'comision'    => 0,
		'fecha'       =>  '30/3/2017',
		'descripcion' => 'esta es una descripcion 791',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 22,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234791ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 1.7723546350095265,
		'comision'    => 0,
		'fecha'       =>  '7/1/2017',
		'descripcion' => 'esta es una descripcion 792',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234792ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6027701,
		'comision'    => 62,
		'fecha'       =>  '27/4/2017',
		'descripcion' => 'esta es una descripcion 793',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 19,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234793ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.023478021937038,
		'comision'    => 0,
		'fecha'       =>  '17/5/2017',
		'descripcion' => 'esta es una descripcion 794',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234794ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2939071,
		'comision'    => 52,
		'fecha'       =>  '28/9/2017',
		'descripcion' => 'esta es una descripcion 795',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234795ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 24.95972063468122,
		'comision'    => 0,
		'fecha'       =>  '22/8/2017',
		'descripcion' => 'esta es una descripcion 796',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 53,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234796ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 112105,
		'comision'    => 43,
		'fecha'       =>  '25/12/2017',
		'descripcion' => 'esta es una descripcion 797',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234797ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 800126,
		'comision'    => 50,
		'fecha'       =>  '23/3/2017',
		'descripcion' => 'esta es una descripcion 798',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234798ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2989246,
		'comision'    => 61,
		'fecha'       =>  '23/5/2017',
		'descripcion' => 'esta es una descripcion 799',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234799ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6827761,
		'comision'    => 83,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 800',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234800ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5821934,
		'comision'    => 91,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 801',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234801ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9194931,
		'comision'    => 47,
		'fecha'       =>  '24/4/2017',
		'descripcion' => 'esta es una descripcion 802',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234802ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1101740,
		'comision'    => 33,
		'fecha'       =>  '9/2/2017',
		'descripcion' => 'esta es una descripcion 803',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234803ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1816434,
		'comision'    => 61,
		'fecha'       =>  '7/6/2017',
		'descripcion' => 'esta es una descripcion 804',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234804ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8364993,
		'comision'    => 71,
		'fecha'       =>  '4/8/2017',
		'descripcion' => 'esta es una descripcion 805',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 48,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234805ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5468042,
		'comision'    => 7,
		'fecha'       =>  '2/8/2017',
		'descripcion' => 'esta es una descripcion 806',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234806ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 34.79639431915996,
		'comision'    => 0,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 807',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 82,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234807ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.41940913833551,
		'comision'    => 0,
		'fecha'       =>  '3/11/2017',
		'descripcion' => 'esta es una descripcion 808',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 59,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234808ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.764014302291336,
		'comision'    => 0,
		'fecha'       =>  '25/3/2017',
		'descripcion' => 'esta es una descripcion 809',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234809ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 38.26799294320483,
		'comision'    => 0,
		'fecha'       =>  '27/9/2017',
		'descripcion' => 'esta es una descripcion 810',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234810ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5316458,
		'comision'    => 27,
		'fecha'       =>  '7/10/2017',
		'descripcion' => 'esta es una descripcion 811',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 14,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234811ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 89.57412808736962,
		'comision'    => 0,
		'fecha'       =>  '9/12/2017',
		'descripcion' => 'esta es una descripcion 812',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234812ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4155940,
		'comision'    => 46,
		'fecha'       =>  '7/4/2017',
		'descripcion' => 'esta es una descripcion 813',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 24,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234813ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 113006,
		'comision'    => 57,
		'fecha'       =>  '20/7/2017',
		'descripcion' => 'esta es una descripcion 814',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 5,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234814ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.95493240482405,
		'comision'    => 0,
		'fecha'       =>  '13/3/2017',
		'descripcion' => 'esta es una descripcion 815',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 46,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234815ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8816781,
		'comision'    => 16,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 816',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234816ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.25175697038926,
		'comision'    => 0,
		'fecha'       =>  '30/12/2017',
		'descripcion' => 'esta es una descripcion 817',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 75,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234817ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4047709,
		'comision'    => 95,
		'fecha'       =>  '17/12/2017',
		'descripcion' => 'esta es una descripcion 818',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 22,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234818ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 40.616271398311,
		'comision'    => 0,
		'fecha'       =>  '5/7/2017',
		'descripcion' => 'esta es una descripcion 819',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234819ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.347626772573186,
		'comision'    => 0,
		'fecha'       =>  '5/5/2017',
		'descripcion' => 'esta es una descripcion 820',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 66,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234820ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5478789,
		'comision'    => 53,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 821',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 10,
		'referencia'  => 'ABCR3234821ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.4818496707566275,
		'comision'    => 0,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 822',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 40,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234822ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 15.68714907169568,
		'comision'    => 0,
		'fecha'       =>  '6/3/2017',
		'descripcion' => 'esta es una descripcion 823',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234823ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 63.856867975026304,
		'comision'    => 0,
		'fecha'       =>  '1/10/2017',
		'descripcion' => 'esta es una descripcion 824',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234824ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 680343,
		'comision'    => 70,
		'fecha'       =>  '8/5/2017',
		'descripcion' => 'esta es una descripcion 825',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 51,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234825ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6182258,
		'comision'    => 72,
		'fecha'       =>  '13/9/2017',
		'descripcion' => 'esta es una descripcion 826',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 85,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234826ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1427639,
		'comision'    => 26,
		'fecha'       =>  '1/1/2017',
		'descripcion' => 'esta es una descripcion 827',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 64,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234827ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.88188458930839,
		'comision'    => 0,
		'fecha'       =>  '14/8/2017',
		'descripcion' => 'esta es una descripcion 828',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 65,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234828ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2662420,
		'comision'    => 18,
		'fecha'       =>  '29/11/2017',
		'descripcion' => 'esta es una descripcion 829',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 34,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234829ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.438312773118255,
		'comision'    => 0,
		'fecha'       =>  '20/3/2017',
		'descripcion' => 'esta es una descripcion 830',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 69,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234830ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 14615,
		'comision'    => 47,
		'fecha'       =>  '13/8/2017',
		'descripcion' => 'esta es una descripcion 831',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234831ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 94.94487663017196,
		'comision'    => 0,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 832',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 5,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234832ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 84.58994439888062,
		'comision'    => 0,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 833',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234833ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9397738,
		'comision'    => 45,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 834',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 7,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234834ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 48.587015311312136,
		'comision'    => 0,
		'fecha'       =>  '6/1/2017',
		'descripcion' => 'esta es una descripcion 835',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234835ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9663949,
		'comision'    => 3,
		'fecha'       =>  '30/12/2017',
		'descripcion' => 'esta es una descripcion 836',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234836ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5022461,
		'comision'    => 3,
		'fecha'       =>  '16/8/2017',
		'descripcion' => 'esta es una descripcion 837',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234837ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 47.54575856205774,
		'comision'    => 0,
		'fecha'       =>  '9/4/2017',
		'descripcion' => 'esta es una descripcion 838',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234838ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 92.87669860250489,
		'comision'    => 0,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 839',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234839ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8540701,
		'comision'    => 8,
		'fecha'       =>  '15/7/2017',
		'descripcion' => 'esta es una descripcion 840',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 25,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234840ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.35150991341193,
		'comision'    => 0,
		'fecha'       =>  '19/5/2017',
		'descripcion' => 'esta es una descripcion 841',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234841ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 90.9560823259431,
		'comision'    => 0,
		'fecha'       =>  '18/10/2017',
		'descripcion' => 'esta es una descripcion 842',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234842ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4280383,
		'comision'    => 17,
		'fecha'       =>  '7/12/2017',
		'descripcion' => 'esta es una descripcion 843',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 86,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234843ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2440624,
		'comision'    => 29,
		'fecha'       =>  '21/7/2017',
		'descripcion' => 'esta es una descripcion 844',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234844ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 493716,
		'comision'    => 59,
		'fecha'       =>  '19/9/2017',
		'descripcion' => 'esta es una descripcion 845',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234845ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.625346495580157,
		'comision'    => 0,
		'fecha'       =>  '28/9/2017',
		'descripcion' => 'esta es una descripcion 846',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 15,
		'referencia'  => 'ABCR3234846ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4097534,
		'comision'    => 72,
		'fecha'       =>  '25/10/2017',
		'descripcion' => 'esta es una descripcion 847',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 8,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234847ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 80.4333662755132,
		'comision'    => 0,
		'fecha'       =>  '4/5/2017',
		'descripcion' => 'esta es una descripcion 848',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 39,
		'cuenta_id'   => 16,
		'referencia'  => 'ABCR3234848ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4713722,
		'comision'    => 81,
		'fecha'       =>  '7/5/2017',
		'descripcion' => 'esta es una descripcion 849',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 66,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234849ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8448042,
		'comision'    => 77,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 850',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 87,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234850ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.460810697402987,
		'comision'    => 0,
		'fecha'       =>  '22/5/2017',
		'descripcion' => 'esta es una descripcion 851',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234851ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 16.099306279875737,
		'comision'    => 0,
		'fecha'       =>  '14/9/2017',
		'descripcion' => 'esta es una descripcion 852',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 39,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234852ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 49.929697081212346,
		'comision'    => 0,
		'fecha'       =>  '20/2/2017',
		'descripcion' => 'esta es una descripcion 853',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234853ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5647614,
		'comision'    => 8,
		'fecha'       =>  '15/4/2017',
		'descripcion' => 'esta es una descripcion 854',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234854ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 30.8486187963897,
		'comision'    => 0,
		'fecha'       =>  '11/7/2017',
		'descripcion' => 'esta es una descripcion 855',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 16,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234855ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.18291465785105,
		'comision'    => 0,
		'fecha'       =>  '5/4/2017',
		'descripcion' => 'esta es una descripcion 856',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234856ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 76.95380218314288,
		'comision'    => 0,
		'fecha'       =>  '2/3/2017',
		'descripcion' => 'esta es una descripcion 857',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234857ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4283732,
		'comision'    => 73,
		'fecha'       =>  '27/12/2017',
		'descripcion' => 'esta es una descripcion 858',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 58,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234858ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8793257,
		'comision'    => 14,
		'fecha'       =>  '22/5/2017',
		'descripcion' => 'esta es una descripcion 859',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 88,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234859ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.16963084371255,
		'comision'    => 0,
		'fecha'       =>  '16/7/2017',
		'descripcion' => 'esta es una descripcion 860',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234860ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5308555,
		'comision'    => 15,
		'fecha'       =>  '1/3/2017',
		'descripcion' => 'esta es una descripcion 861',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 12,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234861ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.09515654351442,
		'comision'    => 0,
		'fecha'       =>  '18/12/2017',
		'descripcion' => 'esta es una descripcion 862',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 55,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234862ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.94879828176787,
		'comision'    => 0,
		'fecha'       =>  '25/11/2017',
		'descripcion' => 'esta es una descripcion 863',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234863ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6720099,
		'comision'    => 40,
		'fecha'       =>  '18/6/2017',
		'descripcion' => 'esta es una descripcion 864',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 6,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234864ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.23323938366796,
		'comision'    => 0,
		'fecha'       =>  '28/12/2017',
		'descripcion' => 'esta es una descripcion 865',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 48,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234865ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8840423,
		'comision'    => 3,
		'fecha'       =>  '12/6/2017',
		'descripcion' => 'esta es una descripcion 866',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 30,
		'cuenta_id'   => 60,
		'referencia'  => 'ABCR3234866ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3924139,
		'comision'    => 81,
		'fecha'       =>  '5/9/2017',
		'descripcion' => 'esta es una descripcion 867',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 41,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234867ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8430376,
		'comision'    => 82,
		'fecha'       =>  '18/11/2017',
		'descripcion' => 'esta es una descripcion 868',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234868ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.523136901604214,
		'comision'    => 0,
		'fecha'       =>  '30/5/2017',
		'descripcion' => 'esta es una descripcion 869',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 25,
		'cuenta_id'   => 54,
		'referencia'  => 'ABCR3234869ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.43618894560317,
		'comision'    => 0,
		'fecha'       =>  '6/2/2017',
		'descripcion' => 'esta es una descripcion 870',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 36,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234870ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 41.7429615487009,
		'comision'    => 0,
		'fecha'       =>  '12/2/2017',
		'descripcion' => 'esta es una descripcion 871',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 27,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234871ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 62.403424085694375,
		'comision'    => 0,
		'fecha'       =>  '30/9/2017',
		'descripcion' => 'esta es una descripcion 872',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234872ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3293617,
		'comision'    => 6,
		'fecha'       =>  '2/7/2017',
		'descripcion' => 'esta es una descripcion 873',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 42,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234873ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 38.90421317522502,
		'comision'    => 0,
		'fecha'       =>  '11/4/2017',
		'descripcion' => 'esta es una descripcion 874',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 74,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234874ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 5.887550375422053,
		'comision'    => 0,
		'fecha'       =>  '9/9/2017',
		'descripcion' => 'esta es una descripcion 875',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 57,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR3234875ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 73.77062215782823,
		'comision'    => 0,
		'fecha'       =>  '11/5/2017',
		'descripcion' => 'esta es una descripcion 876',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 9,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234876ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5099121,
		'comision'    => 83,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 877',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 1,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234877ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.586059792561702,
		'comision'    => 0,
		'fecha'       =>  '14/10/2017',
		'descripcion' => 'esta es una descripcion 878',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 11,
		'referencia'  => 'ABCR3234878ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6649949,
		'comision'    => 96,
		'fecha'       =>  '17/2/2017',
		'descripcion' => 'esta es una descripcion 879',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234879ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 95.40877845405853,
		'comision'    => 0,
		'fecha'       =>  '30/11/2017',
		'descripcion' => 'esta es una descripcion 880',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 58,
		'referencia'  => 'ABCR3234880ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9728044,
		'comision'    => 37,
		'fecha'       =>  '3/6/2017',
		'descripcion' => 'esta es una descripcion 881',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 73,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234881ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6674219,
		'comision'    => 59,
		'fecha'       =>  '10/6/2017',
		'descripcion' => 'esta es una descripcion 882',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234882ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7773488,
		'comision'    => 70,
		'fecha'       =>  '2/11/2017',
		'descripcion' => 'esta es una descripcion 883',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234883ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 61.11336321417816,
		'comision'    => 0,
		'fecha'       =>  '20/9/2017',
		'descripcion' => 'esta es una descripcion 884',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 73,
		'cuenta_id'   => 36,
		'referencia'  => 'ABCR3234884ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6302595,
		'comision'    => 63,
		'fecha'       =>  '14/1/2017',
		'descripcion' => 'esta es una descripcion 885',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234885ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8923168,
		'comision'    => 23,
		'fecha'       =>  '30/11/2017',
		'descripcion' => 'esta es una descripcion 886',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 85,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234886ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4811244,
		'comision'    => 32,
		'fecha'       =>  '26/11/2017',
		'descripcion' => 'esta es una descripcion 887',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 53,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234887ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 87.2064362037616,
		'comision'    => 0,
		'fecha'       =>  '8/11/2017',
		'descripcion' => 'esta es una descripcion 888',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 5,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234888ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 28.84009043300216,
		'comision'    => 0,
		'fecha'       =>  '4/10/2017',
		'descripcion' => 'esta es una descripcion 889',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234889ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 5.157932207412573,
		'comision'    => 0,
		'fecha'       =>  '9/11/2017',
		'descripcion' => 'esta es una descripcion 890',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 38,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234890ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 98.91482394343734,
		'comision'    => 0,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 891',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234891ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8374796,
		'comision'    => 55,
		'fecha'       =>  '18/4/2017',
		'descripcion' => 'esta es una descripcion 892',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 90,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234892ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 17.771722280319548,
		'comision'    => 0,
		'fecha'       =>  '27/3/2017',
		'descripcion' => 'esta es una descripcion 893',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 79,
		'cuenta_id'   => 17,
		'referencia'  => 'ABCR3234893ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9378413,
		'comision'    => 29,
		'fecha'       =>  '21/7/2017',
		'descripcion' => 'esta es una descripcion 894',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 40,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234894ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5068603,
		'comision'    => 23,
		'fecha'       =>  '22/1/2017',
		'descripcion' => 'esta es una descripcion 895',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234895ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 31.948077818411804,
		'comision'    => 0,
		'fecha'       =>  '12/1/2017',
		'descripcion' => 'esta es una descripcion 896',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234896ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8397769,
		'comision'    => 62,
		'fecha'       =>  '20/11/2017',
		'descripcion' => 'esta es una descripcion 897',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 18,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234897ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4671165,
		'comision'    => 67,
		'fecha'       =>  '11/3/2017',
		'descripcion' => 'esta es una descripcion 898',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234898ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.97780399402421,
		'comision'    => 0,
		'fecha'       =>  '1/12/2017',
		'descripcion' => 'esta es una descripcion 899',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 45,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234899ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7295690,
		'comision'    => 70,
		'fecha'       =>  '7/3/2017',
		'descripcion' => 'esta es una descripcion 900',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234900ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1588821,
		'comision'    => 31,
		'fecha'       =>  '22/1/2017',
		'descripcion' => 'esta es una descripcion 901',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 35,
		'cuenta_id'   => 45,
		'referencia'  => 'ABCR3234901ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9043404,
		'comision'    => 89,
		'fecha'       =>  '18/11/2017',
		'descripcion' => 'esta es una descripcion 902',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 65,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234902ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 45.03194646937564,
		'comision'    => 0,
		'fecha'       =>  '1/1/2017',
		'descripcion' => 'esta es una descripcion 903',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 47,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234903ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 42.57912630591829,
		'comision'    => 0,
		'fecha'       =>  '29/5/2017',
		'descripcion' => 'esta es una descripcion 904',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234904ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6008008,
		'comision'    => 35,
		'fecha'       =>  '20/4/2017',
		'descripcion' => 'esta es una descripcion 905',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234905ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 669634,
		'comision'    => 47,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 906',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 10,
		'cuenta_id'   => 1,
		'referencia'  => 'ABCR3234906ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.477891284324436,
		'comision'    => 0,
		'fecha'       =>  '21/8/2017',
		'descripcion' => 'esta es una descripcion 907',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 44,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234907ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3854166,
		'comision'    => 37,
		'fecha'       =>  '26/2/2017',
		'descripcion' => 'esta es una descripcion 908',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 52,
		'cuenta_id'   => 9,
		'referencia'  => 'ABCR3234908ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 33.23547256109007,
		'comision'    => 0,
		'fecha'       =>  '27/9/2017',
		'descripcion' => 'esta es una descripcion 909',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 88,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234909ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6202647,
		'comision'    => 10,
		'fecha'       =>  '27/1/2017',
		'descripcion' => 'esta es una descripcion 910',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 74,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234910ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.84540735706137,
		'comision'    => 0,
		'fecha'       =>  '26/7/2017',
		'descripcion' => 'esta es una descripcion 911',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234911ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.382686443876732,
		'comision'    => 0,
		'fecha'       =>  '28/7/2017',
		'descripcion' => 'esta es una descripcion 912',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 71,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234912ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3896666,
		'comision'    => 38,
		'fecha'       =>  '25/12/2017',
		'descripcion' => 'esta es una descripcion 913',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 46,
		'referencia'  => 'ABCR3234913ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 72.1019477604094,
		'comision'    => 0,
		'fecha'       =>  '24/10/2017',
		'descripcion' => 'esta es una descripcion 914',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 23,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234914ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 36.30371519815987,
		'comision'    => 0,
		'fecha'       =>  '1/4/2017',
		'descripcion' => 'esta es una descripcion 915',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 30,
		'referencia'  => 'ABCR3234915ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 67.60793940460114,
		'comision'    => 0,
		'fecha'       =>  '6/8/2017',
		'descripcion' => 'esta es una descripcion 916',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 27,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234916ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4966117,
		'comision'    => 28,
		'fecha'       =>  '7/5/2017',
		'descripcion' => 'esta es una descripcion 917',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 62,
		'cuenta_id'   => 19,
		'referencia'  => 'ABCR3234917ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 79939,
		'comision'    => 26,
		'fecha'       =>  '25/6/2017',
		'descripcion' => 'esta es una descripcion 918',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 44,
		'referencia'  => 'ABCR3234918ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5113153,
		'comision'    => 7,
		'fecha'       =>  '7/6/2017',
		'descripcion' => 'esta es una descripcion 919',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234919ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9981335,
		'comision'    => 72,
		'fecha'       =>  '22/10/2017',
		'descripcion' => 'esta es una descripcion 920',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 45,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234920ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9471374,
		'comision'    => 36,
		'fecha'       =>  '30/12/2017',
		'descripcion' => 'esta es una descripcion 921',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234921ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 53.81146266103507,
		'comision'    => 0,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 922',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 90,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234922ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9756091,
		'comision'    => 73,
		'fecha'       =>  '19/2/2017',
		'descripcion' => 'esta es una descripcion 923',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 23,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234923ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3584525,
		'comision'    => 99,
		'fecha'       =>  '30/3/2017',
		'descripcion' => 'esta es una descripcion 924',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 21,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234924ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 64.03633266678185,
		'comision'    => 0,
		'fecha'       =>  '21/6/2017',
		'descripcion' => 'esta es una descripcion 925',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 39,
		'referencia'  => 'ABCR3234925ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 59.21892940910062,
		'comision'    => 0,
		'fecha'       =>  '18/10/2017',
		'descripcion' => 'esta es una descripcion 926',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234926ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.02424711258922,
		'comision'    => 0,
		'fecha'       =>  '29/9/2017',
		'descripcion' => 'esta es una descripcion 927',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 14,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234927ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 29.959225947148568,
		'comision'    => 0,
		'fecha'       =>  '10/11/2017',
		'descripcion' => 'esta es una descripcion 928',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 33,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234928ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 51.393751960858026,
		'comision'    => 0,
		'fecha'       =>  '8/8/2017',
		'descripcion' => 'esta es una descripcion 929',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 26,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234929ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 94.81552580673791,
		'comision'    => 0,
		'fecha'       =>  '23/4/2017',
		'descripcion' => 'esta es una descripcion 930',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 11,
		'cuenta_id'   => 23,
		'referencia'  => 'ABCR3234930ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8834132,
		'comision'    => 38,
		'fecha'       =>  '15/7/2017',
		'descripcion' => 'esta es una descripcion 931',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 35,
		'referencia'  => 'ABCR3234931ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9388382,
		'comision'    => 68,
		'fecha'       =>  '6/1/2017',
		'descripcion' => 'esta es una descripcion 932',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 26,
		'cuenta_id'   => 37,
		'referencia'  => 'ABCR3234932ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7015915,
		'comision'    => 56,
		'fecha'       =>  '8/7/2017',
		'descripcion' => 'esta es una descripcion 933',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 56,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234933ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 69.99293723264029,
		'comision'    => 0,
		'fecha'       =>  '28/1/2017',
		'descripcion' => 'esta es una descripcion 934',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 28,
		'cuenta_id'   => 25,
		'referencia'  => 'ABCR3234934ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8428993,
		'comision'    => 45,
		'fecha'       =>  '12/4/2017',
		'descripcion' => 'esta es una descripcion 935',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 13,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234935ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5665320,
		'comision'    => 27,
		'fecha'       =>  '16/11/2017',
		'descripcion' => 'esta es una descripcion 936',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 70,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234936ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 28758,
		'comision'    => 33,
		'fecha'       =>  '9/3/2017',
		'descripcion' => 'esta es una descripcion 937',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 31,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234937ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5369171,
		'comision'    => 43,
		'fecha'       =>  '8/12/2017',
		'descripcion' => 'esta es una descripcion 938',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 33,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234938ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4770700,
		'comision'    => 30,
		'fecha'       =>  '25/4/2017',
		'descripcion' => 'esta es una descripcion 939',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234939ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.8805081081675651,
		'comision'    => 0,
		'fecha'       =>  '2/8/2017',
		'descripcion' => 'esta es una descripcion 940',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 65,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234940ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 32.436389713800395,
		'comision'    => 0,
		'fecha'       =>  '6/11/2017',
		'descripcion' => 'esta es una descripcion 941',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 39,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234941ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 63.716090055398354,
		'comision'    => 0,
		'fecha'       =>  '10/7/2017',
		'descripcion' => 'esta es una descripcion 942',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 57,
		'cuenta_id'   => 4,
		'referencia'  => 'ABCR3234942ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 80.36827148231191,
		'comision'    => 0,
		'fecha'       =>  '22/8/2017',
		'descripcion' => 'esta es una descripcion 943',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 18,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234943ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 14.713088545435374,
		'comision'    => 0,
		'fecha'       =>  '19/10/2017',
		'descripcion' => 'esta es una descripcion 944',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 87,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234944ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4009679,
		'comision'    => 1,
		'fecha'       =>  '25/5/2017',
		'descripcion' => 'esta es una descripcion 945',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 67,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234945ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 27.718935352156,
		'comision'    => 0,
		'fecha'       =>  '24/1/2017',
		'descripcion' => 'esta es una descripcion 946',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 42,
		'cuenta_id'   => 55,
		'referencia'  => 'ABCR3234946ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 2812389,
		'comision'    => 96,
		'fecha'       =>  '3/6/2017',
		'descripcion' => 'esta es una descripcion 947',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 63,
		'cuenta_id'   => 29,
		'referencia'  => 'ABCR3234947ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.01938609447133,
		'comision'    => 0,
		'fecha'       =>  '4/6/2017',
		'descripcion' => 'esta es una descripcion 948',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 35,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234948ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 39.008137146226886,
		'comision'    => 0,
		'fecha'       =>  '24/5/2017',
		'descripcion' => 'esta es una descripcion 949',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 85,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234949ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 81.2270660400971,
		'comision'    => 0,
		'fecha'       =>  '11/10/2017',
		'descripcion' => 'esta es una descripcion 950',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234950ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 73.28449898342036,
		'comision'    => 0,
		'fecha'       =>  '28/2/2017',
		'descripcion' => 'esta es una descripcion 951',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234951ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 78.58221001708407,
		'comision'    => 0,
		'fecha'       =>  '18/4/2017',
		'descripcion' => 'esta es una descripcion 952',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 80,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234952ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 62.23884851214243,
		'comision'    => 0,
		'fecha'       =>  '13/1/2017',
		'descripcion' => 'esta es una descripcion 953',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 48,
		'cuenta_id'   => 48,
		'referencia'  => 'ABCR3234953ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7621627,
		'comision'    => 83,
		'fecha'       =>  '14/5/2017',
		'descripcion' => 'esta es una descripcion 954',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 75,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234954ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 47.16068071058614,
		'comision'    => 0,
		'fecha'       =>  '18/10/2017',
		'descripcion' => 'esta es una descripcion 955',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 29,
		'cuenta_id'   => 56,
		'referencia'  => 'ABCR3234955ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9649947,
		'comision'    => 48,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 956',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 54,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234956ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6945730,
		'comision'    => 30,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 957',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 37,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234957ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 5.9955891278584215,
		'comision'    => 0,
		'fecha'       =>  '10/7/2017',
		'descripcion' => 'esta es una descripcion 958',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 62,
		'cuenta_id'   => 24,
		'referencia'  => 'ABCR3234958ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 58.86599841848756,
		'comision'    => 0,
		'fecha'       =>  '6/8/2017',
		'descripcion' => 'esta es una descripcion 959',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 81,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234959ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 57.67207703269994,
		'comision'    => 0,
		'fecha'       =>  '20/9/2017',
		'descripcion' => 'esta es una descripcion 960',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 34,
		'cuenta_id'   => 31,
		'referencia'  => 'ABCR3234960ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 77.2564226027559,
		'comision'    => 0,
		'fecha'       =>  '25/2/2017',
		'descripcion' => 'esta es una descripcion 961',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 50,
		'referencia'  => 'ABCR3234961ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 19.922739597123748,
		'comision'    => 0,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 962',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 43,
		'cuenta_id'   => 51,
		'referencia'  => 'ABCR3234962ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 324250,
		'comision'    => 60,
		'fecha'       =>  '4/2/2017',
		'descripcion' => 'esta es una descripcion 963',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 3,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234963ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 56.88252310670958,
		'comision'    => 0,
		'fecha'       =>  '5/4/2017',
		'descripcion' => 'esta es una descripcion 964',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 83,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234964ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 76.8002007845984,
		'comision'    => 0,
		'fecha'       =>  '7/6/2017',
		'descripcion' => 'esta es una descripcion 965',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 68,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234965ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3599551,
		'comision'    => 36,
		'fecha'       =>  '26/10/2017',
		'descripcion' => 'esta es una descripcion 966',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 32,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234966ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1900579,
		'comision'    => 26,
		'fecha'       =>  '30/1/2017',
		'descripcion' => 'esta es una descripcion 967',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 13,
		'referencia'  => 'ABCR3234967ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7275097,
		'comision'    => 59,
		'fecha'       =>  '17/6/2017',
		'descripcion' => 'esta es una descripcion 968',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 61,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234968ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.019343432337293,
		'comision'    => 0,
		'fecha'       =>  '12/10/2017',
		'descripcion' => 'esta es una descripcion 969',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 7,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234969ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7645257,
		'comision'    => 12,
		'fecha'       =>  '20/1/2017',
		'descripcion' => 'esta es una descripcion 970',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 89,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234970ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 8240793,
		'comision'    => 54,
		'fecha'       =>  '29/11/2017',
		'descripcion' => 'esta es una descripcion 971',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 29,
		'cuenta_id'   => 42,
		'referencia'  => 'ABCR3234971ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1909390,
		'comision'    => 43,
		'fecha'       =>  '19/2/2017',
		'descripcion' => 'esta es una descripcion 972',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 72,
		'cuenta_id'   => 38,
		'referencia'  => 'ABCR3234972ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 47.10837015552536,
		'comision'    => 0,
		'fecha'       =>  '27/6/2017',
		'descripcion' => 'esta es una descripcion 973',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 14,
		'referencia'  => 'ABCR3234973ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 99.23546836610812,
		'comision'    => 0,
		'fecha'       =>  '26/4/2017',
		'descripcion' => 'esta es una descripcion 974',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 86,
		'cuenta_id'   => 43,
		'referencia'  => 'ABCR3234974ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 52.106474943098355,
		'comision'    => 0,
		'fecha'       =>  '18/2/2017',
		'descripcion' => 'esta es una descripcion 975',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 3,
		'cuenta_id'   => 32,
		'referencia'  => 'ABCR3234975ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1800964,
		'comision'    => 20,
		'fecha'       =>  '13/8/2017',
		'descripcion' => 'esta es una descripcion 976',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 24,
		'cuenta_id'   => 12,
		'referencia'  => 'ABCR3234976ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 35.3781246771252,
		'comision'    => 0,
		'fecha'       =>  '6/3/2017',
		'descripcion' => 'esta es una descripcion 977',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 63,
		'cuenta_id'   => 5,
		'referencia'  => 'ABCR3234977ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9077501,
		'comision'    => 80,
		'fecha'       =>  '16/3/2017',
		'descripcion' => 'esta es una descripcion 978',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 78,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234978ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6660559,
		'comision'    => 24,
		'fecha'       =>  '29/10/2017',
		'descripcion' => 'esta es una descripcion 979',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 68,
		'cuenta_id'   => 21,
		'referencia'  => 'ABCR3234979ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9022129,
		'comision'    => 33,
		'fecha'       =>  '10/8/2017',
		'descripcion' => 'esta es una descripcion 980',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 67,
		'cuenta_id'   => 57,
		'referencia'  => 'ABCR3234980ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 3646957,
		'comision'    => 83,
		'fecha'       =>  '27/12/2017',
		'descripcion' => 'esta es una descripcion 981',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 84,
		'cuenta_id'   => 59,
		'referencia'  => 'ABCR3234981ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4444527,
		'comision'    => 35,
		'fecha'       =>  '26/12/2017',
		'descripcion' => 'esta es una descripcion 982',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 50,
		'cuenta_id'   => 22,
		'referencia'  => 'ABCR3234982ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 88.94076312263087,
		'comision'    => 0,
		'fecha'       =>  '3/5/2017',
		'descripcion' => 'esta es una descripcion 983',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 45,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234983ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 20.252684091852167,
		'comision'    => 0,
		'fecha'       =>  '10/2/2017',
		'descripcion' => 'esta es una descripcion 984',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 41,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234984ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 55.0530441142722,
		'comision'    => 0,
		'fecha'       =>  '25/7/2017',
		'descripcion' => 'esta es una descripcion 985',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 37,
		'cuenta_id'   => 18,
		'referencia'  => 'ABCR3234985ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 25.388336597487555,
		'comision'    => 0,
		'fecha'       =>  '15/10/2017',
		'descripcion' => 'esta es una descripcion 986',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 57,
		'cuenta_id'   => 53,
		'referencia'  => 'ABCR3234986ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 7.312474996397894,
		'comision'    => 0,
		'fecha'       =>  '10/1/2017',
		'descripcion' => 'esta es una descripcion 987',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 67,
		'cuenta_id'   => 27,
		'referencia'  => 'ABCR3234987ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9408220,
		'comision'    => 50,
		'fecha'       =>  '6/9/2017',
		'descripcion' => 'esta es una descripcion 988',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 39,
		'cuenta_id'   => 26,
		'referencia'  => 'ABCR3234988ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 10.923846525825187,
		'comision'    => 0,
		'fecha'       =>  '4/6/2017',
		'descripcion' => 'esta es una descripcion 989',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 1,
		'cuenta_id'   => 3,
		'referencia'  => 'ABCR3234989ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9455276,
		'comision'    => 45,
		'fecha'       =>  '7/6/2017',
		'descripcion' => 'esta es una descripcion 990',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 77,
		'cuenta_id'   => 49,
		'referencia'  => 'ABCR3234990ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 6382533,
		'comision'    => 37,
		'fecha'       =>  '16/5/2017',
		'descripcion' => 'esta es una descripcion 991',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 28,
		'cuenta_id'   => 28,
		'referencia'  => 'ABCR3234991ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 35.930243499330764,
		'comision'    => 0,
		'fecha'       =>  '26/8/2017',
		'descripcion' => 'esta es una descripcion 992',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 30,
		'cuenta_id'   => 34,
		'referencia'  => 'ABCR3234992ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 16.411402143446868,
		'comision'    => 0,
		'fecha'       =>  '27/3/2017',
		'descripcion' => 'esta es una descripcion 993',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 60,
		'cuenta_id'   => 52,
		'referencia'  => 'ABCR3234993ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 7638770,
		'comision'    => 13,
		'fecha'       =>  '3/11/2017',
		'descripcion' => 'esta es una descripcion 994',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 55,
		'cuenta_id'   => 2,
		'referencia'  => 'ABCR3234994ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 4369970,
		'comision'    => 24,
		'fecha'       =>  '5/3/2017',
		'descripcion' => 'esta es una descripcion 995',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 65,
		'cuenta_id'   => 8,
		'referencia'  => 'ABCR3234995ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 85.86112704515504,
		'comision'    => 0,
		'fecha'       =>  '12/5/2017',
		'descripcion' => 'esta es una descripcion 996',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 20,
		'cuenta_id'   => 47,
		'referencia'  => 'ABCR3234996ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 5129177,
		'comision'    => 6,
		'fecha'       =>  '14/9/2017',
		'descripcion' => 'esta es una descripcion 997',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 82,
		'cuenta_id'   => 7,
		'referencia'  => 'ABCR3234997ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 9701228,
		'comision'    => 9,
		'fecha'       =>  '19/4/2017',
		'descripcion' => 'esta es una descripcion 998',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 44,
		'cuenta_id'   => 41,
		'referencia'  => 'ABCR3234998ASDAS'
  ]);
  

  Movimiento::crearMovimiento([
		'monto'       => 0.7753784732784497,
		'comision'    => 0,
		'fecha'       =>  '19/1/2017',
		'descripcion' => 'esta es una descripcion 999',
		'tipo'        =>'EFECTIVO',
		'negocio_id'  => 32,
		'cuenta_id'   => 6,
		'referencia'  => 'ABCR3234999ASDAS'
  ]);
  

	Movimiento::crearMovimiento([
		'monto'       => 1976141,
		'comision'    => 40,
		'fecha'       =>  '27/11/2017',
		'descripcion' => 'esta es una descripcion 1000',
		'tipo'        =>'TRANSFERENCIA',
		'negocio_id'  => 83,
		'cuenta_id'   => 20,
		'referencia'  => 'ABCR32341000ASDAS'
  ]);
  




    }

}
