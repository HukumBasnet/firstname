<?php

namespace App;

use App\Model;

class School extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'about', 'medium', 'code', 'theme','school_level','campus_name','email','fano','fno','city','address','land_line' ];

  public function users()
  {
    return $this->hasMany('App\User');
  }

  public function departments()
  {
    return $this->hasMany('App\Department');
  }

  public function gradesystems()
  {
    return $this->hasMany('App\Gradesystem');
  }
}
