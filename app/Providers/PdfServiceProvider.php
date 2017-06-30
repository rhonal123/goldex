<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Log;

class PdfServiceProvider extends ServiceProvider
{
  
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {    
        foreach (glob(app_path().'/Pdfs/*.php') as $filename) {
            Log::info(".....>"+$filename);
            require_once($filename);
        }
    }
}
