<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GoogleAuthController extends Controller
{
    public function __contstruct()
    {
        $this->middleware(['guest']);
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        $user = Socialite::driver('google')->user();


        $user = User::firstOrCreate(
            ['email' => $user->getEmail()],
            [


                'profile_photo_path' => $user->getAvatar(),
                'password' =>  Hash::make(Str::random(24)),
                'name' => $user->getName()
            ]


        );

        Auth::login($user);


        return redirect()->intended('/dashboard');
    }
}
