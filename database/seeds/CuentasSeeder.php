<?php

use Illuminate\Database\Seeder;
use App\Cuenta; 


class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    		Cuenta::create(array('numero' => 'cuenta1','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta2','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta3','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta4','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta5','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta6','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta7','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta8','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta9','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta10','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta11','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta12','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta13','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta14','banco_id' => '1'));
				Cuenta::create(array('numero' => 'cuenta15','banco_id' => '1'));
 

    }
}
