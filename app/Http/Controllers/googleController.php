<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googleController extends Controller
{
    public function form(){
        return Socialite::driver('google')->redirect();

    }

    public function loging(){
        $user = Socialite::driver('google')->user();
        $check_user = User::where('email',$user->getEmail())->first();

        if($check_user){
               Auth::login($check_user);
               return redirect()->intended('dashboard');
        }else{
            $new_user = User::create([
                'name' => $user->getName(),
                'email'=>$user->getEmail(),
                'google_id'=>$user->getId()
               ]);
    
               Auth::login($new_user);
               return redirect()->intended('dashboard');
        
        }

    }
}
