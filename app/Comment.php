<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        //
        protected $table = 'comments';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'email', 'message'];
}
