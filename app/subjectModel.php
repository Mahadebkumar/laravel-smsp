<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjectModel extends Model
{
    protected $table='subject';
    protected $fillable=['subid', 'subname', 'fmark', 'class', 'tid'];
}
