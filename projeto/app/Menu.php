<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'price'
    ];

    public function restaurant()
    {
    	return $this->belongsTo(Restaurant::class);
    }
}
