<?php

namespace App;

use App\Products_model;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'galleries';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id', 'image'];
    
    public function product()
    {
        return $this->hasMany(Products_model::class);
    }
}
