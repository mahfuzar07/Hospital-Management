<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{

    protected $guard = 'doctor';

    protected $fillable = [
        'name','email','institute','qualification','bmdc','department_id','fees','birth','nid','phone','address','district','password','avatar','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function joindep(){
        return $this->belongsTo(Department::class, 'department_id');

}


}
