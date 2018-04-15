<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markModel extends Model
{
    protected $table='mark';
    protected $fillable=['subid', 'mark', 'sid', 'examid', 'year'];
}
