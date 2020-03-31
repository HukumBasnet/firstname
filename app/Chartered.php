<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chartered extends Model
{
    protected $fillable = [
        'name', 'description', 'type', 'is_student', 'is_teacher', 'is_parent'
    ];
}
