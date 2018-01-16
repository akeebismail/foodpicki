<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:43 PM
 */
namespace App\Food\Cart\CartRequest;

use Illuminate\Foundation\Http\FormRequest;

class AddCartRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'product'   => ['required', 'integer'],
            'quantity'  => ['required', 'integer']
        ];
    }
}