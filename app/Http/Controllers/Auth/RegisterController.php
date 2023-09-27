<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\inscription;
use App\Http\Requests\inscriptionRequest;
use Illuminate\Support\Facades\Redirect;



class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(inscriptionRequest $inscriptionRequest)
    {
        $validator = Validator::make($inscriptionRequest->all(), [
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:100',
            'email' => 'required|email',
            'pseudo' => 'required|string|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        $user = new inscription;
        $user->name = $inscriptionRequest->name;
        $user->username = $inscriptionRequest->username;
        $user->email = $inscriptionRequest->email;
        $user->pseudo = $inscriptionRequest->pseudo;
        $user->password = bcrypt($inscriptionRequest->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    }
}
