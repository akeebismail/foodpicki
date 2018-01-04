<?php

namespace App\Food\Category;

use App\Food\MenuFood\MenuFood;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable =['name','slug','details'];

    protected $hidden =[];
    public function menufood(){
        return $this->belongsTo(MenuFood::class);
    }

    public function parent(){
        return $this->belongsTo(static::class,'menu');
    }
    public function children(){
        return $this->belongsTo(static::class,'menu');
    }
}
