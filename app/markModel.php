<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markModel extends Model
{
    protected $table='mark';
    protected $fillable=['sub_code', 'sub_name', 'mark', 'sid', 'examid', 'year'];
}
