<?php

namespace App\Food\User;

use App\Food\Order\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable
{
    Use Notifiable, SoftDeletes;

    protected $fillable =['name','email','phone','password','status'];

    protected $hidden =['password','remember_token'];
    protected $dates = ['deleted_at'];

    public function address(){
        return $this->hasMany('Address');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
