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
        if (auth()->check() && auth()->user()->hasRole('admin')){
            return true;
        }
        return false;
    }

    public function rules(){
        //validate input
        return [
            'name'=> 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
            'details'   =>'required',
            'description'   => 'required'
        ];
    }
}