<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    #use DatabaseMigrations;
    use DatabaseTransactions;
    use WithoutMiddleware;
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        return $app;
    }

    public function validarformulario($valid){
        $fails =$valid->fails();
        $errors = $valid->errors()->toJson();
        $this->assertTrue(!$fails,$errors);
    }

    public function validarformularioError($valid){
        $fails =$valid->fails();
        $this->assertTrue($fails," Erroro el Formulario no posee errores");
    }


}
