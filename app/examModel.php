<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examModel extends Model
{
    protected $table='exam';
    protected $fillable=['exam_id', 'held_on', 'year'];
}
