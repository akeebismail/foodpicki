<?php

namespace App\Food\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Administrator extends Authenticable
{
    //
    use Notifiable, SoftDeletes;
    protected $fillable =['name','email','phone','password','status','role_id'];

    protected $hidden =['password','remember_token'];

    protected $dates = ['deleted_at'];
}
