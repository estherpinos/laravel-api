<?php

namespace App\Functions;

use Illuminate\Support\Str;

class Helper
{
    public static function generateSlug($string, $model){
        /*
            1. generare lo slug
            2. fare una query al db per controllare se lo slug esiste già nel database
            3. controllare se lo slug esiste già nel database
            4. se esiste aggiungere 1 allo slug generato e così via fino a quando non trovo una slug inesistente
        */

        //1.
        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        //2.
        $exists = $model::where('slug', $slug)->first();
        $c = 1;
        //3.
        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = $model::where('slug', $slug)->first();

            $c++;
        }
        return $slug;
    }
}

