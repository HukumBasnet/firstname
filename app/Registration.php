<?php

namespace App;

use App\Model;

class Registration extends Model
{
    protected $table = 's_registration';
    protected $fillable = ['name',
    'fees',
    'years',
    'month',
    'r_class',
    'guardians_details',
    'inquiry_id',];

  
}
