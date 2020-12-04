<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function entrants()
    {
        return $this->hasMany('App\Models\Entrant');
    }

     /**
     * Custom functions
     */

    public static function findByKeyName(string $keyName)
    {
        return self::where('key_name', $keyName)->first();
    }
}
