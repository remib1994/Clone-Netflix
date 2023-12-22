<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'email' => 'required | email | min:3 | max:255',
            'password' => 'required | min:3 | max:255',
            'nomUsager' => 'required | min:3 | max:255',
            'nom' => 'required | string | min:3 | max:255',
            'prenom' => 'required | string | min:3 | max:255',
            'role' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'ce champ est requis.',
            'min' => 'le champs doit contenir au moins 3 caractères.',
            'max' => 'le champs doit contenir au maximum 255 caractères.',
            'email' => 'le champs doit être une adresse email valide.',

        ];
    }


}
