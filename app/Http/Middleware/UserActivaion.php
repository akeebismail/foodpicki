<?php

namespace App\Http\Middleware;

use App\Food\User\Keys;
use Closure;

class UserActivaion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('settings.activation')){
            $user  = Auth::user();
            $currentRoute = Route::currentRouteName();
            $allowedRoute = [
                'activation-required','activate/{token}','activate','activation','exceeded',
                'authenticated.activate',
                'authenticate.activation-resend',
                'social/redirect/{provider}',
                'social/handle/{provider}',
                'logout',
                'welcome'
            ];
            if (!in_array($currentRoute,$allowedRoute)){
                if ($user && $user->status !=1){
                    return redirect()->route('activation-required')
                        ->with(['message'=>'Activation is required','status'=>'danger']);
                }
            }
            if ($user && $user->status != 1){
                $activationCount = Keys::where('user_id',$user->id)
                    ->where('created_at','>=', Carbon::now()->subHours(config('settings.activationPeriod')))->count();
                if ($activationCount >= config('settings.maxAttempts')){
                    return redirect()->route('exceeded');
                }
            }
            if (in_array($currentRoute, $allowedRoute)){
                if ($user && $user->status == 1){
                    if ($user->role_id == 1){
                        return redirect('/');
                    }

                    return redirect('home');
                }
            }
        }
        return $next($request);
    }
}
