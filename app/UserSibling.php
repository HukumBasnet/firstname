<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserSibling extends Model
{
    protected $table ="user_siblings";
    protected $fillable =['brother','sister','user_id','campus','student_id'];
}
