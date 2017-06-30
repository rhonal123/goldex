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
}  