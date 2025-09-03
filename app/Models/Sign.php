<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $table = 'signs';
    protected $fillable = ['title', 'image', 'lang'];
    protected $hidden = ['created_at','updated_at'];

}
