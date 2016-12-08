<?php

use Illuminate\Database\Seeder;
use App\Banco;


class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			Banco::create(array('nombre' => 'Banco Caroní'));
			Banco::create(array('nombre' => 'Banco Canarias de Venezuela'));
			Banco::create(array('nombre' => 'Banco Confederado'));
			Banco::create(array('nombre' => 'Bolívar Banco'));
			Banco::create(array('nombre' => 'Corp Banca'));
			Banco::create(array('nombre' => 'Banco de Crédito de Colombia'));
			Banco::create(array('nombre' => 'Banco Do Brasil'));
			Banco::create(array('nombre' => 'Banco del Caribe'));
			Banco::create(array('nombre' => 'Bancoro'));
			Banco::create(array('nombre' => 'Banco de Venezuela'));
			Banco::create(array('nombre' => 'Banco Sofitasa'));
			Banco::create(array('nombre' => 'Banpro'));
			Banco::create(array('nombre' => 'Stanford Bank'));
			Banco::create(array('nombre' => 'Banco Provincial'));
			Banco::create(array('nombre' => 'Banco Tequendama'));
			Banco::create(array('nombre' => 'Banesco'));
			Banco::create(array('nombre' => 'Banco Fondo Común'));
			Banco::create(array('nombre' => 'Banfoandes'));
			Banco::create(array('nombre' => 'Banco Occidental de Descuento'));
			Banco::create(array('nombre' => 'Banco Venezolano de Crédito'));
			Banco::create(array('nombre' => 'Central'));
			Banco::create(array('nombre' => 'Banco Guayana'));
			Banco::create(array('nombre' => 'Banco Exterior'));
			Banco::create(array('nombre' => 'Banco Industrial de Venezuela'));
			Banco::create(array('nombre' => 'Banco Mercantil'));
			Banco::create(array('nombre' => 'Banco Plaza'));
			Banco::create(array('nombre' => 'Citibank'));
			Banco::create(array('nombre' => 'Total Bank'));
			Banco::create(array('nombre' => 'Instituto Municipal de Crédito Popular'));
			Banco::create(array('nombre' => 'Nuevo Mundo'));
			Banco::create(array('nombre' => 'Banco Federal'));
			Banco::create(array('nombre' => 'Casa Propia'));
			Banco::create(array('nombre' => 'Del Sur'));
			Banco::create(array('nombre' => 'Mi Casa'));
			Banco::create(array('nombre' => 'Merenap'));
    }
}



