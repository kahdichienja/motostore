<?php

namespace App;

use App\Products_model;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Products_model::class);
    }
}
