<?php

namespace App\Food\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable =['name','slug','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
