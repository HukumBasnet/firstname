<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ="teachers";
    protected $fillable =['name','email','phone','password','address','gender',
    'subjects',
    'experience',
    'prevschool',
    'teacher_code',
    'school_id',  
    ];
}
