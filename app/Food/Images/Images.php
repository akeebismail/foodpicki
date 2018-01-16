<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/16/18
 * Time: 1:27 AM
 */
namespace App\Food\Images;

use App\Food\Category\Category;
use App\Food\MenuFood\MenuFood;
use Illuminate\Database\Eloquent\Model;

class Images extends Model{

    protected $fillable = ['label','menu_food_id','category_id','image_url'];

    public function category(){

        return $this->belongsToMany(Category::class);
    }

    public function menufood(){

        return $this->belongsToMany(MenuFood::class);
    }
}