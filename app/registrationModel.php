<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{
    protected $table='registration';
    protected $fillable=['sname', 'sbname', 'sid', 'roll', 'reg', 'class','section', 'session', 'fname', 'mname', 'gnid','gender', 'dob', 'blood', 'religion', 'phone','gname', 'address', 'image'];
}
