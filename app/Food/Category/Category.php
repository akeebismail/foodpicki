<?php

namespace App\Food\Category;

use App\Food\MenuFood\MenuFood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;
    protected $fillable =['name','slug','details','description','parent_id'];

    protected $hidden =[];
    public function menufood(){
        return $this->belongsToMany(MenuFood::class);
    }
    public function images(){

    }

    public function parent(){
        return $this->hasMany(static::class,'parent_id');
    }
    public function children(){
        return $this->belongsTo(static::class,'parent_id');
    }
}
