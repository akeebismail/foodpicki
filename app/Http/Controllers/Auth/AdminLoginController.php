<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/5/18
 * Time: 7:12 PM
 */
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminLoginController extends Controller{
    use AuthenticatesUsers;

    protected $redirectTo ='/admin';

    public function showLoginForm()
    {
        if (auth()->guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return view('auth.admin');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)){
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $daata = $request->only('email','password');
        $daata['status'] = 1;
        if (auth()->guard('admin')->attempts($daata)){
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }
}