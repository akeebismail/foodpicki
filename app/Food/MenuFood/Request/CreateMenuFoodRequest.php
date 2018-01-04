<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:27 PM
 */
namespace App\Food\MenuFood\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuFoodRequest extends FormRequest{
    public function authorize(){
        //must be admin and loggedin
    }
    public function rules(){
        //validate the inputs
    }
}