<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classModel extends Model
{
    protected $table='class';
    protected $fillable=['class', 'section'];
}
