<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name'];

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }
}
