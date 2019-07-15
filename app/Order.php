<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','cart','address','phone_number','name','payment_method','payment_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
