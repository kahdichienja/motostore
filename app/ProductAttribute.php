<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';
    protected $primaryKey = 'id';
    protected $fillable = ['vehicle_id_number','registration_date','manufacture_year','milage','transmission','engine_capacity','fuel_type','Body_style','exterior_color','interior_color','drive_type','number_of_doors','number_of_seats','dimension','condition','expiry_date'];


    public function product()
    {
        return $this->belongsTo(Products_model::class);
    }
}
