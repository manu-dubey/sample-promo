<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrant extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    public function promotion()
    {
        return $this->belongsTo('App\Models\Promotion');
    }
}
