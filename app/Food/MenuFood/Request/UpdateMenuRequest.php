<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:28 PM
 */
namespace App\Food\MenuFood\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest{
    public function authorize(){}
    public function rules(){
        //validate the inputs
    }
}