<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table='teacher';
    protected $fillable=['tid', 'tname', 'tnid', 'dob', 'gender', 'blood', 'religion', 'phone', 'email', 'address', 'image'];
}
