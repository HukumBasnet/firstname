<?php

namespace App;

use App\Model;

class Inquiry extends Model
{
    protected $table = 's_inquiry';
    protected $fillable = ['name',
    'class',
    'inquiry_id',
    'father_name',
    'mother_name',
    'student_class',
    'number','fees','r_class','years','month','guardians_details'];

  
}
