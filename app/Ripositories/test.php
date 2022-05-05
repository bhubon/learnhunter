<?php

namespace App\Ripositories;

use Illuminate\Support\Facades\Facade;

class test extends Facade{
    protected static function getFacadeAccessor (){
        return 'sum';
    }
    
}