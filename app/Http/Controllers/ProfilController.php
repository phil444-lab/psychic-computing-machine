<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\inscription;
use App\Http\Requests\inscriptionRequest;
use Illuminate\Support\Facades\Redirect;

class ProfilController extends Controller
{
    public function showProfil()
    {
        return view('profil');
    }

    public function modifier(inscriptionRequest $inscriptionRequest)
    {
        $user = inscription::select('id', 'name', 'username', 'pseudo', 'email')->where('id', auth()->id())->first();

        if ($inscriptionRequest->has('email')) {
            $rules['email'] = 'required|email|unique:users,email,' . $user->id;
        }

        if ($inscriptionRequest->has('pseudo')) {
            $rules['pseudo'] = 'required|string|max:100|unique:users,pseudo,' . $user->id;
        }

        $validator = Validator::make($inscriptionRequest->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('profil')->withErrors($validator)->withInput();
        }

        $user->name = $inscriptionRequest->name;
        $user->username = $inscriptionRequest->username;

        if ($inscriptionRequest->has('email')) {
            $user->email = $inscriptionRequest->email;
        }

        if ($inscriptionRequest->has('pseudo')) {
            $user->pseudo = $inscriptionRequest->pseudo;
        }

        $user->save();

        return redirect()->route('thread');
    }

}
