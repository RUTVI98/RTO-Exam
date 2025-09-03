<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RtoOffice extends Model
{
    protected $table = 'rto_offices';
    protected $fillable = ['stateCode', 'stateName','officeAddress', 'contact'];
    protected $hidden = ['created_at','updated_at'];

}
