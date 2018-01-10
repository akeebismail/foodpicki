<?php

namespace App\Food\MenuFood;

use App\Food\Category\Category;
use Illuminate\Database\Eloquent\Model;

class MenuFood extends Model
{
    //
    protected $table = 'menufood';
    protected $fillable = [
        'name','price','description','details','nutrition_info','prep_methods',
        'weight','calories','ingredients','discount'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function images(){
        return $this->hasMany();
    }
}
