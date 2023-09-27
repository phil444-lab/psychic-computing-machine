<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inscription;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(loginRequest $loginRequest)
    {
        $credentials = $loginRequest->validate([
            'pseudo' => ['required', 'string', 'max:100'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = inscription::where('pseudo', $credentials['pseudo'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $loginRequest->session()->regenerate();
            return redirect()->route('thread');
        } else {
            return redirect()->route('login')->withErrors([
                'password' => 'Pseudonyme ou Mot de passe incorrects. Réessayer avec des informations valides.',
            ])->withInput();
        }
    }
}
