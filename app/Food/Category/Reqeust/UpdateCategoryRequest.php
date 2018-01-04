<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:01 PM
 */
namespace App\Food\Category\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest{

    public function authorize(){
        //must be admin and loggedin
    }

    public function rules(){
        //validate input
    }
}