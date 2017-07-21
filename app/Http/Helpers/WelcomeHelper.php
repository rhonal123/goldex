<?php 

namespace App\Http\Helpers;
use Illuminate\Support\Facades\Request;

class WelcomeHelper {

    public static function linkActive($link){
    	 return (Request::is($link) ? 'active' : ''); 
    }

    public static function collapseActive($links){
    	foreach ($links as $value) {
    		if(Request::is($value)){
    			return "active";
    		}
    	}
    	return "";
    }

    public static function clasificacion($movimiento){
        if($movimiento->clasificacion == 1){
            return "T";
        }
        if($movimiento->clasificacion == 2){
            return "A";
        }
        if($movimiento->clasificacion == 3){
            return "G";
        }

    }

  


}  