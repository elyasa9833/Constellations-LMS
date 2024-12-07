<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        if (request()->has('error')) {
            return redirect('/')->with('error', 'Login dibatalkan.');
        }

        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::firstOrCreate(
                [
                    'google_id' => $googleUser->getId()
                ],
                [
                    'username' => $googleUser->getName(),
                    'nickname' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'avatar' => $googleUser->getAvatar(),
                    'email_verified_at' => now()
                ]
            );

            Auth::login($user);
            return redirect('/dashboard');

        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Terjadi kesalahan saat login.');
        }
    }
}
