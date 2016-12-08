<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		Eloquent::unguard();
 		$this->call(UserTableSeeder::class);
        $this->call(BancoSeeder::class);
        $this->call(CuentasSeeder::class);
        $this->call(NegociosSeeder::class);
        $this->call(MovimientosSeeder::class);

      ///$this->call('UserTableSeeder');
    }
}
