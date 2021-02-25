<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function scopeSearch($query, $country){
        return $query->where('name', 'like', '%' .$country. '%');
    }
}