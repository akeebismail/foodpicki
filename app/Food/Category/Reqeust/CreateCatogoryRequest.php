<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:00 PM
 */
namespace App\Food\Category\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreateCatogoryRequest extends FormRequest{
    public function authorize(){
        //must be admin and loggedIn
    }

    public function rules(){
        //validate input
    }
}