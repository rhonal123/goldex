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

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  625000,
	  'fecha' => Carbon::parse('2016/8/21') ,
	  'descripcion' => 'movimeinto1',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  155000,
	  'fecha' => Carbon::parse('2016/12/27') ,
	  'descripcion' => 'movimeinto2',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  965000,
	  'fecha' => Carbon::parse('2016/5/24') ,
	  'descripcion' => 'movimeinto3',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  300000,
	  'fecha' => Carbon::parse('2016/8/13') ,
	  'descripcion' => 'movimeinto4',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  842000,
	  'fecha' => Carbon::parse('2016/1/5') ,
	  'descripcion' => 'movimeinto5',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   73,
	  'monto' =>  804000,
	  'fecha' => Carbon::parse('2016/5/22') ,
	  'descripcion' => 'movimeinto6',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  538000,
	  'fecha' => Carbon::parse('2016/2/27') ,
	  'descripcion' => 'movimeinto7',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  691000,
	  'fecha' => Carbon::parse('2016/3/12') ,
	  'descripcion' => 'movimeinto8',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  545000,
	  'fecha' => Carbon::parse('2016/8/10') ,
	  'descripcion' => 'movimeinto9',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  805000,
	  'fecha' => Carbon::parse('2016/6/27') ,
	  'descripcion' => 'movimeinto10',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   98,
	  'monto' =>  593000,
	  'fecha' => Carbon::parse('2016/8/5') ,
	  'descripcion' => 'movimeinto11',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  870000,
	  'fecha' => Carbon::parse('2016/2/28') ,
	  'descripcion' => 'movimeinto12',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  357000,
	  'fecha' => Carbon::parse('2016/5/3') ,
	  'descripcion' => 'movimeinto13',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  699000,
	  'fecha' => Carbon::parse('2016/9/10') ,
	  'descripcion' => 'movimeinto14',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  425000,
	  'fecha' => Carbon::parse('2016/3/4') ,
	  'descripcion' => 'movimeinto15',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  147000,
	  'fecha' => Carbon::parse('2016/3/1') ,
	  'descripcion' => 'movimeinto16',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  418000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto17',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  320000,
	  'fecha' => Carbon::parse('2016/8/17') ,
	  'descripcion' => 'movimeinto18',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  455000,
	  'fecha' => Carbon::parse('2016/5/15') ,
	  'descripcion' => 'movimeinto19',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  321000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto20',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  122000,
	  'fecha' => Carbon::parse('2016/7/4') ,
	  'descripcion' => 'movimeinto21',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  219000,
	  'fecha' => Carbon::parse('2016/8/17') ,
	  'descripcion' => 'movimeinto22',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  771000,
	  'fecha' => Carbon::parse('2016/6/11') ,
	  'descripcion' => 'movimeinto23',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  286000,
	  'fecha' => Carbon::parse('2016/10/26') ,
	  'descripcion' => 'movimeinto24',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  473000,
	  'fecha' => Carbon::parse('2016/10/4') ,
	  'descripcion' => 'movimeinto25',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  751000,
	  'fecha' => Carbon::parse('2016/7/26') ,
	  'descripcion' => 'movimeinto26',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  338000,
	  'fecha' => Carbon::parse('2016/8/17') ,
	  'descripcion' => 'movimeinto27',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  832000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto28',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  337000,
	  'fecha' => Carbon::parse('2016/4/18') ,
	  'descripcion' => 'movimeinto29',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  607000,
	  'fecha' => Carbon::parse('2016/7/24') ,
	  'descripcion' => 'movimeinto30',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  369000,
	  'fecha' => Carbon::parse('2016/9/13') ,
	  'descripcion' => 'movimeinto31',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  321000,
	  'fecha' => Carbon::parse('2016/8/26') ,
	  'descripcion' => 'movimeinto32',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  760000,
	  'fecha' => Carbon::parse('2016/6/28') ,
	  'descripcion' => 'movimeinto33',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  666000,
	  'fecha' => Carbon::parse('2016/4/10') ,
	  'descripcion' => 'movimeinto34',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  820000,
	  'fecha' => Carbon::parse('2016/3/16') ,
	  'descripcion' => 'movimeinto35',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  398000,
	  'fecha' => Carbon::parse('2016/4/15') ,
	  'descripcion' => 'movimeinto36',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  346000,
	  'fecha' => Carbon::parse('2016/12/10') ,
	  'descripcion' => 'movimeinto37',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  186000,
	  'fecha' => Carbon::parse('2016/7/25') ,
	  'descripcion' => 'movimeinto38',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  570000,
	  'fecha' => Carbon::parse('2016/9/3') ,
	  'descripcion' => 'movimeinto39',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  665000,
	  'fecha' => Carbon::parse('2016/11/8') ,
	  'descripcion' => 'movimeinto40',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  324000,
	  'fecha' => Carbon::parse('2016/3/28') ,
	  'descripcion' => 'movimeinto41',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   66,
	  'monto' =>  138000,
	  'fecha' => Carbon::parse('2016/9/12') ,
	  'descripcion' => 'movimeinto42',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  585000,
	  'fecha' => Carbon::parse('2016/6/10') ,
	  'descripcion' => 'movimeinto43',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  679000,
	  'fecha' => Carbon::parse('2016/11/7') ,
	  'descripcion' => 'movimeinto44',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  692000,
	  'fecha' => Carbon::parse('2016/7/1') ,
	  'descripcion' => 'movimeinto45',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  685000,
	  'fecha' => Carbon::parse('2016/1/24') ,
	  'descripcion' => 'movimeinto46',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  333000,
	  'fecha' => Carbon::parse('2016/6/11') ,
	  'descripcion' => 'movimeinto47',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  823000,
	  'fecha' => Carbon::parse('2016/12/13') ,
	  'descripcion' => 'movimeinto48',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  819000,
	  'fecha' => Carbon::parse('2016/11/3') ,
	  'descripcion' => 'movimeinto49',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  668000,
	  'fecha' => Carbon::parse('2016/5/13') ,
	  'descripcion' => 'movimeinto50',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  489000,
	  'fecha' => Carbon::parse('2016/11/16') ,
	  'descripcion' => 'movimeinto51',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  508000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto52',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  338000,
	  'fecha' => Carbon::parse('2016/1/6') ,
	  'descripcion' => 'movimeinto53',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  389000,
	  'fecha' => Carbon::parse('2016/5/4') ,
	  'descripcion' => 'movimeinto54',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  377000,
	  'fecha' => Carbon::parse('2016/4/19') ,
	  'descripcion' => 'movimeinto55',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  575000,
	  'fecha' => Carbon::parse('2016/6/23') ,
	  'descripcion' => 'movimeinto56',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  115000,
	  'fecha' => Carbon::parse('2016/5/15') ,
	  'descripcion' => 'movimeinto57',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  877000,
	  'fecha' => Carbon::parse('2016/4/3') ,
	  'descripcion' => 'movimeinto58',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  369000,
	  'fecha' => Carbon::parse('2016/8/16') ,
	  'descripcion' => 'movimeinto59',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  339000,
	  'fecha' => Carbon::parse('2016/2/21') ,
	  'descripcion' => 'movimeinto60',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  493000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto61',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  733000,
	  'fecha' => Carbon::parse('2016/11/4') ,
	  'descripcion' => 'movimeinto62',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  757000,
	  'fecha' => Carbon::parse('2016/3/11') ,
	  'descripcion' => 'movimeinto63',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  796000,
	  'fecha' => Carbon::parse('2016/9/13') ,
	  'descripcion' => 'movimeinto64',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  191000,
	  'fecha' => Carbon::parse('2016/11/13') ,
	  'descripcion' => 'movimeinto65',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  673000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto66',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  436000,
	  'fecha' => Carbon::parse('2016/2/27') ,
	  'descripcion' => 'movimeinto67',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  823000,
	  'fecha' => Carbon::parse('2016/8/5') ,
	  'descripcion' => 'movimeinto68',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  179000,
	  'fecha' => Carbon::parse('2016/6/1') ,
	  'descripcion' => 'movimeinto69',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  652000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto70',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  686000,
	  'fecha' => Carbon::parse('2016/1/3') ,
	  'descripcion' => 'movimeinto71',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  158000,
	  'fecha' => Carbon::parse('2016/11/12') ,
	  'descripcion' => 'movimeinto72',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  162000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto73',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  100000,
	  'fecha' => Carbon::parse('2016/1/17') ,
	  'descripcion' => 'movimeinto74',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  863000,
	  'fecha' => Carbon::parse('2016/9/6') ,
	  'descripcion' => 'movimeinto75',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  815000,
	  'fecha' => Carbon::parse('2016/11/14') ,
	  'descripcion' => 'movimeinto76',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  813000,
	  'fecha' => Carbon::parse('2016/10/28') ,
	  'descripcion' => 'movimeinto77',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  172000,
	  'fecha' => Carbon::parse('2016/11/10') ,
	  'descripcion' => 'movimeinto78',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  415000,
	  'fecha' => Carbon::parse('2016/5/5') ,
	  'descripcion' => 'movimeinto79',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  194000,
	  'fecha' => Carbon::parse('2016/9/22') ,
	  'descripcion' => 'movimeinto80',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  248000,
	  'fecha' => Carbon::parse('2016/2/16') ,
	  'descripcion' => 'movimeinto81',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  887000,
	  'fecha' => Carbon::parse('2016/9/6') ,
	  'descripcion' => 'movimeinto82',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  557000,
	  'fecha' => Carbon::parse('2016/9/3') ,
	  'descripcion' => 'movimeinto83',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  447000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto84',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  789000,
	  'fecha' => Carbon::parse('2016/10/3') ,
	  'descripcion' => 'movimeinto85',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  324000,
	  'fecha' => Carbon::parse('2016/5/22') ,
	  'descripcion' => 'movimeinto86',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  933000,
	  'fecha' => Carbon::parse('2016/7/21') ,
	  'descripcion' => 'movimeinto87',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  571000,
	  'fecha' => Carbon::parse('2016/8/24') ,
	  'descripcion' => 'movimeinto88',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  207000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto89',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  977000,
	  'fecha' => Carbon::parse('2016/5/7') ,
	  'descripcion' => 'movimeinto90',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  195000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto91',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  410000,
	  'fecha' => Carbon::parse('2016/7/28') ,
	  'descripcion' => 'movimeinto92',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  316000,
	  'fecha' => Carbon::parse('2016/2/14') ,
	  'descripcion' => 'movimeinto93',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  786000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto94',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  442000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto95',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  910000,
	  'fecha' => Carbon::parse('2016/3/25') ,
	  'descripcion' => 'movimeinto96',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  253000,
	  'fecha' => Carbon::parse('2016/1/7') ,
	  'descripcion' => 'movimeinto97',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  267000,
	  'fecha' => Carbon::parse('2016/7/16') ,
	  'descripcion' => 'movimeinto98',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  793000,
	  'fecha' => Carbon::parse('2016/7/16') ,
	  'descripcion' => 'movimeinto99',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  194000,
	  'fecha' => Carbon::parse('2016/5/19') ,
	  'descripcion' => 'movimeinto100',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  973000,
	  'fecha' => Carbon::parse('2016/1/22') ,
	  'descripcion' => 'movimeinto101',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  308000,
	  'fecha' => Carbon::parse('2016/4/13') ,
	  'descripcion' => 'movimeinto102',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  197000,
	  'fecha' => Carbon::parse('2016/6/24') ,
	  'descripcion' => 'movimeinto103',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  695000,
	  'fecha' => Carbon::parse('2016/2/5') ,
	  'descripcion' => 'movimeinto104',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  565000,
	  'fecha' => Carbon::parse('2016/1/10') ,
	  'descripcion' => 'movimeinto105',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  896000,
	  'fecha' => Carbon::parse('2016/1/6') ,
	  'descripcion' => 'movimeinto106',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  418000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto107',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  371000,
	  'fecha' => Carbon::parse('2016/6/1') ,
	  'descripcion' => 'movimeinto108',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  341000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto109',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  887000,
	  'fecha' => Carbon::parse('2016/3/27') ,
	  'descripcion' => 'movimeinto110',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  733000,
	  'fecha' => Carbon::parse('2016/5/11') ,
	  'descripcion' => 'movimeinto111',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  479000,
	  'fecha' => Carbon::parse('2016/3/15') ,
	  'descripcion' => 'movimeinto112',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  875000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto113',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  379000,
	  'fecha' => Carbon::parse('2016/6/11') ,
	  'descripcion' => 'movimeinto114',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  977000,
	  'fecha' => Carbon::parse('2016/5/27') ,
	  'descripcion' => 'movimeinto115',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  907000,
	  'fecha' => Carbon::parse('2016/12/9') ,
	  'descripcion' => 'movimeinto116',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  107000,
	  'fecha' => Carbon::parse('2016/5/2') ,
	  'descripcion' => 'movimeinto117',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   29,
	  'monto' =>  176000,
	  'fecha' => Carbon::parse('2016/1/12') ,
	  'descripcion' => 'movimeinto118',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  500000,
	  'fecha' => Carbon::parse('2016/8/28') ,
	  'descripcion' => 'movimeinto119',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  509000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto120',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  392000,
	  'fecha' => Carbon::parse('2016/2/27') ,
	  'descripcion' => 'movimeinto121',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  119000,
	  'fecha' => Carbon::parse('2016/3/26') ,
	  'descripcion' => 'movimeinto122',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  182000,
	  'fecha' => Carbon::parse('2016/1/7') ,
	  'descripcion' => 'movimeinto123',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  384000,
	  'fecha' => Carbon::parse('2016/12/1') ,
	  'descripcion' => 'movimeinto124',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  808000,
	  'fecha' => Carbon::parse('2016/9/24') ,
	  'descripcion' => 'movimeinto125',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  735000,
	  'fecha' => Carbon::parse('2016/5/19') ,
	  'descripcion' => 'movimeinto126',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  259000,
	  'fecha' => Carbon::parse('2016/10/25') ,
	  'descripcion' => 'movimeinto127',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  901000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto128',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  277000,
	  'fecha' => Carbon::parse('2016/6/28') ,
	  'descripcion' => 'movimeinto129',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  959000,
	  'fecha' => Carbon::parse('2016/2/16') ,
	  'descripcion' => 'movimeinto130',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  289000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto131',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  971000,
	  'fecha' => Carbon::parse('2016/6/26') ,
	  'descripcion' => 'movimeinto132',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   73,
	  'monto' =>  556000,
	  'fecha' => Carbon::parse('2016/1/13') ,
	  'descripcion' => 'movimeinto133',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  259000,
	  'fecha' => Carbon::parse('2016/12/7') ,
	  'descripcion' => 'movimeinto134',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   84,
	  'monto' =>  474000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto135',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  851000,
	  'fecha' => Carbon::parse('2016/12/22') ,
	  'descripcion' => 'movimeinto136',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  144000,
	  'fecha' => Carbon::parse('2016/4/1') ,
	  'descripcion' => 'movimeinto137',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  652000,
	  'fecha' => Carbon::parse('2016/2/1') ,
	  'descripcion' => 'movimeinto138',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  117000,
	  'fecha' => Carbon::parse('2016/10/10') ,
	  'descripcion' => 'movimeinto139',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  947000,
	  'fecha' => Carbon::parse('2016/11/25') ,
	  'descripcion' => 'movimeinto140',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  170000,
	  'fecha' => Carbon::parse('2016/1/2') ,
	  'descripcion' => 'movimeinto141',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  814000,
	  'fecha' => Carbon::parse('2016/11/24') ,
	  'descripcion' => 'movimeinto142',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  405000,
	  'fecha' => Carbon::parse('2016/11/7') ,
	  'descripcion' => 'movimeinto143',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  605000,
	  'fecha' => Carbon::parse('2016/10/18') ,
	  'descripcion' => 'movimeinto144',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  128000,
	  'fecha' => Carbon::parse('2016/5/20') ,
	  'descripcion' => 'movimeinto145',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  908000,
	  'fecha' => Carbon::parse('2016/9/12') ,
	  'descripcion' => 'movimeinto146',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  609000,
	  'fecha' => Carbon::parse('2016/12/20') ,
	  'descripcion' => 'movimeinto147',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  583000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto148',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  820000,
	  'fecha' => Carbon::parse('2016/11/25') ,
	  'descripcion' => 'movimeinto149',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  295000,
	  'fecha' => Carbon::parse('2016/7/20') ,
	  'descripcion' => 'movimeinto150',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  852000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto151',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  697000,
	  'fecha' => Carbon::parse('2016/9/18') ,
	  'descripcion' => 'movimeinto152',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  921000,
	  'fecha' => Carbon::parse('2016/9/8') ,
	  'descripcion' => 'movimeinto153',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  456000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto154',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  208000,
	  'fecha' => Carbon::parse('2016/1/21') ,
	  'descripcion' => 'movimeinto155',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  113000,
	  'fecha' => Carbon::parse('2016/8/10') ,
	  'descripcion' => 'movimeinto156',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  509000,
	  'fecha' => Carbon::parse('2016/8/12') ,
	  'descripcion' => 'movimeinto157',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  751000,
	  'fecha' => Carbon::parse('2016/12/14') ,
	  'descripcion' => 'movimeinto158',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  279000,
	  'fecha' => Carbon::parse('2016/3/1') ,
	  'descripcion' => 'movimeinto159',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  777000,
	  'fecha' => Carbon::parse('2016/5/7') ,
	  'descripcion' => 'movimeinto160',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  777000,
	  'fecha' => Carbon::parse('2016/12/19') ,
	  'descripcion' => 'movimeinto161',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  770000,
	  'fecha' => Carbon::parse('2016/8/6') ,
	  'descripcion' => 'movimeinto162',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  559000,
	  'fecha' => Carbon::parse('2016/2/24') ,
	  'descripcion' => 'movimeinto163',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  379000,
	  'fecha' => Carbon::parse('2016/1/19') ,
	  'descripcion' => 'movimeinto164',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  263000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto165',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  875000,
	  'fecha' => Carbon::parse('2016/2/19') ,
	  'descripcion' => 'movimeinto166',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  127000,
	  'fecha' => Carbon::parse('2016/10/14') ,
	  'descripcion' => 'movimeinto167',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  675000,
	  'fecha' => Carbon::parse('2016/4/11') ,
	  'descripcion' => 'movimeinto168',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  522000,
	  'fecha' => Carbon::parse('2016/2/28') ,
	  'descripcion' => 'movimeinto169',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  453000,
	  'fecha' => Carbon::parse('2016/2/10') ,
	  'descripcion' => 'movimeinto170',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  860000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto171',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   67,
	  'monto' =>  118000,
	  'fecha' => Carbon::parse('2016/5/28') ,
	  'descripcion' => 'movimeinto172',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  227000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto173',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  256000,
	  'fecha' => Carbon::parse('2016/1/20') ,
	  'descripcion' => 'movimeinto174',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  772000,
	  'fecha' => Carbon::parse('2016/8/1') ,
	  'descripcion' => 'movimeinto175',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  261000,
	  'fecha' => Carbon::parse('2016/1/3') ,
	  'descripcion' => 'movimeinto176',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  454000,
	  'fecha' => Carbon::parse('2016/12/9') ,
	  'descripcion' => 'movimeinto177',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  281000,
	  'fecha' => Carbon::parse('2016/2/6') ,
	  'descripcion' => 'movimeinto178',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  884000,
	  'fecha' => Carbon::parse('2016/9/4') ,
	  'descripcion' => 'movimeinto179',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  898000,
	  'fecha' => Carbon::parse('2016/4/27') ,
	  'descripcion' => 'movimeinto180',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  945000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto181',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  193000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto182',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  798000,
	  'fecha' => Carbon::parse('2016/9/14') ,
	  'descripcion' => 'movimeinto183',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  765000,
	  'fecha' => Carbon::parse('2016/10/12') ,
	  'descripcion' => 'movimeinto184',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  683000,
	  'fecha' => Carbon::parse('2016/12/19') ,
	  'descripcion' => 'movimeinto185',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  185000,
	  'fecha' => Carbon::parse('2016/1/16') ,
	  'descripcion' => 'movimeinto186',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  449000,
	  'fecha' => Carbon::parse('2016/5/14') ,
	  'descripcion' => 'movimeinto187',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  336000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto188',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/4/16') ,
	  'descripcion' => 'movimeinto189',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  580000,
	  'fecha' => Carbon::parse('2016/2/12') ,
	  'descripcion' => 'movimeinto190',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  955000,
	  'fecha' => Carbon::parse('2016/1/1') ,
	  'descripcion' => 'movimeinto191',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  361000,
	  'fecha' => Carbon::parse('2016/9/2') ,
	  'descripcion' => 'movimeinto192',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  247000,
	  'fecha' => Carbon::parse('2016/2/2') ,
	  'descripcion' => 'movimeinto193',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  560000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto194',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   96,
	  'monto' =>  478000,
	  'fecha' => Carbon::parse('2016/6/2') ,
	  'descripcion' => 'movimeinto195',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  821000,
	  'fecha' => Carbon::parse('2016/7/13') ,
	  'descripcion' => 'movimeinto196',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  908000,
	  'fecha' => Carbon::parse('2016/12/12') ,
	  'descripcion' => 'movimeinto197',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  701000,
	  'fecha' => Carbon::parse('2016/12/17') ,
	  'descripcion' => 'movimeinto198',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  463000,
	  'fecha' => Carbon::parse('2016/8/21') ,
	  'descripcion' => 'movimeinto199',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  260000,
	  'fecha' => Carbon::parse('2016/6/6') ,
	  'descripcion' => 'movimeinto200',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  922000,
	  'fecha' => Carbon::parse('2016/3/16') ,
	  'descripcion' => 'movimeinto201',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  843000,
	  'fecha' => Carbon::parse('2016/7/28') ,
	  'descripcion' => 'movimeinto202',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  279000,
	  'fecha' => Carbon::parse('2016/6/26') ,
	  'descripcion' => 'movimeinto203',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  728000,
	  'fecha' => Carbon::parse('2016/8/16') ,
	  'descripcion' => 'movimeinto204',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  878000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto205',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  282000,
	  'fecha' => Carbon::parse('2016/2/15') ,
	  'descripcion' => 'movimeinto206',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  530000,
	  'fecha' => Carbon::parse('2016/10/26') ,
	  'descripcion' => 'movimeinto207',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  693000,
	  'fecha' => Carbon::parse('2016/2/22') ,
	  'descripcion' => 'movimeinto208',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  852000,
	  'fecha' => Carbon::parse('2016/9/1') ,
	  'descripcion' => 'movimeinto209',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  206000,
	  'fecha' => Carbon::parse('2016/1/7') ,
	  'descripcion' => 'movimeinto210',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  737000,
	  'fecha' => Carbon::parse('2016/4/6') ,
	  'descripcion' => 'movimeinto211',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  732000,
	  'fecha' => Carbon::parse('2016/6/1') ,
	  'descripcion' => 'movimeinto212',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  378000,
	  'fecha' => Carbon::parse('2016/9/4') ,
	  'descripcion' => 'movimeinto213',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  382000,
	  'fecha' => Carbon::parse('2016/6/6') ,
	  'descripcion' => 'movimeinto214',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  505000,
	  'fecha' => Carbon::parse('2016/12/4') ,
	  'descripcion' => 'movimeinto215',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  235000,
	  'fecha' => Carbon::parse('2016/12/16') ,
	  'descripcion' => 'movimeinto216',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  229000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto217',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  408000,
	  'fecha' => Carbon::parse('2016/12/27') ,
	  'descripcion' => 'movimeinto218',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  572000,
	  'fecha' => Carbon::parse('2016/8/15') ,
	  'descripcion' => 'movimeinto219',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  476000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto220',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  654000,
	  'fecha' => Carbon::parse('2016/6/24') ,
	  'descripcion' => 'movimeinto221',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  288000,
	  'fecha' => Carbon::parse('2016/2/1') ,
	  'descripcion' => 'movimeinto222',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   67,
	  'monto' =>  719000,
	  'fecha' => Carbon::parse('2016/9/6') ,
	  'descripcion' => 'movimeinto223',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  386000,
	  'fecha' => Carbon::parse('2016/2/6') ,
	  'descripcion' => 'movimeinto224',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  951000,
	  'fecha' => Carbon::parse('2016/8/12') ,
	  'descripcion' => 'movimeinto225',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  /*


  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  808000,
	  'fecha' => Carbon::parse('2016/7/17') ,
	  'descripcion' => 'movimeinto226',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  260000,
	  'fecha' => Carbon::parse('2016/10/10') ,
	  'descripcion' => 'movimeinto227',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   66,
	  'monto' =>  898000,
	  'fecha' => Carbon::parse('2016/12/21') ,
	  'descripcion' => 'movimeinto228',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  826000,
	  'fecha' => Carbon::parse('2016/2/16') ,
	  'descripcion' => 'movimeinto229',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  903000,
	  'fecha' => Carbon::parse('2016/4/13') ,
	  'descripcion' => 'movimeinto230',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  286000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto231',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  833000,
	  'fecha' => Carbon::parse('2016/11/23') ,
	  'descripcion' => 'movimeinto232',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  561000,
	  'fecha' => Carbon::parse('2016/5/18') ,
	  'descripcion' => 'movimeinto233',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  166000,
	  'fecha' => Carbon::parse('2016/12/16') ,
	  'descripcion' => 'movimeinto234',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  290000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto235',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  262000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto236',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  275000,
	  'fecha' => Carbon::parse('2016/6/14') ,
	  'descripcion' => 'movimeinto237',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  340000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto238',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  653000,
	  'fecha' => Carbon::parse('2016/7/28') ,
	  'descripcion' => 'movimeinto239',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  718000,
	  'fecha' => Carbon::parse('2016/7/8') ,
	  'descripcion' => 'movimeinto240',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  265000,
	  'fecha' => Carbon::parse('2016/1/2') ,
	  'descripcion' => 'movimeinto241',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  226000,
	  'fecha' => Carbon::parse('2016/4/14') ,
	  'descripcion' => 'movimeinto242',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  135000,
	  'fecha' => Carbon::parse('2016/1/9') ,
	  'descripcion' => 'movimeinto243',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  397000,
	  'fecha' => Carbon::parse('2016/7/20') ,
	  'descripcion' => 'movimeinto244',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  355000,
	  'fecha' => Carbon::parse('2016/11/18') ,
	  'descripcion' => 'movimeinto245',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  362000,
	  'fecha' => Carbon::parse('2016/5/4') ,
	  'descripcion' => 'movimeinto246',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  
  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  518000,
	  'fecha' => Carbon::parse('2016/11/18') ,
	  'descripcion' => 'movimeinto247',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   67,
	  'monto' =>  805000,
	  'fecha' => Carbon::parse('2016/12/12') ,
	  'descripcion' => 'movimeinto248',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  578000,
	  'fecha' => Carbon::parse('2016/4/13') ,
	  'descripcion' => 'movimeinto249',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  938000,
	  'fecha' => Carbon::parse('2016/1/16') ,
	  'descripcion' => 'movimeinto250',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  438000,
	  'fecha' => Carbon::parse('2016/1/1') ,
	  'descripcion' => 'movimeinto251',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  425000,
	  'fecha' => Carbon::parse('2016/1/12') ,
	  'descripcion' => 'movimeinto252',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  113000,
	  'fecha' => Carbon::parse('2016/5/2') ,
	  'descripcion' => 'movimeinto253',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  881000,
	  'fecha' => Carbon::parse('2016/5/19') ,
	  'descripcion' => 'movimeinto254',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  713000,
	  'fecha' => Carbon::parse('2016/11/25') ,
	  'descripcion' => 'movimeinto255',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  312000,
	  'fecha' => Carbon::parse('2016/5/20') ,
	  'descripcion' => 'movimeinto256',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  341000,
	  'fecha' => Carbon::parse('2016/7/17') ,
	  'descripcion' => 'movimeinto257',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  630000,
	  'fecha' => Carbon::parse('2016/7/27') ,
	  'descripcion' => 'movimeinto258',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  678000,
	  'fecha' => Carbon::parse('2016/6/13') ,
	  'descripcion' => 'movimeinto259',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  584000,
	  'fecha' => Carbon::parse('2016/9/28') ,
	  'descripcion' => 'movimeinto260',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  485000,
	  'fecha' => Carbon::parse('2016/4/20') ,
	  'descripcion' => 'movimeinto261',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  275000,
	  'fecha' => Carbon::parse('2016/6/9') ,
	  'descripcion' => 'movimeinto262',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  192000,
	  'fecha' => Carbon::parse('2016/2/9') ,
	  'descripcion' => 'movimeinto263',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  188000,
	  'fecha' => Carbon::parse('2016/4/1') ,
	  'descripcion' => 'movimeinto264',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  923000,
	  'fecha' => Carbon::parse('2016/3/28') ,
	  'descripcion' => 'movimeinto265',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  296000,
	  'fecha' => Carbon::parse('2016/3/28') ,
	  'descripcion' => 'movimeinto266',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  768000,
	  'fecha' => Carbon::parse('2016/1/6') ,
	  'descripcion' => 'movimeinto267',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  572000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto268',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  236000,
	  'fecha' => Carbon::parse('2016/10/15') ,
	  'descripcion' => 'movimeinto269',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  233000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto270',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  868000,
	  'fecha' => Carbon::parse('2016/11/15') ,
	  'descripcion' => 'movimeinto271',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  323000,
	  'fecha' => Carbon::parse('2016/9/24') ,
	  'descripcion' => 'movimeinto272',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  873000,
	  'fecha' => Carbon::parse('2016/11/8') ,
	  'descripcion' => 'movimeinto273',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  589000,
	  'fecha' => Carbon::parse('2016/4/8') ,
	  'descripcion' => 'movimeinto274',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  213000,
	  'fecha' => Carbon::parse('2016/6/14') ,
	  'descripcion' => 'movimeinto275',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  356000,
	  'fecha' => Carbon::parse('2016/10/20') ,
	  'descripcion' => 'movimeinto276',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  110000,
	  'fecha' => Carbon::parse('2016/9/16') ,
	  'descripcion' => 'movimeinto277',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  831000,
	  'fecha' => Carbon::parse('2016/12/16') ,
	  'descripcion' => 'movimeinto278',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  381000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto279',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  290000,
	  'fecha' => Carbon::parse('2016/5/12') ,
	  'descripcion' => 'movimeinto280',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  808000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto281',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  692000,
	  'fecha' => Carbon::parse('2016/10/27') ,
	  'descripcion' => 'movimeinto282',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  145000,
	  'fecha' => Carbon::parse('2016/4/12') ,
	  'descripcion' => 'movimeinto283',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  510000,
	  'fecha' => Carbon::parse('2016/7/26') ,
	  'descripcion' => 'movimeinto284',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  440000,
	  'fecha' => Carbon::parse('2016/11/24') ,
	  'descripcion' => 'movimeinto285',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  483000,
	  'fecha' => Carbon::parse('2016/10/15') ,
	  'descripcion' => 'movimeinto286',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  104000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto287',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  655000,
	  'fecha' => Carbon::parse('2016/7/23') ,
	  'descripcion' => 'movimeinto288',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  665000,
	  'fecha' => Carbon::parse('2016/5/27') ,
	  'descripcion' => 'movimeinto289',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  536000,
	  'fecha' => Carbon::parse('2016/6/22') ,
	  'descripcion' => 'movimeinto290',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  855000,
	  'fecha' => Carbon::parse('2016/8/2') ,
	  'descripcion' => 'movimeinto291',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  591000,
	  'fecha' => Carbon::parse('2016/6/26') ,
	  'descripcion' => 'movimeinto292',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   71,
	  'monto' =>  464000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto293',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  918000,
	  'fecha' => Carbon::parse('2016/4/7') ,
	  'descripcion' => 'movimeinto294',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  788000,
	  'fecha' => Carbon::parse('2016/5/8') ,
	  'descripcion' => 'movimeinto295',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  223000,
	  'fecha' => Carbon::parse('2016/2/19') ,
	  'descripcion' => 'movimeinto296',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  705000,
	  'fecha' => Carbon::parse('2016/8/20') ,
	  'descripcion' => 'movimeinto297',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  489000,
	  'fecha' => Carbon::parse('2016/7/26') ,
	  'descripcion' => 'movimeinto298',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  824000,
	  'fecha' => Carbon::parse('2016/6/15') ,
	  'descripcion' => 'movimeinto299',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  735000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto300',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   98,
	  'monto' =>  889000,
	  'fecha' => Carbon::parse('2016/5/23') ,
	  'descripcion' => 'movimeinto301',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  845000,
	  'fecha' => Carbon::parse('2016/3/4') ,
	  'descripcion' => 'movimeinto302',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  446000,
	  'fecha' => Carbon::parse('2016/5/1') ,
	  'descripcion' => 'movimeinto303',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  239000,
	  'fecha' => Carbon::parse('2016/8/23') ,
	  'descripcion' => 'movimeinto304',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  264000,
	  'fecha' => Carbon::parse('2016/10/9') ,
	  'descripcion' => 'movimeinto305',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  942000,
	  'fecha' => Carbon::parse('2016/6/21') ,
	  'descripcion' => 'movimeinto306',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  999000,
	  'fecha' => Carbon::parse('2016/9/23') ,
	  'descripcion' => 'movimeinto307',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  225000,
	  'fecha' => Carbon::parse('2016/5/5') ,
	  'descripcion' => 'movimeinto308',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  241000,
	  'fecha' => Carbon::parse('2016/3/25') ,
	  'descripcion' => 'movimeinto309',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  761000,
	  'fecha' => Carbon::parse('2016/3/5') ,
	  'descripcion' => 'movimeinto310',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  184000,
	  'fecha' => Carbon::parse('2016/3/5') ,
	  'descripcion' => 'movimeinto311',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  697000,
	  'fecha' => Carbon::parse('2016/8/23') ,
	  'descripcion' => 'movimeinto312',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  154000,
	  'fecha' => Carbon::parse('2016/12/7') ,
	  'descripcion' => 'movimeinto313',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  269000,
	  'fecha' => Carbon::parse('2016/8/11') ,
	  'descripcion' => 'movimeinto314',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  646000,
	  'fecha' => Carbon::parse('2016/12/11') ,
	  'descripcion' => 'movimeinto315',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  848000,
	  'fecha' => Carbon::parse('2016/4/20') ,
	  'descripcion' => 'movimeinto316',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  556000,
	  'fecha' => Carbon::parse('2016/4/27') ,
	  'descripcion' => 'movimeinto317',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  837000,
	  'fecha' => Carbon::parse('2016/2/4') ,
	  'descripcion' => 'movimeinto318',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  337000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto319',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  287000,
	  'fecha' => Carbon::parse('2016/7/5') ,
	  'descripcion' => 'movimeinto320',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  907000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto321',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  103000,
	  'fecha' => Carbon::parse('2016/2/22') ,
	  'descripcion' => 'movimeinto322',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  130000,
	  'fecha' => Carbon::parse('2016/12/10') ,
	  'descripcion' => 'movimeinto323',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  752000,
	  'fecha' => Carbon::parse('2016/5/14') ,
	  'descripcion' => 'movimeinto324',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  694000,
	  'fecha' => Carbon::parse('2016/10/18') ,
	  'descripcion' => 'movimeinto325',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  822000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto326',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  436000,
	  'fecha' => Carbon::parse('2016/8/18') ,
	  'descripcion' => 'movimeinto327',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  979000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto328',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  785000,
	  'fecha' => Carbon::parse('2016/2/18') ,
	  'descripcion' => 'movimeinto329',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  557000,
	  'fecha' => Carbon::parse('2016/8/15') ,
	  'descripcion' => 'movimeinto330',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  480000,
	  'fecha' => Carbon::parse('2016/6/25') ,
	  'descripcion' => 'movimeinto331',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  826000,
	  'fecha' => Carbon::parse('2016/5/22') ,
	  'descripcion' => 'movimeinto332',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  462000,
	  'fecha' => Carbon::parse('2016/7/20') ,
	  'descripcion' => 'movimeinto333',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  628000,
	  'fecha' => Carbon::parse('2016/11/7') ,
	  'descripcion' => 'movimeinto334',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  337000,
	  'fecha' => Carbon::parse('2016/1/25') ,
	  'descripcion' => 'movimeinto335',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  904000,
	  'fecha' => Carbon::parse('2016/3/6') ,
	  'descripcion' => 'movimeinto336',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  371000,
	  'fecha' => Carbon::parse('2016/5/20') ,
	  'descripcion' => 'movimeinto337',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  191000,
	  'fecha' => Carbon::parse('2016/7/4') ,
	  'descripcion' => 'movimeinto338',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  786000,
	  'fecha' => Carbon::parse('2016/7/27') ,
	  'descripcion' => 'movimeinto339',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  240000,
	  'fecha' => Carbon::parse('2016/6/19') ,
	  'descripcion' => 'movimeinto340',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  115000,
	  'fecha' => Carbon::parse('2016/5/6') ,
	  'descripcion' => 'movimeinto341',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  625000,
	  'fecha' => Carbon::parse('2016/2/27') ,
	  'descripcion' => 'movimeinto342',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  619000,
	  'fecha' => Carbon::parse('2016/5/16') ,
	  'descripcion' => 'movimeinto343',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  866000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto344',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  815000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto345',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  747000,
	  'fecha' => Carbon::parse('2016/8/24') ,
	  'descripcion' => 'movimeinto346',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  588000,
	  'fecha' => Carbon::parse('2016/5/28') ,
	  'descripcion' => 'movimeinto347',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  635000,
	  'fecha' => Carbon::parse('2016/3/11') ,
	  'descripcion' => 'movimeinto348',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  414000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto349',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  868000,
	  'fecha' => Carbon::parse('2016/5/17') ,
	  'descripcion' => 'movimeinto350',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  440000,
	  'fecha' => Carbon::parse('2016/7/16') ,
	  'descripcion' => 'movimeinto351',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  958000,
	  'fecha' => Carbon::parse('2016/7/7') ,
	  'descripcion' => 'movimeinto352',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  570000,
	  'fecha' => Carbon::parse('2016/4/16') ,
	  'descripcion' => 'movimeinto353',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  878000,
	  'fecha' => Carbon::parse('2016/3/16') ,
	  'descripcion' => 'movimeinto354',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  189000,
	  'fecha' => Carbon::parse('2016/7/17') ,
	  'descripcion' => 'movimeinto355',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  658000,
	  'fecha' => Carbon::parse('2016/7/6') ,
	  'descripcion' => 'movimeinto356',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  390000,
	  'fecha' => Carbon::parse('2016/2/18') ,
	  'descripcion' => 'movimeinto357',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  471000,
	  'fecha' => Carbon::parse('2016/11/19') ,
	  'descripcion' => 'movimeinto358',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  179000,
	  'fecha' => Carbon::parse('2016/7/24') ,
	  'descripcion' => 'movimeinto359',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  688000,
	  'fecha' => Carbon::parse('2016/7/4') ,
	  'descripcion' => 'movimeinto360',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  182000,
	  'fecha' => Carbon::parse('2016/8/1') ,
	  'descripcion' => 'movimeinto361',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  317000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto362',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  406000,
	  'fecha' => Carbon::parse('2016/1/21') ,
	  'descripcion' => 'movimeinto363',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  245000,
	  'fecha' => Carbon::parse('2016/9/25') ,
	  'descripcion' => 'movimeinto364',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  752000,
	  'fecha' => Carbon::parse('2016/12/14') ,
	  'descripcion' => 'movimeinto365',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  520000,
	  'fecha' => Carbon::parse('2016/2/5') ,
	  'descripcion' => 'movimeinto366',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  413000,
	  'fecha' => Carbon::parse('2016/10/23') ,
	  'descripcion' => 'movimeinto367',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  895000,
	  'fecha' => Carbon::parse('2016/7/7') ,
	  'descripcion' => 'movimeinto368',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  277000,
	  'fecha' => Carbon::parse('2016/7/6') ,
	  'descripcion' => 'movimeinto369',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  926000,
	  'fecha' => Carbon::parse('2016/10/24') ,
	  'descripcion' => 'movimeinto370',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  308000,
	  'fecha' => Carbon::parse('2016/7/10') ,
	  'descripcion' => 'movimeinto371',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  474000,
	  'fecha' => Carbon::parse('2016/1/23') ,
	  'descripcion' => 'movimeinto372',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  482000,
	  'fecha' => Carbon::parse('2016/12/12') ,
	  'descripcion' => 'movimeinto373',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  115000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto374',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  927000,
	  'fecha' => Carbon::parse('2016/4/20') ,
	  'descripcion' => 'movimeinto375',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  887000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto376',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  618000,
	  'fecha' => Carbon::parse('2016/9/24') ,
	  'descripcion' => 'movimeinto377',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  556000,
	  'fecha' => Carbon::parse('2016/8/13') ,
	  'descripcion' => 'movimeinto378',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  280000,
	  'fecha' => Carbon::parse('2016/3/13') ,
	  'descripcion' => 'movimeinto379',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  274000,
	  'fecha' => Carbon::parse('2016/8/12') ,
	  'descripcion' => 'movimeinto380',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  323000,
	  'fecha' => Carbon::parse('2016/7/16') ,
	  'descripcion' => 'movimeinto381',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  597000,
	  'fecha' => Carbon::parse('2016/12/20') ,
	  'descripcion' => 'movimeinto382',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  950000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto383',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  953000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto384',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  347000,
	  'fecha' => Carbon::parse('2016/5/6') ,
	  'descripcion' => 'movimeinto385',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  525000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto386',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  513000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto387',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  359000,
	  'fecha' => Carbon::parse('2016/4/12') ,
	  'descripcion' => 'movimeinto388',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  334000,
	  'fecha' => Carbon::parse('2016/11/5') ,
	  'descripcion' => 'movimeinto389',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  266000,
	  'fecha' => Carbon::parse('2016/6/11') ,
	  'descripcion' => 'movimeinto390',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  363000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto391',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  436000,
	  'fecha' => Carbon::parse('2016/10/27') ,
	  'descripcion' => 'movimeinto392',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  189000,
	  'fecha' => Carbon::parse('2016/1/14') ,
	  'descripcion' => 'movimeinto393',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  123000,
	  'fecha' => Carbon::parse('2016/12/6') ,
	  'descripcion' => 'movimeinto394',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  567000,
	  'fecha' => Carbon::parse('2016/9/15') ,
	  'descripcion' => 'movimeinto395',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  425000,
	  'fecha' => Carbon::parse('2016/7/14') ,
	  'descripcion' => 'movimeinto396',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  407000,
	  'fecha' => Carbon::parse('2016/9/1') ,
	  'descripcion' => 'movimeinto397',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  873000,
	  'fecha' => Carbon::parse('2016/3/15') ,
	  'descripcion' => 'movimeinto398',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  846000,
	  'fecha' => Carbon::parse('2016/9/28') ,
	  'descripcion' => 'movimeinto399',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  604000,
	  'fecha' => Carbon::parse('2016/7/14') ,
	  'descripcion' => 'movimeinto400',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  419000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto401',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  863000,
	  'fecha' => Carbon::parse('2016/12/15') ,
	  'descripcion' => 'movimeinto402',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  739000,
	  'fecha' => Carbon::parse('2016/3/5') ,
	  'descripcion' => 'movimeinto403',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  981000,
	  'fecha' => Carbon::parse('2016/1/28') ,
	  'descripcion' => 'movimeinto404',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  128000,
	  'fecha' => Carbon::parse('2016/7/7') ,
	  'descripcion' => 'movimeinto405',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  681000,
	  'fecha' => Carbon::parse('2016/2/2') ,
	  'descripcion' => 'movimeinto406',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  290000,
	  'fecha' => Carbon::parse('2016/4/16') ,
	  'descripcion' => 'movimeinto407',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  614000,
	  'fecha' => Carbon::parse('2016/3/20') ,
	  'descripcion' => 'movimeinto408',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  689000,
	  'fecha' => Carbon::parse('2016/8/11') ,
	  'descripcion' => 'movimeinto409',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  742000,
	  'fecha' => Carbon::parse('2016/12/28') ,
	  'descripcion' => 'movimeinto410',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  222000,
	  'fecha' => Carbon::parse('2016/5/1') ,
	  'descripcion' => 'movimeinto411',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  429000,
	  'fecha' => Carbon::parse('2016/1/23') ,
	  'descripcion' => 'movimeinto412',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  266000,
	  'fecha' => Carbon::parse('2016/5/24') ,
	  'descripcion' => 'movimeinto413',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  538000,
	  'fecha' => Carbon::parse('2016/11/13') ,
	  'descripcion' => 'movimeinto414',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  953000,
	  'fecha' => Carbon::parse('2016/10/23') ,
	  'descripcion' => 'movimeinto415',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  169000,
	  'fecha' => Carbon::parse('2016/4/24') ,
	  'descripcion' => 'movimeinto416',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  308000,
	  'fecha' => Carbon::parse('2016/11/14') ,
	  'descripcion' => 'movimeinto417',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  428000,
	  'fecha' => Carbon::parse('2016/12/12') ,
	  'descripcion' => 'movimeinto418',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  455000,
	  'fecha' => Carbon::parse('2016/3/25') ,
	  'descripcion' => 'movimeinto419',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  772000,
	  'fecha' => Carbon::parse('2016/5/20') ,
	  'descripcion' => 'movimeinto420',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  911000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto421',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  233000,
	  'fecha' => Carbon::parse('2016/1/15') ,
	  'descripcion' => 'movimeinto422',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  987000,
	  'fecha' => Carbon::parse('2016/1/24') ,
	  'descripcion' => 'movimeinto423',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  900000,
	  'fecha' => Carbon::parse('2016/1/11') ,
	  'descripcion' => 'movimeinto424',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  909000,
	  'fecha' => Carbon::parse('2016/2/17') ,
	  'descripcion' => 'movimeinto425',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  187000,
	  'fecha' => Carbon::parse('2016/3/3') ,
	  'descripcion' => 'movimeinto426',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  641000,
	  'fecha' => Carbon::parse('2016/12/25') ,
	  'descripcion' => 'movimeinto427',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  539000,
	  'fecha' => Carbon::parse('2016/8/1') ,
	  'descripcion' => 'movimeinto428',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  282000,
	  'fecha' => Carbon::parse('2016/3/2') ,
	  'descripcion' => 'movimeinto429',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  407000,
	  'fecha' => Carbon::parse('2016/7/1') ,
	  'descripcion' => 'movimeinto430',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  328000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto431',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  191000,
	  'fecha' => Carbon::parse('2016/5/11') ,
	  'descripcion' => 'movimeinto432',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  215000,
	  'fecha' => Carbon::parse('2016/7/3') ,
	  'descripcion' => 'movimeinto433',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  309000,
	  'fecha' => Carbon::parse('2016/10/6') ,
	  'descripcion' => 'movimeinto434',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  972000,
	  'fecha' => Carbon::parse('2016/9/15') ,
	  'descripcion' => 'movimeinto435',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  150000,
	  'fecha' => Carbon::parse('2016/1/24') ,
	  'descripcion' => 'movimeinto436',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  864000,
	  'fecha' => Carbon::parse('2016/8/23') ,
	  'descripcion' => 'movimeinto437',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  346000,
	  'fecha' => Carbon::parse('2016/12/13') ,
	  'descripcion' => 'movimeinto438',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  388000,
	  'fecha' => Carbon::parse('2016/12/3') ,
	  'descripcion' => 'movimeinto439',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  868000,
	  'fecha' => Carbon::parse('2016/6/16') ,
	  'descripcion' => 'movimeinto440',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  355000,
	  'fecha' => Carbon::parse('2016/2/26') ,
	  'descripcion' => 'movimeinto441',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  350000,
	  'fecha' => Carbon::parse('2016/11/19') ,
	  'descripcion' => 'movimeinto442',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  678000,
	  'fecha' => Carbon::parse('2016/6/23') ,
	  'descripcion' => 'movimeinto443',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  195000,
	  'fecha' => Carbon::parse('2016/9/10') ,
	  'descripcion' => 'movimeinto444',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  765000,
	  'fecha' => Carbon::parse('2016/5/3') ,
	  'descripcion' => 'movimeinto445',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  774000,
	  'fecha' => Carbon::parse('2016/3/8') ,
	  'descripcion' => 'movimeinto446',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  645000,
	  'fecha' => Carbon::parse('2016/5/10') ,
	  'descripcion' => 'movimeinto447',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  447000,
	  'fecha' => Carbon::parse('2016/9/3') ,
	  'descripcion' => 'movimeinto448',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  873000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto449',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  993000,
	  'fecha' => Carbon::parse('2016/9/18') ,
	  'descripcion' => 'movimeinto450',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  879000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto451',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  616000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto452',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  558000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto453',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  764000,
	  'fecha' => Carbon::parse('2016/2/23') ,
	  'descripcion' => 'movimeinto454',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  875000,
	  'fecha' => Carbon::parse('2016/2/6') ,
	  'descripcion' => 'movimeinto455',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  595000,
	  'fecha' => Carbon::parse('2016/8/26') ,
	  'descripcion' => 'movimeinto456',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  202000,
	  'fecha' => Carbon::parse('2016/6/27') ,
	  'descripcion' => 'movimeinto457',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  324000,
	  'fecha' => Carbon::parse('2016/6/26') ,
	  'descripcion' => 'movimeinto458',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  656000,
	  'fecha' => Carbon::parse('2016/1/12') ,
	  'descripcion' => 'movimeinto459',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  294000,
	  'fecha' => Carbon::parse('2016/5/8') ,
	  'descripcion' => 'movimeinto460',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  997000,
	  'fecha' => Carbon::parse('2016/8/26') ,
	  'descripcion' => 'movimeinto461',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  780000,
	  'fecha' => Carbon::parse('2016/7/4') ,
	  'descripcion' => 'movimeinto462',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  135000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto463',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  311000,
	  'fecha' => Carbon::parse('2016/6/23') ,
	  'descripcion' => 'movimeinto464',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  353000,
	  'fecha' => Carbon::parse('2016/12/1') ,
	  'descripcion' => 'movimeinto465',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  201000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto466',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  346000,
	  'fecha' => Carbon::parse('2016/5/10') ,
	  'descripcion' => 'movimeinto467',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  659000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto468',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  723000,
	  'fecha' => Carbon::parse('2016/10/6') ,
	  'descripcion' => 'movimeinto469',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  946000,
	  'fecha' => Carbon::parse('2016/1/25') ,
	  'descripcion' => 'movimeinto470',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  278000,
	  'fecha' => Carbon::parse('2016/10/2') ,
	  'descripcion' => 'movimeinto471',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  121000,
	  'fecha' => Carbon::parse('2016/5/5') ,
	  'descripcion' => 'movimeinto472',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  756000,
	  'fecha' => Carbon::parse('2016/3/11') ,
	  'descripcion' => 'movimeinto473',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  533000,
	  'fecha' => Carbon::parse('2016/1/13') ,
	  'descripcion' => 'movimeinto474',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  622000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto475',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  502000,
	  'fecha' => Carbon::parse('2016/10/24') ,
	  'descripcion' => 'movimeinto476',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  790000,
	  'fecha' => Carbon::parse('2016/1/10') ,
	  'descripcion' => 'movimeinto477',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  844000,
	  'fecha' => Carbon::parse('2016/12/28') ,
	  'descripcion' => 'movimeinto478',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  543000,
	  'fecha' => Carbon::parse('2016/10/24') ,
	  'descripcion' => 'movimeinto479',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  921000,
	  'fecha' => Carbon::parse('2016/4/12') ,
	  'descripcion' => 'movimeinto480',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  855000,
	  'fecha' => Carbon::parse('2016/11/18') ,
	  'descripcion' => 'movimeinto481',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  242000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto482',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  744000,
	  'fecha' => Carbon::parse('2016/6/6') ,
	  'descripcion' => 'movimeinto483',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/9/16') ,
	  'descripcion' => 'movimeinto484',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  275000,
	  'fecha' => Carbon::parse('2016/12/22') ,
	  'descripcion' => 'movimeinto485',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  502000,
	  'fecha' => Carbon::parse('2016/5/18') ,
	  'descripcion' => 'movimeinto486',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  937000,
	  'fecha' => Carbon::parse('2016/6/27') ,
	  'descripcion' => 'movimeinto487',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  431000,
	  'fecha' => Carbon::parse('2016/6/13') ,
	  'descripcion' => 'movimeinto488',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  383000,
	  'fecha' => Carbon::parse('2016/10/2') ,
	  'descripcion' => 'movimeinto489',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  889000,
	  'fecha' => Carbon::parse('2016/4/9') ,
	  'descripcion' => 'movimeinto490',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  507000,
	  'fecha' => Carbon::parse('2016/12/19') ,
	  'descripcion' => 'movimeinto491',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  899000,
	  'fecha' => Carbon::parse('2016/6/18') ,
	  'descripcion' => 'movimeinto492',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  993000,
	  'fecha' => Carbon::parse('2016/1/17') ,
	  'descripcion' => 'movimeinto493',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  454000,
	  'fecha' => Carbon::parse('2016/11/15') ,
	  'descripcion' => 'movimeinto494',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  329000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto495',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  272000,
	  'fecha' => Carbon::parse('2016/6/18') ,
	  'descripcion' => 'movimeinto496',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  247000,
	  'fecha' => Carbon::parse('2016/9/28') ,
	  'descripcion' => 'movimeinto497',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  707000,
	  'fecha' => Carbon::parse('2016/4/11') ,
	  'descripcion' => 'movimeinto498',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  206000,
	  'fecha' => Carbon::parse('2016/5/22') ,
	  'descripcion' => 'movimeinto499',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  674000,
	  'fecha' => Carbon::parse('2016/4/4') ,
	  'descripcion' => 'movimeinto500',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  584000,
	  'fecha' => Carbon::parse('2016/10/10') ,
	  'descripcion' => 'movimeinto501',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  557000,
	  'fecha' => Carbon::parse('2016/3/2') ,
	  'descripcion' => 'movimeinto502',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/9/23') ,
	  'descripcion' => 'movimeinto503',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  284000,
	  'fecha' => Carbon::parse('2016/7/22') ,
	  'descripcion' => 'movimeinto504',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  728000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto505',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  954000,
	  'fecha' => Carbon::parse('2016/2/9') ,
	  'descripcion' => 'movimeinto506',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  775000,
	  'fecha' => Carbon::parse('2016/7/18') ,
	  'descripcion' => 'movimeinto507',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  943000,
	  'fecha' => Carbon::parse('2016/10/25') ,
	  'descripcion' => 'movimeinto508',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  616000,
	  'fecha' => Carbon::parse('2016/12/6') ,
	  'descripcion' => 'movimeinto509',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  994000,
	  'fecha' => Carbon::parse('2016/5/23') ,
	  'descripcion' => 'movimeinto510',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  963000,
	  'fecha' => Carbon::parse('2016/10/16') ,
	  'descripcion' => 'movimeinto511',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  300000,
	  'fecha' => Carbon::parse('2016/3/10') ,
	  'descripcion' => 'movimeinto512',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  881000,
	  'fecha' => Carbon::parse('2016/10/3') ,
	  'descripcion' => 'movimeinto513',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  986000,
	  'fecha' => Carbon::parse('2016/12/22') ,
	  'descripcion' => 'movimeinto514',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   71,
	  'monto' =>  589000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto515',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  439000,
	  'fecha' => Carbon::parse('2016/2/23') ,
	  'descripcion' => 'movimeinto516',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  136000,
	  'fecha' => Carbon::parse('2016/7/9') ,
	  'descripcion' => 'movimeinto517',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  130000,
	  'fecha' => Carbon::parse('2016/9/9') ,
	  'descripcion' => 'movimeinto518',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  748000,
	  'fecha' => Carbon::parse('2016/12/2') ,
	  'descripcion' => 'movimeinto519',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  201000,
	  'fecha' => Carbon::parse('2016/6/22') ,
	  'descripcion' => 'movimeinto520',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  595000,
	  'fecha' => Carbon::parse('2016/10/2') ,
	  'descripcion' => 'movimeinto521',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  851000,
	  'fecha' => Carbon::parse('2016/7/11') ,
	  'descripcion' => 'movimeinto522',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  207000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto523',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  857000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto524',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  366000,
	  'fecha' => Carbon::parse('2016/9/2') ,
	  'descripcion' => 'movimeinto525',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  708000,
	  'fecha' => Carbon::parse('2016/10/17') ,
	  'descripcion' => 'movimeinto526',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  459000,
	  'fecha' => Carbon::parse('2016/3/22') ,
	  'descripcion' => 'movimeinto527',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  762000,
	  'fecha' => Carbon::parse('2016/9/12') ,
	  'descripcion' => 'movimeinto528',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  172000,
	  'fecha' => Carbon::parse('2016/3/13') ,
	  'descripcion' => 'movimeinto529',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  477000,
	  'fecha' => Carbon::parse('2016/8/23') ,
	  'descripcion' => 'movimeinto530',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  391000,
	  'fecha' => Carbon::parse('2016/6/16') ,
	  'descripcion' => 'movimeinto531',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  702000,
	  'fecha' => Carbon::parse('2016/1/25') ,
	  'descripcion' => 'movimeinto532',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  502000,
	  'fecha' => Carbon::parse('2016/3/5') ,
	  'descripcion' => 'movimeinto533',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  709000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto534',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  648000,
	  'fecha' => Carbon::parse('2016/1/5') ,
	  'descripcion' => 'movimeinto535',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  447000,
	  'fecha' => Carbon::parse('2016/2/24') ,
	  'descripcion' => 'movimeinto536',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  395000,
	  'fecha' => Carbon::parse('2016/4/5') ,
	  'descripcion' => 'movimeinto537',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  539000,
	  'fecha' => Carbon::parse('2016/5/19') ,
	  'descripcion' => 'movimeinto538',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  849000,
	  'fecha' => Carbon::parse('2016/4/10') ,
	  'descripcion' => 'movimeinto539',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  110000,
	  'fecha' => Carbon::parse('2016/6/24') ,
	  'descripcion' => 'movimeinto540',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   71,
	  'monto' =>  543000,
	  'fecha' => Carbon::parse('2016/9/28') ,
	  'descripcion' => 'movimeinto541',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   98,
	  'monto' =>  102000,
	  'fecha' => Carbon::parse('2016/6/8') ,
	  'descripcion' => 'movimeinto542',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  215000,
	  'fecha' => Carbon::parse('2016/10/20') ,
	  'descripcion' => 'movimeinto543',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  203000,
	  'fecha' => Carbon::parse('2016/6/11') ,
	  'descripcion' => 'movimeinto544',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  167000,
	  'fecha' => Carbon::parse('2016/9/22') ,
	  'descripcion' => 'movimeinto545',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  413000,
	  'fecha' => Carbon::parse('2016/3/20') ,
	  'descripcion' => 'movimeinto546',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  601000,
	  'fecha' => Carbon::parse('2016/5/3') ,
	  'descripcion' => 'movimeinto547',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  109000,
	  'fecha' => Carbon::parse('2016/11/27') ,
	  'descripcion' => 'movimeinto548',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  578000,
	  'fecha' => Carbon::parse('2016/3/20') ,
	  'descripcion' => 'movimeinto549',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  271000,
	  'fecha' => Carbon::parse('2016/3/26') ,
	  'descripcion' => 'movimeinto550',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  662000,
	  'fecha' => Carbon::parse('2016/7/19') ,
	  'descripcion' => 'movimeinto551',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  569000,
	  'fecha' => Carbon::parse('2016/11/19') ,
	  'descripcion' => 'movimeinto552',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  341000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto553',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  188000,
	  'fecha' => Carbon::parse('2016/6/27') ,
	  'descripcion' => 'movimeinto554',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  345000,
	  'fecha' => Carbon::parse('2016/11/24') ,
	  'descripcion' => 'movimeinto555',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  904000,
	  'fecha' => Carbon::parse('2016/7/13') ,
	  'descripcion' => 'movimeinto556',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  207000,
	  'fecha' => Carbon::parse('2016/4/25') ,
	  'descripcion' => 'movimeinto557',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  116000,
	  'fecha' => Carbon::parse('2016/12/27') ,
	  'descripcion' => 'movimeinto558',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  276000,
	  'fecha' => Carbon::parse('2016/11/1') ,
	  'descripcion' => 'movimeinto559',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  957000,
	  'fecha' => Carbon::parse('2016/3/13') ,
	  'descripcion' => 'movimeinto560',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  460000,
	  'fecha' => Carbon::parse('2016/2/17') ,
	  'descripcion' => 'movimeinto561',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  885000,
	  'fecha' => Carbon::parse('2016/6/13') ,
	  'descripcion' => 'movimeinto562',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  842000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto563',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  781000,
	  'fecha' => Carbon::parse('2016/11/10') ,
	  'descripcion' => 'movimeinto564',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  936000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto565',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  923000,
	  'fecha' => Carbon::parse('2016/12/24') ,
	  'descripcion' => 'movimeinto566',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  395000,
	  'fecha' => Carbon::parse('2016/10/15') ,
	  'descripcion' => 'movimeinto567',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  481000,
	  'fecha' => Carbon::parse('2016/3/24') ,
	  'descripcion' => 'movimeinto568',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  705000,
	  'fecha' => Carbon::parse('2016/8/28') ,
	  'descripcion' => 'movimeinto569',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  249000,
	  'fecha' => Carbon::parse('2016/8/4') ,
	  'descripcion' => 'movimeinto570',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  945000,
	  'fecha' => Carbon::parse('2016/8/10') ,
	  'descripcion' => 'movimeinto571',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  900000,
	  'fecha' => Carbon::parse('2016/7/14') ,
	  'descripcion' => 'movimeinto572',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  697000,
	  'fecha' => Carbon::parse('2016/1/11') ,
	  'descripcion' => 'movimeinto573',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  152000,
	  'fecha' => Carbon::parse('2016/5/6') ,
	  'descripcion' => 'movimeinto574',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  765000,
	  'fecha' => Carbon::parse('2016/6/1') ,
	  'descripcion' => 'movimeinto575',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  601000,
	  'fecha' => Carbon::parse('2016/4/25') ,
	  'descripcion' => 'movimeinto576',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  419000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto577',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  272000,
	  'fecha' => Carbon::parse('2016/3/26') ,
	  'descripcion' => 'movimeinto578',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  494000,
	  'fecha' => Carbon::parse('2016/7/21') ,
	  'descripcion' => 'movimeinto579',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  482000,
	  'fecha' => Carbon::parse('2016/7/6') ,
	  'descripcion' => 'movimeinto580',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  331000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto581',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  310000,
	  'fecha' => Carbon::parse('2016/5/23') ,
	  'descripcion' => 'movimeinto582',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  178000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto583',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  300000,
	  'fecha' => Carbon::parse('2016/11/16') ,
	  'descripcion' => 'movimeinto584',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  800000,
	  'fecha' => Carbon::parse('2016/2/10') ,
	  'descripcion' => 'movimeinto585',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  429000,
	  'fecha' => Carbon::parse('2016/3/14') ,
	  'descripcion' => 'movimeinto586',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  572000,
	  'fecha' => Carbon::parse('2016/8/1') ,
	  'descripcion' => 'movimeinto587',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  601000,
	  'fecha' => Carbon::parse('2016/1/16') ,
	  'descripcion' => 'movimeinto588',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  860000,
	  'fecha' => Carbon::parse('2016/5/20') ,
	  'descripcion' => 'movimeinto589',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  393000,
	  'fecha' => Carbon::parse('2016/4/22') ,
	  'descripcion' => 'movimeinto590',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  132000,
	  'fecha' => Carbon::parse('2016/8/20') ,
	  'descripcion' => 'movimeinto591',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  434000,
	  'fecha' => Carbon::parse('2016/5/3') ,
	  'descripcion' => 'movimeinto592',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  958000,
	  'fecha' => Carbon::parse('2016/8/5') ,
	  'descripcion' => 'movimeinto593',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  865000,
	  'fecha' => Carbon::parse('2016/6/13') ,
	  'descripcion' => 'movimeinto594',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   71,
	  'monto' =>  577000,
	  'fecha' => Carbon::parse('2016/2/18') ,
	  'descripcion' => 'movimeinto595',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   66,
	  'monto' =>  677000,
	  'fecha' => Carbon::parse('2016/8/8') ,
	  'descripcion' => 'movimeinto596',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  665000,
	  'fecha' => Carbon::parse('2016/12/9') ,
	  'descripcion' => 'movimeinto597',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  253000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto598',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  915000,
	  'fecha' => Carbon::parse('2016/8/11') ,
	  'descripcion' => 'movimeinto599',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  273000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto600',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  481000,
	  'fecha' => Carbon::parse('2016/1/20') ,
	  'descripcion' => 'movimeinto601',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  766000,
	  'fecha' => Carbon::parse('2016/7/9') ,
	  'descripcion' => 'movimeinto602',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  594000,
	  'fecha' => Carbon::parse('2016/6/20') ,
	  'descripcion' => 'movimeinto603',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  167000,
	  'fecha' => Carbon::parse('2016/9/25') ,
	  'descripcion' => 'movimeinto604',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  349000,
	  'fecha' => Carbon::parse('2016/6/15') ,
	  'descripcion' => 'movimeinto605',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   19,
	  'monto' =>  497000,
	  'fecha' => Carbon::parse('2016/7/12') ,
	  'descripcion' => 'movimeinto606',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  467000,
	  'fecha' => Carbon::parse('2016/6/10') ,
	  'descripcion' => 'movimeinto607',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  483000,
	  'fecha' => Carbon::parse('2016/11/1') ,
	  'descripcion' => 'movimeinto608',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  700000,
	  'fecha' => Carbon::parse('2016/7/18') ,
	  'descripcion' => 'movimeinto609',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  213000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto610',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  297000,
	  'fecha' => Carbon::parse('2016/3/21') ,
	  'descripcion' => 'movimeinto611',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  150000,
	  'fecha' => Carbon::parse('2016/2/19') ,
	  'descripcion' => 'movimeinto612',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  172000,
	  'fecha' => Carbon::parse('2016/9/5') ,
	  'descripcion' => 'movimeinto613',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  763000,
	  'fecha' => Carbon::parse('2016/5/18') ,
	  'descripcion' => 'movimeinto614',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  157000,
	  'fecha' => Carbon::parse('2016/8/5') ,
	  'descripcion' => 'movimeinto615',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  620000,
	  'fecha' => Carbon::parse('2016/2/12') ,
	  'descripcion' => 'movimeinto616',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  418000,
	  'fecha' => Carbon::parse('2016/3/15') ,
	  'descripcion' => 'movimeinto617',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  750000,
	  'fecha' => Carbon::parse('2016/9/25') ,
	  'descripcion' => 'movimeinto618',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  370000,
	  'fecha' => Carbon::parse('2016/5/19') ,
	  'descripcion' => 'movimeinto619',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  944000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto620',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  693000,
	  'fecha' => Carbon::parse('2016/8/7') ,
	  'descripcion' => 'movimeinto621',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  123000,
	  'fecha' => Carbon::parse('2016/11/3') ,
	  'descripcion' => 'movimeinto622',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  936000,
	  'fecha' => Carbon::parse('2016/6/14') ,
	  'descripcion' => 'movimeinto623',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto624',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  534000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto625',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  205000,
	  'fecha' => Carbon::parse('2016/6/19') ,
	  'descripcion' => 'movimeinto626',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  877000,
	  'fecha' => Carbon::parse('2016/9/28') ,
	  'descripcion' => 'movimeinto627',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   85,
	  'monto' =>  143000,
	  'fecha' => Carbon::parse('2016/12/15') ,
	  'descripcion' => 'movimeinto628',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  707000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto629',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  113000,
	  'fecha' => Carbon::parse('2016/5/11') ,
	  'descripcion' => 'movimeinto630',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  358000,
	  'fecha' => Carbon::parse('2016/3/22') ,
	  'descripcion' => 'movimeinto631',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  396000,
	  'fecha' => Carbon::parse('2016/10/20') ,
	  'descripcion' => 'movimeinto632',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  902000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto633',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  500000,
	  'fecha' => Carbon::parse('2016/7/23') ,
	  'descripcion' => 'movimeinto634',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  885000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto635',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  810000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto636',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  316000,
	  'fecha' => Carbon::parse('2016/8/12') ,
	  'descripcion' => 'movimeinto637',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  156000,
	  'fecha' => Carbon::parse('2016/3/2') ,
	  'descripcion' => 'movimeinto638',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  616000,
	  'fecha' => Carbon::parse('2016/12/21') ,
	  'descripcion' => 'movimeinto639',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  983000,
	  'fecha' => Carbon::parse('2016/9/21') ,
	  'descripcion' => 'movimeinto640',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  264000,
	  'fecha' => Carbon::parse('2016/10/23') ,
	  'descripcion' => 'movimeinto641',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   71,
	  'monto' =>  847000,
	  'fecha' => Carbon::parse('2016/3/24') ,
	  'descripcion' => 'movimeinto642',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  132000,
	  'fecha' => Carbon::parse('2016/6/18') ,
	  'descripcion' => 'movimeinto643',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  871000,
	  'fecha' => Carbon::parse('2016/3/17') ,
	  'descripcion' => 'movimeinto644',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  665000,
	  'fecha' => Carbon::parse('2016/3/19') ,
	  'descripcion' => 'movimeinto645',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  225000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto646',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  781000,
	  'fecha' => Carbon::parse('2016/5/5') ,
	  'descripcion' => 'movimeinto647',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  769000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto648',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  812000,
	  'fecha' => Carbon::parse('2016/9/24') ,
	  'descripcion' => 'movimeinto649',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  687000,
	  'fecha' => Carbon::parse('2016/6/23') ,
	  'descripcion' => 'movimeinto650',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  754000,
	  'fecha' => Carbon::parse('2016/4/22') ,
	  'descripcion' => 'movimeinto651',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  784000,
	  'fecha' => Carbon::parse('2016/7/8') ,
	  'descripcion' => 'movimeinto652',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  976000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto653',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   99,
	  'monto' =>  685000,
	  'fecha' => Carbon::parse('2016/9/7') ,
	  'descripcion' => 'movimeinto654',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  694000,
	  'fecha' => Carbon::parse('2016/3/25') ,
	  'descripcion' => 'movimeinto655',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  255000,
	  'fecha' => Carbon::parse('2016/3/14') ,
	  'descripcion' => 'movimeinto656',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   73,
	  'monto' =>  625000,
	  'fecha' => Carbon::parse('2016/8/21') ,
	  'descripcion' => 'movimeinto657',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  339000,
	  'fecha' => Carbon::parse('2016/10/25') ,
	  'descripcion' => 'movimeinto658',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  740000,
	  'fecha' => Carbon::parse('2016/6/10') ,
	  'descripcion' => 'movimeinto659',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  129000,
	  'fecha' => Carbon::parse('2016/8/16') ,
	  'descripcion' => 'movimeinto660',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  671000,
	  'fecha' => Carbon::parse('2016/10/11') ,
	  'descripcion' => 'movimeinto661',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  480000,
	  'fecha' => Carbon::parse('2016/4/15') ,
	  'descripcion' => 'movimeinto662',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  398000,
	  'fecha' => Carbon::parse('2016/6/4') ,
	  'descripcion' => 'movimeinto663',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  172000,
	  'fecha' => Carbon::parse('2016/1/2') ,
	  'descripcion' => 'movimeinto664',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  594000,
	  'fecha' => Carbon::parse('2016/4/12') ,
	  'descripcion' => 'movimeinto665',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  785000,
	  'fecha' => Carbon::parse('2016/9/3') ,
	  'descripcion' => 'movimeinto666',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  129000,
	  'fecha' => Carbon::parse('2016/9/2') ,
	  'descripcion' => 'movimeinto667',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  997000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto668',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  809000,
	  'fecha' => Carbon::parse('2016/7/5') ,
	  'descripcion' => 'movimeinto669',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   73,
	  'monto' =>  171000,
	  'fecha' => Carbon::parse('2016/3/18') ,
	  'descripcion' => 'movimeinto670',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   96,
	  'monto' =>  740000,
	  'fecha' => Carbon::parse('2016/1/19') ,
	  'descripcion' => 'movimeinto671',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  622000,
	  'fecha' => Carbon::parse('2016/11/1') ,
	  'descripcion' => 'movimeinto672',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  621000,
	  'fecha' => Carbon::parse('2016/6/12') ,
	  'descripcion' => 'movimeinto673',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  639000,
	  'fecha' => Carbon::parse('2016/2/21') ,
	  'descripcion' => 'movimeinto674',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  867000,
	  'fecha' => Carbon::parse('2016/2/2') ,
	  'descripcion' => 'movimeinto675',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  443000,
	  'fecha' => Carbon::parse('2016/8/27') ,
	  'descripcion' => 'movimeinto676',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  611000,
	  'fecha' => Carbon::parse('2016/3/11') ,
	  'descripcion' => 'movimeinto677',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  633000,
	  'fecha' => Carbon::parse('2016/3/24') ,
	  'descripcion' => 'movimeinto678',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  790000,
	  'fecha' => Carbon::parse('2016/8/18') ,
	  'descripcion' => 'movimeinto679',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  836000,
	  'fecha' => Carbon::parse('2016/8/28') ,
	  'descripcion' => 'movimeinto680',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  454000,
	  'fecha' => Carbon::parse('2016/8/6') ,
	  'descripcion' => 'movimeinto681',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  951000,
	  'fecha' => Carbon::parse('2016/9/13') ,
	  'descripcion' => 'movimeinto682',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  798000,
	  'fecha' => Carbon::parse('2016/12/19') ,
	  'descripcion' => 'movimeinto683',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  357000,
	  'fecha' => Carbon::parse('2016/8/11') ,
	  'descripcion' => 'movimeinto684',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  511000,
	  'fecha' => Carbon::parse('2016/9/13') ,
	  'descripcion' => 'movimeinto685',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  241000,
	  'fecha' => Carbon::parse('2016/2/24') ,
	  'descripcion' => 'movimeinto686',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  513000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto687',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  401000,
	  'fecha' => Carbon::parse('2016/12/26') ,
	  'descripcion' => 'movimeinto688',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  407000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto689',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  206000,
	  'fecha' => Carbon::parse('2016/1/16') ,
	  'descripcion' => 'movimeinto690',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  662000,
	  'fecha' => Carbon::parse('2016/8/21') ,
	  'descripcion' => 'movimeinto691',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  248000,
	  'fecha' => Carbon::parse('2016/2/16') ,
	  'descripcion' => 'movimeinto692',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  632000,
	  'fecha' => Carbon::parse('2016/6/2') ,
	  'descripcion' => 'movimeinto693',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  812000,
	  'fecha' => Carbon::parse('2016/6/18') ,
	  'descripcion' => 'movimeinto694',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   40,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  822000,
	  'fecha' => Carbon::parse('2016/8/1') ,
	  'descripcion' => 'movimeinto695',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  246000,
	  'fecha' => Carbon::parse('2016/5/9') ,
	  'descripcion' => 'movimeinto696',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  226000,
	  'fecha' => Carbon::parse('2016/3/8') ,
	  'descripcion' => 'movimeinto697',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   12,
	  'monto' =>  193000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto698',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  367000,
	  'fecha' => Carbon::parse('2016/7/2') ,
	  'descripcion' => 'movimeinto699',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  210000,
	  'fecha' => Carbon::parse('2016/10/4') ,
	  'descripcion' => 'movimeinto700',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  916000,
	  'fecha' => Carbon::parse('2016/3/14') ,
	  'descripcion' => 'movimeinto701',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   96,
	  'monto' =>  524000,
	  'fecha' => Carbon::parse('2016/8/7') ,
	  'descripcion' => 'movimeinto702',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  227000,
	  'fecha' => Carbon::parse('2016/11/4') ,
	  'descripcion' => 'movimeinto703',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  437000,
	  'fecha' => Carbon::parse('2016/10/12') ,
	  'descripcion' => 'movimeinto704',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  871000,
	  'fecha' => Carbon::parse('2016/8/8') ,
	  'descripcion' => 'movimeinto705',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  573000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto706',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   67,
	  'monto' =>  587000,
	  'fecha' => Carbon::parse('2016/10/23') ,
	  'descripcion' => 'movimeinto707',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  341000,
	  'fecha' => Carbon::parse('2016/8/17') ,
	  'descripcion' => 'movimeinto708',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  853000,
	  'fecha' => Carbon::parse('2016/10/11') ,
	  'descripcion' => 'movimeinto709',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  854000,
	  'fecha' => Carbon::parse('2016/6/10') ,
	  'descripcion' => 'movimeinto710',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  999000,
	  'fecha' => Carbon::parse('2016/12/14') ,
	  'descripcion' => 'movimeinto711',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  992000,
	  'fecha' => Carbon::parse('2016/4/23') ,
	  'descripcion' => 'movimeinto712',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  937000,
	  'fecha' => Carbon::parse('2016/1/20') ,
	  'descripcion' => 'movimeinto713',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   98,
	  'monto' =>  194000,
	  'fecha' => Carbon::parse('2016/3/6') ,
	  'descripcion' => 'movimeinto714',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  885000,
	  'fecha' => Carbon::parse('2016/12/3') ,
	  'descripcion' => 'movimeinto715',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   83,
	  'monto' =>  539000,
	  'fecha' => Carbon::parse('2016/11/22') ,
	  'descripcion' => 'movimeinto716',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  665000,
	  'fecha' => Carbon::parse('2016/8/25') ,
	  'descripcion' => 'movimeinto717',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  305000,
	  'fecha' => Carbon::parse('2016/4/20') ,
	  'descripcion' => 'movimeinto718',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  978000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto719',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   67,
	  'monto' =>  630000,
	  'fecha' => Carbon::parse('2016/11/25') ,
	  'descripcion' => 'movimeinto720',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  794000,
	  'fecha' => Carbon::parse('2016/9/4') ,
	  'descripcion' => 'movimeinto721',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  927000,
	  'fecha' => Carbon::parse('2016/10/9') ,
	  'descripcion' => 'movimeinto722',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  617000,
	  'fecha' => Carbon::parse('2016/8/18') ,
	  'descripcion' => 'movimeinto723',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  306000,
	  'fecha' => Carbon::parse('2016/5/28') ,
	  'descripcion' => 'movimeinto724',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  145000,
	  'fecha' => Carbon::parse('2016/11/10') ,
	  'descripcion' => 'movimeinto725',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  956000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto726',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  982000,
	  'fecha' => Carbon::parse('2016/4/27') ,
	  'descripcion' => 'movimeinto727',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  502000,
	  'fecha' => Carbon::parse('2016/1/11') ,
	  'descripcion' => 'movimeinto728',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  126000,
	  'fecha' => Carbon::parse('2016/8/13') ,
	  'descripcion' => 'movimeinto729',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  338000,
	  'fecha' => Carbon::parse('2016/7/26') ,
	  'descripcion' => 'movimeinto730',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  129000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto731',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   29,
	  'monto' =>  185000,
	  'fecha' => Carbon::parse('2016/6/7') ,
	  'descripcion' => 'movimeinto732',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  886000,
	  'fecha' => Carbon::parse('2016/4/6') ,
	  'descripcion' => 'movimeinto733',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  336000,
	  'fecha' => Carbon::parse('2016/10/23') ,
	  'descripcion' => 'movimeinto734',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   69,
	  'monto' =>  861000,
	  'fecha' => Carbon::parse('2016/1/28') ,
	  'descripcion' => 'movimeinto735',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  443000,
	  'fecha' => Carbon::parse('2016/11/27') ,
	  'descripcion' => 'movimeinto736',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  688000,
	  'fecha' => Carbon::parse('2016/2/7') ,
	  'descripcion' => 'movimeinto737',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  289000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto738',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  875000,
	  'fecha' => Carbon::parse('2016/11/8') ,
	  'descripcion' => 'movimeinto739',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  915000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto740',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  953000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto741',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  239000,
	  'fecha' => Carbon::parse('2016/8/21') ,
	  'descripcion' => 'movimeinto742',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  713000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto743',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   14,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   64,
	  'monto' =>  449000,
	  'fecha' => Carbon::parse('2016/10/9') ,
	  'descripcion' => 'movimeinto744',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  315000,
	  'fecha' => Carbon::parse('2016/4/11') ,
	  'descripcion' => 'movimeinto745',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  959000,
	  'fecha' => Carbon::parse('2016/1/28') ,
	  'descripcion' => 'movimeinto746',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  691000,
	  'fecha' => Carbon::parse('2016/3/20') ,
	  'descripcion' => 'movimeinto747',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   84,
	  'monto' =>  712000,
	  'fecha' => Carbon::parse('2016/8/10') ,
	  'descripcion' => 'movimeinto748',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  954000,
	  'fecha' => Carbon::parse('2016/11/11') ,
	  'descripcion' => 'movimeinto749',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  927000,
	  'fecha' => Carbon::parse('2016/3/28') ,
	  'descripcion' => 'movimeinto750',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  554000,
	  'fecha' => Carbon::parse('2016/3/19') ,
	  'descripcion' => 'movimeinto751',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  370000,
	  'fecha' => Carbon::parse('2016/6/27') ,
	  'descripcion' => 'movimeinto752',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  108000,
	  'fecha' => Carbon::parse('2016/10/1') ,
	  'descripcion' => 'movimeinto753',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  206000,
	  'fecha' => Carbon::parse('2016/11/21') ,
	  'descripcion' => 'movimeinto754',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  698000,
	  'fecha' => Carbon::parse('2016/12/8') ,
	  'descripcion' => 'movimeinto755',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  439000,
	  'fecha' => Carbon::parse('2016/7/16') ,
	  'descripcion' => 'movimeinto756',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  232000,
	  'fecha' => Carbon::parse('2016/5/25') ,
	  'descripcion' => 'movimeinto757',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  801000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto758',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  664000,
	  'fecha' => Carbon::parse('2016/9/7') ,
	  'descripcion' => 'movimeinto759',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  684000,
	  'fecha' => Carbon::parse('2016/4/23') ,
	  'descripcion' => 'movimeinto760',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  327000,
	  'fecha' => Carbon::parse('2016/2/13') ,
	  'descripcion' => 'movimeinto761',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  194000,
	  'fecha' => Carbon::parse('2016/6/12') ,
	  'descripcion' => 'movimeinto762',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  425000,
	  'fecha' => Carbon::parse('2016/8/6') ,
	  'descripcion' => 'movimeinto763',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  588000,
	  'fecha' => Carbon::parse('2016/2/9') ,
	  'descripcion' => 'movimeinto764',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  191000,
	  'fecha' => Carbon::parse('2016/10/21') ,
	  'descripcion' => 'movimeinto765',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  226000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto766',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  573000,
	  'fecha' => Carbon::parse('2016/6/25') ,
	  'descripcion' => 'movimeinto767',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  279000,
	  'fecha' => Carbon::parse('2016/4/25') ,
	  'descripcion' => 'movimeinto768',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  581000,
	  'fecha' => Carbon::parse('2016/9/7') ,
	  'descripcion' => 'movimeinto769',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  442000,
	  'fecha' => Carbon::parse('2016/10/22') ,
	  'descripcion' => 'movimeinto770',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  217000,
	  'fecha' => Carbon::parse('2016/9/4') ,
	  'descripcion' => 'movimeinto771',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  758000,
	  'fecha' => Carbon::parse('2016/5/17') ,
	  'descripcion' => 'movimeinto772',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  699000,
	  'fecha' => Carbon::parse('2016/7/4') ,
	  'descripcion' => 'movimeinto773',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  277000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto774',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   42,
	  'monto' =>  865000,
	  'fecha' => Carbon::parse('2016/4/17') ,
	  'descripcion' => 'movimeinto775',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  939000,
	  'fecha' => Carbon::parse('2016/5/28') ,
	  'descripcion' => 'movimeinto776',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   36,
	  'monto' =>  441000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto777',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   6,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  752000,
	  'fecha' => Carbon::parse('2016/3/14') ,
	  'descripcion' => 'movimeinto778',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  186000,
	  'fecha' => Carbon::parse('2016/11/6') ,
	  'descripcion' => 'movimeinto779',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  950000,
	  'fecha' => Carbon::parse('2016/12/5') ,
	  'descripcion' => 'movimeinto780',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   39,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  781000,
	  'fecha' => Carbon::parse('2016/6/23') ,
	  'descripcion' => 'movimeinto781',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   29,
	  'monto' =>  890000,
	  'fecha' => Carbon::parse('2016/6/15') ,
	  'descripcion' => 'movimeinto782',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   17,
	  'monto' =>  589000,
	  'fecha' => Carbon::parse('2016/10/24') ,
	  'descripcion' => 'movimeinto783',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  314000,
	  'fecha' => Carbon::parse('2016/6/22') ,
	  'descripcion' => 'movimeinto784',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  548000,
	  'fecha' => Carbon::parse('2016/4/12') ,
	  'descripcion' => 'movimeinto785',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  496000,
	  'fecha' => Carbon::parse('2016/12/3') ,
	  'descripcion' => 'movimeinto786',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   46,
	  'monto' =>  960000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto787',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  981000,
	  'fecha' => Carbon::parse('2016/6/3') ,
	  'descripcion' => 'movimeinto788',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  463000,
	  'fecha' => Carbon::parse('2016/9/13') ,
	  'descripcion' => 'movimeinto789',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  928000,
	  'fecha' => Carbon::parse('2016/5/7') ,
	  'descripcion' => 'movimeinto790',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  868000,
	  'fecha' => Carbon::parse('2016/6/21') ,
	  'descripcion' => 'movimeinto791',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  812000,
	  'fecha' => Carbon::parse('2016/11/14') ,
	  'descripcion' => 'movimeinto792',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   16,
	  'monto' =>  484000,
	  'fecha' => Carbon::parse('2016/11/1') ,
	  'descripcion' => 'movimeinto793',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   38,
	  'monto' =>  828000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto794',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   8,
	  'monto' =>  116000,
	  'fecha' => Carbon::parse('2016/5/14') ,
	  'descripcion' => 'movimeinto795',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  370000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto796',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  530000,
	  'fecha' => Carbon::parse('2016/1/27') ,
	  'descripcion' => 'movimeinto797',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   49,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  793000,
	  'fecha' => Carbon::parse('2016/7/20') ,
	  'descripcion' => 'movimeinto798',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   30,
	  'monto' =>  279000,
	  'fecha' => Carbon::parse('2016/2/27') ,
	  'descripcion' => 'movimeinto799',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  321000,
	  'fecha' => Carbon::parse('2016/11/12') ,
	  'descripcion' => 'movimeinto800',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   76,
	  'monto' =>  729000,
	  'fecha' => Carbon::parse('2016/9/1') ,
	  'descripcion' => 'movimeinto801',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   69,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  897000,
	  'fecha' => Carbon::parse('2016/12/16') ,
	  'descripcion' => 'movimeinto802',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  706000,
	  'fecha' => Carbon::parse('2016/12/18') ,
	  'descripcion' => 'movimeinto803',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  909000,
	  'fecha' => Carbon::parse('2016/5/28') ,
	  'descripcion' => 'movimeinto804',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  653000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto805',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  217000,
	  'fecha' => Carbon::parse('2016/12/3') ,
	  'descripcion' => 'movimeinto806',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   43,
	  'monto' =>  916000,
	  'fecha' => Carbon::parse('2016/10/1') ,
	  'descripcion' => 'movimeinto807',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  168000,
	  'fecha' => Carbon::parse('2016/4/18') ,
	  'descripcion' => 'movimeinto808',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  146000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto809',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/11/2') ,
	  'descripcion' => 'movimeinto810',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  220000,
	  'fecha' => Carbon::parse('2016/4/20') ,
	  'descripcion' => 'movimeinto811',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  350000,
	  'fecha' => Carbon::parse('2016/2/23') ,
	  'descripcion' => 'movimeinto812',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   93,
	  'monto' =>  305000,
	  'fecha' => Carbon::parse('2016/7/13') ,
	  'descripcion' => 'movimeinto813',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  382000,
	  'fecha' => Carbon::parse('2016/9/17') ,
	  'descripcion' => 'movimeinto814',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  345000,
	  'fecha' => Carbon::parse('2016/2/25') ,
	  'descripcion' => 'movimeinto815',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  979000,
	  'fecha' => Carbon::parse('2016/1/28') ,
	  'descripcion' => 'movimeinto816',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  644000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto817',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  648000,
	  'fecha' => Carbon::parse('2016/11/9') ,
	  'descripcion' => 'movimeinto818',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  607000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto819',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  983000,
	  'fecha' => Carbon::parse('2016/7/10') ,
	  'descripcion' => 'movimeinto820',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  545000,
	  'fecha' => Carbon::parse('2016/5/16') ,
	  'descripcion' => 'movimeinto821',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  582000,
	  'fecha' => Carbon::parse('2016/3/12') ,
	  'descripcion' => 'movimeinto822',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  750000,
	  'fecha' => Carbon::parse('2016/4/15') ,
	  'descripcion' => 'movimeinto823',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  296000,
	  'fecha' => Carbon::parse('2016/11/22') ,
	  'descripcion' => 'movimeinto824',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   49,
	  'monto' =>  239000,
	  'fecha' => Carbon::parse('2016/2/17') ,
	  'descripcion' => 'movimeinto825',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  302000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto826',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  204000,
	  'fecha' => Carbon::parse('2016/11/20') ,
	  'descripcion' => 'movimeinto827',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  125000,
	  'fecha' => Carbon::parse('2016/2/14') ,
	  'descripcion' => 'movimeinto828',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  671000,
	  'fecha' => Carbon::parse('2016/11/4') ,
	  'descripcion' => 'movimeinto829',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  658000,
	  'fecha' => Carbon::parse('2016/5/14') ,
	  'descripcion' => 'movimeinto830',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   2,
	  'monto' =>  824000,
	  'fecha' => Carbon::parse('2016/4/21') ,
	  'descripcion' => 'movimeinto831',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   81,
	  'monto' =>  643000,
	  'fecha' => Carbon::parse('2016/5/4') ,
	  'descripcion' => 'movimeinto832',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  703000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto833',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  636000,
	  'fecha' => Carbon::parse('2016/8/16') ,
	  'descripcion' => 'movimeinto834',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  853000,
	  'fecha' => Carbon::parse('2016/3/10') ,
	  'descripcion' => 'movimeinto835',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   48,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  753000,
	  'fecha' => Carbon::parse('2016/9/12') ,
	  'descripcion' => 'movimeinto836',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  582000,
	  'fecha' => Carbon::parse('2016/9/9') ,
	  'descripcion' => 'movimeinto837',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  908000,
	  'fecha' => Carbon::parse('2016/9/2') ,
	  'descripcion' => 'movimeinto838',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   26,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  745000,
	  'fecha' => Carbon::parse('2016/10/14') ,
	  'descripcion' => 'movimeinto839',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  647000,
	  'fecha' => Carbon::parse('2016/6/15') ,
	  'descripcion' => 'movimeinto840',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  854000,
	  'fecha' => Carbon::parse('2016/11/22') ,
	  'descripcion' => 'movimeinto841',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  399000,
	  'fecha' => Carbon::parse('2016/1/28') ,
	  'descripcion' => 'movimeinto842',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  229000,
	  'fecha' => Carbon::parse('2016/11/26') ,
	  'descripcion' => 'movimeinto843',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  236000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto844',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  200000,
	  'fecha' => Carbon::parse('2016/1/27') ,
	  'descripcion' => 'movimeinto845',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   56,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  642000,
	  'fecha' => Carbon::parse('2016/2/19') ,
	  'descripcion' => 'movimeinto846',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   33,
	  'monto' =>  500000,
	  'fecha' => Carbon::parse('2016/7/12') ,
	  'descripcion' => 'movimeinto847',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   61,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  446000,
	  'fecha' => Carbon::parse('2016/12/4') ,
	  'descripcion' => 'movimeinto848',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  612000,
	  'fecha' => Carbon::parse('2016/10/24') ,
	  'descripcion' => 'movimeinto849',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  377000,
	  'fecha' => Carbon::parse('2016/1/16') ,
	  'descripcion' => 'movimeinto850',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  736000,
	  'fecha' => Carbon::parse('2016/10/5') ,
	  'descripcion' => 'movimeinto851',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   73,
	  'monto' =>  324000,
	  'fecha' => Carbon::parse('2016/8/6') ,
	  'descripcion' => 'movimeinto852',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  215000,
	  'fecha' => Carbon::parse('2016/5/23') ,
	  'descripcion' => 'movimeinto853',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  244000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto854',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   29,
	  'monto' =>  808000,
	  'fecha' => Carbon::parse('2016/1/2') ,
	  'descripcion' => 'movimeinto855',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  753000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto856',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  887000,
	  'fecha' => Carbon::parse('2016/4/7') ,
	  'descripcion' => 'movimeinto857',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  126000,
	  'fecha' => Carbon::parse('2016/10/19') ,
	  'descripcion' => 'movimeinto858',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   24,
	  'monto' =>  482000,
	  'fecha' => Carbon::parse('2016/6/15') ,
	  'descripcion' => 'movimeinto859',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   88,
	  'monto' =>  846000,
	  'fecha' => Carbon::parse('2016/7/26') ,
	  'descripcion' => 'movimeinto860',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   52,
	  'monto' =>  411000,
	  'fecha' => Carbon::parse('2016/8/24') ,
	  'descripcion' => 'movimeinto861',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  511000,
	  'fecha' => Carbon::parse('2016/4/11') ,
	  'descripcion' => 'movimeinto862',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   53,
	  'monto' =>  653000,
	  'fecha' => Carbon::parse('2016/9/24') ,
	  'descripcion' => 'movimeinto863',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  172000,
	  'fecha' => Carbon::parse('2016/12/19') ,
	  'descripcion' => 'movimeinto864',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   24,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  929000,
	  'fecha' => Carbon::parse('2016/12/9') ,
	  'descripcion' => 'movimeinto865',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   32,
	  'monto' =>  169000,
	  'fecha' => Carbon::parse('2016/7/23') ,
	  'descripcion' => 'movimeinto866',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  521000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto867',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   97,
	  'monto' =>  865000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto868',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  981000,
	  'fecha' => Carbon::parse('2016/4/14') ,
	  'descripcion' => 'movimeinto869',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  860000,
	  'fecha' => Carbon::parse('2016/9/18') ,
	  'descripcion' => 'movimeinto870',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   48,
	  'monto' =>  441000,
	  'fecha' => Carbon::parse('2016/6/13') ,
	  'descripcion' => 'movimeinto871',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   40,
	  'monto' =>  158000,
	  'fecha' => Carbon::parse('2016/9/19') ,
	  'descripcion' => 'movimeinto872',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  141000,
	  'fecha' => Carbon::parse('2016/10/20') ,
	  'descripcion' => 'movimeinto873',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  395000,
	  'fecha' => Carbon::parse('2016/2/3') ,
	  'descripcion' => 'movimeinto874',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  976000,
	  'fecha' => Carbon::parse('2016/12/2') ,
	  'descripcion' => 'movimeinto875',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   11,
	  'monto' =>  861000,
	  'fecha' => Carbon::parse('2016/2/4') ,
	  'descripcion' => 'movimeinto876',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  177000,
	  'fecha' => Carbon::parse('2016/8/4') ,
	  'descripcion' => 'movimeinto877',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   78,
	  'monto' =>  679000,
	  'fecha' => Carbon::parse('2016/3/14') ,
	  'descripcion' => 'movimeinto878',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  382000,
	  'fecha' => Carbon::parse('2016/4/28') ,
	  'descripcion' => 'movimeinto879',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   41,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   70,
	  'monto' =>  655000,
	  'fecha' => Carbon::parse('2016/1/11') ,
	  'descripcion' => 'movimeinto880',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   84,
	  'monto' =>  939000,
	  'fecha' => Carbon::parse('2016/3/5') ,
	  'descripcion' => 'movimeinto881',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  875000,
	  'fecha' => Carbon::parse('2016/1/13') ,
	  'descripcion' => 'movimeinto882',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   25,
	  'monto' =>  979000,
	  'fecha' => Carbon::parse('2016/6/22') ,
	  'descripcion' => 'movimeinto883',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  248000,
	  'fecha' => Carbon::parse('2016/10/22') ,
	  'descripcion' => 'movimeinto884',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   66,
	  'monto' =>  751000,
	  'fecha' => Carbon::parse('2016/1/18') ,
	  'descripcion' => 'movimeinto885',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   41,
	  'monto' =>  377000,
	  'fecha' => Carbon::parse('2016/7/9') ,
	  'descripcion' => 'movimeinto886',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   90,
	  'monto' =>  438000,
	  'fecha' => Carbon::parse('2016/12/3') ,
	  'descripcion' => 'movimeinto887',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   68,
	  'monto' =>  711000,
	  'fecha' => Carbon::parse('2016/1/21') ,
	  'descripcion' => 'movimeinto888',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  702000,
	  'fecha' => Carbon::parse('2016/11/21') ,
	  'descripcion' => 'movimeinto889',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   45,
	  'monto' =>  597000,
	  'fecha' => Carbon::parse('2016/10/13') ,
	  'descripcion' => 'movimeinto890',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  516000,
	  'fecha' => Carbon::parse('2016/4/26') ,
	  'descripcion' => 'movimeinto891',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  168000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto892',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   94,
	  'monto' =>  114000,
	  'fecha' => Carbon::parse('2016/10/27') ,
	  'descripcion' => 'movimeinto893',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  552000,
	  'fecha' => Carbon::parse('2016/11/3') ,
	  'descripcion' => 'movimeinto894',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   65,
	  'monto' =>  577000,
	  'fecha' => Carbon::parse('2016/11/22') ,
	  'descripcion' => 'movimeinto895',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  618000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto896',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  903000,
	  'fecha' => Carbon::parse('2016/2/7') ,
	  'descripcion' => 'movimeinto897',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  807000,
	  'fecha' => Carbon::parse('2016/7/1') ,
	  'descripcion' => 'movimeinto898',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   10,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  660000,
	  'fecha' => Carbon::parse('2016/8/20') ,
	  'descripcion' => 'movimeinto899',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   22,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  897000,
	  'fecha' => Carbon::parse('2016/9/4') ,
	  'descripcion' => 'movimeinto900',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   77,
	  'monto' =>  201000,
	  'fecha' => Carbon::parse('2016/6/21') ,
	  'descripcion' => 'movimeinto901',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  222000,
	  'fecha' => Carbon::parse('2016/9/15') ,
	  'descripcion' => 'movimeinto902',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  889000,
	  'fecha' => Carbon::parse('2016/10/7') ,
	  'descripcion' => 'movimeinto903',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   27,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   22  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   54,
	  'monto' =>  145000,
	  'fecha' => Carbon::parse('2016/1/15') ,
	  'descripcion' => 'movimeinto904',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   66,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  359000,
	  'fecha' => Carbon::parse('2016/11/1') ,
	  'descripcion' => 'movimeinto905',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   27,
	  'monto' =>  447000,
	  'fecha' => Carbon::parse('2016/8/10') ,
	  'descripcion' => 'movimeinto906',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   64,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   47,
	  'monto' =>  422000,
	  'fecha' => Carbon::parse('2016/1/25') ,
	  'descripcion' => 'movimeinto907',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  302000,
	  'fecha' => Carbon::parse('2016/6/8') ,
	  'descripcion' => 'movimeinto908',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   3,
	  'monto' =>  842000,
	  'fecha' => Carbon::parse('2016/8/20') ,
	  'descripcion' => 'movimeinto909',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   58,
	  'monto' =>  855000,
	  'fecha' => Carbon::parse('2016/1/2') ,
	  'descripcion' => 'movimeinto910',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  976000,
	  'fecha' => Carbon::parse('2016/1/12') ,
	  'descripcion' => 'movimeinto911',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   44,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   15  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  473000,
	  'fecha' => Carbon::parse('2016/3/16') ,
	  'descripcion' => 'movimeinto912',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   9  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  763000,
	  'fecha' => Carbon::parse('2016/4/16') ,
	  'descripcion' => 'movimeinto913',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  1000000,
	  'fecha' => Carbon::parse('2016/9/23') ,
	  'descripcion' => 'movimeinto914',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  593000,
	  'fecha' => Carbon::parse('2016/6/18') ,
	  'descripcion' => 'movimeinto915',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   6,
	  'monto' =>  130000,
	  'fecha' => Carbon::parse('2016/1/7') ,
	  'descripcion' => 'movimeinto916',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   33,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  134000,
	  'fecha' => Carbon::parse('2016/6/7') ,
	  'descripcion' => 'movimeinto917',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  223000,
	  'fecha' => Carbon::parse('2016/8/8') ,
	  'descripcion' => 'movimeinto918',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   51,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  800000,
	  'fecha' => Carbon::parse('2016/4/6') ,
	  'descripcion' => 'movimeinto919',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   44,
	  'monto' =>  195000,
	  'fecha' => Carbon::parse('2016/6/16') ,
	  'descripcion' => 'movimeinto920',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  222000,
	  'fecha' => Carbon::parse('2016/7/19') ,
	  'descripcion' => 'movimeinto921',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   23,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   79,
	  'monto' =>  423000,
	  'fecha' => Carbon::parse('2016/10/20') ,
	  'descripcion' => 'movimeinto922',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   36,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   72,
	  'monto' =>  385000,
	  'fecha' => Carbon::parse('2016/3/10') ,
	  'descripcion' => 'movimeinto923',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  966000,
	  'fecha' => Carbon::parse('2016/5/25') ,
	  'descripcion' => 'movimeinto924',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   30  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   80,
	  'monto' =>  963000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto925',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   52,
	  'user_id' =>   1,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  578000,
	  'fecha' => Carbon::parse('2016/6/21') ,
	  'descripcion' => 'movimeinto926',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   5,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  187000,
	  'fecha' => Carbon::parse('2016/4/1') ,
	  'descripcion' => 'movimeinto927',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   30,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  914000,
	  'fecha' => Carbon::parse('2016/6/24') ,
	  'descripcion' => 'movimeinto928',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   23  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  120000,
	  'fecha' => Carbon::parse('2016/8/27') ,
	  'descripcion' => 'movimeinto929',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   34,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  639000,
	  'fecha' => Carbon::parse('2016/4/11') ,
	  'descripcion' => 'movimeinto930',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   62,
	  'monto' =>  691000,
	  'fecha' => Carbon::parse('2016/1/6') ,
	  'descripcion' => 'movimeinto931',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   45,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   29,
	  'monto' =>  400000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto932',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  191000,
	  'fecha' => Carbon::parse('2016/11/11') ,
	  'descripcion' => 'movimeinto933',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   50,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  138000,
	  'fecha' => Carbon::parse('2016/5/2') ,
	  'descripcion' => 'movimeinto934',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  485000,
	  'fecha' => Carbon::parse('2016/12/11') ,
	  'descripcion' => 'movimeinto935',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   43,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  934000,
	  'fecha' => Carbon::parse('2016/2/19') ,
	  'descripcion' => 'movimeinto936',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   5,
	  'monto' =>  180000,
	  'fecha' => Carbon::parse('2016/3/25') ,
	  'descripcion' => 'movimeinto937',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  250000,
	  'fecha' => Carbon::parse('2016/2/20') ,
	  'descripcion' => 'movimeinto938',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   28,
	  'monto' =>  325000,
	  'fecha' => Carbon::parse('2016/5/6') ,
	  'descripcion' => 'movimeinto939',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  250000,
	  'fecha' => Carbon::parse('2016/12/20') ,
	  'descripcion' => 'movimeinto940',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   59,
	  'monto' =>  142000,
	  'fecha' => Carbon::parse('2016/10/14') ,
	  'descripcion' => 'movimeinto941',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   20,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  189000,
	  'fecha' => Carbon::parse('2016/5/13') ,
	  'descripcion' => 'movimeinto942',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  586000,
	  'fecha' => Carbon::parse('2016/11/21') ,
	  'descripcion' => 'movimeinto943',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   4,
	  'user_id' =>   9,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   11  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   56,
	  'monto' =>  872000,
	  'fecha' => Carbon::parse('2016/2/26') ,
	  'descripcion' => 'movimeinto944',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  330000,
	  'fecha' => Carbon::parse('2016/8/9') ,
	  'descripcion' => 'movimeinto945',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   6  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  683000,
	  'fecha' => Carbon::parse('2016/4/21') ,
	  'descripcion' => 'movimeinto946',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  121000,
	  'fecha' => Carbon::parse('2016/2/9') ,
	  'descripcion' => 'movimeinto947',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   17,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   39,
	  'monto' =>  772000,
	  'fecha' => Carbon::parse('2016/11/28') ,
	  'descripcion' => 'movimeinto948',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  498000,
	  'fecha' => Carbon::parse('2016/7/3') ,
	  'descripcion' => 'movimeinto949',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   10,
	  'monto' =>  796000,
	  'fecha' => Carbon::parse('2016/7/17') ,
	  'descripcion' => 'movimeinto950',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   7,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   26,
	  'monto' =>  844000,
	  'fecha' => Carbon::parse('2016/11/25') ,
	  'descripcion' => 'movimeinto951',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   58,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   20  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   7,
	  'monto' =>  462000,
	  'fecha' => Carbon::parse('2016/1/11') ,
	  'descripcion' => 'movimeinto952',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   82,
	  'monto' =>  475000,
	  'fecha' => Carbon::parse('2016/7/27') ,
	  'descripcion' => 'movimeinto953',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  476000,
	  'fecha' => Carbon::parse('2016/5/26') ,
	  'descripcion' => 'movimeinto954',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   16,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   1  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   92,
	  'monto' =>  400000,
	  'fecha' => Carbon::parse('2016/2/23') ,
	  'descripcion' => 'movimeinto955',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   63,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   61,
	  'monto' =>  675000,
	  'fecha' => Carbon::parse('2016/9/22') ,
	  'descripcion' => 'movimeinto956',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   18,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   95,
	  'monto' =>  754000,
	  'fecha' => Carbon::parse('2016/10/11') ,
	  'descripcion' => 'movimeinto957',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   19,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  660000,
	  'fecha' => Carbon::parse('2016/7/15') ,
	  'descripcion' => 'movimeinto958',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   65,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   23,
	  'monto' =>  380000,
	  'fecha' => Carbon::parse('2016/10/8') ,
	  'descripcion' => 'movimeinto959',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   37,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   35,
	  'monto' =>  638000,
	  'fecha' => Carbon::parse('2016/4/9') ,
	  'descripcion' => 'movimeinto960',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   9,
	  'user_id' =>   4,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  152000,
	  'fecha' => Carbon::parse('2016/11/18') ,
	  'descripcion' => 'movimeinto961',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   13,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  695000,
	  'fecha' => Carbon::parse('2016/8/8') ,
	  'descripcion' => 'movimeinto962',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   42,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   5  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   4,
	  'monto' =>  682000,
	  'fecha' => Carbon::parse('2016/5/21') ,
	  'descripcion' => 'movimeinto963',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   32,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  788000,
	  'fecha' => Carbon::parse('2016/8/18') ,
	  'descripcion' => 'movimeinto964',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   75,
	  'monto' =>  361000,
	  'fecha' => Carbon::parse('2016/5/25') ,
	  'descripcion' => 'movimeinto965',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   10  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  269000,
	  'fecha' => Carbon::parse('2016/2/12') ,
	  'descripcion' => 'movimeinto966',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   8  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   20,
	  'monto' =>  531000,
	  'fecha' => Carbon::parse('2016/4/5') ,
	  'descripcion' => 'movimeinto967',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  195000,
	  'fecha' => Carbon::parse('2016/5/10') ,
	  'descripcion' => 'movimeinto968',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   72,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  633000,
	  'fecha' => Carbon::parse('2016/10/25') ,
	  'descripcion' => 'movimeinto969',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   11,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  544000,
	  'fecha' => Carbon::parse('2016/1/1') ,
	  'descripcion' => 'movimeinto970',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   35,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   22,
	  'monto' =>  802000,
	  'fecha' => Carbon::parse('2016/6/19') ,
	  'descripcion' => 'movimeinto971',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   54,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   18,
	  'monto' =>  639000,
	  'fecha' => Carbon::parse('2016/7/8') ,
	  'descripcion' => 'movimeinto972',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  826000,
	  'fecha' => Carbon::parse('2016/7/11') ,
	  'descripcion' => 'movimeinto973',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   28,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   74,
	  'monto' =>  593000,
	  'fecha' => Carbon::parse('2016/6/2') ,
	  'descripcion' => 'movimeinto974',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  215000,
	  'fecha' => Carbon::parse('2016/8/13') ,
	  'descripcion' => 'movimeinto975',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   25,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   27  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   91,
	  'monto' =>  595000,
	  'fecha' => Carbon::parse('2016/10/19') ,
	  'descripcion' => 'movimeinto976',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   67,
	  'user_id' =>   13,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   34  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   60,
	  'monto' =>  552000,
	  'fecha' => Carbon::parse('2016/5/25') ,
	  'descripcion' => 'movimeinto977',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   2,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  524000,
	  'fecha' => Carbon::parse('2016/8/3') ,
	  'descripcion' => 'movimeinto978',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   59,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   2  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   21,
	  'monto' =>  215000,
	  'fecha' => Carbon::parse('2016/1/8') ,
	  'descripcion' => 'movimeinto979',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   60,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   89,
	  'monto' =>  465000,
	  'fecha' => Carbon::parse('2016/3/21') ,
	  'descripcion' => 'movimeinto980',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   70,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   16  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  560000,
	  'fecha' => Carbon::parse('2016/7/24') ,
	  'descripcion' => 'movimeinto981',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   47,
	  'user_id' =>   5,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   35  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   50,
	  'monto' =>  807000,
	  'fecha' => Carbon::parse('2016/7/19') ,
	  'descripcion' => 'movimeinto982',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   29,
	  'user_id' =>   14,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   28  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   34,
	  'monto' =>  876000,
	  'fecha' => Carbon::parse('2016/1/4') ,
	  'descripcion' => 'movimeinto983',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   53,
	  'user_id' =>   8,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   17  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   15,
	  'monto' =>  521000,
	  'fecha' => Carbon::parse('2016/5/18') ,
	  'descripcion' => 'movimeinto984',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   71,
	  'user_id' =>   16,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   37,
	  'monto' =>  611000,
	  'fecha' => Carbon::parse('2016/11/16') ,
	  'descripcion' => 'movimeinto985',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   21  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   100,
	  'monto' =>  424000,
	  'fecha' => Carbon::parse('2016/9/15') ,
	  'descripcion' => 'movimeinto986',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   11,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   32  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   57,
	  'monto' =>  195000,
	  'fecha' => Carbon::parse('2016/5/22') ,
	  'descripcion' => 'movimeinto987',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   55,
	  'user_id' =>   3,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   29  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   1,
	  'monto' =>  189000,
	  'fecha' => Carbon::parse('2016/8/22') ,
	  'descripcion' => 'movimeinto988',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   57,
	  'user_id' =>   15,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   3  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   51,
	  'monto' =>  604000,
	  'fecha' => Carbon::parse('2016/3/23') ,
	  'descripcion' => 'movimeinto989',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   6,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   26  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   66,
	  'monto' =>  612000,
	  'fecha' => Carbon::parse('2016/4/2') ,
	  'descripcion' => 'movimeinto990',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   62,
	  'user_id' =>   17,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   12  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   55,
	  'monto' =>  807000,
	  'fecha' => Carbon::parse('2016/6/9') ,
	  'descripcion' => 'movimeinto991',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   3,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   4  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   86,
	  'monto' =>  885000,
	  'fecha' => Carbon::parse('2016/3/3') ,
	  'descripcion' => 'movimeinto992',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   21,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   24  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  990000,
	  'fecha' => Carbon::parse('2016/4/21') ,
	  'descripcion' => 'movimeinto993',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   46,
	  'user_id' =>   7,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   18  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   13,
	  'monto' =>  312000,
	  'fecha' => Carbon::parse('2016/3/18') ,
	  'descripcion' => 'movimeinto994',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   68,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   19  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   84,
	  'monto' =>  580000,
	  'fecha' => Carbon::parse('2016/2/17') ,
	  'descripcion' => 'movimeinto995',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   31,
	  'user_id' =>   10,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   33  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   14,
	  'monto' =>  417000,
	  'fecha' => Carbon::parse('2016/10/3') ,
	  'descripcion' => 'movimeinto996',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   38,
	  'user_id' =>   19,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   14  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   87,
	  'monto' =>  800000,
	  'fecha' => Carbon::parse('2016/12/22') ,
	  'descripcion' => 'movimeinto997',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   8,
	  'user_id' =>   20,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   13  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   9,
	  'monto' =>  880000,
	  'fecha' => Carbon::parse('2016/5/6') ,
	  'descripcion' => 'movimeinto998',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   12,
	  'user_id' =>   2,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   7  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   31,
	  'monto' =>  901000,
	  'fecha' => Carbon::parse('2016/2/2') ,
	  'descripcion' => 'movimeinto999',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   1,
	  'user_id' =>   18,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   31  ));
  

  Movimiento::create(array(
	  'negocio_id' =>   63,
	  'monto' =>  725000,
	  'fecha' => Carbon::parse('2016/3/11') ,
	  'descripcion' => 'movimeinto1000',
	  'tipo' => 'tipo1',
	  'clasificacion' => 'clasi1',
	  'cuenta_id' =>   15,
	  'user_id' =>   12,
	  'puro' => 15400,
	  'cuenta_destino' => '01548791894767867858947',
	  'banco_destino_id' =>   25  ));
  
    */
    }

}
