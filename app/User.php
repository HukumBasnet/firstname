<?php

namespace App;

use App\Model;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Spatie\Permission\Traits\HasRoles;


class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, HasApiTokens, Notifiable, Impersonate, Billable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
         'role', 
         'code',
         /* school code*/'student_code',
          'active', 
          'verified',
           'school_id',
            'section_id',
             'address', 
             'about', 
             'phone_number', 
             'blood_group', 
             'nationality', 
             'gender', 
             'department_id',
            //  added
             'd_year',
             'd_month',
             'd_day',
             'class',
             'session',
             'mailing_address',
             'age',
             'father_name',
             'father_cnic_no',
             'occupation',
             'f_address',
             'mother_name',
             'mother_cnic_no',
             'mother_occupation',
             'm_address',
             'guardian_name',
             'guardian_cnic_no',
             'guardian_occupation',
             'g_address',
             'relation',
             'checklist_one',
             'checklist_two',
             'checklist_three',
             'office_one',
             'office_two',
             'office_three',
             'admission_test_date',
             'admission_test_time',
             'interview_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeStudent($q)
    {
        return $q->where('role', 'student');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function school()
    {
        return $this->belongsTo('App\School', 'school_id','id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department','department_id', 'id');
    }

    public function studentInfo(){
        return $this->hasOne('App\StudentInfo','student_id');
    }

    public function studentBoardExam(){
        return $this->hasMany('App\StudentBoardExam','student_id');
    }

    public function notifications(){
        return $this->hasMany('App\Notification','student_id');
    }

    public function hasRole(string $role): bool
    {
        return $this->role == $role ? true : false;
    }
}
