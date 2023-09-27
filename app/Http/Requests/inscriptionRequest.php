<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class inscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100'], 
            'pseudo' => ['required', 'string', 'max:100', 'unique:inscriptions'], 
            'password' => ['required', 'string', 'min:6'],
        ];
    }
    public function message()
    {
        return [
            'required' => 'Veuillez remplir ce champ obligatoirement.',
            'max' => 'Vous avez dépassé la taille maximale requise',
            'min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'email' => 'L\'adresse email n\'est pas valide.',
            'unique' => 'Déjà utilisé. Essayé un autre.',
        ];
    }
}
