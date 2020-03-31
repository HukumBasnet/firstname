<?php

namespace App;

use App\Model;

class Admission extends Model
{
    protected $table = 's_admission';

    public function book()
    {
        return $this->belongsTo('App\inquery','inquiry_id');
    }

  
}
