<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['question','image', 'option_a', 'option_b', 'option_c', 'answer','lang'];
    protected $hidden = ['created_at','updated_at'];

}
