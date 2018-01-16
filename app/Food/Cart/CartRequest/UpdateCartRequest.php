<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:44 PM
 */
namespace App\Food\Cart\CartRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCartRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'quantity' => 'required'
        ];
    }
}