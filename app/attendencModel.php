<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendencModel extends Model
{
    protected $table='attendenc';
    protected $fillable=['sid', 'roll', 'class', 'section', 'date', 'in_time', 'out_time', 'status'];
}
