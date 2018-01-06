<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/5/18
 * Time: 6:47 PM
 */
namespace App\Http\Controllers\Auth;

use App\Food\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class AdminRegisterController extends Controller{
    use RegistersUsers;

    protected $redirectTo = 'admin';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array  $data){
        return Validator::make($data,[
            'name' => 'required|string|max:255',
            'email'=> 'required|string|email|unique:users',
            'phone' => 'required|string|max:8',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create($data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'status'    => 1,
            'role_id'   => 2,
            'rememebr_token'    => str_random(64)
        ]);
    }
}