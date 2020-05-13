<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public function catalog(){
        return $this->belongsTo('App\Catalog','id_catalog','id');
    }
}
