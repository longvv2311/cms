<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable=['name'];
    const ADMIN_ROLE=1;
    const TRAINER_ROLE=2;
    const STAFF_ROLE=3;
    const STUDENT_ROLE=4;
}
