<?php

namespace App;

use App\Gallery;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['pro_name','pro_code','pro_price','image','pro_info','spl_price','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);//Category::class
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);//Gallery::class
    }

    public function productAttribute()
    {
        return $this->hasOne(productAttribute::class);
    }
}
