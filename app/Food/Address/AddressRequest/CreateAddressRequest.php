<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:36 PM
 */
namespace App\Food\Address\AddressRequest;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddressRequest extends FormRequest{
    public function authorize(){
        //must be logged in
    }

    public function rules(){
        //va
    }
}